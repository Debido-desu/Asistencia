<?php

include("../config/db.php");

if (isset($_POST['select']) && isset($_POST['correo']) && isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['documento'])  && isset($_POST['password'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $base = validar($_POST['select']);
    $correo = validar($_POST['correo']);
    $nombre = validar($_POST['nombre']);
    $apellidos = validar($_POST['apellidos']);
    $documento = validar($_POST['documento']);
    $contraseña = validar($_POST['password']);

    if (empty($base)) {
        header("Location: ../singup.php?error= El perfil es requerido.");
        exit();
    } elseif (empty($correo)) {
        header("Location: ../singup.php?error= El E-Mail es requerido.");
        exit();
    } elseif (empty($nombre)) {
        header("Location: ../singup.php?error= El nombre es requerido.");
        exit();
    } elseif (empty($apellidos)) {
        header("Location: ../singup.php?error= Los apellidos son necesarios.");
        exit();
    } elseif (empty($documento)) {
        header("Location: ../singup.php? error= El documento es necesario.");
        exit();
    } elseif (empty($contraseña)) {
        header("Location: ../singup.php?error= La contraseña es requerida.");
        exit();
    } else {
        //        $contraseña = md5($contraseña);
        $sqlvc = "SELECT * FROM $base WHERE correo='$correo'";
        $result = mysqli_query($conectar, $sqlvc);

        if (mysqli_num_rows($result) === 1) {
            header("Location: ../singup.php?error= El E-Mail ya se encuentra registrado.");
            exit();
        } else {
            $sqlin = "INSERT INTO $base(nombre, documento, correo, contraseña) VALUES ('$nombre $apellidos','$documento','$correo','$contraseña')";
            $resultin = mysqli_query($conectar, $sqlin);

            if ($resultin) {
                header("Location: ../singup.php?error= Datos agregados con éxito.");
                exit();
            } else {
                header("Location: ../singup.php?error= Datos <b>NO</b> agregados..");
                exit();
            }
        }
    }
} else {
    header("Location: ../singup.php");
    exit();
}
