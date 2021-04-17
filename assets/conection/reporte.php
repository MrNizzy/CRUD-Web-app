<?php
	include "conection.php";
	session_start();
	$fecha1 = $_GET['fecha1'];
	$fecha2 = $_GET['fecha2'];
	$_SESSION['factura']="";
	/**/$_SESSION['pdf']="";
	$conex=Conectarse();
    if($conex==false){
    	echo("error");
    }else{
		$sql = "SELECT * FROM factura WHERE fecha BETWEEN '$fecha1' AND '$fecha2'";
	    $consulta1 = mysqli_query($conex, $sql);
		if(mysqli_num_rows($consulta1) > 0){
			while($row = $consulta1->fetch_array()){
				$procedimiento=$row['id_procedimiento'];
				$sqlprocedimiento = "SELECT * FROM procedimiento WHERE id = '$procedimiento'";
			    $consultaprocedimiento = mysqli_query($conex, $sqlprocedimiento);
				$arrayprocedimiento = mysqli_fetch_array($consultaprocedimiento);
				if(mysqli_num_rows($consultaprocedimiento) > 0){
					$mascota=$arrayprocedimiento['id_mascota'];
					$sqlmascota = "SELECT * FROM mascotas WHERE id = '$mascota'";
				    $consultamascota = mysqli_query($conex, $sqlmascota);
					$arraymascota = mysqli_fetch_array($consultamascota);
					if(mysqli_num_rows($consultamascota) > 0){
						$owner=$arraymascota['id_owner'];
						$sqlowner = "SELECT * FROM owner WHERE id = '$owner'";
					    $consultaowner = mysqli_query($conex, $sqlowner);
						$arrayowner = mysqli_fetch_array($consultaowner);
						if(mysqli_num_rows($consultaowner) > 0){
							/**/$_SESSION['pdf']=$_SESSION['pdf'].";".$arraymascota['nombre'].";".$arrayowner['nombre'].";".$arrayprocedimiento['procedimiento'].";".$arrayprocedimiento['medicamentos'].";".$row['fecha'].";".$row['costo']."\n";					
							$_SESSION['factura']=$_SESSION['factura']."<tr><th scope='row'>".$arraymascota['nombre']."</th>
	                        <td>".$arrayowner['nombre']."</td>
	                        <td>".$arrayprocedimiento['procedimiento']."</td>
	                        <td>".$arrayprocedimiento['medicamentos']."</td>
	                        <td>".$row['fecha']."</td>
	                        <td>".$row['costo']."</td>
	                        <td class='mx-auto' style='width: 200px;'>
	                            <button class='btn btn-outline-success mb-3' type='submit'>Descargar reporte</button>
	                        </td></tr>";
	                    }
	                }
	            }
	        }
	    	header("location: ../../p-report.php");
	    }
    }
?>