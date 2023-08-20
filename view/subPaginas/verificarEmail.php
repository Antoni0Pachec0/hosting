<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../html/css/verificar_email.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Cambiar Contraseña</title>
</head>
<body>
    
<div class="container">
        <div class="form-box">

            <form action="" method="POST">
                <h2>Recuperar contraseña</h2>
                <h4>Ingresa Tu Email</h4>

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="email" name="txtValidarEmail" required>
                    <label>Email</label>
                </div>

                <button type="submit" class="btn" name="btnValidarEmail">Enviar</button>

                <?php
                if(isset($_POST['btnValidarEmail'])){

                    $ValidarEmail = new controladorLogin();
                    $ValidarEmail->ctrValidarEmail();
                }
                ?>

            </form>

        </div>
</div>