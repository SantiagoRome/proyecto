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
				$this->clases[$i] = new Clase($row['nombre'], $row['descripcion'], $row['estadisticas'],$row['rol'], $row['competencias'], $row['equipamiento'],$row['imagen']);
				$i++;
			}
		}

		return $this->clases;
	}
	public function verClasePorNombre($nombre){
		//$sql ="SELECT * FROM clase c JOIN niveles n ON c.nombre=n.clase JOIN habilidades h ON n.habilidad=h.nombre WHERE c.nombre='$nombre'";
		$sql="SELECT * FROM clase WHERE nombre='$nombre'";
		$result = $this->conection->query($sql);
		$row = $result->fetch_assoc();
		$clase= new Clase($row['nombre'], $row['descripcion'], $row['estadisticas'],$row['rol'], $row['competencias'], $row['equipamiento'],$row['imagen']);
		return $clase;
	}
}