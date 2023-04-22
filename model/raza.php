<?php
class Raza
{
	private $nombre;
	private $descripcion;
	private $dado;
	private $mediaVida;
	private $idioma;
	private $habilidad;
    private $img;
	private array $origenes = array(); // array de objetos categoria del negocio



	private $conection;

	// Métodos
	public function __construct($nombre, $descripcion, $dado, $mediaVida, $idioma, $habilidad,$img)
	{
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;
        $this->dado = $dado;
        $this->mediaVida = $mediaVida;
		$this->idioma = $idioma;
		$this->habilidad = $habilidad;
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
	public function getDado()
	{
		return $this->dado;
	}
	public function getMediaVida()
	{
		return $this->mediaVida;
	}
    public function getIdioma()
	{
		return $this->idioma;
	}
    public function getHabilidad()
	{
		return $this->habilidad;
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
    public function getOrigenes()
	{
		$this->getConection();
		$sql = "SELECT h.*, n.nivel FROM habilidades h JOIN niveles n ON h.nombre=n.habilidad JOIN clase c ON c.nombre=n.clase WHERE c.nombre = '$this->nombre' ORDER BY nivel ASC";

		$result = $this->conection->query($sql);

		if ($result->num_rows > 0) {
			$i = 0;
			while ($row = $result->fetch_assoc()) {
				$this->origenes[$i] = new Habilidad($row['nombre'], $row['tipo'], $row['cantidad'], $row['duracion'], $row['descripcion'],$row['nivel']);
				$i++;
			}
			return $this->origenes;
		}
	}
}
?>