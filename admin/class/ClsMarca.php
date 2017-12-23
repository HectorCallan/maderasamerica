<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php class ClsMarca {

	private $i_idMarca;
	private $s_nombre;
	private $s_nombreImg;
	private $s_estado;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdMarca($i_idMarca){
		$this->i_idMarca = $i_idMarca;
	}

	public function getIdMarca(){
		return $this->i_idMarca;
	}

	public function setNombre($s_nombre){
		$this->s_nombre = $s_nombre;
	}

	public function getNombre(){
		return $this->s_nombre;
	}

	public function setNombreImg($s_nombreImg){
		$this->s_nombreImg = $s_nombreImg;
	}

	public function getNombreImg(){
		return $this->s_nombreImg;
	}

	public function setEstado($s_estado){
		$this->s_estado = $s_estado;
	}

	public function getEstado(){
		return $this->s_estado;
	}


	public function get(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_marca WHERE i_idMarca=?");
		$params = array($this->i_idMarca);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_marca(s_nombre, s_nombreImg) VALUES(?,?)");
		$params = array($this->s_nombre, $this->s_nombreImg);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_marca SET s_nombre=?, s_nombreImg=? WHERE i_idMarca=?");
		$params = array($this->s_nombre, $this->s_nombreImg, $this->i_idMarca);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		$this->conexSingleton->setQuery("UPDATE tb_marca SET s_estado='D' WHERE i_idMarca=?");
		$params = array($this->i_idMarca);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_marca WHERE s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}
}
?>