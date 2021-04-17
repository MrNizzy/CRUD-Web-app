<?php
	include "conection.php";
	session_start();
	$mascota = $_GET['mascota'];
	$veterinario = $_GET['veterinario'];
	$medicamentos = $_GET['medicamentos'];
	$procedimientos = $_GET['procedimientos'];
	$conex=Conectarse();
    if($conex==false){
    	echo("error");
    }else{
		$sql = "INSERT INTO procedimiento (id_mascota, medicamentos, procedimiento, id_veterinario) VALUES ('$mascota','$medicamentos','$procedimientos','$veterinario')";
		if (mysqli_query($conex, $sql)) {
  			header("location: ../../panel.php");
		} else {
  			echo "Error: " . $sql . "<br>" . mysqli_error($conex);
		}
    }
?>