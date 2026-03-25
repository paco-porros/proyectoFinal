<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-container">
        <h2>Registrate!</h2>
        <form method="POST" action="validarRegistro.php">
        <div class="form-group">
            <label for="nombre_completo">Nombre Completo:</label>
            <input type="text" id="nombre_completo" name="nombre_completo" placeholder="" value="" required>
        </div>
        <div class="form-group">
            <label for="">Correo electronico:</label>
            <input type="email" id="email" name="email" placeholder="" value="" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="" value=""  required>
        </div>
        <button type="submit" class="login-btn">Registrarse</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>