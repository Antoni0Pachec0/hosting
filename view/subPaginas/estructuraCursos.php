<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../html/css/subPaginas/estructura_cursos.css">
    <title>Casa Lila</title>
</head>
<body>

    <?php include(__DIR__ . '/../includesPaginas/headerGlobal.php'); ?>
    <main>
        <?php
            if (isset($_GET['idCurso'])) {
                $idCurso = $_GET['idCurso'];

                $curso = controladorCursos::ctrObtenerDatosCurso($idCurso);

                if ($curso != false) {
                    $nombre = $curso['nombre'];
                    $descripcion = $curso['descripcion'];
                    $categoria = $curso['categoria'];
                } else {
                    echo "Curso no encontrado";
                }
            }
        ?>
        <div class="titulo">
            <h1><?php echo $nombre; ?></h1>
        </div>

        <div class="descripcion">
            <p><?php echo $descripcion; ?></p>
        </div>

        <section class="content-box">
            <div class="articulos">
                <div class="title">
                    <h1>Articulos</h1>
                </div>
                <div class="content">
                    <?php
                        $publicacion = controladorCursos::ctrObtenerPublicaciones($idCurso);

                        if(!empty($publicacion)){
     
                            foreach($publicacion as $key => $value):

                                if($value['id_curso'] == $idCurso){

                            ?>

                                <div class="item">
                                    <a target="_blank" href="index.php?publicacionesPagina=estructuraPublicacion&idPublicacion=<?php echo $value['id'] ?>"><?php echo $value['nombre']; ?></a>
                                </div>

                            <?php
                                }
                            endforeach;
                        }else{
                            ?>
                            <div class="item">
                                <a >Aqui no hay nada master</a>
                            </div>
                            <?php
                        }
                                    
                    ?>  
                </div>  
            </div>
        </section>
    </main>

    <?php include(__DIR__ . '/../includesPaginas/footerGlobal.php'); ?>

</body>
</html>