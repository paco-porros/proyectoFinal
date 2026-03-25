<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="login-container">
        <h2>Bienvenido</h2>
        <form method="post" action="validarLogin.php">

            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="" class="form-control" required>
            </div>

            <div class="checkbox-container">
                <input type="checkbox" id="ver-contraseña">
                <label for="show-password">Mostrar contraseña</label>
            </div>

            <button type="submit" class="boton-login">Entrar</button>

        </form>

        <div class="register">
            <p>¿No tienes una cuenta? <a style="color: rgb(221, 99, 51);" href="registrarse.php"> Crear cuenta</a>
            </p>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>