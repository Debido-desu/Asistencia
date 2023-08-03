<?php
include '../../config/db.php';


if (isset($_POST['valida']) && isset($_POST['id'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $validar = validar($_POST['valida']);
    $id = validar($_POST['id']);

    $sqlin = "UPDATE estudiantes SET validar='$validar' WHERE id = $id";
    $resultin = mysqli_query($conectar, $sqlin);

    if ($resultin) {
        header("Location: llegadast.php?error= Datos agregados con éxito.");
        exit();
    } else {
        header("Location: llegadast.php?error= Datos <b>NO</b> agregados..");
        exit();
    }
} else {
    header("Location: llegadast.php");
    exit();
}
