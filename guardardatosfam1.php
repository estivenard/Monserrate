<?php
	require_once "conexion.php";
	$Nombre_fam1 = $_POST['Nombre_fam1'];
	$Apellido_fam1 = $_POST['Apellido_fam1'];
	$Cantidad_fam1 = $_POST['Cantidad_fam1'];
	$Fecha_fam1 = ($_POST['Fecha_fam1']);
	$Email_fam1 = ($_POST['Email_fam1']);
	$Plan_fam1 = ($_POST['Plan_fam1']);
	
	$query="INSERT INTO planfamilar1 (Nombre_fam1,Apellido_fam1,Cantidad_fam1,Fecha_fam1,Email_fam1,Plan_fam1) VALUES ('$Nombre_fam1','$Apellido_fam1','$Cantidad_fam1','$Fecha_fam1','$Email_fam1','$Plan_fam1')";
	if($mysqli->query($query)){
		print "<script>alert(\"Reserva exitosa.\"); window.location='planes.html'; </script>";
	}
	else{
		echo "Ocurrio un error"; 
	}
?>