<?php
// Tu código PHP para obtener el valor de la variable


    // Paso 2: Ejecutar una consulta SQL para obtener el dato deseado de la base de datos
    $id = 217; // El ID del usuario que deseas obtener
    $consulta = "SELECT contenido FROM publicaciones WHERE id = :id";
    $sentencia = $conexion->prepare($consulta);
    $sentencia->bindParam(':id', $id, PDO::PARAM_INT);
    $sentencia->execute();

    // Paso 3: Recuperar el resultado de la consulta y almacenar el dato en una variable PHP
    $fila = $sentencia->fetch(PDO::FETCH_ASSOC);
    $contenidoHTML = $fila['contenido'];

    echo $contenidoHTML;
?>
