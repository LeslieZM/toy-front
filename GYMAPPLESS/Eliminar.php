<?php

include("PHP/conexion.php");

$ID=$_POST['eliminar'];
mysqli_query($con, "DELETE FROM cliente WHERE ID_CLIENTE='$ID' ") or die("Error al eliminar");

mysqli_close($con);
header("location: mantener_cliente.php");



?>