<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php class ClsCorreo {

	private $i_idCorreo;
	private $s_correo;
	private $s_estado;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdCorreo($i_idCorreo){
		$this->i_idCorreo = $i_idCorreo;
	}

	public function getIdCorreo(){
		return $this->i_idCorreo;
	}

	public function setCorreo($s_correo){
		$this->s_correo = $s_correo;
	}

	public function getCorreo(){
		return $this->s_correo;
	}

	public function setEstado($s_estado){
		$this->s_estado = $s_estado;
	}

	public function getEstado(){
		return $this->s_estado;
	}

	public function get(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_correo WHERE i_idCorreo=?");
		$params = array($this->i_idCorreo);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_correo(s_correo) VALUES(?)");
		$params = array($this->s_correo);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_correo SET s_correo=? WHERE i_idCorreo=?");
		$params = array($this->s_correo, $this->i_idCorreo);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		$this->conexSingleton->setQuery("UPDATE tb_correo SET s_estado='D' WHERE i_idCorreo=?");
		$params = array($this->i_idCorreo);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_correo WHERE s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}
}
?>