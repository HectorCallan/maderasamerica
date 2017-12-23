<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once("../class/ClsCategoria.php") ?>
<?php require_once("../class/ClsOferta.php") ?>
<?php 
	$oferta = new ClsOferta();
	$cate = new ClsCategoria();

	#Verificamos si envia el id de la oferta
	if( isset($_POST['idOf']) ){
		$oferta->setIdOferta($_POST['idOf']);
	}

	#Verificamos si envia el dcto de la oferta 
	if( isset($_POST['dcto']) ){
		$oferta->setDcto($_POST['dcto']);
	}

	#Verificamos si envia el tipo de oferta
	if( isset($_POST['tipoOfe']) ){
		$oferta->setTipoOferta($_POST['tipoOfe']);
	}

	#Verificamos si envia la foto de la oferta
	if (isset($_FILES["foto_ofe"])){
        $allowedExts = array("gif", "jpeg", "jpg", "png", "pjpeg");
        $temp = explode(".", $_FILES["foto_ofe"]["name"][0]);
        $extension = end($temp);
        $foto = substr(md5(uniqid(rand())),0,10).".".$extension;
        $directorio = dirname(__dir__);
        $directorio = substr(__ROOT__, 0, stripos(__ROOT__, '/admin'));
        $directorio = __ROOT__ . "/images/ofertas";
        if( $_FILES["foto_ofe"]["size"][0] < (1024*1024*2) ){
            if ((($_FILES["foto_ofe"]["type"][0] == "image/gif")
                || ($_FILES["foto_ofe"]["type"][0] == "image/jpeg")
                || ($_FILES["foto_ofe"]["type"][0] == "image/jpg")
                || ($_FILES["foto_ofe"]["type"][0] == "image/x-png")
                || ($_FILES["foto_ofe"]["type"][0] == "image/png"))
                && in_array($extension, $allowedExts)){ 
                if ($_FILES["foto_ofe"]["error"][0] > 0){
	                echo "Error: " . $_FILES["foto_ofe"]["error"][0];
	                exit;
	            }else{
	            	move_uploaded_file($_FILES["foto_ofe"]["tmp_name"][0], $directorio.'/'.$foto);
	            	$oferta->setNombreImg($foto);
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

	#Verificamos si envia el estado de la oferta 
    if(isset($_POST['estado'])){
		$oferta->setEstado($_POST['estado']);
	}

	#Verificamos si envia el ID del producto
	if(isset($_POST['idCat']) ){
		$cate->setIdCategoria($_POST['idCat']);
		$oferta->setCategoria($cate);
	}

	$op = $_POST['op'];
	switch ($op) {
		case 'set':
			$varRetorno = $oferta->set();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'edit':
			$varRetorno = $oferta->edit();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'editSimple':
			$varRetorno = $oferta->editSimple();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'delete':
			$varRetorno = $oferta->delete();
			if( $varRetorno == "correcto" ){
				echo "1";
			}else{
				echo "0";
			}
			break;
		case 'get':
			$varLista = $oferta->get();
			$fila[] = array("id" => $varLista[0][0], 
						  "dc" => $varLista[0][1],
						  "to" => $varLista[0][2],
						  "ni" => $varLista[0][3],
						  "es" => $varLista[0][4],
						  "ca" => $varLista[0][5]);
			echo json_encode($fila);
			break;
		case 'toList':
			$varLista = $oferta->toList();
			$arrOfe = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"dc" => $fila[1],
						  	"to" => $fila[2],
						  	"ni" => $fila[3],
						  	"es" => $fila[4],
						  	"ca" => $fila[5]);
					array_push($arrOfe, $f);
				}
			}
			echo json_encode($arrOfe);
			break;
		case 'toListCat':
			$varLista = $oferta->toListCat();
			$arrOfe = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"dc" => $fila[1],
						  	"to" => $fila[2],
						  	"ni" => $fila[3],
						  	"es" => $fila[4],
						  	"ca" => $fila[5]);
					array_push($arrOfe, $f);
				}
			}
			echo json_encode($arrOfe);
			break;
		case 'toListTip1':
			$varLista = $oferta->toListTip1();
			$arrOfe = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"dc" => $fila[1],
						  	"ni" => $fila[2]);
					array_push($arrOfe, $f);
				}
			}
			echo json_encode($arrOfe);
			break;
		case 'toListTip2':
			$varLista = $oferta->toListTip2();
			$arrOfe = array();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					$f = array("id" => $fila[0], 
						  	"dc" => $fila[1],
						  	"ni" => $fila[2]);
					array_push($arrOfe, $f);
				}
			}
			echo json_encode($arrOfe);
			break;
		default:
			# code...
			break;
	}
?>