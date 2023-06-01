<?php
class Usuario
{
	private $nombre;
	private $email;
	private $apellidos;
	private $fechaNac;
	private $contrasena;
	private $user;

	private $conection;

	// Métodos
	public function __construct($nombre, $email, $apellidos, $fechaNac, $contrasena, $user)
	{
		$this->nombre = $nombre;
		$this->email = $email;
		$this->apellidos = $apellidos;
		$this->fechaNac = $fechaNac;
		$this->contrasena = md5($contrasena);
		$this->user = $user;
		$this->getConection();
	}


	// Getters
	public function getNombre()
	{
		return $this->nombre;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function getApellidos()
	{
		return $this->apellidos;
	}
	public function getFechaNaca()
	{
		return $this->fechaNac;
	}
	public function getContrasena()
	{
		return $this->contrasena;
	}
	public function getUser()
	{
		return $this->user;
	}
	public function getConection()
	{
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}
	public function crearUser()
	{
		$this->getConection();
		//consulta que inserta los datos de este objeto en la base de datos
		$sql = "INSERT INTO usuario(`nombre`, `apellidos`, `email`, `fechaNacimiento`, `contrasena`, `Usuario`) VALUES('$this->nombre','$this->apellidos','$this->email','$this->fechaNac','$this->contrasena','$this->user')";

		$this->conection->query($sql);
	}
}
