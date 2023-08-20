<?php 

date_default_timezone_set('America/Mexico_City');

/**==========================================================================================================
 * REQUERIMOS EL ARCHIVO DE LA CONEXION PARA QUE SE PUEDA CONECTAR CON LOS MODELOS                          =
 * =====================================                                                                    =
 */
require_once "conexion.php";

/**======================================================================================================== */

class modelLogin{

/**======================================================================================================== */

static public function mdlEmailYaRegistrado($tabla, $columna, $verificacionC){

    if($columna != null && $tabla != null){

        $stmt = conexion::conectar2()->prepare("SELECT * FROM $tabla WHERE $columna=:$columna");
        $stmt->bindParam(":$columna", $verificacionC, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt -> fetch();
    }
}

/**======================================================================================================== */

static public function mdlRegistro($tabla, $datosLoginRegistro){

    $stmt = conexion::conectar2()->prepare("INSERT INTO $tabla (token, nombre, apellidos, email, password, cargo) VALUES (:token, :nombre, :apellidos, :email, :password, :cargo)");

    $stmt->bindParam(":token", $datosLoginRegistro["token"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datosLoginRegistro["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":apellidos", $datosLoginRegistro["apellidos"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $datosLoginRegistro["email"], PDO::PARAM_STR);
    $stmt->bindParam(":password", $datosLoginRegistro["password"], PDO::PARAM_STR);
    $stmt->bindParam(":cargo", $datosLoginRegistro['id_cargo'], PDO::PARAM_INT);

    if ($stmt->execute()) {
        return "ok";
    } else {
        print_r($stmt->errorInfo());
    }
}

/**======================================================================================================== */

    static public function mdlIniciarSesion($tabla, $columna, $verificacionC){

        if($columna != null && $verificacionC != null){

            $stmt = conexion::conectar2()->prepare("SELECT * FROM $tabla WHERE $columna=:$columna");
            $stmt->bindParam(":".$columna, $verificacionC, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt -> fetch();
        }
    }

/**======================================================================================================== */

static public function mdlVerificarRegistro($tabla, $columna, $verificacionC){

    if($columna != null && $verificacionC != null){

        $stmt = conexion::conectar2()->prepare("SELECT * FROM $tabla WHERE $columna=:$columna");
        $stmt->bindParam(":".$columna, $verificacionC, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt -> fetch();
    }
}

/**======================================================================================================== */
static public function mdlValidarEmail($tabla, $datosValidarEmail, $enviado){

    if($enviado){
        $stmt = conexion::conectar2()->prepare("INSERT INTO $tabla (email, token, codigo) VALUES (:email, :token, :codigo)");

        $stmt->bindParam(":email", $datosValidarEmail["email"], PDO::PARAM_STR);
        $stmt->bindParam(":token", $datosValidarEmail["token"], PDO::PARAM_STR);
        $stmt->bindParam(":codigo", $datosValidarEmail["codigo"], PDO::PARAM_STR);
    }
    if ($stmt->execute()) {
        return "ok";
    } else {
        print_r($stmt->errorInfo());
    }
}
/**======================================================================================================== */

static public function mdlVerificarCodigo($tabla, $columna, $verificacionC){

    if($columna != null && $verificacionC != null){

        $stmt = conexion::conectar2()->prepare("SELECT * FROM $tabla WHERE $columna=:$columna");
        $stmt->bindParam(":".$columna, $verificacionC, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt -> fetch();
    }
}

/**======================================================================================================== */

static public function mdlCaducarCodigo($tabla, $columna2, $verificacionC2){

    $stmt = conexion::conectar2()->prepare("SELECT * FROM $tabla ORDER BY fecha DESC LIMIT 1;");
    $stmt->bindParam(":fecha", $columna2, PDO::PARAM_STR);

        $fecha = 
        $fecha_actual = date('Y-m-d H:m:s');
        $segundos = strtotime($fecha_actual) - strtotime($fecha);
        $minutos = $segundos/60;
    
        if($minutos > 5){
            echo '
                <script>

                if(window.history.replaceState){
                    
                window.history.replaceState(null, null, window.location.href);
                }

                </script>
                ';

                echo'<div class="alert alert-danger">El codigo se venció</div>';

        }else{

            $stmt->execute();

            return $stmt -> fetch();
        }

    }

/**======================================================================================================== */

    static public function mdlCambiarContraseña($tabla, $datos){

        $stmt = conexion::conectar2()->prepare("UPDATE $tabla SET password=:password WHERE email=:email and token=:token");
        $stmt->bindParam(":password", $datos['password'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(":token", $datos['token'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r($stmt->errorInfo());
        }
    }

/**======================================================================================================== */

    static public function mdlObtenerNombre($tabla, $idSesion){
        
        $stmt = conexion::conectar2()->prepare("SELECT nombre FROM $tabla WHERE id=:id");
        $stmt->bindParam(":id", $idSesion, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();
    }

/**======================================================================================================== */

}
?>