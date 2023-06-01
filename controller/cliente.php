<?php
/*
Funciones del controlador, estas fuciones siguen la siguiente estructura
$this->view=     "modificación de la pagina que se incluira mas adelante en el index"
return $this->tameforsomis->funcion  "creación de objetos de php y envio a la variable $datatoview en el index.php"
*/
class Cliente
{

	public $view;
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
		//compruebo como entro al perfil y utilizo las funciones necesarias.
		//entrada al perfil por registro
		if (isset($_POST['email'])) {
			$usuario = $this->tameforsomis->crearUsuario();
			$_SESSION["user"] = $_POST['usuario'];
			return $usuario;
			//entrada al perfil por el boton "nombre de usuario", osea que ya existe una session
		} else if (isset($_SESSION["user"])) {
			$usuario = $this->tameforsomis->getUserEspecifico($_SESSION["user"]);
			return $usuario;
			//entrada al perfil por el inicio de sesion
		} else {
			$_SESSION["user"] = $_POST['usuario'];
			$usuario = $this->tameforsomis->getUserEspecifico($_POST['usuario']);
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
		$this->view = 'foro';
		return $this->tameforsomis->getForoPorId($_GET['id']);
	}
	public function deslogear()
	{
		$this->view = 'web';
		//destruyo la session para borrarla
		session_destroy();
		//borro los datos de $_SESSION por que aunque la siguiente vez que se haga session_start, la variable estara vacia, en esta iteración sigue llena.
		$_SESSION = [];
	}
	public function modificarUser()
	{
		$this->view = "modificarUser";
	}
}
