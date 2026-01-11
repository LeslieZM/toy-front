<?php
$servidor="pruebasmysql.mysql.database.azure.com:3306";
$usuario="administrador";
$clave="S3cur3Pwd666";
$base="gymapp_db";

$con=mysqli_connect($servidor,$usuario,$clave,$base) 

//or die("EXISTE UN PROBLEMA PAARA CONECTAR ALA BASE DE DATOS");
//if($con)
//{
//	echo"Conexion al servidor mysql lista!!";
//	echo "<br>";
//}
//if(mysqli_select_db($con,$base)){
//echo "se logro conectar la base de datos ",$base;
//}
//?>