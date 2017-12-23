<?php session_start(); ?>
<?php require_once("../class/ClsUsuario.php") ?>
<?php 
	$usuario = new ClsUsuario();

	#Verificamos si envia el usuario
	if( isset($_POST['uma']) ){
		$usuario->setUsuario($_POST['uma']);
	}

	#Verificamos si envia la contra
	if( isset($_POST['coa']) ){
		$usuario->setPasswd($_POST['coa']);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'cerrar_sesion':
			$_SESSION['usuario'] = "";
			session_destroy();
			echo "Cerrando Sesión";
			break;
		case 'logAcc':
			$varLista = $usuario->logAcc();
			//echo $varLista[0][0];
			if(count($varLista) > 0){
				$_SESSION['usuario'] = $varLista[0][0];
				echo "1";
			}else{
				echo "0";
			}
			break;
	}
?>