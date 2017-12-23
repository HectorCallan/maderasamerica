<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once("../class/ClsCategoria.php") ?>
<?php
	$categoria = new ClsCategoria();

	#Verificamos si envia el id de categoria
	if(isset($_POST['idCat'])){
		$categoria->setIdCategoria($_POST['idCat']);
	}

	#Verificamos si envia el nombre de la categoria
	if(isset($_POST['nombre'])){
		$categoria->setNombre($_POST['nombre']);
	}

	#Verificamos si envia la foto de la categoria
	if (isset($_FILES["foto_cat"])){
        $allowedExts = array("gif", "jpeg", "jpg", "png", "pjpeg");
        $temp = explode(".", $_FILES["foto_cat"]["name"][0]);
        $extension = end($temp);
        $foto = substr(md5(uniqid(rand())),0,10).".".$extension;
        $directorio = dirname(__dir__);
        $directorio = substr(__ROOT__, 0, stripos(__ROOT__, '/admin'));
        $directorio = __ROOT__ . "/images/products";
        if( $_FILES["foto_cat"]["size"][0] < (1024*1024*2) ){
            if ((($_FILES["foto_cat"]["type"][0] == "image/gif")
                || ($_FILES["foto_cat"]["type"][0] == "image/jpeg")
                || ($_FILES["foto_cat"]["type"][0] == "image/jpg")
                || ($_FILES["foto_cat"]["type"][0] == "image/x-png")
                || ($_FILES["foto_cat"]["type"][0] == "image/png"))
                && in_array($extension, $allowedExts)){ 
                if ($_FILES["foto_cat"]["error"][0] > 0){
	                echo "Error: " . $_FILES["foto_cat"]["error"][0];
	                exit;
	            }else{
	            	move_uploaded_file($_FILES["foto_cat"]["tmp_name"][0], $directorio.'/'.$foto);
	            	$categoria->setNombreImg($foto);
	            }
            }else{
                echo "El tipo de archivo no se puede ingresar";
                exit;
            }
        }else{
            echo "El archivo tiene que ser menor a 16Mb";
            exit;
        }
    }

    #Verificamos si envia el estado de la categoria 
    if(isset($_POST['estado'])){
		$categoria->setEstado($_POST['estado']);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $categoria->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $categoria->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $categoria->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $categoria->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "no" => $varLista[0][1],
						  "ni" => $varLista[0][2],
						  "es" => $varLista[0][3]);
			echo json_encode($fila);
			break;
		case 'toList':
			$varLista = $categoria->toList();
			$arrCat = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"no" => $fila[1],
						  	"ni" => $fila[2],
						  	"es" => $fila[3]);
					array_push($arrCat, $f);
				}
			}
			echo json_encode($arrCat);
			break;
		default:
			# code...
			break;
	}


?>