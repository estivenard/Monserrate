<?php
	require_once "conexion.php";
	$Nombre_amor2 = $_POST['Nombre_amor2'];
	$Apellido_amor2 = $_POST['Apellido_amor2'];
	$Fecha_amor2 = ($_POST['Fecha_amor2']);
	$Email_amor2 = ($_POST['Email_amor2']);
	$Plan_amor2 = ($_POST['Plan_amor2']);
	
	$query="INSERT INTO planamor2 (Nombre_amor2,Apellido_amor2,Fecha_amor2,Email_amor2,Plan_amor2) VALUES ('$Nombre_amor2','$Apellido_amor2','$Fecha_amor2','$Email_amor2','$Plan_amor2')";
	if($mysqli->query($query)){
		print "<script>alert(\"Reserva exitosa.\"); window.location='planes.html'; </script>";
	}
	else{
		echo "Ocurrio un error"; 
	}
?>