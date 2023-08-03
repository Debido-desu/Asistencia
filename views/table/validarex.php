<?php
include '../../config/db.php';


if (isset($_POST['valida']) && isset($_POST['id']) && isset($_POST['motivo'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $validar = validar($_POST['valida']);
    $id = validar($_POST['id']);
    $motivo = validar($_POST['motivo']);

    $sqlin = "UPDATE estudiantes SET validar='$validar', motivo='$motivo' WHERE id = $id";
    $resultin = mysqli_query($conectar, $sqlin);

    if ($resultin) {
        header("Location: inasistencia.php?error= Datos agregados con éxito.");
        exit();
    } else {
        header("Location: inasistencia.php?error= Datos <b>NO</b> agregados..");
        exit();
    }
} else {
    header("Location: inasistencia.php");
    exit();
}
