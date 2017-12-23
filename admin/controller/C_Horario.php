<?php require_once("../class/ClsHorario.php") ?>
<?php
	$horario = new ClsHorario();

	#Verificar si se envia el id del horario
	if( isset($_POST['idHorario']) ){
		$horario->setIdHorario($_POST['idHorario']);
	}

	#Verificar si envia el horario
	if( isset($_POST['horario']) ){
		$horario->setHorario($_POST['horario']);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $horario->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $horario->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $horario->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $horario->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "ho" => $varLista[0][1]);
			echo json_encode($fila);
		case 'toList':
			$varLista = $horario->toList();
			$arrHor = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $varLista[0][0], 
						  	"ho" => $varLista[0][1]);
					array_push($arrHor, $f);
				}
			}
			json_encode($arrHor);
		default:
			# code...
			break;
	}
?>