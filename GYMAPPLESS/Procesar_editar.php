<?php

include("PHP/conexion.php");

$ID=$_POST['EditID'];
$NOMBRE=$_POST['EditNombre'];
$APELLIDO_PATERNO=$_POST['EditAPaterno'];
$APELLIDO_MATERNO=$_POST['EditAMaterno'];
$EDAD=$_POST['EditEdad'];
$FECHA_NACIMIENTO=$_POST['EditFNacimiento'];
$NUMERO_TELEFONICO=$_POST['EditNTelefonico'];
$PAQUETE=$_POST['EditPaquete'];

mysqli_query($con, "UPDATE `cliente` SET `NOMBRE` = '$NOMBRE', `APELLIDO_PATERNO` = '$APELLIDO_PATERNO',
 `APELLIDO_MATERNO` = '$APELLIDO_MATERNO', `EDAD` = '$EDAD', `FECHA_NACIMIENTO` = '$FECHA_NACIMIENTO', 
 `NUMERO_TELEFONICO` = '$NUMERO_TELEFONICO', `PAQUETE` = '$PAQUETE' WHERE `cliente`.`ID_CLIENTE` = '$ID'")
 or die ("Error de actualizar");

 mysqli_close($con);
 header("Location:mantener_cliente.php");

?>