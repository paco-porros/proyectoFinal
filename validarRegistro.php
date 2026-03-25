<?php
    header("Content-type: application/json");

    require __DIR__ . "/bd.php";

    $nombre = trim($_POST['nombre'] ?? "");
    $email  = trim($_POST['email'] ?? "");
    $contrasena = trim($_POST['contraseña'] ?? "");

    if ($nombre === "" || $email === "" || $contrasena === "") {
        echo json_encode(["ok" => false, "mensaje"=> "Nombre, email y contrasena son obligatorios"]);
        exit;
    }

    try {
        
        $consulta = mysqli_prepare($conexionBd, "INSERT INTO contactos (nombre, correo, contraseña) VALUES (?, ?, MD5(?))");

        mysqli_stmt_bind_param($consulta, "sss", $nombre, $email, $contrasena);
        mysqli_stmt_execute($consulta);
        mysqli_stmt_close($consulta);
       

        echo json_encode(["ok"=> true, "mensaje" => "Contacto guardado correctamente"]);
    

    } catch (mysqli_sql_exception $error) {
       echo json_encode(["ok"=> false, "mensaje" => "Error al guardar" . $error->getMessage()]);
    }