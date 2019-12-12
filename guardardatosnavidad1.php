<?php
	require_once "conexion.php";
	$Nombre_nav1 = $_POST['Nombre_nav1'];
	$Apellido_nav1 = $_POST['Apellido_nav1'];
	$Cantidad_nav1 = $_POST['Cantidad_nav1'];
	$Fecha_nav1 = ($_POST['Fecha_nav1']);
	$Email_nav1 = ($_POST['Email_nav1']);
	$Plan_nav1 = ($_POST['Plan_nav1']);
	
	$query="INSERT INTO plannav1 (Nombre_nav1,Apellido_nav1,Cantidad_nav1,Fecha_nav1,Email_nav1,Plan_nav1) VALUES ('$Nombre_nav1','$Apellido_nav1','$Cantidad_nav1','$Fecha_nav1','$Email_nav1','$Plan_nav1')";
	if($mysqli->query($query)){
		print "<script>alert(\"Reserva exitosa.\"); window.location='planes.html'; </script>";
	}
	else{
		echo "Ocurrio un error"; 
	}
?>