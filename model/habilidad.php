<?php
class Habilidad
{
	private $nombre;
	private $tipo;
	private $cantidad;
	private $duracion;
	private $descripcion;

	private $conection;

	// Métodos
	public function __construct($nombre, $tipo, $cantidad, $duracion, $descripcion, )
	{
		$this->nombre = $nombre;
		$this->tipo = $tipo;
        $this->cantidad = $cantidad;
        $this->duracion = $duracion;
		$this->descripcion = $descripcion;
	
        $this->getConection();
	}


	// Getters
	public function getNombre()
	{
		return $this->nombre;
	}
	public function getDescripcion()
	{
		return $this->descripcion;
	}
	public function getTipo()
	{
		return $this->tipo;
	}
	public function getCantidad()
	{
		return $this->cantidad;
	}
    public function getDuracion()
	{
		return $this->duracion;
	}
    public function getConection()
	{
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}
}
?>