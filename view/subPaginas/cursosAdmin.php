<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/pruebaIntegradora/html/css/cursos_admin.css">
    <title>Mis cursos</title>
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

        <div class="titulo-curso">
            <h1><?php echo $nombre ?> - <?php echo $categoria ?></h1>
        </div>

        <section class="content-box">
            <div class="titulo-p">
                <h2>Contenido del curso</h2>
            </div>

            <div id="caja-contenido">
                <div id="superior">
                    <div class="caja">
                        <div class="titulo">
                            <h2>Articulos</h2>
                        </div>

                        <div class="cont">
                            <?php
                            $publicacion = controladorCursos::ctrObtenerPublicaciones($idCurso);

                            if (!empty($publicacion)) {
                                foreach ($publicacion as $key => $value) {
                                    if ($value['id_curso'] == $idCurso) {
                            ?>

                            <div class="item">
                                <a target="_blank" href="index.php?publicacionesPagina=estructuraPublicacion&idPublicacion=<?php echo $value['id'] ?>">
                                    <?php echo $value['nombre']; ?>
                                </a>
                                <div class="buttons">
                                        <a href="index.php?publicacionesPagina=editor&idCurso=<?php echo $idCurso ?>" class="btn-editar">
                                            <i class='bx bxs-pencil'></i>
                                        </a>

                                    <form method="post">
                                        <input type="" name="articulo_id" value="<?php echo $value['id']; ?>">
                                        <button type="submit" name="btnEliminar" class="btn-eliminar">
                                            <i class='bx bxs-trash'></i>
                                        </button>

                                        <?php
                                        $idCurso = $_GET['idCurso'];
                                        
                                        if (isset($_POST['btnEliminar'])) {
                                            $articulo = $_POST['articulo_id'];
                                            $eliminar = controladorCursos::ctrEliminarArticulos($articulo);

                                            echo '<script> if(window.history.replaceState){
                                                window.history.replaceState(null, null, window.location.href);
                                            }
                                            
                                            window.location = "index.php?subPagina=cursosAdmin&idCurso=' . $idCurso .'"
                                            </script>';
                                        }
                                        ?>
                                    </form>

                                </div>
                            </div>

                            <?php
                                    }
                                }
                            } else {
                            ?>
                            <div class="item">
                                <a>Aquí no hay nada, master</a>
                                <i class='bx bx-x-circle'></i>
                            </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>

                    <div class="caja">

                        <div class="titulo"><h2>Lecciones</h2></div>
                        <div class="cont">
                            <div class="item">
                                <p>Titulo del video</p>
                                <div class="buttons">
                                    <button class="btn-editar"><i class='bx bxs-pencil' ></i></button><!--Boton para editar-->
                                    <button class="btn-eliminar"><i class='bx bxs-trash'></i></button><!--Boton para eliminar-->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="content-box">
            <div class="titulo-p">
                <h2>Información del curso</h2>
            </div>

            <div class="info">
                <div class="line-info">
                    <p>Titulo</p>
                    <input type="text" placeholder="Titulo">
                </div>

                <div class="line-info">
                    <p>Descripción</p>
                    <textarea name="" id="" cols="45" rows="10"></textarea>
                </div>

                <div class="line-info">
                    <p>Personas siguiendo</p>
                    <input type="text" placeholder="Titulo">
                </div>
            </div>
        </section>

        <nav>
            <div class="nav-content">
                <div class="toggle-btn">
                    <i class='bx bx-plus'></i>
                </div>
                <span style="--i:1;">
                    <a href="index.php?publicacionesPagina=editor&idCurso=<?php echo $idCurso ?>">
                        <i class='bx bx-file'></i>
                    </a>
                </span>
                <span style="--i:2;">
                    <a href="#"><i class='bx bxs-megaphone'></i></a>
                </span>
                <span style="--i:3;">
                    <a href="#"><i class='bx bx-play-circle'></i></a>
                </span>
            </div>
        </nav>

        <script src="http://localhost/pruebaIntegradora/html/js/btn-desplegable.js"></script>
    </main>

    <?php
        include(__DIR__ . '/../includesPaginas/footerGlobal.php');
    ?>
</body>
</html>
