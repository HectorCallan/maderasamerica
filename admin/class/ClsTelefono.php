<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php class ClsTelefono {

	private $i_idTelefono;
	private $s_telefono;
	private $s_estado;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdTelefono($i_idTelefono){
		$this->i_idTelefono = $i_idTelefono;
	}

	public function getIdTelefono(){
		return $this->i_idTelefono;
	}

	public function setTelefono($s_telefono){
		$this->s_telefono = $s_telefono;
	}

	public function getTelefono(){
		return $this->s_telefono;
	}

	public function setEstado($s_estado){
		$this->s_estado = $s_estado;
	}

	public function getEstado(){
		return $this->s_estado;
	}

	public function get(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_telefono WHERE i_idTelefono=?");
		$params = array(1);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_telefono(s_telefono) VALUES(?)");
		$params = array($this->s_telefono);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_telefono SET s_telefono=? WHERE i_idTelefono=?");
		$params = array($this->s_telefono, 1);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		$this->conexSingleton->setQuery("UPDATE tb_telefono SET s_estado='D' WHERE i_idTelefono=?");
		$params = array($this->i_idTelefono);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_telefono WHERE s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}

	public function toListAll(){
		$this->conexSingleton->setQuery("SELECT t.s_telefono, e.s_lugares, j.s_nombre, c.s_correo, h.s_horario, n.s_somos, n.s_mision, n.s_vision, n.s_caract1, n.s_caract2, n.s_caract3 FROM tb_telefono t, tb_envios e, tb_tarjeta j, tb_correo c, tb_horario h, tb_nosotros n ORDER BY c.i_idCorreo");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}
}
?>