<?php require_once("../class/ClsNosotros.php") ?>
<?php
	$nosotros = new ClsNosotros();

	#Verificar si se envia el ID de nosotros
	if( isset($_POST['idNos']) ){
		$nosotros->setIdNosotros($_POST['idNos']);
	}

	#Verificamos si envia somos
	if( isset($_POST['somos']) ){
		$nosotros->setSomos($_POST['somos']);
	}

    #Verificamos si envia la mision
    if(isset($_POST['mision'])){
		$nosotros->setMision($_POST['mision']);
	}

	#Verificamos si envia la vision
    if(isset($_POST['vision'])){
		$nosotros->setVision($_POST['vision']);
	}

	#Verificamos si envia la caract 1
    if(isset($_POST['caract1'])){
		$nosotros->setCaract1($_POST['caract1']);
	}

	#Verificamos si envia la caract 2
    if(isset($_POST['caract2'])){
		$nosotros->setCaract2($_POST['caract2']);
	}

	#Verificamos si envia la caract 3
    if(isset($_POST['caract3'])){
		$nosotros->setCaract3($_POST['caract3']);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $nosotros->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $nosotros->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $nosotros->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $nosotros->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "no" => $varLista[0][1],
						  "mi" => $varLista[0][2],
						  "vi" => $varLista[0][3],
						  "c1" => $varLista[0][4],
						  "c2" => $varLista[0][5],
						  "c3" => $varLista[0][6]);
			echo json_encode($fila);
			break;
		case 'toList':
			$varLista = $nosotros->toList();
			$arrNos = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"no" => $fila[1],
						 	"mi" => $fila[2],
						  	"vi" => $fila[3],
						  	"c1" => $fila[4],
						  	"c2" => $fila[5],
						  	"c3" => $fila[6]);
					array_push($arrNos, $f);
				}
			}
			json_encode($arrNos);
			break;
		default:
			# code...
			break;
	}

?>