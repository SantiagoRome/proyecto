<?php




class cliente
{

	public $view;
	public $lateralDerecho;
	private $tameforsomis;


	public function __construct()
	{
		$this->view = 'web';
		$this->tameforsomis = new Tameforsomis();
	}

	public function web()
	{
		$this->view = 'web';
	}

	public function listarClases()
	{
		$this->view = 'clases';
		return $this->tameforsomis->getClases();
	}

	public function verClase()
	{
		$this->view = 'clase';
		$nombreClase = $_GET["nombreClase"];
		$negocio = $this->tameforsomis->verClasePorNombre($nombreClase);


		return $negocio;
	}
    public function listarRazas()
	{
		$this->view = 'razas';
		return $this->tameforsomis->getRazas();
	}
	public function verRaza()
	{
		$this->view = 'raza';
		$nombreRaza = $_GET["nombreRaza"];
		$negocio = $this->tameforsomis->verRazaPorNombre($nombreRaza);

		return $negocio;
	}
	public function verUsuario()
	{
		$this->view = 'usuario';
		
	}
	public function verPerfil()
	{
		$this->view = 'perfil';
		if(isset($_POST['email'])){
			$usuario=$this->tameforsomis->crearUsuario();
			setcookie("user",$_POST['usuario'],time()+3600*24*365,'/');
			return $usuario;
		}else if(isset($_COOKIE["user"])){
			$usuario=$this->tameforsomis->getUserEspecifico($_COOKIE["user"]);
			return $usuario;
		}else{
			setcookie("user",$_POST['usuario'],time()+3600*24*365,'/');
			$usuario=$this->tameforsomis->getUserEspecifico($_POST['usuario']);
			return $usuario;
		}
	}
	public function listarForos()
	{
		$this->view = 'foros';
		return $this->tameforsomis->getForos();	
	}
	public function verForo()
	{
		$this->view='foro';
		return $this->tameforsomis->getForoPorId($_GET['id']);
	}
	public function deslogear(){
		$this->view='web';
		setcookie("user","",time()-60,'/');
	}
}