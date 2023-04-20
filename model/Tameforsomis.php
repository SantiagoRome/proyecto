<?php
class Tameforsomis
{

	//Acceso a BD
	private $conection;
	private array $clases = array();
	private array $razas = array();
	private array $habilidades = array();


	function __construct()
	{
		$this->getConection();
	}

	public function getConection()
	{
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}

	public function getClases()
	{
		$sql = "SELECT * FROM clase";
		$result = $this->conection->query($sql);

		if ($result->num_rows > 0) {
			$i = 0;

			while ($row = $result->fetch_assoc()) {
				$this->clases[$i] = new Clase($row['nombre'], $row['descripcion'], $row['rol'], $row['estadisticas'], $row['competencias'], $row['equipamiento']);
				$i++;
			}
		}

		return $this->clases;
	}
}