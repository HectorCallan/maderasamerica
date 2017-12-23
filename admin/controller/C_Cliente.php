<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once("../class/ClsCliente.php") ?>
<?php
	$cliente = new ClsCliente();

	#Verificamos si envia el id del cliente
	if(isset($_POST['idCli'])){
		$cliente->setIdCliente($_POST['idCli']);
	}

	#Verificamos si envia la imagen del cliente
	if (isset($_FILES["foto_cli"])){
        $allowedExts = array("gif", "jpeg", "jpg", "png", "pjpeg");
        $temp = explode(".", $_FILES["foto_cli"]["name"][0]);
        $extension = end($temp);
        $foto = substr(md5(uniqid(rand())),0,10).".".$extension;
        $directorio = dirname(__dir__);
        $directorio = substr(__ROOT__, 0, stripos(__ROOT__, '/admin'));
        $directorio = __ROOT__ . "/images/clients";
        if( $_FILES["foto_cli"]["size"][0] < (1024*1024*2) ){
            if ((($_FILES["foto_cli"]["type"][0] == "image/gif")
                || ($_FILES["foto_cli"]["type"][0] == "image/jpeg")
                || ($_FILES["foto_cli"]["type"][0] == "image/jpg")
                || ($_FILES["foto_cli"]["type"][0] == "image/x-png")
                || ($_FILES["foto_cli"]["type"][0] == "image/png"))
                && in_array($extension, $allowedExts)){ 
                if ($_FILES["foto_cli"]["error"][0] > 0){
	                echo "Error: " . $_FILES["foto_cli"]["error"][0];
	                exit;
	            }else{
	            	move_uploaded_file($_FILES["foto_cli"]["tmp_name"][0], $directorio.'/'.$foto);
	            	$cliente->setNombreImg($foto);
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

    #Verificamos si envia el estado del cliente 
    if(isset($_POST['estado'])){
		$cliente->setEstado($_POST['estado']);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $cliente->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $cliente->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $cliente->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $cliente->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "ni" => $varLista[0][1],
						  "es" => $varLista[0][2]);
			echo json_encode($fila);
		case 'toList':
			$varLista = $cliente->toList();
			$arrCat = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"ni" => $fila[1],
						  	"es" => $fila[2]);
					array_push($arrCat, $f);
				}
			}
			echo json_encode($arrCat);
		default:
			# code...
			break;
	}

?>