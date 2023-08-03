<?php
include 'config/db.php';

session_start();

if (isset($_SESSION['select'])) {
    switch ($_SESSION['select']) {
        case 'rector':
            require 'views/session/rector.php';
            break;
        case 'coordinador':
            require 'views/session/coordinador.php';
            break;
        case 'docentes':
            require 'views/session/docentes.php';
            break;
    }
} else {
    echo "<h1>Debes inicar sesion!!</h1>";
}


//if (isset($_SESSION['select'])) {
  //  echo '<a href="models/logOut.php">Cerrar</a>';
//}

?>

<head>
    <title>
        <?php
        if (isset($_SESSION['select'])) {
            switch ($_SESSION['select']) {
                case 'rector':
                    echo "Inicio rectoria";
                    break;
                case 'coordinador':
                    echo "Inicio coordinación";
                    break;
                case 'docentes':
                    echo "Inicio docentes";
                    break;
            }
        } else {
            echo "Debes Iniciar Sesión";
        }
        ?>
    </title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>