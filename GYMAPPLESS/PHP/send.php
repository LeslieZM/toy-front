<?php

include("conexion.php");

if(isset($_POST['send'])){
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellidoPaterno']) >= 1 &&
        strlen($_POST['apellidoMaterno']) >= 1 &&
        strlen($_POST['edad']) >= 1 &&
        strlen($_POST['fechaNacimiento']) >= 1 &&
        strlen($_POST['telefono']) >=1 &&
        strlen($_POST['paquete']) >=1 
    ) {
        $nombre = trim($_POST['nombre']);
        $apellidoPaterno = trim($_POST['apellidoPaterno']);
        $apellidoMaterno = trim($_POST['apellidoMaterno']);
        $edad = trim($_POST['edad']);
        $fechaNacimiento = date("Y-m-d");
        $telefono = trim($_POST['telefono']);
        $paquete = trim($_POST['paquete']);

        $consulta = "INSERT INTO cliente (NOMBRE, APELLIDO_PATERNO, APELLIDO_MATERNO, EDAD,
        FECHA_NACIMIENTO, NUMERO_TELEFONICO , PAQUETE)
        VALUES('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$edad',
        '$fechaNacimiento', '$telefono', '$paquete')";

        $resultado = mysqli_query($con, $consulta);


        if($resultado){
            ?>
                        <h3 class="success">Tu registro se ha completado</h3>
            <?php
                    } else {
            ?>
                        <h3 class="error">Ocurrió un error</h3>
            <?php
                    }
    }
}

?>
