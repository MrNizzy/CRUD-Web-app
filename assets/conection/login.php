<?php
	include "conection.php";
	session_start();
	$email = $_GET['email'];
	$pass = $_GET['password'];
	$_SESSION['pet']=false;
	$_SESSION['dueno']=false;
	$conex=Conectarse();
    if($conex==false){
    	echo("error");
    }else{
    	$sentencia = "SELECT * from user where correo = '$email'";
    	$consulta = mysqli_query($conex, $sentencia);
		$array = mysqli_fetch_array($consulta);
		if(mysqli_num_rows($consulta) > 0){
			if($array['password_usuario']==$pass){
				echo("conectado");
				$_SESSION['cc'] = $array['id'];
				echo ($_SESSION['cc']);
				header("location: ../../panel.php");
			}else{
				echo("Contraseña incorrecta");
			}
    		//header("location: ../../panel/index.php");
		}else{
			echo("Usuario incorrecto");
    	}
    }
   //mysqli_close($link); 
    /*echo'<script type="text/javascript">
    alert("Tarea Guardada");
    window.location.href="index.php";
    </script>';*/
?>