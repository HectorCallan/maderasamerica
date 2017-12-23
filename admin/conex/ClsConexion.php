<?php class ClsConexion {
    
    # Variables static y private para que no se puedan modificar estos datos desde ninguna parte de la aplicacion
    private static $dbhost = 'localhost';
    private static $dbuser = 'root';
    private static $dbpass = 'javahector';
    //private static $dbpass = '';
    protected $dbname = 'bd_maderas';
    protected $query;
    protected $rows; # para consulta de una fila

    private static $instancia;
    private $conn;
    
    # métodos abstractos para clases que hereden   
    /*abstract protected function get();
    abstract protected function set();
    abstract protected function edit();
    abstract protected function delete();
    abstract protected function toList();*/

    public function setQuery($query){
        $this->query = $query;
    }
    
    private function __construct(){
        try {
            $this->conn = new PDO('mysql:host=' . self::$dbhost . ";dbname=" . $this->dbname . "; charset=utf8", self::$dbuser, self::$dbpass);
            //print "Se conecto";
        }catch(PDOException $e){
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $this->conn;
    }

    // método singleton
    public static function singleton(){
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        } 
        return self::$instancia;
    }

    // Evita que el objeto se pueda clonar
    public function __clone()
    {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }
    
    # Cerrar conexion
    public function closeConnection(){
        $this->conn = null;
    }
    
    /** validando tags */
    function validarTags($p=array()){
        for($i=0;$i<count($p);$i++){
            $p[$i] = strip_tags($p[$i]);
        }   
        return $p;
    }

    /** Validando caracteres especiales */
    function validarSpecialChar($p=array()){
        for($i=0;$i<count($p);$i++){
            $p[$i] = htmlspecialchars($p[$i]);
        }
        return $p;
    }

    # Ejecutar los procedimientos almacenados con parametros
    public function execute_sentence($p=array()){
        $rpta = "";
        /*if( $p != null ){
            $p = $this->validarTags($p);    
        }*/
        try {
            if ($stmt = $this->conn->prepare($this->query)){
                if( $p != null ){
                    for($i=0; $i<count($p); $i++){
                        $stmt->bindParam($i+1, $p[$i]);
                    }    
                }
                if ($stmt->execute()){
                    $rpta = "correcto";
                }else{
                    $rpta = "error";
                }
                /* La siguiente llamada a closeCursor() podría ser necesaria para algunos controladores */
                $stmt = null;
            }
        } catch (PDOException $e){
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    
    # Ejecutar una sentencia
    public function execute_sentence_select($p=array()){
        
        /*if( $p != null ){
            $p = $this->validarTags($p);
            $p = $this->validarSpecialChar($p);    
        }*/
        if ($stmt = $this->conn->prepare($this->query)){
            /*if( $p != null ){
                # Se asignan los parametros
                for($i=1; $i<=count($p); $i++){
                    $stmt->bindParam($i, $p[$i-1], );
                }
            }*/
            if ($stmt->execute($p)){
                # Traemos el arreglo de filas
                $varLista = array();
                //$stmt->bindColumn(1,$col1);
                //$stmt->fetch(PDO::FETCH_BOUND);
                //$varLista[0] = array($col1);
                switch ($stmt->columnCount()){
                    case 1: $stmt->bindColumn(1,$col1);
                            $i = 0;
                            while ($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1);
                                $i++;
                            }break;
                    case 2: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $i = 0;
                            while ($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2);
                                $i++;
                            }break;
                    case 3: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $stmt->bindColumn(3,$col3);
                            $i = 0;
                            while ($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2, $col3);
                                $i++;
                            }break;
                    case 4: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $stmt->bindColumn(3,$col3);
                            $stmt->bindColumn(4,$col4);
                            $i = 0;
                            while ($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2, $col3, $col4);
                                $i++;
                            }break;
                    case 5: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $stmt->bindColumn(3,$col3);
                            $stmt->bindColumn(4,$col4);
                            $stmt->bindColumn(5,$col5);
                            $i = 0;
                            while ($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2, $col3, $col4, $col5);
                                $i++;
                            }break;
                    case 6: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $stmt->bindColumn(3,$col3);
                            $stmt->bindColumn(4,$col4);
                            $stmt->bindColumn(5,$col5);
                            $stmt->bindColumn(6,$col6);
                            $i = 0;
                            while ($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2, $col3, $col4, $col5, $col6);
                                $i++;
                            }break;
                    case 7: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $stmt->bindColumn(3,$col3);
                            $stmt->bindColumn(4,$col4);
                            $stmt->bindColumn(5,$col5);
                            $stmt->bindColumn(6,$col6);
                            $stmt->bindColumn(7,$col7);
                            $i = 0;
                            while ($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2, $col3, $col4, $col5, $col6, $col7);
                                $i++;
                            }break;
                    case 8: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $stmt->bindColumn(3,$col3);
                            $stmt->bindColumn(4,$col4);
                            $stmt->bindColumn(5,$col5);
                            $stmt->bindColumn(6,$col6);
                            $stmt->bindColumn(7,$col7);
                            $stmt->bindColumn(8,$col8);
                            $i = 0;
                            while ($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8);
                                $i++;
                            }break;
                    case 9: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $stmt->bindColumn(3,$col3);
                            $stmt->bindColumn(4,$col4);
                            $stmt->bindColumn(5,$col5);
                            $stmt->bindColumn(6,$col6);
                            $stmt->bindColumn(7,$col7);
                            $stmt->bindColumn(8,$col8);
                            $stmt->bindColumn(9,$col9);
                            $i = 0;
                            while ($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9);
                                $i++;
                            }break;
                    case 10: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $stmt->bindColumn(3,$col3);
                            $stmt->bindColumn(4,$col4);
                            $stmt->bindColumn(5,$col5);
                            $stmt->bindColumn(6,$col6);
                            $stmt->bindColumn(7,$col7);
                            $stmt->bindColumn(8,$col8);
                            $stmt->bindColumn(9,$col9);
                            $stmt->bindColumn(10,$col10);
                            $i = 0;
                            while ($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10);
                                $i++;
                            }break;
                    case 11: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $stmt->bindColumn(3,$col3);
                            $stmt->bindColumn(4,$col4);
                            $stmt->bindColumn(5,$col5);
                            $stmt->bindColumn(6,$col6);
                            $stmt->bindColumn(7,$col7);
                            $stmt->bindColumn(8,$col8);
                            $stmt->bindColumn(9,$col9);
                            $stmt->bindColumn(10,$col10);
                            $stmt->bindColumn(11,$col11);
                            $i = 0;
                            while($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10, $col11);
                                $i++;
                            }break;
                    case 12: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $stmt->bindColumn(3,$col3);
                            $stmt->bindColumn(4,$col4);
                            $stmt->bindColumn(5,$col5);
                            $stmt->bindColumn(6,$col6);
                            $stmt->bindColumn(7,$col7);
                            $stmt->bindColumn(8,$col8);
                            $stmt->bindColumn(9,$col9);
                            $stmt->bindColumn(10,$col10);
                            $stmt->bindColumn(11,$col11);
                            $stmt->bindColumn(12,$col12);
                            $i = 0;
                            while($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10, $col11, $col12);
                                $i++;
                            }break;
                    case 13: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $stmt->bindColumn(3,$col3);
                            $stmt->bindColumn(4,$col4);
                            $stmt->bindColumn(5,$col5);
                            $stmt->bindColumn(6,$col6);
                            $stmt->bindColumn(7,$col7);
                            $stmt->bindColumn(8,$col8);
                            $stmt->bindColumn(9,$col9);
                            $stmt->bindColumn(10,$col10);
                            $stmt->bindColumn(11,$col11);
                            $stmt->bindColumn(12,$col12);
                            $stmt->bindColumn(13,$col13);
                            $i = 0;
                            while($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10, $col11, $col12, $col13);
                                $i++;
                            }break;
                    case 14: $stmt->bindColumn(1,$col1);
                            $stmt->bindColumn(2,$col2);
                            $stmt->bindColumn(3,$col3);
                            $stmt->bindColumn(4,$col4);
                            $stmt->bindColumn(5,$col5);
                            $stmt->bindColumn(6,$col6);
                            $stmt->bindColumn(7,$col7);
                            $stmt->bindColumn(8,$col8);
                            $stmt->bindColumn(9,$col9);
                            $stmt->bindColumn(10,$col10);
                            $stmt->bindColumn(11,$col11);
                            $stmt->bindColumn(12,$col12);
                            $stmt->bindColumn(13,$col13);
                            $stmt->bindColumn(13,$col14);
                            $i = 0;
                            while($stmt->fetch(PDO::FETCH_BOUND)){
                                $varLista[$i] = array($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10, $col11, $col12, $col13, $col14);
                                $i++;
                            }break;
                }   
            }
            /* La siguiente llamada a closeCursor() podría ser necesaria para algunos controladores */
            $stmt = null;
        }
        //$this->closeConnection();
        return $varLista;
    }
}
?>