<?php
include 'conexion.php';
$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];
$sql = "SELECT * FROM admin WHERE Correo = '$Correo'";
$resultado =$mysqli->query($sql);
if ($resultado->num_rows > 0) {     }
  $row = $resultado->fetch_array(MYSQLI_ASSOC);
if ($Contraseña==$row['Contraseña']) { 
    $_SESSION['loggedin'] = true;
    $_SESSION['Correo'] = $Correo;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
    echo "Bienvenido! " . $_SESSION['Correo'];
    header('Location: admin.php');
 } else { 
   echo "Username o Password estan incorrectos.";
   echo "<br><a href='planes.html'>Volver a Intentarlo</a>";
 }
 mysqli_close($mysqli); 
 ?>