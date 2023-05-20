<?php
include_once("../../model/db.php");
include_once("../../config/config.php");
$user=$_GET['nombreUs'];
$conection=new Db();
    $sql = "SELECT * FROM usuario WHERE Usuario='$user'";

	$result = $conection->conection->query($sql);

	if ($result->num_rows > 0) {
			
			echo "existe";
	}else{
        echo "no";
    }
