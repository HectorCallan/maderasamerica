<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once("../class/ClsMarca.php") ?>
<?php
	$marca = new ClsMarca();

	#Verificar si se envia el ID de la marca
	if( isset($_POST['idMarca']) ){
		$marca->setIdMarca($_POST['idMarca']);
	}

	#Verificamos si envia el nombre de la marca 
    if(isset($_POST['nombre'])){
		$marca->setNombre($_POST['nombre']);
	}

	#Verificamos si envia la imagen de la marca
	if (isset($_FILES["foto_mar"])){
        $allowedExts = array("gif", "jpeg", "jpg", "png", "pjpeg");
        $temp = explode(".", $_FILES["foto_mar"]["name"][0]);
        $extension = end($temp);
        $foto = substr(md5(uniqid(rand())),0,10).".".$extension;
        $directorio = dirname(__dir__);
        $directorio = substr(__ROOT__, 0, stripos(__ROOT__, '/admin'));
        $directorio = __ROOT__ . "/images/marcas";
        if( $_FILES["foto_mar"]["size"][0] < (1024*1024*2) ){
            if ((($_FILES["foto_mar"]["type"][0] == "image/gif")
                || ($_FILES["foto_mar"]["type"][0] == "image/jpeg")
                || ($_FILES["foto_mar"]["type"][0] == "image/jpg")
                || ($_FILES["foto_mar"]["type"][0] == "image/x-png")
                || ($_FILES["foto_mar"]["type"][0] == "image/png"))
                && in_array($extension, $allowedExts)){ 
                if ($_FILES["foto_mar"]["error"][0] > 0){
	                echo "Error: " . $_FILES["foto_mar"]["error"][0];
	                exit;
	            }else{
	            	move_uploaded_file($_FILES["foto_mar"]["tmp_name"][0], $directorio.'/'.$foto);
	            	$marca->setNombreImg($foto);
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

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $marca->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $marca->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $marca->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $marca->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "no" => $varLista[0][1],
						  "ni" => $varLista[0][2],
						  "es" => $varLista[0][3]);
			echo json_encode($fila);
			break;
		case 'toList':
			$varLista = $marca->toList();
			$arrMar = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
							"no" => $fila[1],
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