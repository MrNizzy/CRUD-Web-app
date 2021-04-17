<?php
	include "conection.php";
	session_start();
	$nombre = $_GET['nombre'];
	$apellido = $_GET['apellido'];
	$email = $_GET['email'];
	$telefono = $_GET['telefono'];
	$cc = $_GET['cc'];
	$direccion = $_GET['direccion'];
	$conex=Conectarse();
    if($conex==false){
    	echo("error");
    }else{
		$sql = "INSERT INTO owner (nombre, apellido, correo, telefono, cedula, direccion) VALUES ('$nombre','$apellido','$email','$telefono', '$cc', '$direccion')";
		if (mysqli_query($conex, $sql)) {
  			header("location: ../../panel.php");
		} else {
  			echo "Error: " . $sql . "<br>" . mysqli_error($conex);
		}
    }
?>