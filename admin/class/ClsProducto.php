<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php require_once(__ROOT__."/class/ClsCategoria.php") ?>
<?php class ClsProducto {

	private $i_idProducto;
	private $s_nombre;
	private $s_caract;
	private $s_usos;
	private $s_densidad;
	private $s_disponib;
	private $s_nombreImg;
	private $s_estado;
	private $categoria;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdProducto($i_idProducto){
		$this->i_idProducto = $i_idProducto;
	}

	public function getIdProducto(){
		return $this->i_idProducto;
	}

	public function setNombre($s_nombre){
		$this->s_nombre = $s_nombre;
	}

	public function getNombre(){
		return $this->s_nombre;
	}

	public function setCaract($s_caract){
		$this->s_caract = $s_caract;
	}

	public function getCaract(){
		return $this->s_caract;
	}

	public function setUsos($s_usos){
		$this->s_usos = $s_usos;
	}

	public function getUsos(){
		return $this->s_usos;
	}

	public function setDensidad($s_densidad){
		$this->s_densidad = $s_densidad;
	}

	public function getDensidad(){
		return $this->s_densidad;
	}

	public function setDisponib($s_disponib){
		$this->s_disponib = $s_disponib;
	}

	public function getDisponib(){
		return $this->s_disponib;
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

	public function setCategoria(ClsCategoria $categoria){
		$this->categoria = $categoria;
	}

	public function getCategoria(){
		return $this->categoria;
	}

	public function get(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_producto WHERE s_nombre=?");
		$params = array($this->s_nombre);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_producto(s_nombre, s_caract, s_usos, s_densidad, s_disponib, s_nombreImg, i_idCategoria) VALUES(?,?,?,?,?,?,?)");
		$params = array($this->s_nombre, $this->s_caract, $this->s_usos, $this->s_densidad, $this->s_disponib, $this->s_nombreImg, $this->categoria->getIdCategoria());
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_producto SET s_nombre=?, s_caract=?, s_usos=?, s_densidad=?, s_disponib=?, s_nombreImg=?, i_idCategoria=? WHERE i_idProducto=?");
		$params = array($this->s_nombre, $this->s_caract, $this->s_usos, $this->s_densidad, $this->s_disponib, $this->s_nombreImg, $this->s_extImg, $this->categoria->getIdCategoria(), $this->i_idProducto);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		$this->conexSingleton->setQuery("UPDATE tb_producto SET s_estado='D' WHERE i_idProducto=?");
		$params = array($this->i_idProducto);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT p.i_idProducto, p.s_nombre, p.s_caract, p.s_usos, p.s_densidad, p.s_disponib, p.s_nombreImg, p.s_estado, c.s_nombre FROM tb_producto p INNER JOIN tb_categoria c ON p.i_idCategoria = c.i_idCategoria AND p.s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}

	public function toListProd(){
		$this->conexSingleton->setQuery("SELECT p.i_idProducto, p.s_nombre, p.s_caract, p.s_usos, p.s_densidad, p.s_disponib, p.s_nombreImg, p.s_estado, c.s_nombre FROM tb_producto p INNER JOIN tb_categoria c ON p.i_idCategoria = c.i_idCategoria AND p.s_nombre LIKE CONCAT('%',?,'%')  AND p.s_estado='H'");
		$params = array($this->s_nombre);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function toListCat(){
		$this->conexSingleton->setQuery("SELECT p.i_idProducto, p.s_nombre, p.s_caract, p.s_usos, p.s_densidad, p.s_disponib, p.s_nombreImg, p.s_estado, c.s_nombre FROM tb_producto p INNER JOIN tb_categoria c ON p.i_idCategoria = c.i_idCategoria AND c.i_idCategoria=? AND p.s_estado='H'");
		$params = array($this->categoria->getIdCategoria());
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}
}
?>