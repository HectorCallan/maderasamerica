$(document).ready(Ini);

var td, co, cc, io, bgo, bac;

td = $("#txtDesc");
co = $("#cboTipOfe");
cc = $("#cboCat");
io = $("#fImgOfe");
bgo = $("#btnGuaOfe");
bac = $("#btnAcepCon");

var it, op;

function Ini(){
	listarOfertas();
	listarCats();
}

$("#btnNueOfe").click(function(){
	op = "set";
    $("#divModOferta").modal('show');
});

io.change(function(event){
	if( validarImagen( io, this) ){
        readURL($('#imgTempOfe'),this);
    }
});

bgo.click(function(){
	event.preventDefault();
    var $btn = $(this).button('loading');
    if( td.val().trim() == "" ){
        validarEstadosInput(td,'error');
        td.focus();
    }else if( cc.val() == 0 || cc.val() == "0" ){
    	validarEstadosInput(td,'success');
        validarEstadosInput(cc,'error');
        cc.focus();
    }else if( (op == "set") && (io.val() == "" || !validarImagen(io, io[0]))) {
    	validarEstadosInput(cc,'success');
        validarEstadosInput(io,'error');
        io.focus();
    }else{
        validarEstadosInput(td,'success');
        validarEstadosInput(co,'success');
        validarEstadosInput(cc,'success');
        validarEstadosInput(io,'success');
        if( op == "set" ){
	    	operar(0,td,co,cc,io);
		}else if( op == "edit" ){
			operar(it,td,co,cc,io); 
		}
    }
	$btn.button('reset');
});

bac.click(function(){
	event.preventDefault();
    var $btn = $(this).button('loading');
	delOfeConf();
	$btn.button('reset');
});

function showOferta(id){
	it = id;
	$.ajax({
        data:  {"op" : "get", "idOf" : it},
        url:   './controller/C_Oferta.php',
        type:  'post',
        success:  function (response) {
            response = $.parseJSON(response);
            td.val( response[0].dc );
            co.val( response[0].to );
            $('#imgTempOfe').attr("src", "../admin/images/ofertas/" + response[0].ni );
            cc.val( response[0].ca );
            op = "edit";
            $("#divModOferta").modal('show');
        }
    });
}

function operar(i, d, t, c, f){
	var data = new FormData();
	if(i==0){
		data.append("op","set");
	}else{
		if( io.val() == "" ){
			data.append("op","editSimple");
		}else{
			data.append("op","edit");	
		}
	    data.append("idOf",i);
    }
    data.append("dcto", td.val());
    data.append("tipoOfe", co.val());
    data.append("idCat", cc.val());
    var files = io[0].files;
    var file = files[0];
    data.append("foto_ofe[]", file);
    $.ajax({
        data:  data,
        url:   './controller/C_Oferta.php',
        type:  'post',
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function(){
            
        },
        success:  function (response) {
            //alert(response);
            td.val("");
			co.val("0");
			cc.val("0");
			io.val("");
            $('#imgTempOfe').attr('src',"");
            listarOfertas();
            $("#divModOferta").modal("hide");
            validarEstadosInput(td,'');
            validarEstadosInput(co,'');
            validarEstadosInput(cc,'');
            validarEstadosInput(io,'');
            if( op == "set" ){
            	showNotification('top','right', 1, 'Oferta agregada');	
            }else if( op == "edit" ){
            	showNotification('top','right', 1, 'Oferta modificada');
            }
            
        }, 
        error: function (){
        	showNotification('top','right', 5, 'No se pudo guardar la oferta');
        }
    });
}

function listarOfertas(){
	var datos = {"op" : "toList"};
    //Utilzo la funcion post, para hacer el llamado ajax
    $.post('./controller/C_Oferta.php', datos, function(lsOfers){
        $("#panelOferta").html("");
        $("#panelOferta").html('<table id="tbOfertas" class="table table-striped table-bordered table-hover table-condensed">' +
                            '<thead>' +
                                '<tr class="info">' +
                                    '<th class="text-center">#</th>' +
                                    '<th class="text-center">Oferta</th>' +
                                    '<th class="text-center">Categoria</th>' +
                                    '<th class="text-center">Dcto.</th>' +
                                    '<th class="text-center">Tipo</th>' +
                                    '<th class="text-center">Oper.</th>' +
                                '</tr>' +
                            '</thead>' +
                            '<tfoot>' +
                                '<tr class="info">' +
                                    '<th class="text-center">#</th>' +
                                    '<th class="text-center">Oferta</th>' +
                                    '<th class="text-center">Categoria</th>' +
                                    '<th class="text-center">Dcto.</th>' +
                                    '<th class="text-center">Tipo</th>' +
                                    '<th class="text-center">Oper.</th>' +
                                '</tr>' +
                            '</tfoot>' +
                            '<tbody></tbody>' + 
                        '</table>');
        $.each(lsOfers, function(index, fila){
        	var to = (fila.to == '0' ? 'Principal' : 'Productos');
            $( "#tbOfertas tbody").append("<tr><td class='text-center'>" + (index+1) + "</td>" + 
                                    "<td class='text-center'>" + 
                                        "<img src='../admin/images/ofertas/" + fila.ni + "' alt='Oferta' style='height: 50px; width: 50px;'>" + 
                                    "<td class='text-center'>" + fila.ca + "</td>" + 
                                    "<td class='text-center'>" + fila.dc + "</td>" + 
                                    "<td class='text-center'>" + to + "</td>" + 
                                    "<td class='text-center'>" + 
                                    	'<a href="#" onclick="showOferta(' + fila.id + ');">' +
                                			'<img src="../images/icons/edit.png" alt="Editar Oferta" title="Editar Oferta" style="height: 30px; width: 30px;">' +
                                		'</a> &nbsp;' +
                                        '<a href="#" onclick="delOferta(' + fila.id + ');">' +
                                            "<img src='../images/icons/del.png' alt='Eliminar Color' title='Eliminar color Color' style='height: 30px; width: 30px;'>" +
                                        "</a>" +
                                    "</td></tr>");
        });
    }, 'json');
}

function listarCats(){
	var datos = {"op" : "toList"};
    cc.empty();
    cc.append("<option value='0'>-Seleccione-</value>");
    //Utilzo la funcion post, para hacer el llamado ajax
    $.post('./controller/C_Categoria.php', datos, function(lsCat){
        $.each(lsCat, function(index, fila){
        	cc.append('<option value="' + fila.id + '">' + fila.no + '</option>');
        });
    }, 'json');
}

function delOferta(id){
	it = id;
	op = "del";
	$("#divModConf").modal('show');
}

function delOfeConf(){
	$.ajax({
        data:  {"op" : "delete", "idOf" : it},
        url:   './controller/C_Oferta.php',
        type:  'post',
        success: function(response) {
            //alert(response);
            $("#divModConf").modal('hide');
            listarOfertas();
        }
    });
}

var type = ['','info','success','warning','danger'];

function showNotification(from, align, iType, message){
    $.notify({
        icon: "glyphicon glyphicon-bullhorn",
        message: "<b>Mensaje: </b>" + message
        
    },{
        type: type[iType],
        timer: 4000,
        placement: {
            from: from,
            align: align
        }
    });
}