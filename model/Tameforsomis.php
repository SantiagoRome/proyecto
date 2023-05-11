<?php
class Tameforsomis
{

	//Acceso a BD
	private $conection;
	private array $clases = array();
	private array $razas = array();
	private array $foros = array();
	private array $usuarios = array();


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
		
		$sql="SELECT * FROM clase WHERE nombre='$nombre'";
		$result = $this->conection->query($sql);
		$row = $result->fetch_assoc();
		$clase= new Clase($row['nombre'], $row['descripcion'], $row['estadisticas'],$row['rol'], $row['competencias'], $row['equipamiento'],$row['imagen']);
		return $clase;
	}
	public function getRazas()
	{
		$sql = "SELECT * FROM raza";
		$result = $this->conection->query($sql);

		if ($result->num_rows > 0) {
			$i = 0;

			while ($row = $result->fetch_assoc()) {
				$this->razas[$i] = new Raza($row['nombre'], $row['descripcion'], $row['dado'],$row['mediaVida'], $row['idioma'], $row['habilidad'],$row['imagen']);
				$i++;
			}
		}

		return $this->razas;
	}
	public function verRazaPorNombre($nombre){
		
		$sql="SELECT * FROM raza WHERE nombre='$nombre'";
		$result = $this->conection->query($sql);
		$row = $result->fetch_assoc();
		$raza= new Raza($row['nombre'], $row['descripcion'], $row['dado'],$row['mediaVida'], $row['idioma'], $row['habilidad'],$row['imagen']);
		return $raza;
	}
	public function getUsers(){
		$sql = "SELECT * FROM usuarios";
		$result = $this->conection->query($sql);

		if ($result->num_rows > 0) {
			$i = 0;

			while ($row = $result->fetch_assoc()) {
				$this->usuarios[$i] = new Usuario($row['nombre'], $row['email'], $row['apellidos'],$row['fechaNacimiento'], $row['contrasena'], $row['usuario']);
				$i++;
			}
		}

		return $this->usuarios;
	}
	public function getUserEspecifico($user){
		$sql = "SELECT * FROM usuario WHERE usuario='$user'";
		$result = $this->conection->query($sql);
		$row = $result->fetch_assoc();
		$usuario = new Usuario($row['nombre'], $row['email'], $row['apellidos'],$row['fechaNacimiento'], $row['contrasena'], $row['usuario']);

		return $usuario;
	}
	public function crearUsuario(){
		$usuario = new Usuario($_POST['nombre'], $_POST['email'], $_POST['apellidos'],$_POST['fnac'], $_POST['contrasena'], $_POST['usuario']);
		$usuario->crearUser();
		return $usuario;
	}
	public function getForos(){
		$sql = "SELECT f.id as idForo, f.nombre as nombreForo, u.usuario as nombreCreador FROM foro f JOIN usuario u ON u.id=f.creador ";
		$result = $this->conection->query($sql);

		if ($result->num_rows > 0) {
			$i = 0;

			while ($row = $result->fetch_assoc()) {
				$this->foros[$i] = new Foro($row['nombreForo'], $row['nombreCreador'],$row['idForo']);
				$i++;
			}
		}
		return $this->foros;
	}
	public function getForoPorId($id){
		$sql = "SELECT f.id as idForo, f.nombre as nombreForo, u.usuario as nombreCreador FROM foro f JOIN usuario u ON u.id=f.creador WHERE f.id=$id";
		$result = $this->conection->query($sql);

		if ($result->num_rows > 0) {
			

			$row = $result->fetch_assoc();
				$foro = new Foro($row['nombreForo'], $row['nombreCreador'],$row['idForo']);	
		}
		return $foro;
	}
}