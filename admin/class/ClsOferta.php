<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php require_once(__ROOT__."/class/ClsCategoria.php"); ?>
<?php class ClsOferta {

	private $i_idOferta;
	private $i_dcto;
	private $s_tipoOferta;
	private $s_nombreImg;
	private $s_estado;
	private $categoria;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdOferta($i_idOferta){
		$this->i_idOferta = $i_idOferta;
	}

	public function getIdOferta(){
		return $this->i_idOferta;
	}

	public function setDcto($i_dcto){
		$this->i_dcto = $i_dcto;
	}

	public function getDcto(){
		return $this->i_dcto;
	}

	public function setTipoOferta($s_tipoOferta){
		$this->s_tipoOferta = $s_tipoOferta;
	}

	public function getTipoOferta(){
		return $this->s_tipoOferta;
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
		$this->conexSingleton->setQuery("SELECT * FROM tb_oferta WHERE i_idOferta=?");
		$params = array($this->i_idOferta);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_oferta(i_dcto, s_tipoOferta, s_nombreImg, i_idCategoria) VALUES(?,?,?,?)");
		$params = array($this->i_dcto, $this->s_tipoOferta, $this->s_nombreImg, $this->categoria->getIdCategoria());
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_oferta SET i_dcto=?, s_tipoOferta=?, s_nombreImg=?, i_idCategoria=? WHERE i_idOferta=?");
		$params = array($this->i_dcto, $this->s_tipoOferta, $this->s_nombreImg, $this->categoria->getIdCategoria(), $this->i_idOferta);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function editSimple(){
		$this->conexSingleton->setQuery("UPDATE tb_oferta SET i_dcto=?, s_tipoOferta=?, i_idCategoria=? WHERE i_idOferta=?");
		$params = array($this->i_dcto, $this->s_tipoOferta, $this->categoria->getIdCategoria(), $this->i_idOferta);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		$this->conexSingleton->setQuery("UPDATE tb_oferta SET s_estado='D' WHERE i_idOferta=?");
		$params = array($this->i_idOferta);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT o.i_idOferta, o.i_dcto, o.s_tipoOferta, o.s_nombreImg, o.s_estado, c.s_nombre FROM tb_oferta o INNER JOIN tb_categoria c ON o.i_idCategoria = c.i_idCategoria AND o.s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}

	public function toListCat(){
		$this->conexSingleton->setQuery("SELECT o.i_idOferta, o.i_dcto, o.s_tipoOferta, o.s_nombreImg, o.s_estado, c.s_nombre FROM tb_oferta o INNER JOIN tb_categoria c ON o.i_idCategoria = c.i_idCategoria AND c.s_nombre=? AND o.s_estado='H'");
		$params = array($this->categoria->getNombre());
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function toListTip1(){
		$this->conexSingleton->setQuery("SELECT o.i_idOferta, o.i_dcto, o.s_nombreImg FROM tb_oferta o WHERE o.i_idCategoria = 1 AND o.s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}

	public function toListTip2(){
		$this->conexSingleton->setQuery("SELECT o.i_idOferta, o.i_dcto, o.s_nombreImg FROM tb_oferta o INNER JOIN tb_categoria c ON o.i_idCategoria=c.i_idCategoria AND c.i_idCategoria=? AND o.s_tipoOferta='1' AND o.s_estado='H'");
		$params = array($this->categoria->getIdCategoria());
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	
}
?>