<?php
class Mensaje
{
	private $id;
	private $texto;
	private $creador;
	private $conection;
	private $fecha;
	private array $mensajes = array();

	// Métodos
	public function __construct($texto, $creador, $id = null, $fecha)
	{
		$this->id = $id;
		$this->texto = $texto;
		$this->creador = $creador;
		$this->fecha = $fecha;
		$this->getConection();
	}


	// Getters
	public function getTexto()
	{
		return $this->texto;
	}
	public function getId()
	{
		return $this->id;
	}
	public function getFecha()
	{
		return $this->fecha;
	}
	public function getCreador()
	{
		$this->getConection();
		//recojo el nombre de usuario de este mensaje parar poder enseñar el nombre
		$sql = "SELECT u.usuario FROM usuario u JOIN mensaje m ON m.usuario=u.id WHERE m.id='$this->id'";
		$result = $this->conection->query($sql);
		$row = $result->fetch_assoc();
		return $row['usuario'];
	}
	public function getConection()
	{
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}
	public function getMensajes()
	{
		$this->getConection();
		//SELECT de todos los mensajes que sean contestaciones de este mensaje
		$sql = "SELECT * FROM mensaje WHERE pregunta='$this->id'";
		$result = $this->conection->query($sql);
		if ($result->num_rows > 0) {
			$i = 0;
			while ($row = $result->fetch_assoc()) {
				//creación del array de mensajes
				$this->mensajes[$i] = new Mensaje($row['texto'], $row['usuario'], $row['id'], $row['fecha']);
				$i++;
			}
			return $this->mensajes;
		}
	}
	//al final estas funciones se ejecutan en ajax, por lo que no son necesarias en el modelo.
	/*public function crearMensaje($foro)
	{
		$this->getConection();
		$sql = "INSERT INTO mensaje(`texto`,'foro','usuario') VALUES('$this->texto','$foro','$this->creador')";
		$this->conection->query($sql);
		$sql = "SELECT id FROM mensaje WHERE MAX(id)";
		$result = $this->conection->query($sql);
		$row = $result->fetch_assoc();
		$this->id = $row['id'];
	}
	public function crearContestacion($foro, $mensaje)
	{
		$this->getConection();
		$sql = "INSERT INTO mensaje('texto','pregunta','foro','usuario')VALUES('$this->texto','$mensaje','$foro','$this->creador')";
		$this->conection->query($sql);
		$sql = "SELECT id FROM mensaje WHERE MAX(id)";
		$result = $this->conection->query($sql);
		$row = $result->fetch_assoc();
		$this->id = $row['id'];
	}*/
}
