<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php class ClsTarjeta {

	private $i_idTarjeta;
	private $s_nombre;
	private $s_estado;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdTarjeta($i_idTarjeta){
		$this->i_idTarjeta = $i_idTarjeta;
	}

	public function getIdTarjeta(){
		return $this->i_idTarjeta;
	}

	public function setNombre($s_nombre){
		$this->s_nombre = $s_nombre;
	}

	public function getNombre(){
		return $this->s_nombre;
	}

	public function setEstado($s_estado){
		$this->s_estado = $s_estado;
	}

	public function getEstado(){
		return $this->s_estado;
	}

	public function get(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_tarjeta WHERE i_idTarjeta=?");
		$params = array(1);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_tarjeta(s_nombre) VALUES(?)");
		$params = array($this->s_nombre);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_tarjeta SET s_nombre=? WHERE i_idTarjeta=?");
		$params = array($this->s_nombre, 1);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		$this->conexSingleton->setQuery("UPDATE tb_tarjeta SET s_estado='D' WHERE i_idTarjeta=?");
		$params = array($this->i_idTarjeta);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_tarjeta WHERE s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}
}
?>