<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php require_once(__ROOT__."/class/ClsMarca.php"); ?>
<?php class ClsMarcaProd {

	private $i_idMarcaProd;
	private $s_titulo;
	private $s_nombreImg;
	private $s_estado;
	private $marca;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdMarcaProd($i_idMarcaProd){
		$this->i_idMarcaProd = $i_idMarcaProd;
	}

	public function getIdMarcaProd(){
		return $this->i_idMarcaProd;
	}

	public function setTitulo($s_titulo){
		$this->s_titulo = $s_titulo;
	}

	public function getTitulo(){
		return $this->s_titulo;
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

	public function setMarca(ClsMarca $marca){
		$this->marca = $marca;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function get(){
		$this->conexSingleton->setQuery("SELECT mp.i_idMarcaProd, mp.s_titulo, mp.s_nombreImg, mp.s_estado, m.s_nombre FROM tb_marca_prod mp INNER JOIN tb_marca m ON mp.i_idMarca = m.i_idMarca WHERE i_idMarcaProd=?");
		$params = array($this->i_idMarcaProd);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_marca_prod(s_titulo,s_nombreImg,i_idMarca) VALUES(?,?,?)");
		$params = array($this->s_titulo, $this->s_nombreImg, $this->marca->getIdMarca());
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_marca_prod SET s_titulo=?, s_nombreImg=?, i_idMarca=? WHERE i_idMarcaProd=?");
		$params = array($this->s_titulo, $this->s_nombreImg, $this->marca->getIdMarca(), $this->i_idMarcaProd);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		$this->conexSingleton->setQuery("UPDATE tb_marca_prod SET s_estado='D' WHERE i_idMarcaProd=?");
		$params = array($this->i_idMarcaProd);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT mp.i_idMarcaProd, mp.s_titulo, mp.s_nombreImg, mp.s_estado, m.s_nombre FROM tb_marca_prod mp INNER JOIN tb_marca m ON mp.i_idMarca = m.i_idMarca WHERE mp.s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}

	public function toListMarca(){
		$this->conexSingleton->setQuery("SELECT mp.i_idMarcaProd, mp.s_titulo, mp.s_nombreImg, mp.s_estado FROM tb_marca_prod mp INNER JOIN tb_marca m ON mp.i_idMarca = m.i_idMarca WHERE m.i_idMarca=? AND mp.s_estado='H'");
		$params = array($this->marca->getIdMarca());
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

}
?>