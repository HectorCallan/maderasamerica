<?php require_once("../class/ClsMarcaProd.php") ?>
<?php require_once("../class/ClsMarcaProdCol.php") ?>
<?php 
	$marcaProd = new ClsMarcaProd();
	$marcaProdCol = new ClsMarcaProdCol();

	#Verificamos si envia el id del color del producto de la marca
	if( isset($_POST['idMarPrCol']) ){
		$marcaProdCol->setIdMarPrCol($_POST['idMarPrCol']);
	}

	#Verificar si envia el color
	if( isset($_POST['color']) ){
		$marcaProdCol->setColor($_POST['color']);
	}

	#Verificamos si envia el estado de la marca 
    if(isset($_POST['estado'])){
		$marcaProdCol->setEstado($_POST['estado']);
	}

	#Verificamos si envia el estado de la marca 
    if(isset($_POST['idMarcProd'])){
		$marcaProd->setIdMarcaProd($_POST['idMarcProd']);
		$marcaProdCol->setMarcaProd($marcaProd);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $marcaProdCol->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $marcaProdCol->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $marcaProdCol->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $marcaProdCol->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "co" => $varLista[0][1],
						  "es" => $varLista[0][2]);
			echo json_encode($fila);
			break;
		case 'toList':
			$varLista = $marcaProdCol->toList();
			$arrMar = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"co" => $fila[1],
						  	"es" => $fila[2]);
					array_push($arrMar, $f);
				}
			}
			echo json_encode($arrMar);
			break;
		default:
			# code...
			break;
	}
?>