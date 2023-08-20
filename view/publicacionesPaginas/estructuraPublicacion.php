<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../html/css/estructuraPublicacion.css">
    <title>Publicacion</title>
</head>
<body>
    <?php
        if(isset($_GET['idPublicacion'])){
            $idPublicacion = $_GET['idPublicacion'];

            $publicacion = controladorCursos::ctrObtenerContenidoPublicacion($idPublicacion);

            $contenido = $publicacion[0]['contenido'];
            $nombre = $publicacion[0]['nombre'];

        }
    ?>
    <section class="container-publicacion">
        <h1><?php echo $nombre; ?></h1>
        <div id="publicacion">
            <?php echo $contenido; ?>
        </div>
    </section>

</body>
</html>