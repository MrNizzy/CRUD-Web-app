<?php
	session_start();
	include "conection.php";
	$busqueda = $_SESSION['cc'];
	$conex=Conectarse();
    if($conex==false){
    	echo("error");
    }else{
    	
		$sentencia = "SELECT * from owner where id  = '$busqueda'";
    	$consulta = mysqli_query($conex, $sentencia);
		$array1 = mysqli_fetch_array($consulta);
		if(mysqli_num_rows($consulta) > 0){
			$sentencia = "SELECT * from mascotas where id_owner  = '$busqueda'";
    		$consulta = mysqli_query($conex, $sentencia);
			$array = mysqli_fetch_array($consulta);
			$cantidad=mysqli_num_rows($consulta);
			if($cantidad > 0){
				$_SESSION['pet']="";
				for($i=0;$i<$cantidad;$i++){
					$_SESSION['pet']=$_SESSION['pet'].'<tr>
                                <th scope="row">'.$array['nombre']."</th>
                                <td>".$array1['nombre']."</td>
                                <td>".$array1['dueno']['telefono']."</td>
                                <td class='mx-auto' style='width: 200px;'>
                            <button class='btn btn-outline-main mb-3' type='submit'>Modificar</button>
                            <button class='btn btn-outline-danger mb-3' type='button' onclick='eliminar()'>Eliminar</button>
                        </td>";
                }
    			header("location: ../../p-clinico.php");
			}else{
				echo("Error");
    		}
		}else{
			echo("Error");
    	}
		
    }
?>