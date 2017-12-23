<?php require_once("../class/ClsCorreo.php") ?>
<?php 
	$correo = new ClsCorreo();

	#Verificamos que envie el id del correo 
	if( isset($_POST['idC']) ){
		$correo->setIdCorreo($_POST['idC']);
	}

	#Verificamos que envie el correo
	if( isset($_POST['correo']) ){
		$correo->setCorreo($_POST['correo']);
	}

	#Verificamos si envia el estado del correo 
    if(isset($_POST['estado'])){
		$correo->setEstado($_POST['estado']);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $correo->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $correo->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $correo->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $correo->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "co" => $varLista[0][1],
						  "es" => $varLista[0][2]);
			echo json_encode($fila);
		case 'toList':
			$varLista = $correo->toList();
			$arrCor = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"co" => $fila[1],
						  	"es" => $fila[2]);
					array_push($arrCor, $f);
				}
			}
			json_encode($arrCor);
		default:
			# code...
			break;
	}
?>