<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php class ClsCategoria {

	private $i_idCategoria;
	private $s_nombre;
	private $s_nombreImg;
	private $s_extImg;
	private $s_estado;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdCategoria($i_idCategoria){
		$this->i_idCategoria = $i_idCategoria;
	}

	public function getIdCategoria(){
		return $this->i_idCategoria;
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

	public function setExtImg($s_extImg){
		$this->s_extImg = $s_extImg;
	}

	public function getExtImg(){
		return $this->s_extImg;
	}

	public function setEstado($s_estado){
		$this->s_estado = $s_estado;
	}

	public function getEstado(){
		return $this->s_estado;
	}

	public function get(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_categoria WHERE i_idCategoria=?");
		$params = array($this->i_idCategoria);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_categoria(s_nombre,s_nombreImg) VALUES(?,?)");
		$params = array($this->s_nombre, $this->s_nombreImg);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_categoria SET s_nombre=?, s_nombreImg=? WHERE i_idCategoria=?");
		$params = array($this->s_nombre, $this->s_nombreImg, $this->i_idCategoria);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		$this->conexSingleton->setQuery("UPDATE tb_categoria SET s_estado='D' WHERE i_idCategoria=?");
		$params = array($this->i_idCategoria);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_categoria WHERE s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}
}
?>