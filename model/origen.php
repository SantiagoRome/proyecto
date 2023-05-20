<?php
class Origen
{
	private $nombre;
	private $descripcion;
	private $dado;
	private $mediaVida;
	private $habilidad;

	private $conection;

	// Métodos
	public function __construct($nombre, $descripcion, $dado, $mediaVida, $habilidad)
	{
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;
		$this->dado = $dado;
		$this->mediaVida = $mediaVida;
		$this->habilidad = $habilidad;
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
	public function getDado()
	{
		return $this->dado;
	}
	public function getMediaVida()
	{
		return $this->mediaVida;
	}
	public function getHabilidad()
	{
		return $this->habilidad;
	}
	public function getConection()
	{
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}
}
