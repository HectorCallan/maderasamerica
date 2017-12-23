<?php define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php require_once(__ROOT__."/conex/ClsConexion.php"); ?>
<?php class ClsSlider {

	private $i_idSlider;
	private $s_titulo;
	private $s_nombreImg;
	private $s_estado;

	private $conexSingleton;

	function __construct(){
		$this->conexSingleton = ClsConexion::singleton();
	}

	public function setIdSlider($i_idSlider){
		$this->i_idSlider = $i_idSlider;
	}

	public function getIdSlider(){
		return $this->i_idSlider;
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

	public function get(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_slider WHERE i_idSlider=?");
		$params = array($this->i_idCorreo);
		$varLista = $this->conexSingleton->execute_sentence_select($params);
		return $varLista;
	}

	public function set(){
		$this->conexSingleton->setQuery("INSERT INTO tb_slider(s_titulo, s_nombreImg) VALUES(?,?)");
		$params = array($this->s_titulo, $this->s_nombreImg);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function edit(){
		$this->conexSingleton->setQuery("UPDATE tb_slider SET s_titulo=?, s_nombreImg=? WHERE i_idSlider=?");
		$params = array($this->s_titulo, $this->s_nombreImg, $this->i_idSlider);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function delete(){
		$this->conexSingleton->setQuery("UPDATE tb_slider SET s_estado='D' WHERE i_idSlider=?");
		$params = array($this->i_idSlider);
		$varRetorno = $this->conexSingleton->execute_sentence($params);
		return $varRetorno;
	}

	public function toList(){
		$this->conexSingleton->setQuery("SELECT * FROM tb_slider WHERE s_estado='H'");
		$varLista = $this->conexSingleton->execute_sentence_select(null);
		return $varLista;
	}
}
?>