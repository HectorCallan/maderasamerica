function validarEstadosInput(element, tipo){
	element.parent().parent().removeClass('has-error has-feedback');
	element.parent().parent().removeClass('has-warning has-feedback');
	element.parent().parent().removeClass('has-success  has-feedback');
	switch(tipo){
		case 'success':
			element.parent().parent().addClass('has-success has-feedback');
			element.parent().find('.form-control-feedback').remove();
			element.parent().append('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
			break;
		case 'warning':
			element.parent().parent().addClass('has-warning has-feedback');
			element.parent().find('.form-control-feedback').remove();
			element.parent().append('<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>');
			break;
		case 'error':
			element.parent().parent().addClass('has-error has-feedback');
			element.parent().find('.form-control-feedback').remove();
			element.parent().append('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
			element.focus();
			break;
		case 'grpsuccess':
			element.parent().parent().addClass('has-success has-feedback');
			element.parent().find('.form-control-feedback').remove();
			element.parent().append('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
			break;
		case '':
			element.parent().parent().removeClass('has-error has-feedback');
			element.parent().parent().removeClass('has-warning has-feedback');
			element.parent().parent().removeClass('has-success  has-feedback');
			element.parent().find('span').remove();
			break;
	}
}

// Funcion para validar la edad 
function validEdad(fechaNac){
	var fec, valida;
	fec = new Date();
	valida = false;
	if( fechaNac != "" ){
		var fecha = fechaNac.split("-");
		if( (fec.getFullYear() - fecha[0]) >= 18 ){
			valida = true;
			return valida;
		}else{
			valida = false;
			return valida;
		}
	}
	return valida;
}

var fileName, typeFile, sizeByte, siezekiloByte;

function validarImagen(element, inputFileImg){
	fileName = inputFileImg.files[0].name;
	typeFile = inputFileImg.files[0].type; 
	sizeByte = inputFileImg.files[0].size;
	siezekiloByte = parseInt(sizeByte / 1024);
	var vali = true;
	if ( fileName == "" ){
        //ezBSAlert({ headerText: "Atención", messageText: "Seleccione una imagen", alertType: "danger" });
        element.parent().find('p').remove();
        element.parent().append('<p class="text-danger">Seleccione una imagen</p>');
        element.focus();
        vali = false;
        return vali;
    }else{
    	element.parent().find('p').remove();
    }

	if( typeFile != "image/png" && typeFile != "image/jpg" && typeFile != "image/jpeg" ){
    	//ezBSAlert({ headerText: "Atención", messageText: "El archivo " + fileName + " no es una imagen", alertType: "danger" });
    	element.parent().find('p').remove();
    	element.parent().append('<p class="text-danger">El archivo ' + fileName + ' no es una imagen</p>');
        element.val('');
        element.focus();
        vali = false;
        return vali;
    }else{
    	element.parent().find('p').remove();
    }
    if ( siezekiloByte > 1024*16 ){
    	//ezBSAlert({ headerText: "Atención", messageText: "El archivo " + fileName + " supera el tamaño máximo permitido 1MB", alertType: "danger" });
    	element.parent().find('p').remove();
    	element.parent().append('<p class="text-danger">El archivo ' + fileName + ' supera el tamaño máximo permitido</p>');
        element.val('');
        element.focus();
        vali = false;
        return vali;
    }else{
    	element.parent().find('p').remove();
    }
    return vali;
}

function validateEmail(mail){  
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.val())) {  
		mail.parent().find('p').remove();
    	return (true)  
	}else{
		mail.parent().find('p').remove();
		mail.parent().append('<p class="text-danger">Email no valido</p>');
	} 
    return (false)  
}  