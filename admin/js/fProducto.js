$(document).ready(Ini);

var tn, tc, tu, td, tdi, ct, ip;
var bmd, bgp, bcp;
var cd, it;

tn = $("#txtNomPro");
tc = $("#txtCarPro");
tu = $("#txtUsoPro");
td = $("#txtDenPro");
tdi = $("#txtDisPro");
ct = $("#cboCat");
ip = $("#fImgProd");

bmd = $("#btnNuePro");
bgp = $("#btnGuaPro");
bcp = $("#btnAcepCon");

function Ini(){
	$("#divProd").css("display","none");
	cd = 0;
	listarCategorias();
	listarProductos();
}

bmd.click(function(){
	if( cd == 0 ){ 
		$("#divProd").css("display","block");
		cd = 1;
	}else{
		$("#divProd").css("display","none");
		cd = 0;
	}
});

ip.change(function(event){
    if( validarImagen( ip, this ) ){
        readURL($('#imgTempProd'),this);
    }
});

bgp.click(function(){
	event.preventDefault();
    var $btn = $(this).button('loading');
    if( tn.val().trim() == "" ){
        validarEstadosInput(tn,'error');
        tn.focus();
    }else if( tc.val().trim() == "" ) {
    	validarEstadosInput(tn,'success');
    	validarEstadosInput(tc,'error');
        tc.focus();
    }else if( tu.val().trim() == "" ) {
    	validarEstadosInput(tc,'success');
    	validarEstadosInput(tu,'error');
        tu.focus();
    }else if( td.val().trim() == "" ) {
    	validarEstadosInput(tu,'success');
    	validarEstadosInput(td,'error');
        td.focus();
    }else if( tdi.val().trim() == "" ) {
    	validarEstadosInput(td,'success');
    	validarEstadosInput(tdi,'error');
        tdi.focus();
    }else if( ct.val() == "0" ) {
    	validarEstadosInput(tdi,'success');
    	validarEstadosInput(ct,'error');
        ct.focus();
    }else if( ip.val() == "" || !validarImagen( ip, ip[0] ) ){
    	validarEstadosInput(ct,'success');
        validarEstadosInput(ip,'error');
        ip.focus();        
    }else{
        validarEstadosInput(tn,'success');
        validarEstadosInput(tc,'success');
        validarEstadosInput(tu,'success');
        validarEstadosInput(td,'success');
        validarEstadosInput(tdi,'success');
        validarEstadosInput(ct,'success');
        validarEstadosInput(ip,'success');
        nuevoProd();    
    }
    $btn.button('reset');
});

bcp.click(function(){
	delProd();
});

function listarCategorias(){
    var datos = {"op" : "toList"};
    ct.empty();
    ct.append("<option value='0'>-Seleccione-</value>");
    //Utilzo la funcion post, para hacer el llamado ajax
    $.post('./controller/C_Categoria.php', datos, function(lsCat){
        $.each(lsCat, function(index, fila){
        	ct.append('<option value="' + fila.id + '">' + fila.no + '</option>');
        });
    }, 'json');
}

function listarProductos(){
	var datos = {"op" : "toList"};
    //Utilzo la funcion post, para hacer el llamado ajax
    $.post('./controller/C_Producto.php', datos, function(lsProds){
        $("#panelProductos").html("");
        $("#panelProductos").html('<table id="tbProds" class="table table-striped table-bordered table-hover table-condensed">' +
                            '<thead>' +
                                '<tr class="info">' +
                                    '<th class="text-center">#</th>' +
                                    '<th class="text-center">Nombre</th>' +
                                    '<th class="text-center">Imagen</th>' +
                                    '<th class="text-center">Categoría</th>' +
                                    '<th class="text-center">Oper.</th>' +
                                '</tr>' +
                            '</thead>' +
                            '<tfoot>' +
                                '<tr class="info">' +
                                    '<th class="text-center">#</th>' +
                                    '<th class="text-center">Nombre</th>' +
                                    '<th class="text-center">Imagen</th>' +
                                    '<th class="text-center">Categoría</th>' +
                                    '<th class="text-center">Oper.</th>' +
                                '</tr>' +
                            '</tfoot>' +
                            '<tbody></tbody>' + 
                        '</table>');
        $.each(lsProds, function(index, fila){
            $( "#tbProds tbody").append("<tr><td class='text-center'>" + (index+1) + "</td>" + 
                                     "<td class='text-center'>" + fila.no + "</td>" + 
                                     "<td class='text-center'>" + 
                                        "<img src='../admin/images/products/" + fila.ni + "' alt='" + fila.no + "' style='height: 50px; width: 50px;'>" + 
                                     "</td>" +
                                     "<td class='text-center'>" + fila.ct + "</td>" +
                                     "<td class='text-center'>" + 
                                        "<a href='#' onclick='del(" + fila.id + ");'>" +
                                            "<img src='../images/icons/del.png' alt='Eliminar categoria' title='Eliminar Marca' style='height: 30px; width: 30px;'>" +
                                        "</a>" + 
                                     "</td></tr>");
        });
        var tbm = $('#tbProds');
        tbm.dataTable({
            "sPaginationType": "full_numbers",
            "lengthMenu": [[10, 25, -1], [10, 25, "All"]],
            "language": {
                "url": "../js/languageDT.json"
            }
        });
    }, 'json');
}

function nuevoProd(){
	var data = new FormData();
    data.append("op","set");
    data.append("nombre", tn.val());
    data.append("caract", tc.val());
    data.append("usos", tu.val());
    data.append("densidad", td.val());
    data.append("disponib", tdi.val());
    data.append("idCat", ct.val());
    var files = ip[0].files;
    var file = files[0];
    data.append("foto_prod[]", file);
    $.ajax({
        data:  data,
        url:   './controller/C_Producto.php',
        type:  'post',
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function(){
            
        },
        success:  function (response) {
            //alert(response);
            tn.val("");
			tc.val("");
			tu.val("");
			td.val("");
			tdi.val("");
			ct.val("0");
			ip.val("");
            $('#imgTempProd').attr('src',"");
            listarProductos();
            validarEstadosInput(tn,'');
            validarEstadosInput(tc,'');
            validarEstadosInput(tu,'');
            validarEstadosInput(td,'');
            validarEstadosInput(tdi,'');
            validarEstadosInput(ct,'');
            validarEstadosInput(ip,'');
            showNotification('top','right', 1, 'Producto agregado');
        }, 
        error: function (){
            ezBSAlert({ headerText: "Error :(", messageText: "No se pudo guardar la imagen", alertType: "danger" }); 
        }
    });
}

function del(id){
	it = id;
	$("#divModConf").modal('show');
}

function delProd(){
	$.ajax({
        data:  {"op" : "delete", "idProd" : it },
        url:   './controller/C_Producto.php',
        type:  'post',
        success: function(response) {
            //alert(response);
            showNotification('top','right', 1, 'Producto eliminada');
            listarProductos();
            $("#divModConf").modal("hide");
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