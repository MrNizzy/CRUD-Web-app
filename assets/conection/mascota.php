<?php
	include "conection.php";
	session_start();
	$nombre = $_GET['nombre'];
	$fecha = $_GET['fecha'];
	$tipo = $_GET['tipo'];
	$raza = $_GET['raza'];
	$sangre = $_GET['sangre'];
	$dueno = $_GET['dueno'];
	$conex=Conectarse();
    if($conex==false){
    	echo("error");
    }else{
		$sql = "INSERT INTO mascotas (nombre, fecha_nacimiento, tipo, raza, tipo_sangre, id_owner) VALUES ('$nombre','$fecha','$tipo','$raza', '$sangre', '$dueno')";
		if (mysqli_query($conex, $sql)) {
  			header("location: ../../panel.php");
		} else {
  			echo "Error: " . $sql . "<br>" . mysqli_error($conex);
		}
    }
?>