<?php
/**======================================================================================================== */

require_once('conexion.php');

/**======================================================================================================== */

    class modelCursos{

/**======================================================================================================== */

        static public function mdlCrearCurso($tabla, $datosCrearCurso){

            $stmt = conexion::conectar2()->prepare("INSERT INTO $tabla (token, nombre, descripcion, categoria, usuario_id) VALUES (:token, :nombre, :descripcion, :categoria, :usuario_id)");

            $stmt->bindParam(":token", $datosCrearCurso["token"], PDO::PARAM_STR);
            $stmt->bindParam(":nombre", $datosCrearCurso["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":descripcion", $datosCrearCurso["descripcion"], PDO::PARAM_STR);
            $stmt->bindParam(":categoria", $datosCrearCurso["categoria"], PDO::PARAM_STR);
            $stmt->bindParam(":usuario_id", $datosCrearCurso["usuario_id"], PDO::PARAM_STR);

            if ($stmt->execute()) {
                header('location: index.php?includesPagina=miPerfil');

                return "ok";
            } else {
                print_r($stmt->errorInfo());
            }
        }

/**======================================================================================================== */

        static public function mdlMostrarCurso($tabla, $rol){

            $stmt = conexion::conectar2()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

            $stmt->execute();

            return $stmt -> fetchAll();
        }

/**======================================================================================================== */

        static public function mdlObtenerDatosCurso($tabla, $idCurso){

            $stmt = conexion::conectar2()->prepare("SELECT * FROM $tabla WHERE id=:idCurso");
            $stmt->bindParam(":idCurso", $idCurso, PDO::PARAM_INT);

            $stmt->execute();

            return $stmt -> fetchAll();
        }

/**======================================================================================================== */

        static public function mdlObtenerPublicaciones($idCurso, $tabla){

            $stmt = conexion::conectar2()->prepare("SELECT * FROM $tabla WHERE id_curso=:id_curso ORDER BY id DESC");
            $stmt->bindParam(":id_curso", $idCurso, PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->fetchAll();
        }

/**======================================================================================================== */

        static public function mdlObtenerContenidoPublicacion($idPublicacion, $tabla){

            $stmt = conexion::conectar2()->prepare("SELECT * FROM $tabla WHERE id=:id");
            $stmt->bindParam(":id", $idPublicacion, PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->fetchAll();
        }

/**======================================================================================================== */

        static public function mdlGuardarUrlImagen($imagenUrl){

            $stmt = conexion::conectar2()->prepare("INSERT INTO imagenes(url) VALUES (:url)");
            $stmt->bindParam(":url", $imagenUrl, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetchAll();
        }

/**======================================================================================================== */

        static public function mdlEliminarArticulos($tabla, $columna, $articulo){

            if($columna != null && $articulo != null){

                $stmt = conexion::conectar2()->prepare("DELETE FROM $tabla WHERE $columna=:$columna");
                $stmt->bindParam(":".$columna, $articulo, PDO::PARAM_STR);

                if ($stmt->execute()) {
                    return "ok";
                } else {
                    print_r($stmt->errorInfo());
                }
            }
        }

}