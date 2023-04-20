<?php




class cliente
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
	public function verRaza($nombreRaza = null)
	{
		$this->view = 'razas';


		if (isset($_GET["id"])) $nombreRaza = $_GET["nombreRaza"];
		$negocio = $this->tameforsomis->verRazaPorNombre($nombreRaza);

		return $negocio;
	}
}