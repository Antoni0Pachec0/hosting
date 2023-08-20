<?php
/**======================================================================================================== */
    class controladorCursos{
/**======================================================================================================== */

        static public function ctrCrearCurso(){

            if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['categoria'])){
                if(preg_match('/^[a-zA-z-ñÑáéíóúÁÉÍÓÚ_0-9 ]+$/',$_POST["nombre"])){
                    if(preg_match('/^[a-zA-z-ñÑáéíóúÁÉÍÓÚ_0-9 ]+$/',$_POST["descripcion"])){

                        session_start();

                        $tabla = "cursos";
                        $token = uniqid();

                        $id_usuario = $_SESSION['id_usuario'];

                        $datosCrearCurso = array("token" => $token,
                                                "nombre" => $_POST['nombre'], 
                                                "descripcion" => $_POST['descripcion'],
                                                "categoria" => $_POST['categoria'],
                                                "usuario_id" => $id_usuario);

                        $respuesta = modelCursos::mdlCrearCurso($tabla, $datosCrearCurso);

                        return $respuesta;

                    }else{
                        echo '<script> if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                        </script>';
                        
                        echo'<div class="alert alert-danger">Error en los caractéres de descripcion</div>';
                    }

                }else{
                    echo '<script> if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    </script>';
                    
                    echo'<div class="alert alert-danger">Error en los caractéres de nombre</div>';
        
                }
            }
        }//llave del metodo

/**======================================================================================================== */

        static public function ctrMostrarCurso($rol){

            $tabla = 'cursos';

            $respuesta = modelCursos::mdlMostrarCurso($tabla, $rol);


            return $respuesta;
        }

/**======================================================================================================== */

        static public function ctrObtenerDatosCurso($idCurso){
            $tabla = 'cursos';

            $respuesta = modelCursos::mdlObtenerDatosCurso($tabla, $idCurso);

            if (!empty($respuesta)) {
                return $respuesta[0]; // Retorna el primer registro del resultado
            } else {
                return false; // No se encontraron datos para el ID proporcionado
            }
        }

/**======================================================================================================== */

        static public function ctrObtenerPublicaciones($idCurso){

            $tabla = 'publicaciones';

            $respuesta = modelCursos::mdlObtenerPublicaciones($idCurso, $tabla);

            return $respuesta;
        }

/**======================================================================================================== */

        static public function ctrObtenerContenidoPublicacion($idPublicacion){
            
            $tabla = 'publicaciones';

            $respuesta = modelCursos::mdlObtenerContenidoPublicacion($idPublicacion, $tabla);

            return $respuesta;
        }

/**======================================================================================================== */

    static public function ctrEliminarArticulos($articulo){
        if(isset($_POST['articulo_id'])){

            $tabla = 'publicaciones';
            $columna = 'id';

            $respuesta = modelCursos::mdlEliminarArticulos($tabla, $columna, $articulo);

            return $respuesta;

        }else{
            echo '<h1>No trae nada</h1>';
        }
    }

}