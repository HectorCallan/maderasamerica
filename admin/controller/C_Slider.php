<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once("../class/ClsSlider.php") ?>
<?php 
	$slider = new ClsSlider();

	#validamos si se envia el id del slider
	if( isset($_POST['id']) ){
		$slider->setIdSlider($_POST['id']);
	}

	#validamos si envia el titulo del slider
	if( isset($_POST['titulo']) ){
		$slider->setTitulo($_POST['titulo']);
	}

	# Verificamos si envia la imagen del slider
	if (isset($_FILES["foto_slider"])){
        $allowedExts = array("gif", "jpeg", "jpg", "png", "pjpeg");
        $temp = explode(".", $_FILES["foto_slider"]["name"][0]);
        $extension = end($temp);
        $foto = substr(md5(uniqid(rand())),0,10).".".$extension;
        $directorio = dirname(__dir__);
        $directorio = substr(__ROOT__, 0, stripos(__ROOT__, '\admin'));
        $directorio = __ROOT__ . "/images/slider";
        if( $_FILES["foto_slider"]["size"][0] < (1024*1024*2) ){
            if ((($_FILES["foto_slider"]["type"][0] == "image/gif")
                || ($_FILES["foto_slider"]["type"][0] == "image/jpeg")
                || ($_FILES["foto_slider"]["type"][0] == "image/jpg")
                || ($_FILES["foto_slider"]["type"][0] == "image/x-png")
                || ($_FILES["foto_slider"]["type"][0] == "image/png"))
                && in_array($extension, $allowedExts)){ 
                if ($_FILES["foto_slider"]["error"][0] > 0){
	                echo "Error: " . $_FILES["foto_slider"]["error"][0];
	                exit;
	            }else{
	            	move_uploaded_file($_FILES["foto_slider"]["tmp_name"][0], $directorio.'/'.$foto);
	            	$slider->setNombreImg($foto);
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

    #Verificamos si envia el estado del slider
	if( isset($_POST['estado']) ){
		$slider->setEstado($_POST['estado']);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $slider->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $slider->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $slider->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $slider->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "ti" => $varLista[0][1],
						  "ni" => $varLista[0][2],
						  "es" => $varLista[0][3]);
			echo json_encode($fila);
			break;
		case 'toList':
			$varLista = $slider->toList();
			//echo $varLista[0][1];
			$arrSli = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"ti" => $fila[1],
						 	"ni" => $fila[2],
						  	"es" => $fila[3]);
					array_push($arrSli, $f);
				}
			}
			echo json_encode($arrSli);
			break;
		default:
			# code...
			break;
	}

?>