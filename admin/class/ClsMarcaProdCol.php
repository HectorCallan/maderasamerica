<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php require_once(__ROOT__."/class/ClsMarcaProd.php"); ?>
<?php class ClsMarcaProdCol {

	private $i_idMarPrCol;
	private $s_color;
	private $s_estado;
	private $marcaProd;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdMarPrCol($i_idMarPrCol){
		$this->i_idMarPrCol = $i_idMarPrCol;
	}

	public function getIdMarPrCol(){
		return $this->i_idMarPrCol;
	}

	public function setColor($s_color){
		$this->s_color = $s_color;
	}

	public function getColor(){
		return $this->s_color;
	}

	public function setEstado($s_estado){
		$this->s_estado = $s_estado;
	}

	public function getEstado(){
		return $this->s_estado;
	}

	public function setMarcaProd(ClsMarcaProd $marcaProd){
		$this->marcaProd = $marcaProd;
	}

	public function getMarcaProd(){
		return $this->marcaProd;
	}

	public function get(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_marca_prod_color WHERE i_idMarPrCol=?");
		$params = array($this->i_idMarPrCol);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_marca_prod_color(s_color, i_idMarcaProd) VALUES(?,?)");
		$params = array($this->s_color, $this->marcaProd->getIdMarcaProd());
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_marca_prod_color SET s_color=? WHERE i_idMarPrCol=?");
		$params = array($this->s_color, $this->i_idMarPrCol);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		$this->conexSingleton->setQuery("UPDATE tb_marca_prod_color SET s_estado='D' WHERE i_idMarPrCol=?");
		$params = array($this->i_idMarPrCol);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_marca_prod_color WHERE i_idMarcaProd=? AND  s_estado='H'");
		$params = array($this->marcaProd->getIdMarcaProd());
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

}
?>