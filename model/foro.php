<?php
class Foro
{
	private $id;
	private $nombre;
	private $creador;
	private $conection;
	private array $mensajes = array();

	// Métodos
	public function __construct($nombre, $creador, $id = null)
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->creador = $creador;
		$this->getConection();
	}


	// Getters
	public function getNombre()
	{
		return $this->nombre;
	}
	public function getId()
	{
		return $this->id;
	}
	public function getCreador()
	{
		return $this->creador;
	}
	public function getConection()
	{
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}
	public function getMensajes()
	{
		$this->getConection();
		// SELECT de todos los datos de la tabla mensaje pertenecientes a un foro en concreto y que no sean contestaciones de otro mensaje
		$sql = "SELECT * FROM mensaje WHERE foro='$this->id' AND pregunta is null";
		$result = $this->conection->query($sql);
		if ($result->num_rows > 0) {
			$i = 0;
			while ($row = $result->fetch_assoc()) {
				//creación de todos los mensajes recogidos en el select anterior
				$this->mensajes[$i] = new Mensaje($row['texto'], $row['usuario'], $row['id'], $row['fecha']);
				$i++;
			}
			return $this->mensajes;
		}
	}
	//al final esta función se ejecutan en ajax, por lo que no son necesarias en el modelo.
	/*public function crearForo()
	{
		$this->getConection();
		//Insercción del foro
		$sql = "INSERT INTO foro(`nombre`,`creador`) VALUES('$this->nombre','$this->creador')";
		$this->conection->query($sql);
		//recogida del id autonumerico para guardar el id del foro creado.
		$sql = "SELECT id FROM foro WHERE MAX(id)";
		$result = $this->conection->query($sql);
		$row = $result->fetch_assoc();
		$this->id = $row['id'];
	}*/
}
