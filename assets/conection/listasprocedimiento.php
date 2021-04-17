<?php
	session_start();
	include "conection.php";
	$conex=Conectarse();
    if($conex==false){
    	echo("error");
    }else{ 	
	    $sentencia = "SELECT * from mascotas";
	    $consulta = mysqli_query($conex, $sentencia);
		$_SESSION['list']="";
		if(mysqli_num_rows($consulta) > 0){
			while($row = $consulta->fetch_array()){
				$_SESSION['list']=$_SESSION['list']."<option value='".$row['id']."'>".$row['nombre']."</option>";
			}
		}else{
			echo("Error");
	    }
		$_SESSION['list']=$_SESSION['list']."</select>
                            </div>
                        </div>
                        <div class='col-md'>
                            <div class='col-md'>
                                <select class='form-select roboto color-claro p-3' aria-label='Asignar un veterinario' name='veterinario'>
                                    <option selected>Asignar veterinario</option>";
        $sentencia = "SELECT * from veterinario";
	    $consulta = mysqli_query($conex, $sentencia);
		if(mysqli_num_rows($consulta) > 0){
			while($row = $consulta->fetch_array()){
				$_SESSION['list']=$_SESSION['list']."<option value='".$row['id']."'>".$row['nombre']."</option>";
			}
		}else{
			echo("Error");
	    }
		$listaprocedimientos= $_SESSION['list'];
		$sentencia = "SELECT * from owner";
	    $consulta = mysqli_query($conex, $sentencia);
		$_SESSION['list']="";
		if(mysqli_num_rows($consulta) > 0){
			while($row = $consulta->fetch_array()){
				$_SESSION['list']=$_SESSION['list']."<option value='".$row['id']."'>".$row['nombre']."</option>";
			}
		}else{
			echo("Error");
	    }
	    $listaduenos=$_SESSION['list'];
	}
?>