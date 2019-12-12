<?php
	require_once "conexion.php";
	$Nombre_nav2 = $_POST['Nombre_nav2'];
	$Apellido_nav2 = $_POST['Apellido_nav2'];
	$Cantidad_nav2 = $_POST['Cantidad_nav2'];
	$Fecha_nav2 = ($_POST['Fecha_nav2']);
	$Email_nav2 = ($_POST['Email_nav2']);
	$Plan_nav2 = ($_POST['Plan_nav2']);
	
	$query="INSERT INTO plannav2 (Nombre_nav2,Apellido_nav2,Cantidad_nav2,Fecha_nav2,Email_nav2,Plan_nav2) VALUES ('$Nombre_nav2','$Apellido_nav2','$Cantidad_nav2','$Fecha_nav2','$Email_nav2','$Plan_nav2')";
	if($mysqli->query($query)){
		print "<script>alert(\"Reserva exitosa.\"); window.location='planes.html'; </script>";
	}
	else{
		echo "Ocurrio un error"; 
	}
?>