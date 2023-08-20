<?php
/**======================================================================================================== */

include('../model/conexion.php');

/**======================================================================================================== */

if(isset($_POST['nombre']) && isset($_POST['contenido'])){
    $txtNombre = $_POST['nombre'];
    $txtContenido = $_POST['contenido'];
    $txtIdCurso = $_POST['idCurso'];

    $stmnt = conexion::conectar2()->prepare("INSERT INTO publicaciones(nombre, contenido, id_curso) VALUES (:nombre, :contenido, :id_curso)");

    $stmnt->bindParam(":nombre", $txtNombre, PDO::PARAM_STR);
    $stmnt->bindParam(":contenido", $txtContenido, PDO::PARAM_STR);
    $stmnt->bindParam(":id_curso", $txtIdCurso, PDO::PARAM_INT);

    if($stmnt->execute()){ 
        echo "ok";
    }else{
        print_r($stmnt->errorInfo());
    }
}else{
    echo '<script> if(window.history.replaceState){
        window.history.replaceState(null, null. window.location.href);
    }
    </script>';

    echo '<div class="alert alert-danger">VACIO</div>';
}
