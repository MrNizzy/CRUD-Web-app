<?php
	include "conection.php";
	session_start();
	$cc = $_GET['cedula'];
	$name = $_GET['nombre'];
	$apellido = $_GET['apellido'];
	$email = $_GET['email'];
	$pass = $_GET['password'];
	$conex=Conectarse();
    if($conex==false){
    	echo("error");
    }else{
    	$sentencia = "SELECT * from user where cedula = '$cc' AND correo='$email'";
    	$consulta = mysqli_query($conex, $sentencia);
		$array = mysqli_fetch_array($consulta);
		if(mysqli_num_rows($consulta) > 0){
			echo("usuario existente");
    		//header("location: ../../panel/index.php");
		}else{
			$sql = "INSERT INTO user (nombre, apellido, correo, password_usuario, cedula) VALUES ('$name','$apellido','$email','$pass','$cc')";
			if (mysqli_query($conex, $sql)) {
  				header("location: ../../index.php");
			} else {
  				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
    	}
    }
?>