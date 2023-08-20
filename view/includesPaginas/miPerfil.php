
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../html/css/includesPaginas/mi_perfil.css">">
    <title>Área personal</title>
</head>

<body>

<!--==========================================================================
INCLUIMOS LA DIRECCION DEL FOOTER PARA HACERLO MAS FACIL
===========================================================================-->

<?php include(__DIR__ . '/../includesPaginas/headerGlobal.php'); ?>

<!--=======================================================================-->


    <!--Contenido-->

    <main>
        
        <section class="izquierdo">
            <div class="img-perfil"></div>

            <p class="nombre">No pude :(</p>

            <button id="editar_perfil">Editar perfil</button>
        </section>

        <section class="derecho">
            <div class="cursos">
                <h2>Tus cursos</h2>

                <div class="cursos_box">
                <?php

                    $curso = controladorCursos::ctrMostrarCurso(null);

                    //Para cada curso
                    foreach($curso as $key => $value):
                        if($_SESSION['usuarioIngresado'] == true){

                            session_start();

                            $id = $value['id'];

                            //Evaluamos si su categoria corresponde a academicos, si es así, lo muestra en la lista
                            if($value['usuario_id'] == $_SESSION['id_usuario']){
                        }
                    ?>

                        <div>
                            <i class='bx bxs-folder'></i>
                            <a href="index.php?subPagina=cursosAdmin&idCurso=<?php echo $id ?>"><?php echo $value['nombre'];?></a>
                        </div>

                    <?php 

                        }

                    endforeach ?>
                    
                </div>
            </div>

            <button class="boton"><a href="index.php?includesPagina=crearCurso" class="crear_curso">Crear curso</a></button>
        </section>

        <!--Boton de opciones desplegable-->

        
    </main>

<!--==========================================================================
INCLUIMOS LA DIRECCION DEL FOOTER PARA HACERLO MAS FACIL
===========================================================================-->

<?php include(__DIR__ . '/../includesPaginas/footerGlobal.php'); ?>

<!--=======================================================================-->

    
</body>

</html>