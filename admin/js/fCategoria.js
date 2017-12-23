$(document).ready(Ini);

var tn, ic, bc, bcf;

tn = $("#txtNomCat");
ic = $("#imgCat");
bc = $("#btnGuaCat");
bcf = $("#btnAcepCon");

var it;

function Ini(){
	listarCategorias();
}

ic.change(function(event){
    if( validarImagen( ic, this ) ){
        readURL($('#imgTempCat'),this);
    }
}); 

bc.click(function(){
	event.preventDefault();
    var $btn = $(this).button('loading');
    if( tn.val().trim() == "" ){
        validarEstadosInput(tn,'error');
        tn.focus();
    }else if( ic.val() == "" || !validarImagen( ic, ic[0] ) ){
        validarEstadosInput(tn,'success');
        validarEstadosInput(ic,'error');
        is.focus();        
    }else{
        validarEstadosInput(tn,'success');
        validarEstadosInput(ic,'success');
        nuevoCat();    
    }
    $btn.button('reset');
});

bcf.click(function(){
    confdel();
});

function nuevoCat(){
	var data = new FormData();
    data.append("op","set");
    data.append("nombre", tn.val());
    var files = ic[0].files;
    var file = files[0];
    data.append("foto_cat[]", file);
    $.ajax({
        data:  data,
        url:   './controller/C_Categoria.php',
        type:  'post',
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function(){
            
        },
        success:  function (response) {
            //alert(response);
            tn.val("");
            ic.val("");
            $('#imgTempCat').attr('src',"");
            listarCategorias();
            validarEstadosInput(tn,'');
            validarEstadosInput(ic,'');
            showNotification('top','right', 1, 'Categoria agregada');
        }, 
        error: function (){
            ezBSAlert({ headerText: "Error :(", messageText: "No se pudo guardar la imagen", alertType: "danger" }); 
        }
    });
}

function listarCategorias(){
    var datos = {"op" : "toList"};
    //Utilzo la funcion post, para hacer el llamado ajax
    $.post('./controller/C_Categoria.php', datos, function(lsCat){
        $("#panelCategoria").html("");
        $("#panelCategoria").html('<table id="tbCats" class="table table-striped table-bordered table-hover table-condensed">' +
                            '<thead>' +
                                '<tr class="info">' +
                                    '<th class="text-center">#</th>' +
                                    '<th class="text-center">Nombre</th>' +
                                    '<th class="text-center">Imagen</th>' +
                                    '<th class="text-center">Oper.</th>' +
                                '</tr>' +
                            '</thead>' +
                            '<tfoot>' +
                                '<tr class="info">' +
                                    '<th class="text-center">#</th>' +
                                    '<th class="text-center">Nombre</th>' +
                                    '<th class="text-center">Imagen</th>' +
                                    '<th class="text-center">Oper.</th>' +
                                '</tr>' +
                            '</tfoot>' +
                            '<tbody></tbody>' + 
                        '</table>');
        $.each(lsCat, function(index, fila){
            $( "#tbCats tbody").append("<tr><td class='text-center'>" + (index+1) + "</td>" + 
                                     "<td class='text-center'>" + fila.no + "</td>" + 
                                     "<td class='text-center'>" + 
                                        "<img src='../admin/images/products/" + fila.ni + "' alt='" + fila.no + "' style='height: 50px; width: 50px;'>" + 
                                     "</td>" +
                                     "<td class='text-center'>" + 
                                        "<a href='#' onclick='del(" + fila.id + ");'>" +
                                            "<img src='../images/icons/del.png' alt='Eliminar categoria' title='Eliminar Categoría' style='height: 30px; width: 30px;'>" +
                                        "</a>" + 
                                     "</td></tr>");
        });
    }, 'json');
}

function del(id){
    it = id;
    $("#divModConf").modal('show');
}

function confdel(){
    $.ajax({
        data:  {"op" : "delete", "idCat" : it },
        url:   './controller/C_Categoria.php',
        type:  'post',
        success: function(response) {
            //alert(response);
            showNotification('top','right', 1, 'Categoria eliminada');
            listarCategorias();
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