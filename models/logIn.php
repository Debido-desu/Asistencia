<?php 

session_start();
include("../config/db.php");


if (isset($_POST['select']) && isset($_POST['documento']) && isset($_POST['contraseña'])){
    function validar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $base = validar($_POST['select']);
    $documento = validar($_POST['documento']);
    $contraseña = validar($_POST['contraseña']);

    if (empty($base)){
        header("Location: ../login.php?error= El perfil es requerido");
        exit();
    }elseif (empty($documento)){
        header("Location: ../login.php?error= El documento es requrido");
        exit();
    }elseif (empty($contraseña)){
        header("Location: ../login.php?error= La contraseña es requerida");
        exit();
    }else{
//        $contraseña = md5($contraseña);
        $sql = "SELECT * FROM $base WHERE documento= '$documento' AND contraseña = '$contraseña'";
        $result = mysqli_query($conectar, $sql);

        if (mysqli_num_rows($result)=== 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['documento'] === $documento && ($row['contraseña'] === $contraseña)){
                //$_SESSION['cedula'] = $row['cedula'];
                $_SESSION['nombre'] = $row['nombre'];
                //$_SESSION['id'] = $row['id'];
                $_SESSION['select'] = $base;
                header("Location: ../inicio.php");
                exit();
            }else{
                header("Location: ../login.php?error=El documento o la contraseña son incorrectas");
                exit();
            }
        }else{
            header("Location: ../login.php?error=El documento o la contraseña son incorrectas");
            exit();
        }
    }
}else{
    header("Location: ../login.php");
    exit();
}
