$(document).ready(Ini);
// variables input
var tu, tp;
// variables botones
var bNuevo;
tu = $( "#txtUsuario" );
tp = $( "#txtPwd" );
bIng = $( "#btnIng" );

function Ini() {
    $("#wrapper").css("position", "relative");
	$("#wrapper").css("top", function(){
		var w_h = $(document).height() / 2;
		var b_h = $(".login").height() / 2;
		return w_h - b_h;
	});
}

function validarCampos(){
	var vali = true;
	if ( tu.val().trim() == "" ){
        validarEstadosInput(tu,'error');
        tu.focus();
        vali = false;
        return vali;
    }else{
		validarEstadosInput(tu,'success');
	}

    if ( tp.val().trim() == "" ){
        validarEstadosInput(tp,'error');
        tp.focus();
        vali = false;
        return vali;
    }else{
		validarEstadosInput(tp,'success');
	}

    return vali;
}

function limpiarCampos(){
	tu.val("");
	tp.val("");
}

bIng.click(function(){
	var $btn = $(this).button('loading');
	if( validarCampos() ){
		// business logic...
		$.ajax({
	        data:  {"op" : "logAcc", 
	                "uma" : tu.val(),
	                "coa" : hex_sha1(tp.val())
	                },
	        url:   './controller/C_Usuario.php',
	        type:  'post', 
	        success:  function(response) {
	        	response = response.toString().trim();
	        	if( response.localeCompare("1") == 0 ){
	                ezBSAlert({ headerText: "Atención", messageText: "Acceso permitido a " + tu.val() + ", bienvenido", alertType: "success" });	
	                limpiarCampos();
	                Redirect("./");
	            }else if( response.localeCompare("0") == 0 ){
	                ezBSAlert({ headerText: "Atención", messageText: "Error verifique su usuario y/o contraseña", alertType: "danger" });
	            }
	        },
	        error: function(){
	        	ezBSAlert({ headerText: "Error :(", messageText: "Problemas de conexión", alertType: "danger" }); 
	        }
	    });
    }
    $btn.button('reset');
    event.preventDefault();
});

function Redirect (url) {
    var ua        = navigator.userAgent.toLowerCase(),
        isIE      = ua.indexOf('msie') !== -1,
        version   = parseInt(ua.substr(4, 2), 10);

    // Internet Explorer 8 and lower
    if (isIE && version < 9) {
        var link = document.createElement('a');
        link.href = url;
        document.body.appendChild(link);
        link.click();
    }

    // All other browsers
    else { window.location.href = url; }
}