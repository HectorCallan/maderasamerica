<?php require_once("../class/ClsEnvios.php") ?>
<?php 
	$envios = new ClsEnvios();

	#Verificamos que envie el ID del envio
	if( isset($_POST['idE']) ){
		$envios->setIdEnvios($_POST['idE']);
	}

	#Verificamos que envie el lugar
	if( isset($_POST['lugar']) ){
		$envios->setLugares($_POST['lugar']);
	}

	#Verificamos si envia el estado del lugar 
    if(isset($_POST['estado'])){
		$envios->setEstado($_POST['estado']);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $envios->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $envios->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $envios->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $envios->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "lu" => $varLista[0][1],
						  "es" => $varLista[0][2]);
			echo json_encode($fila);
		case 'toList':
			$varLista = $correo->toList();
			$arrEnv = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $varLista[0][0], 
						  	"lu" => $varLista[0][1],
						  	"es" => $varLista[0][2]);
					array_push($arrEnv, $f);
				}
			}
			json_encode($arrEnv);
		default:
			# code...
			break;
	}
?>