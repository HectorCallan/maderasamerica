<?php require_once("../class/ClsTarjeta.php") ?>
<?php
	$tarjeta = new ClsTarjeta();

	#validamos si se envia el id de la tarjeta
	if( isset($_POST['idTarjeta']) ){
		$tarjeta->setIdTarjeta($_POST['idTarjeta']);
	}

	# Verificamos si envia la imagen del slider
	if (isset($_POST["nombre"])){
        $tarjeta->setNombre($_POST['nombre']);
    }

    #Verificamos si envia el estado del slider
	if( isset($_POST['estado']) ){
		$tarjeta->setEstado($_POST['estado']);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $tarjeta->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $tarjeta->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $tarjeta->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $tarjeta->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "no" => $varLista[0][1],
						  "es" => $varLista[0][2]);
			echo json_encode($fila);
			break;
		case 'toList':
			$varLista = $tarjeta->toList();
			$arrTar = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						 	"no" => $fila[1],
						  	"es" => $fila[2]);
					array_push($arrTar, $f);
				}
			}
			json_encode($arrTar);
			break;
		default:
			# code...
			break;
	}
?>