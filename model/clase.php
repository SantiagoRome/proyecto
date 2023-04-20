<?php
class Clase
{
	private $nombre;
	private $descripcion;
	private $rol;
	private $estadisticas;
	private $competencias;
	private $equipamiento;
    private $img;
	private array $habilidades = array(); // array de objetos categoria del negocio
	private array $empleados = array(); //array de objetos gestor asociados al negocio cuyo rol=2


	private $conection;

	// Métodos
	public function __construct($nombre, $descripcion, $estadisticas, $rol, $competencias, $equipamiento,$img)
	{
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;
        $this->estadisticas = $estadisticas;
        $this->rol = $rol;
		$this->competencias = $competencias;
		$this->equipamiento = $equipamiento;
        $this->img=$img;
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
	public function getEstadisticas()
	{
		return $this->estadisticas;
	}
	public function getRol()
	{
		return $this->rol;
	}
    public function getCompetencias()
	{
		return $this->competencias;
	}
    public function getEquipamiento()
	{
		return $this->equipamiento;
	}
    public function getImg()
    {
        return $this->img;
    }
    public function getConection()
	{
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}
    public function getHabilidades()
	{
		$this->getConection();
		$sql = "SELECT h.* FROM habilidades h JOIN niveles n ON h.nombre=n.habilidad JOIN clase c ON c.nombre=n.clase WHERE c.nombre = '$this->nombre' ORDER BY nivel ASC";

		$result = $this->conection->query($sql);

		if ($result->num_rows > 0) {
			$i = 0;
			while ($row = $result->fetch_assoc()) {
				$this->habilidades[$i] = new Habilidad($row['nombre'], $row['tipo'], $row['img'], $row['duracion'], $row['descripcion']);
				$i++;
			}
			return $this->habilidades;
		}
	}
}
?>