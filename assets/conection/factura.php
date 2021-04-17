<?php
	include "conection.php";
	session_start();
	$procedimiento = $_GET['procedimiento'];
	$costo = $_GET['costo'];
	$fecha = $_GET['fecha'];
	$conex=Conectarse();
    if($conex==false){
    	echo("error");
    }else{
		$sql = "INSERT INTO factura (id_procedimiento, costo, fecha) VALUES ('$procedimiento','$costo','$fecha')";
		if (mysqli_query($conex, $sql)) {
  			header("location: ../../panel.php");
		} else {
  			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
    }
?>