<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once("../class/ClsCategoria.php") ?>
<?php require_once("../class/ClsProducto.php") ?>
<?php
	$categoria = new ClsCategoria();
	$producto = new ClsProducto();

	#Verificamos si envia el id del producto
	if( isset($_POST['idProd']) ){
		$producto->setIdProducto($_POST['idProd']);	
	}

	#Verificamos si envia el nombre del producto
	if( isset($_POST['nombre']) ){
		$producto->setNombre($_POST['nombre']);
	}

	#Verificamos si envia las caracteristicas del producto
	if( isset($_POST['caract']) ){
		$producto->setCaract($_POST['caract']);
	}

	#Verificamos si envia los usos del producto
	if( isset($_POST['usos']) ){
		$producto->setUsos($_POST['usos']);
	}

	#Verificamos si envia la densidad del producto
	if( isset($_POST['densidad']) ){
		$producto->setDensidad($_POST['densidad']);
	}

	#Verificamos si envia la disponibilidad del producto
	if( isset($_POST['disponib']) ){
		$producto->setDisponib($_POST['disponib']);
	}

	# Verificamos si envia la imagen del producto
	if (isset($_FILES["foto_prod"])){
        $allowedExts = array("gif", "jpeg", "jpg", "png", "pjpeg");
        $temp = explode(".", $_FILES["foto_prod"]["name"][0]);
        $extension = end($temp);
        $foto = substr(md5(uniqid(rand())),0,10).".".$extension;
        $directorio = dirname(__dir__);
        $directorio = substr(__ROOT__, 0, stripos(__ROOT__, '/admin'));
        $directorio = __ROOT__ . "/images/products";
        if( $_FILES["foto_prod"]["size"][0] < (1024*1024*2) ){
            if ((($_FILES["foto_prod"]["type"][0] == "image/gif")
                || ($_FILES["foto_prod"]["type"][0] == "image/jpeg")
                || ($_FILES["foto_prod"]["type"][0] == "image/jpg")
                || ($_FILES["foto_prod"]["type"][0] == "image/x-png")
                || ($_FILES["foto_prod"]["type"][0] == "image/png"))
                && in_array($extension, $allowedExts)){ 
                if ($_FILES["foto_prod"]["error"][0] > 0){
	                echo "Error: " . $_FILES["foto_prod"]["error"][0];
	                exit;
	            }else{
	            	move_uploaded_file($_FILES["foto_prod"]["tmp_name"][0], $directorio.'/'.$foto);
	            	$producto->setNombreImg($foto);
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

    #Verificamos si envia el estado del producto
	if( isset($_POST['estado']) ){
		$producto->setEstado($_POST['estado']);
	}

	#Verificamos si envia la categoria del producto
	if( isset($_POST['idCat']) ){
		$categoria->setIdCategoria($_POST['idCat']);
		$producto->setCategoria($categoria);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $producto->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $producto->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $producto->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $producto->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "no" => $varLista[0][1],
						  "ca" => $varLista[0][2],
						  "us" => $varLista[0][3],
						  "de" => $varLista[0][4],
						  "di" => $varLista[0][5],
						  "ni" => $varLista[0][6],
						  "es" => $varLista[0][7],
						  "ic" => $varLista[0][8]);
			echo json_encode($fila);
			break;
		case 'toList':
			$varLista = $producto->toList();
			$arrPro = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"no" => $fila[1],
						  	"ca" => $fila[2],
						  	"us" => $fila[3],
						  	"de" => $fila[4],
						  	"di" => $fila[5],
						  	"ni" => $fila[6],
						  	"es" => $fila[7],
						  	"ct" => $fila[8]);
					array_push($arrPro, $f);
				}
			}
			echo json_encode($arrPro);
			break;
		case 'toListProd':
			$varLista = $producto->toListProd();
			$arrPro = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"no" => $fila[1],
						  	"ca" => $fila[2],
						  	"us" => $fila[3],
						  	"de" => $fila[4],
						  	"di" => $fila[5],
						  	"ni" => $fila[6],
						  	"es" => $fila[7],
						  	"ct" => $fila[8]);
					array_push($arrPro, $f);
				}
			}
			echo json_encode($arrPro);
			break;
		case 'toListCat':
			$varLista = $producto->toListCat();
			$arrPro = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"no" => $fila[1],
						  	"ca" => $fila[2],
						  	"us" => $fila[3],
						  	"de" => $fila[4],
						  	"di" => $fila[5],
						  	"ni" => $fila[6],
						  	"es" => $fila[7],
						  	"ct" => $fila[8]);
					array_push($arrPro, $f);
				}
			}
			echo json_encode($arrPro);
			break;
		default:
			# code...
			break;
	}
?>