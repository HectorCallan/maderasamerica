$(document).ready(Ini);

var ti, is, ic, ist, tt, te, tr, tc1, tc2, th, ts, tm, tv, tx1, tx2, tx3;
var bts, btc, bta, btg;
var op, it;

ti = $("#txtTit");
is = $("#fImgSlid");
ist = $("#imgTempSlid");

tt = $("#txtTlf");
te = $("#txtEnvio");
tr = $("#txtTar");
tc1 = $("#txtCor1");
tc2 = $("#txtCor2");
th = $("#txtHor");
ts = $("#txtSomos");
tm = $("#txtMision");
tv = $("#txtVision");
tx1 = $("#txtCar1");
tx2 = $("#txtCar2");
tx3 = $("#txtCar3");

ic = $("#fImgCli");

bts = $("#btnGuaSli");
btc = $("#btnGuaCli");
bta = $("#btnAcepCon");
btg = $("#btnGuardar");

function Ini(){
    $('.divSlider').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      arrows: false
    });

    $('.divClients').slick({
        infinite: true, 
        centerMode: true,
        variableWidth: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    listarSlider();
    listarClientes();
    consDatos();
}

$("#btnNueSli").click(function(){
    $("#divModSlider").modal("show");
});

$("#btnNueCli").click(function(){
    $("#divModCli").modal("show");
});

bts.click(function(){
    event.preventDefault();
    var $btn = $(this).button('loading');
    if( is.val() == "" || !validarImagen( is, is[0] ) ){
        validarEstadosInput(ti,'success');
        validarEstadosInput(is,'error');
        is.focus();        
    }else{
        validarEstadosInput(ti,'success');
        validarEstadosInput(is,'success');
        nuevoSlider();    
    }
    $btn.button('reset');
});

is.change(function(event){
    if( validarImagen( is, this ) ){
        readURL($('#imgTempSlid'),this);
    }
}); 

btc.click(function(){
    var $btn = $(this).button('loading');
    if( ic.val() == "" || !validarImagen( ic, ic[0] ) ){
        validarEstadosInput(is,'error');
        ic.focus();        
    }else{
        validarEstadosInput(is,'success');
        nuevoCliente();    
    }
    $btn.button('reset');
});

ic.change(function(event){
    if( validarImagen( ic, this ) ){
        readURL($('#imgTempCli'),this);
    }
}); 

bta.click(function(){
    if( op == "slider" ){
        confElSl();
    }else if( op == "cliente" ){
        delCliente();
    }
});

btg.click(function(){
    guardDts();
});

function listarSlider(){
	var datos = {"op" : "toList"};
    //Utilzo la funcion post, para hacer el llamado ajax
    $('.divSlider').slick('removeSlide', null, null, true);
    $.post('./controller/C_Slider.php', datos, function(lsSlider){
    	//$('.add-remove').html("");
        $.each(lsSlider, function(index, fila){
			$('.divSlider').slick('slickAdd',"<div style='position: relative;'>" +
                                                "<a href='#' onclick='elimSlider(" + fila.id + ");'><span class='slick-elim img-circle glyphicon glyphicon-remove'></span></a>" +
                                                "<img src='../admin/images/slider/" + fila.ni + "' alt='' class='img-slider-adm'>" +
                                                "<h5 style='margin-top: 10px;'>" + fila.ti + "</h5>" +
										"</div");
        });
    }, 'json');
}

function listarClientes(){
    var datos = {"op" : "toList"};
    //Utilzo la funcion post, para hacer el llamado ajax
    $('.divClients').slick('removeSlide', null, null, true);
    $.post('./controller/C_Cliente.php', datos, function(lsSlider){
        $.each(lsSlider, function(index, fila){
            $('.divClients').slick('slickAdd',"<div class='divCliImg' style='position: relative;'>" +
                                        "<a href='#' onclick='elimCliente(" + fila.id + ");' alt='Eliminar imagen' title='Eliminar imagen'><span class='slick-elimCl img-circle glyphicon glyphicon-remove'></span></a>" +
                                        "<img src='../admin/images/clients/" + fila.ni + "' >" +
                                    "</div>");
        });
    }, 'json');
}

function nuevoSlider(){
    var data = new FormData();
    data.append("op","set");
    data.append("titulo", ti.val());
    var files = is[0].files;
    var file = files[0];
    data.append("foto_slider[]", file);
    $.ajax({
        data:  data,
        url:   './controller/C_Slider.php',
        type:  'post',
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function(){
            
        },
        success:  function (response) {
            //alert(response);
            ti.val("");
            is.val("");
            $('#imgTempSlid').attr('src',"");
            listarSlider();
            $("#divModSlider").modal("hide");
            validarEstadosInput(ti,'');
            validarEstadosInput(is,'');
            showNotification('top','right', 1, 'Slider agregado');
        }, 
        error: function (){
            ezBSAlert({ headerText: "Error :(", messageText: "No se pudo guardar la imagen", alertType: "danger" }); 
        }
    });
}

function elimSlider(id){
    op = "slider";
    it = id;
    $("#divModConf").modal("show");
}

function confElSl(){
    $.ajax({
        data:  {"op" : "delete", "id" : it },
        url:   './controller/C_Slider.php',
        type:  'post',
        success: function(response) {
            showNotification('top','right', 1, 'Slider eliminado');
            listarSlider();
            $("#divModConf").modal("hide");
        }
    });
}

function elimCliente(id){
    op = "cliente";
    it = id;
    $("#divModConf").modal('show');
}

function delCliente(){
    $.ajax({
        data:  {"op" : "delete", "idCli" : it },
        url:   './controller/C_Cliente.php',
        type:  'post',
        success: function(response) {
            showNotification('top','right', 1, 'Cliente eliminado');
            listarClientes();
            $("#divModConf").modal("hide");
        }
    });
}

function nuevoCliente(){
    var data = new FormData();
    data.append("op","set");
    var files = ic[0].files;
    var file = files[0];
    data.append("foto_cli[]", file);
    $.ajax({
        data:  data,
        url:   './controller/C_Cliente.php',
        type:  'post',
        cache: false,
        contentType: false,
        processData: false,
        success:  function (response) {
            //alert(response);
            ic.val("");
            $('#imgTempCli').attr('src',"");
            listarClientes();
            $("#divModCli").modal("hide");
            validarEstadosInput(ic,'');
            showNotification('top','right', 1, 'Cliente agregado');
        }, 
        error: function (){
            ezBSAlert({ headerText: "Error :(", messageText: "No se pudo guardar la imagen", alertType: "danger" }); 
        }
    });
}

function consDatos(){
    var datos = {"op" : "toListAll"};
    $.post('./controller/C_Telefono.php', datos, function(lsDatos){
        $.each(lsDatos, function(index, fila){
            if( index == 0 ){
                tt.val( fila.te );
                te.val( fila.lu );
                tr.val( fila.tj );
                tc1.val( fila.co );
                th.val( fila.ho );
                ts.val( fila.so );
                tm.val( fila.mi );
                tv.val( fila.vi );
                tx1.val( fila.c1 );
                tx2.val( fila.c2 );
                tx3.val( fila.c3 );
            }else{
                tc2.val( fila.co );
            }
        });
    }, 'json');
} 

function guardDts(){
    guarTlf();
    guarEnv();
    guarTar();
    guaCor();
    guarHor();
    guarNos();
    showNotification('top','right', 1, 'Datos generales modificados');
}

function guarTlf(){
    $.ajax({
        data:  {"op" : "edit", "telefono" : tt.val() },
        url:   './controller/C_Telefono.php',
        type:  'post',
        success: function(response) {
            //alert(response);
        }
    });
}

function guarEnv(){
    $.ajax({
        data:  {"op" : "edit", "lugar" : te.val() },
        url:   './controller/C_Envios.php',
        type:  'post',
        success: function(response) {
            //alert(response);
        }
    });
}

function guarTar(){
    $.ajax({
        data:  {"op" : "edit", "nombre" : tr.val() },
        url:   './controller/C_Tarjeta.php',
        type:  'post',
        success: function(response) {
            //lert(response);
        }
    });
}

function guaCor(){
    $.ajax({
        data:  {"op" : "edit", "idC" : 1, "correo" : tc1.val() },
        url:   './controller/C_Correo.php',
        type:  'post',
        success: function(response) {
            //lert(response);
        }
    });
    $.ajax({
        data:  {"op" : "edit", "idC" : 2, "correo" : tc2.val() },
        url:   './controller/C_Correo.php',
        type:  'post',
        success: function(response) {
            //alert(response);   
        }
    });
}

function guarHor(){
    $.ajax({
        data:  {"op" : "edit", "horario" : th.val() },
        url:   './controller/C_Horario.php',
        type:  'post',
        success: function(response) {
            //alert(response);
        }
    });
}

function guarNos(){
    $.ajax({
        data:  {"op" : "edit", "somos" : ts.val(), "mision" : tm.val(), "vision" : tv.val(), "caract1" : tx1.val(), "caract2" : tx2.val(), "caract3" : tx3.val() },
        url:   './controller/C_Nosotros.php',
        type:  'post',
        success: function(response) {
            //alert(response);
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