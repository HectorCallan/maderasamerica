<?php require_once("../class/ClsTelefono.php") ?>
<?php
	$telefono = new ClsTelefono();

	#validamos si se envia el id del telefono
	if( isset($_POST['idTelefono']) ){
		$telefono->setIdTelefono($_POST['idTelefono']);
	}

	#validamos si se envia el telefono
	if( isset($_POST['telefono']) ){
		$telefono->setTelefono($_POST['telefono']);
	}

	#Verificamos si envia el estado del slider
	if( isset($_POST['estado']) ){
		$telefono->setEstado($_POST['estado']);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $telefono->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $telefono->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $telefono->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $telefono->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "te" => $varLista[0][1],
						  "es" => $varLista[0][2]);
			echo json_encode($fila);
			break;
		case 'toList':
			$varLista = $telefono->toList();
			$arrTel = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						 	   "te" => $fila[1],
						  	   "es" => $fila[2]);
					array_push($arrTel, $f);
				}
			}
			echo json_encode($arrTel);
			break;
		case 'toListAll':
			$varLista = $telefono->toListAll();
			$arrTel = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("te" => $fila[0], 
						 	   "lu" => $fila[1],
						  	   "tj" => $fila[2],
						  	   "co" => $fila[3],
						  	   "ho" => $fila[4],
						  	   "so" => $fila[5],
						  	   "mi" => $fila[6],
						  	   "vi" => $fila[7],
						  	   "c1" => $fila[8],
						  	   "c2" => $fila[9],
						  	   "c3" => $fila[10]);
					array_push($arrTel, $f);
				}
			}
			echo json_encode($arrTel);
			break;
		default:
			# code...
			break;
	}
?>