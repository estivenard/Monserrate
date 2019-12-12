<?php
	require_once "conexion.php";
	$Nombre_amor1 = $_POST['Nombre_amor1'];
	$Apellido_amor1 = $_POST['Apellido_amor1'];
	$Fecha_amor1 = ($_POST['Fecha_amor1']);
	$Email_amor1 = ($_POST['Email_amor1']);
	$Plan_amor1 = ($_POST['Plan_amor1']);
	
	$query="INSERT INTO planamor1 (Nombre_amor1,Apellido_amor1,Fecha_amor1,Email_amor1,Plan_amor1) VALUES ('$Nombre_amor1','$Apellido_amor1','$Fecha_amor1','$Email_amor1','$Plan_amor1')";
	if($mysqli->query($query)){
		print "<script>alert(\"Reserva exitosa.\"); window.location='planes.html'; </script>";
	}
	else{
		echo "Ocurrio un error"; 
	}
?>