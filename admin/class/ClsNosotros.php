<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php class ClsNosotros {

	private $i_idNosotros;
	private $s_somos;
	private $s_mision;
	private $s_vision;
	private $s_caract1;
	private $s_caract2;
	private $s_caract3;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdNosotros($i_idNosotros){
		$this->i_idNosotros = $i_idNosotros;
	}

	public function getIdNosotros(){
		return $this->i_idNosotros;
	}

	public function setSomos($s_somos){
		$this->s_somos = $s_somos;
	}

	public function getSomos(){
		return $this->s_somos;
	}

	public function setMision($s_mision){
		$this->s_mision = $s_mision;
	}

	public function getMision(){
		return $this->s_mision;
	}

	public function setVision($s_vision){
		$this->s_vision = $s_vision;
	}

	public function getVision(){
		return $this->s_vision;
	}

	public function setCaract1($s_caract1){
		$this->s_caract1 = $s_caract1;
	}

	public function getCaract1(){
		return $this->s_caract1;
	}

	public function setCaract2($s_caract2){
		$this->s_caract2 = $s_caract2;
	}

	public function getCaract2(){
		return $this->s_caract2;
	}

	public function setCaract3($s_caract3){
		$this->s_caract3 = $s_caract3;
	}

	public function getCaract3(){
		return $this->s_caract3;
	}

	public function get(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_nosotros WHERE i_idNosotros=?");
		$params = array(1);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_nosotros(s_somos, s_mision, s_vision, s_caract1, s_caract2, s_caract3) VALUES(?,?,?,?,?,?)");
		$params = array($this->s_somos, $this->s_mision, $this->s_vision, $this->s_caract1, $this->s_caract2, $this->s_caract3);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_nosotros SET s_somos=?, s_mision=?, s_vision=?, s_caract1=?, s_caract2=?, s_caract3=? WHERE i_idNosotros=?");
		$params = array($this->s_somos, $this->s_mision, $this->s_vision, $this->s_caract1, $this->s_caract2, $this->s_caract3, 1);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		/*$this->conexSingleton->setQuery("UPDATE tb_nosotros SET s_estado='D' WHERE i_idNosotros=1");
		$params = array($this->i_idMarca);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;*/
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_nosotros WHERE s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}
}
?>