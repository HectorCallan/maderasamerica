$(document).ready(Ini);

var tma, ima, tmp, imp, ico, tco;
var bgm, bgp, bgc, bac;

var it, itp, itc, np, tpEl;

tma = $("#txtMarca");
ima = $("#fImgMar");
tmp = $("#txtNomPrMar");
imp = $("#fImgMarPr");
ico = $("#colProd");
tco = $("#txtColProd");

bgm = $("#btnGuaMar");
bgp = $("#btnGuaProd");
bgc = $("#btnGuaCol");
bac = $("#btnAcepCon");

function Ini(){
	$("#divProdMarcs").css("display","none");
    listarMarcas();
}

$("#btnNueMar").click(function(){
	$("#divModMarca").modal("show");
});

$("#btnNueMarPr").click(function(){
	$("#divModMarProd").modal("show");
});

function showProd(marca, id){
	$("#titMarProd").html("Nuevo producto de " + marca);
	$("#titProdMar").html("Productos de la marca " + marca);
	$("#divProdMarcs").css("display","block");
    listarProductos(id);
    it = id;
}

function showColor(id, prod){
    itp = id;
	$("#titProdCol").html("Colores de " + prod);
    listarColores();
	$("#divModCol").modal("show");
}

ima.change(function(event){
    if( validarImagen( ima, this ) ){
        readURL($('#imgTempMarca'),this);
    }
}); 

imp.change(function(event){
    if( validarImagen( imp, this ) ){
        readURL($('#imgTempMarPr'),this);
    }
}); 

ico.change(function(){
    tco.val( ico.val() );
    tco.css("color", ico.val());
});

bgm.click(function(){
	event.preventDefault();
    var $btn = $(this).button('loading');
    if( tma.val().trim() == "" ){
        validarEstadosInput(tma,'error');
        tma.focus();
    }else if( ima.val() == "" || !validarImagen( ima, ima[0] ) ){
    	validarEstadosInput(tma,'success');
        validarEstadosInput(ima,'error');
        ima.focus();        
    }else{
        validarEstadosInput(tma,'success');
        validarEstadosInput(ima,'success');
        nuevaMarca();    
    }
	$btn.button('reset');
});

bgp.click(function(){
	event.preventDefault();
    var $btn = $(this).button('loading');
	if( tmp.val().trim() == "" ){
        validarEstadosInput(tmp,'error');
        tmp.focus();
    }else if( imp.val() == "" || !validarImagen( imp, imp[0] ) ){
        validarEstadosInput(tmp,'success');
        validarEstadosInput(imp,'error');
        ip.focus();        
    }else{
        validarEstadosInput(tmp,'success');
        validarEstadosInput(imp,'success');
        nuevoProd();    
    }
	$btn.button('reset');
});

bgc.click(function(){
    event.preventDefault();
    var $btn = $(this).button('loading');
    if( tco.val().trim() == "" ){
        validarEstadosInput(tco,'error');
        tco.focus();
    }else{
        validarEstadosInput(tco,'success');
        nuevoColor();    
    }
    $btn.button('reset');
});

bac.click(function(){
    event.preventDefault();
    var $btn = $(this).button('loading');
    if( tpEl == "delMarc" ){
        delConf();
    }else if( tpEl == "delProd" ){
        delProdConf();
    }else if( tpEl == "delCol" ){
        delColConf();
    }
    $btn.button('reset');
});

function nuevaMarca(){
	var data = new FormData();
    data.append("op","set");
    data.append("nombre", tma.val());
    var files = ima[0].files;
    var file = files[0];
    data.append("foto_mar[]", file);
    $.ajax({
        data:  data,
        url:   './controller/C_Marca.php',
        type:  'post',
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function(){
            
        },
        success:  function (response) {
            //alert(response);
            tma.val("");
			ima.val("");
            $('#imgTempMarca').attr('src',"");
            listarMarcas();
            $("#divModMarca").modal("hide");
            validarEstadosInput(tma,'');
            validarEstadosInput(ima,'');
            showNotification('top','right', 1, 'Marca agregada');
        }, 
        error: function (){
            ezBSAlert({ headerText: "Error :(", messageText: "No se pudo guardar la imagen", alertType: "danger" }); 
        }
    });
}

