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

    if ($motivo !== '') {
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
        echo '<script language="javascript">alert("No se ha seleccionado un motivo.");window.location.href="inasistencia.php?error= No se han seleccionado un motivo."</script>';
        exit();
    }
} else {
    header("Location: inasistencia.php");
    exit();
}
