<?php
include_once("../../model/db.php");
include_once("../../config/config.php");
$usuario=$_GET['nombreUs'];
$contrasena=$_GET['contrasena'];
$contrasena=md5($contrasena);
$conection=new Db();
$usuario=mysqli_real_escape_string($conection->conection,$usuario);
    $sql = "SELECT * FROM usuario WHERE Usuario='$usuario'";

	$result = $conection->conection->query($sql);

		if ($result->num_rows > 0) {
			
			$row = $result->fetch_assoc();
				
			if($row['contrasena']!=$contrasena){
                echo "error";
            }else{
                echo "correcto";
            }
		
	}else{
        echo "error";
    }
