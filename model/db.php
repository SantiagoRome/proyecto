<?php

class Db
{

	private $host;
	private $db;
	private $user;
	private $pass;
	public $conection;

	public function __construct()
	{

		$this->host = constant('DB_HOST');
		$this->db = constant('DB');
		$this->user = constant('DB_USER');
		$this->pass = constant('DB_PASS');

		$this->conection = new mysqli($this->host, $this->user, $this->pass, $this->db);
		if ($this->conection->connect_error) {
			die("Fallo en la conexión " . $this->conection->connect_error);
		}
	} 
}