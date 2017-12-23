<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php class ClsEnvios {

	private $i_idEnvios;
	private $s_lugares;
	private $s_estado;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdEnvios($i_idEnvios){
		$this->i_idEnvios = $i_idEnvios;
	}

	public function getIdEnvios(){
		return $this->i_idEnvios;
	}

	public function setLugares($s_lugares){
		$this->s_lugares = $s_lugares;
	}

	public function getLugares(){
		return $this->s_lugares;
	}

	public function setEstado($s_estado){
		$this->s_estado = $s_estado;
	}

	public function getEstado(){
		return $this->s_estado;
	}

	public function get(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_envios WHERE i_idEnvios=?");
		$params = array(1);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_envios(s_lugares) VALUES(?)");
		$params = array($this->s_lugares);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_envios SET s_lugares=? WHERE i_idEnvios=?");
		$params = array($this->s_lugares, 1);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		$this->conexSingleton->setQuery("UPDATE tb_envios SET s_estado='D' WHERE i_idEnvios=?");
		$params = array($this->i_idEnvios);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_envios WHERE s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}
}
?>