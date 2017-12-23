<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php class ClsUsuario {

	private $i_idUsuario;
	private $s_usuario;
	private $s_passwd;
	private $s_estado;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdUsuario($i_idUsuario){
		$this->i_idUsuario = $i_idUsuario;
	}

	public function getIdUsuario(){
		return $this->i_idUsuario;
	}

	public function setUsuario($s_usuario){
		$this->s_usuario = $s_usuario;
	}

	public function getUsuario(){
		return $this->s_usuario;
	}

	public function setPasswd($s_passwd){
		$this->s_passwd = $s_passwd;
	}

	public function getPasswd(){
		return $this->s_passwd;
	}

	public function setEstado($s_estado){
		$this->s_estado = $s_estado;
	}

	public function getEstado(){
		return $this->s_estado;
	}

	public function get(){
		
	}

	public function set(){
		
	}

	public function edit(){
		
	}

	public function delete(){
		
	}

	public function logAcc(){
		
		$this->conexSingleton->setQuery("SELECT s_usuario FROM tb_usuario WHERE s_usuario=? AND s_passwd=? AND s_estado='H'");
		$params = array($this->s_usuario, $this->s_passwd);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}
}
?>