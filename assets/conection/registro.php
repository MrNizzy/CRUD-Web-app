<?php
	session_start();
	include "conection.php";
	$busqueda = $_SESSION['cc'];
	$conex=Conectarse();
    if($conex==false){
    	echo("error");
    }else{    	
    	$sentencia = "SELECT * from owner";
    	$consulta = mysqli_query($conex, $sentencia);
		$_SESSION['pet']="";
		if(mysqli_num_rows($consulta) > 0){			
			while($dueno = $consulta->fetch_array()){
				$busqueda=$dueno['id'];
				echo($busqueda);
				$sentencia1 = "SELECT * from mascotas where id_owner  = '$busqueda'";
	    		$consulta1 = mysqli_query($conex, $sentencia1);
				if(mysqli_num_rows($consulta1) > 0){
					while($row = $consulta1->fetch_array()){
						$_SESSION['pet']=$_SESSION['pet'].'<tr>
	                                <th scope="row">'.$row['nombre']."</th>
	                                <td>".$dueno['nombre']."</td>
	                                <td>".$dueno['telefono']."</td>
	                                <td class='mx-auto' style='width: 200px;'>
	                            <button class='btn btn-outline-main mb-3' type='submit'>Modificar</button>
	                            <button class='btn btn-outline-danger mb-3' type='button' onclick='eliminar()'>Eliminar</button>
	                        </td>";
					}
	    			header("location: ../../p-clinico.php");
				}else{
					echo("Error");
	    		}
	    	}
	        echo ($_SESSION['pet']);
		}else{
			echo("Error");
    	}
    }
?>