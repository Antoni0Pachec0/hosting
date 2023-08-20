<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../html/css/paginas/c_culturales.css">
    <title>Cursos Culturales</title>
</head>
<body>

<!--==========================================================================
INCLUIMOS LA DIRECCION DEL HEADER PARA HACERLO MAS FACIL
===========================================================================-->

<?php include(__DIR__ . '/../includesPaginas/headerGlobal.php'); ?>

<!--=======================================================================-->
        

        <!--Contenido Central-->

        <main class="contenido">
            <section class="superior">
                <div class="text">
                    <h2>Cursos culturales</h2>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ab, perspiciatis magni sapiente vero consequuntur!</p>
                </div>

                <div class="img"></div>

                <div class="difuser"></div>
            </section>

            <section class="medio">

                <div class="cursos-box">

                <?php

                    $curso = controladorCursos::ctrMostrarCurso(null);

                    //Para cada curso
                    foreach($curso as $key => $value):

                        //Evaluamos si su categoria corresponde a culturales, si es así, lo muestra en la lista
                        if($value['categoria'] == 'culturales'){

                            $idCurso = $value['id'];

                    ?>

                        <div class="curso">
                            <div class="info">
                                <a href="index.php?subPagina=estructuraCursos&idCurso=<?php echo $idCurso; ?>"><?php echo $value['nombre'];?></a>
                                <p><?php echo $value['descripcion'];?></p>
                            </div>
                        </div>

                    <?php 

                        }

                    endforeach ?>
                    
                </div>
            </section>
        </main>

<!--==========================================================================
INCLUIMOS LA DIRECCION DEL FOOTER PARA HACERLO MAS FACIL
===========================================================================-->

<?php include(__DIR__ . '/../includesPaginas/footerGlobal.php'); ?>

<!--=======================================================================-->


    <script src="../..//html/js/slider.js"></script>
</body>
</html>