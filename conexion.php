<?php
	$mysqli= new mysqli("localhost", "root", "", "monserrate");
	
	//echo "Conexion realizada";
	if(mysqli_connect_errno()){
		echo "Este sitio esta presentado problemas";
	}
?>