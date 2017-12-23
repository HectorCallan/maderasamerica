<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once("../class/ClsMarca.php") ?>
<?php require_once("../class/ClsMarcaProd.php") ?>
<?php
	
	$marca = new ClsMarca();
	$marcaProd = new ClsMarcaProd();

	# Verificamos si envia el id del producto de la marca
	if ( isset($_POST['idMarcaProd']) ) {
		$marcaProd->setIdMarcaProd($_POST['idMarcaProd']);
	}

	# Verificamos si envia el titulo de la marca
	if ( isset($_POST['titulo']) ) {
		$marcaProd->setTitulo($_POST['titulo']);
	}

	# Verificamos si envia la imagen del producto de la marca
	if (isset($_FILES["foto_marProd"])){
        $allowedExts = array("gif", "jpeg", "jpg", "png", "pjpeg");
        $temp = explode(".", $_FILES["foto_marProd"]["name"][0]);
        $extension = end($temp);
        $foto = substr(md5(uniqid(rand())),0,10).".".$extension;
        $directorio = dirname(__dir__);
        $directorio = substr(__ROOT__, 0, stripos(__ROOT__, '/admin'));
        $directorio = __ROOT__ . "/images/marcas/productos";
        if( $_FILES["foto_marProd"]["size"][0] < (1024*1024*2) ){
            if ((($_FILES["foto_marProd"]["type"][0] == "image/gif")
                || ($_FILES["foto_marProd"]["type"][0] == "image/jpeg")
                || ($_FILES["foto_marProd"]["type"][0] == "image/jpg")
                || ($_FILES["foto_marProd"]["type"][0] == "image/x-png")
                || ($_FILES["foto_marProd"]["type"][0] == "image/png"))
                && in_array($extension, $allowedExts)){ 
                if ($_FILES["foto_marProd"]["error"][0] > 0){
	                echo "Error: " . $_FILES["foto_marProd"]["error"][0];
	                exit;
	            }else{
	            	move_uploaded_file($_FILES["foto_marProd"]["tmp_name"][0], $directorio.'/'.$foto);
	            	$marcaProd->setNombreImg($foto);
	            }
            }else{
                echo "El tipo de archivo no se puede ingresar";
                exit;
            }
        }else{
            echo "El archivo tiene que ser menor a 2Mb";
            exit;
        }
    }

    #Verificamos si envia el estado de la marca 
    if(isset($_POST['estado'])){
		$marca->setEstado($_POST['estado']);
	}

	#Verificamos si envia el id marca 
	if(isset($_POST['idMarca'])){
		$marca->setIdMarca($_POST['idMarca']);
		$marcaProd->setMarca($marca);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $marcaProd->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $marcaProd->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $marcaProd->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $marcaProd->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "ti" => $varLista[0][1],
						  "ni" => $varLista[0][2],
						  "es" => $varLista[0][3],
						  "ma" => $varLista[0][4]);
			echo json_encode($fila);
			break;
		case 'toList':
			$varLista = $marcaProd->toList();
			$arrMar = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $varLista[0][0], 
						  	"ti" => $varLista[0][1],
						  	"ni" => $varLista[0][2],
						  	"es" => $varLista[0][3],
						  	"ma" => $varLista[0][4]);
					array_push($arrMar, $f);
				}
			}
			echo json_encode($arrMar);
			break;
		case 'toListMarca':
			$varLista = $marcaProd->toListMarca();
			$arrMar = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"ti" => $fila[1],
						  	"ni" => $fila[2],
						  	"es" => $fila[3]);
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