<?php
    if(isset($_GET['email']) && isset($_GET['token'])){
        $email = $_GET['email'];
        $token = $_GET['token'];
    }else{
        header("Location: ../error404");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
</head>
<body>

    <div class="logreg-box">
        <div class="form-box login">

            <form action="" method="POST">
                <h2>Ingresa Codigo de verificacion</h2>

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="text" name="txtCambiarContraseña1" required>
                    <label>Ingresa la nueva contraseña: </label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="text" name="txtCambiarContraseña2" required>
                    <label>Vuelve a escribir la contraseña: </label>
                </div>

                <button type="submit" class="btn" name="btnCambiarContraseña">Enviar</button>

                <input type="hidden" readonly name="txtVerificarEmail" value="<?php echo htmlspecialchars($email); ?>">
                <input type="hidden" readonly name="txtVerificarToken" value="<?php echo htmlspecialchars($token); ?>">

            </form>

            <?php
                if(isset($_POST['btnCambiarContraseña'])){

                    $ValidarEmail = new controladorLogin();
                    $ValidarEmail->ctrCambiarContraseña($email, $token);
                }
            ?>

        </div>
    </div>
    
</body>
</html>