function nuevoProd(){
    var data = new FormData();
    data.append("op","set");
    data.append("titulo", tmp.val());
    data.append("idMarca", it);
    var files = imp[0].files;
    var file = files[0];
    data.append("foto_marProd[]", file);
    $.ajax({
        data:  data,
        url:   './controller/C_MarcaProd.php',
        type:  'post',
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function(){
            
        },
        success:  function (response) {
            //alert(response);
            tmp.val("");
            imp.val("");
            $('#imgTempMarPr').attr('src',"");
            listarProductos(it)
            $("#divModMarProd").modal("hide");
            validarEstadosInput(tmp,'');
            validarEstadosInput(imp,'');
            showNotification('top','right', 1, 'Producto agregado');
        }, 
        error: function (){
            ezBSAlert({ headerText: "Error :(", messageText: "No se pudo guardar la imagen", alertType: "danger" }); 
        }
    });
}

function nuevoColor(){
    $.ajax({
        data:  {"op" : "set", "color" : ico.val(), "idMarcProd" : itp },
        url:   './controller/C_MarcaProdCol.php',
        type:  'post',
        success: function(response) {
            //alert(response);
            ico.val("#000000");
            tco.val("");
            validarEstadosInput(tco,'');
            showNotification('top','right', 1, 'Color agregado al producto');
            listarColores();
        }
    });
}

