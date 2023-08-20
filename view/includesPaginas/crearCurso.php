<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../html/css/includesPaginas/crear_curso.css">
    <title>Crear curso</title>
</head>

<body>
    <main>
        <form id="formulario"  method="post">
            <h1>Crear Nuevo Curso</h1>

            <div class="input-box">
                <label for="nombre">Nombre del Curso:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            
            <div class="input-box">
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required></textarea>
            </div>

            <div class="input-box">
                <label for="categoria">Categoría:</label>
                <select id="categoria" name="categoria" required>
                    <option value="academicos">Cursos Académicos</option>
                    <option value="culturales">Cursos Culturales</option>
                </select>
            </div>

            <div class="input-box">
                <input type="submit" value="Crear Curso" name="btnCrear" id="boton">
            </div>
            
        </form>
    </main>


    <?php

        if(isset($_POST["btnCrear"])){

            $curso = controladorCursos::ctrCrearCurso();

            if($curso == "ok"){
                        
                echo '
                <script>

                if(window.history.replaceState){
                    
                window.history.replaceState(null, null, window.location.href);
                }

                </script>
                ';

                echo'<div class="alert alert-success">Curso creado exitosamente</div>';

            }else if($curso == "error"){

                echo '
                <script>

                if(window.history.replaceState){
                    
                window.history.replaceState(null, null, window.location.href);
                }

                </script>
                ';

                echo'<div class="alert alert-danger">No se pudo crear el curso</div>';

                $mostrar = controladorCursos::ctrMostrarCurso($rol);

            }
        }

        ?>
</body>

</html>