<?php
	require_once "conexion.php";
	$Nombre_fam2 = $_POST['Nombre_fam2'];
	$Apellido_fam2 = $_POST['Apellido_fam2'];
	$Cantidad_fam2 = $_POST['Cantidad_fam2'];
	$Fecha_fam2 = ($_POST['Fecha_fam2']);
	$Email_fam2 = ($_POST['Email_fam2']);
	$Plan_fam2 = ($_POST['Plan_fam2']);
	
	$query="INSERT INTO planfamilar2 (Nombre_fam2,Apellido_fam2,Cantidad_fam2,Fecha_fam2,Email_fam2,Plan_fam2) VALUES ('$Nombre_fam2','$Apellido_fam2','$Cantidad_fam2','$Fecha_fam2','$Email_fam2','$Plan_fam2')";
	if($mysqli->query($query)){
		print "<script>alert(\"Reserva exitosa.\"); window.location='planes.html'; </script>";
	}
	else{
		echo "Ocurrio un error"; 
	}
?>