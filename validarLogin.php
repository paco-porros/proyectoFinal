<?php
    header("Content-type: application/json");
    require __DIR__ . "/bd.php";

    $resultado = mysqli_query($conexionBd,"SELECT  `correo`, `contraseña` FROM `clientes`");

    $correoUsuario =  trim( $_POST['correo' ]?? "");
    $contraseñaUsuario = trim($_POST['contraseña']?? "");
    

    while ($fila = mysqli_fetch_assoc($resultado)) {
        if ($fila["correo"] == $correoUsuario) {
            if ($fila["contraseña"] == $contraseñaUsuario) {
                header("Location: index.html");
            }
        }
    }
