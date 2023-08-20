<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../html/css/paginas/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>


    <header class="header">
        <nav class="navbar">
            <!--VARIABLE GET MEDIANTE URL-->
            <a href="index.php?Pagina=inicio">Inicio</a>
        </nav>

    </header>

    <div class="background"></div>

    <div class="container">
        <div id="difuser"></div>
        <div class="content">
            <h2 class="logo"><i class='bx bxl-xing'></i>Casa Lila</h2>

            <div class="text-sci">
                <h2>Bienvenido!<br><span>A nuestro sitio web!</span></h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nemo, eligendi tenetur fugiat quas similique?</p>

                <div class="social-icons">
                    <a href=""><i class='bx bxl-linkedin'></i></a>
                    <a href=""><i class='bx bxl-facebook'></i></a>
                    <a href=""><i class='bx bxl-instagram'></i></a>
                    <a href=""><i class='bx bxl-twitter'></i></a>
                </div>
            </div>
        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form action="" method="POST">
                    <h2>Inicia sesión</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="loginSesionEmail" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <button type="button" class="show-hide" onclick="cambiarVisibilidad()"><i class='bx bx-show' id="i1"></i></button>
                        <input type="password" name="loginSesionPassword" id="contraseña" required>
                        <label>Contraseña</label>
                    </div>

                    <div class="remember-forgot">
                        
                        <!--VARIABLE GET MEDIANTE URL-->
                        <a href="index.php?subPagina=verificarEmail">¿Olvidaste tu contraseña?</a>
                    </div>

                    <button type="submit" class="btn" name="btnLoginIniciarSesion">Iniciar sesión</button>

                    <div class="login-register">
                        <p>¿No tiene una cuenta? <a href="#" class="register-link">Cree una</a></p>
                    </div>

                    <?php

                        $ingreso = new controladorLogin();
                        $ingreso -> ctrIniciarSesion();

                    ?>


                    <?php
                    
                    $registro = controladorLogin::ctrRegistro();

                    if($registro == "ok"){
                    
                        echo '
                        <script>

                        if(window.history.replaceState){
                            
                        window.history.replaceState(null, null, window.location.href);
                        }

                        </script>
                        ';

                        echo'<div class="alert alert-success">El usuario se ha registrado exitosamente</div>';
                    }

                    if($registro == "error"){
                        echo '
                        <script>

                        if(window.history.replaceState){
                            
                        window.history.replaceState(null, null, window.location.href);
                        }

                        </script>
                        ';

                        echo'<div class="alert alert-danger">El usuario no se registro</div>';
                    }

                    ?>

                </form>
            </div>

            <div class="form-box register">
                <form action="" method="POST">
                    <h2>Registrate</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></i></span>
                        <input type="text" name="loginRegistroNombre" required>
                        <label>Nombre</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></i></span>
                        <input type="text" name="loginRegistroApellidos" required>
                        <label>Apellidos</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="loginRegistroEmail" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <button type="button" class="show-hide" onclick="cambiarVisibilidad2()"><i class='bx bx-show' id="i2"></i></button>
                        <input type="password" name="loginRegistroPassword" id="contraseña2" required>
                        <label>Contraseña</label>
                    </div>

                    <button type="submit" class="btn" name="btnLoginRegistro">Registrarme</button>

                    <div class="login-register">
                        <p>¿Ya tiene una cuenta? <a href="#" class="login-link">Inicia sesión</a></p>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script src="../../html/js/login.js"></script>

</body>
</html>