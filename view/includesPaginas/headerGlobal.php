<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../html/css/includesPaginas/header.css">
</head>
<body>

<header class="header">

    <form action="#" class="search-bar">
        <input type="text" placeholder="Buscar...">
        <button type="submit"><i class='bx bx-search'></i></button>
    </form>

    <div class="logo"></div>

    <nav class="navbar">
        <!--VARIABLE GET MEDIANTE URL-->
        <a href="index.php?pagina=inicio">Inicio</a>
    </nav>

<div class="opciones-perfil">
    <label for="btn-perfil" class="perfil"><i class='bx bxs-user-circle' ></i></label>
    <input type="checkbox" id="btn-perfil">
    <div class="opciones">
        <nav>

            <?php
            session_start();
            
                if($_SESSION['usuarioIngresado'] == true){
                    ?>
                    <div class="opcion">
                        <i class='bx bxs-user'></i>
                        <!--VARIABLE GET MEDIANTE URL-->
                        <a href="index.php?includesPagina=miPerfil">Mi perfil</a>
                    </div>
                    
                    <div class="opcion">
                        <i class='bx bx-log-out' ></i>
                        <a href="index.php?accion=cerrarSesion">Cerrar sesión</a>
                    </div>

                    <?php
                }else{
                    ?>

                    <div class="opcion">
                        <i class='bx bx-log-in' ></i>
                        <a href="index.php?pagina=login">Iniciar sesión</a>
                    </div>

                    <?php
                }
            ?>

        </nav>
    </div>
</div>
</header>


    
</body>
</html>