<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
	<body background="empleados.jpg">

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="">
    <img src="boostrap_empleados.png" alt="logo" style="width:90px;">
  </a>
  <ul class="navbar-nav">
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<div style="text-align:center;padding:1em 0;"> <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/3688689"> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FBogota" width="90%" height="90" frameborder="0" seamless></iframe> </div>
        <li class="nav-item">
      <a class="nav-link"  <a href="Cerrarsesion.php"><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img src="cerrar.png" alt="logo" style="width:70px;"></a>
    </li>
  </ul>
</nav>
<center>
<section>

	<br>
	<font color="white" face="cursive" size="7">BIENVENIDO</font><br>
	<font color="white">GRACIAS POR INGRESAR</font> 
	<div class="container">
	<table class="table table-dark" id="t1" border="1">

		
		<thead>
			
			<tr>
				<center>
				<th><center>&nbsp Id &nbsp</th></center>
				<th><center>&nbsp Nombre &nbsp</th></center>
				<th><center>&nbsp Apellido &nbsp</th></center>
				<th><center>&nbsp Correo &nbsp</th></center>
				<th><center>&nbsp Actualizar &nbsp</th></center>
				<th><center>&nbsp Eliminar &nbsp</th></center>

			</tr>

		</thead>
			
			<?php
				require_once "editar.php";
				$query="SELECT * FROM empleados";
				$consulta1=$mysqli->query($query);
				while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
					echo "<tr>
						<td><center>".$fila['Id']."</td>
						<td><center>".$fila['Nombre']."</td>
						<td><center>".$fila['Apellido']."</td>
						<td><center>".$fila['Correo']."</td>
						<td><center><a href='Actualizar.php?Id=".$fila['Id']."'>Actualizar</a></td>
						<td><center><a href='eliminar.php?Id=".$fila['Id']."'>Eliminar</a></td>
					</tr>";
				}
			?>		
			<center></center>	

	</table>


</section>
</center>
</body>

</html>