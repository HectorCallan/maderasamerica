<?php session_start(); ?>
<?php require_once("../class/ClsSlider.php");  
    $id = (isset($_GET["id"]) ? $_GET["id"] : 0);
    $busq = $_GET["busq"];
    //if( is_numeric($id) ){
        if( $busq == "slider" ){
            $slider = new ClsSlider();
            $slider->setIdSlider($id);
            $varLista = $slider->get();
            header("Content-type: " . $varLista[0][3]);
            echo $varLista[0][2];
        }
    	
    /*}else{
    	echo "Id no valido";
    }*/
   	
?>