function listarMarcas(){
    /*$.ajax({
        data:  {"op" : "toList" },
        url:   './controller/C_Marca.php',
        type:  'post',
        success: function(response) {
            alert(response);
        }
    });*/
    var datos = {"op" : "toList"};
    //Utilzo la funcion post, para hacer el llamado ajax
    $.post('./controller/C_Marca.php', datos, function(lsMarcas){
        $("#panelMarca").html("");
        $("#panelMarca").html('<table id="tbMarcas" class="table table-striped table-bordered table-hover table-condensed">' +
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
        $.each(lsMarcas, function(index, fila){
            $( "#tbMarcas tbody").append("<tr><td class='text-center'>" + (index+1) + "</td>" + 
                                     "<td class='text-center'>" + fila.no + "</td>" + 
                                     "<td class='text-center'>" + 
                                        "<img src='../admin/images/marcas/" + fila.ni + "' alt='" + fila.no + "' style='height: 50px; width: 50px;'>" + 
                                     "</td>" +
                                     "<td class='text-center'>" + 
                                        '<a href="#" onclick="showProd(\'' + fila.no + '\',' + fila.id + ');">' +
                                                "<img src='../images/icons/add.png' alt='Agregar Producto' title='Agregar Producto' style='height: 30px; width: 30px;'>" +
                                        "</a> &nbsp;" + 
                                        "<a href='#' onclick='del(" + fila.id + ");'>" +
                                            "<img src='../images/icons/del.png' alt='Eliminar categoria' title='Eliminar Marca' style='height: 30px; width: 30px;'>" +
                                        "</a>" + 
                                     "</td></tr>");
        });
    }, 'json');
}

function listarProductos(idm){
    var datos = {"op" : "toListMarca", "idMarca" : idm};
    //Utilzo la funcion post, para hacer el llamado ajax
    $.post('./controller/C_MarcaProd.php', datos, function(lsProds){
        $("#panelMarPr").html("");
        $("#panelMarPr").html('<table id="tbMarPro" class="table table-striped table-bordered table-hover table-condensed">' +
                            '<thead>' +
                                '<tr class="info">' +
                                    '<th class="text-center">#</th>' +
                                    '<th class="text-center">Nombre</th>' +
                                    '<th class="text-center">Imagen</th>' +
                                    '<th class="text-center">Colores</th>' +
                                    '<th class="text-center">Oper.</th>' +
                                '</tr>' +
                            '</thead>' +
                            '<tfoot>' +
                                '<tr class="info">' +
                                    '<th class="text-center">#</th>' +
                                    '<th class="text-center">Nombre</th>' +
                                    '<th class="text-center">Imagen</th>' +
                                    '<th class="text-center">Colores</th>' +
                                    '<th class="text-center">Oper.</th>' +
                                '</tr>' +
                            '</tfoot>' +
                            '<tbody></tbody>' + 
                        '</table>');
        $.each(lsProds, function(index, fila){
            $( "#tbMarPro tbody").append("<tr><td class='text-center'>" + (index+1) + "</td>" + 
                                     "<td class='text-center'>" + fila.ti + "</td>" + 
                                     "<td class='text-center'>" + 
                                        "<img src='../admin/images/marcas/productos/" + fila.ni + "' alt='" + fila.ti + "' style='height: 50px; width: 50px;'>" + 
                                     "</td>" +
                                     "<td id='dTdCols" + fila.id + "' class='text-center'>" + buscarColores(fila.id) + "</td>" + 
                                     "<td class='text-center'>" + 
                                        '<a href="#" onclick="showColor(' + fila.id + ',\'' + fila.ti + '\');">' +
                                                "<img src='../images/icons/add.png' alt='Agregar Color' title='Agregar Color' style='height: 30px; width: 30px;'>" +
                                        "</a> &nbsp;" + 
                                        "<a href='#' onclick='delProd(" + fila.id + ");'>" +
                                            "<img src='../images/icons/del.png' alt='Eliminar producto' title='Eliminar producto' style='height: 30px; width: 30px;'>" +
                                        "</a>" + 
                                     "</td></tr>");
        });
    }, 'json');
}

function listarColores(){ 
    var datos = {"op" : "toList", "idMarcProd" : itp};
    //Utilzo la funcion post, para hacer el llamado ajax
    $.post('./controller/C_MarcaProdCol.php', datos, function(lsColors){
        $("#panelColor").html("");
        $("#panelColor").html('<table id="tbColores" class="table table-striped table-bordered table-hover table-condensed">' +
                            '<thead>' +
                                '<tr class="info">' +
                                    '<th class="text-center">#</th>' +
                                    '<th class="text-center">Color</th>' +
                                    '<th class="text-center">Oper.</th>' +
                                '</tr>' +
                            '</thead>' +
                            '<tfoot>' +
                                '<tr class="info">' +
                                    '<th class="text-center">#</th>' +
                                    '<th class="text-center">Color</th>' +
                                    '<th class="text-center">Oper.</th>' +
                                '</tr>' +
                            '</tfoot>' +
                            '<tbody></tbody>' + 
                        '</table>');
        $.each(lsColors, function(index, fila){
            $( "#tbColores tbody").append("<tr><td class='text-center'>" + (index+1) + "</td>" + 
                                     "<td class='text-center'>" + 
                                            "<div class='divColor' style='background-color: " + fila.co + "'></div></td>" + 
                                     "<td class='text-center'>" + 
                                        '<a href="#" onclick="delColor(' + fila.id + ');">' +
                                            "<img src='../images/icons/del.png' alt='Eliminar Color' title='Eliminar color Color' style='height: 30px; width: 30px;'>" +
                                        "</a>" +
                                     "</td></tr>");
        });
    }, 'json');
}

function buscarColores(id){
    var datos = {"op" : "toList", "idMarcProd" : id};
    //Utilzo la funcion post, para hacer el llamado ajax
    $.post('./controller/C_MarcaProdCol.php', datos, function(lsColors){
        $("#dTdCols"+id).html("");
        $.each(lsColors, function(index, fila){
            $("#dTdCols"+id).append("<div class='divColor' style='background-color:" + fila.co +";'></div>");
        });
    }, 'json');        
}

function del(id){
    it = id;
    tpEl = "delMarc";
    $("#divModConf").modal('show');
}

function delConf(){
    $.ajax({
        data:  {"op" : "delete", "idMarca" : it},
        url:   './controller/C_Marca.php',
        type:  'post',
        success: function(response) {
            //alert(response);
            $("#divModConf").modal('hide');
            listarMarcas();
            $("#divProdMarcs").css("display","none");
        }
    });
}

function delProd(id){
    itp = id;
    tpEl = "delProd";
    $("#divModConf").modal('show');
}

function delProdConf(){
    $.ajax({
        data:  {"op" : "delete", "idMarcaProd" : itp},
        url:   './controller/C_MarcaProd.php',
        type:  'post',
        success: function(response) {
            //alert(response);
            $("#divModConf").modal('hide');
            listarProductos(it);
        }
    });
}

function delColor(id){
    itc = id;
    tpEl = "delCol";
    $("#divModConf").modal('show');
}

function delColConf(){
    $.ajax({
        data:  {"op" : "delete", "idMarPrCol" : itc},
        url:   './controller/C_MarcaProdCol.php',
        type:  'post',
        success: function(response) {
            //alert(response);
            $("#divModConf").modal('hide');
            listarColores();
            listarProductos(it);
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