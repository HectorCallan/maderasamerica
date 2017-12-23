<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php class ClsHorario {

	private $i_idHorario;
	private $s_horario;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdHorario($i_idHorario){
		$this->i_idHorario = $i_idHorario;
	}

	public function getIdHorario(){
		return $this->i_idHorario;
	}

	public function setHorario($s_horario){
		$this->s_horario = $s_horario;
	}

	public function getHorario(){
		return $this->s_horario;
	}

	public function get(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_horario WHERE i_idHorario=?");
		$params = array(1);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_horario(s_horario) VALUES(?)");
		$params = array($this->s_horario);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_horario SET s_horario=? WHERE i_idHorario=?");
		$params = array($this->s_horario, 1);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		$this->conexSingleton->setQuery("UPDATE tb_horario SET s_estado='D' WHERE i_idHorario=?");
		$params = array($this->i_idHorario);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_horario WHERE s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}
}
?>