<?php

include '../../config/db.php';
require '../layout/headerc.php';


$sql = "SELECT id,nombre,apellido,grado,entrada,validar FROM estudiantes WHERE entrada is not null";
$result = mysqli_query($conectar, $sql);
?>


<head>
    <title>Llegadas Tardes</title>
</head>

<body>
    <a href="../../inicio.php">
        <div class="volver">
            <div class="vol"></div>
        </div>
    </a>
    <main>
        <div>
            <h1>LLEGADAS TARDES</h1>
        </div>
        <section>
            <?php

            echo "<table cellspancing='0'>";
            echo "<tr>";
            echo "<th>Nombre del estudiante</th>";
            echo "<th>Grado</th>";
            echo "<th>Hora de llegada</th>";
            echo "<th>Excusa</th>";
            echo "</tr>";

            while ($dato = mysqli_fetch_array($result)) {

            ?>
                <tr>
                    <td>
                        <?php echo $dato['apellido'] ?>
                        <?php echo $dato['nombre'] ?>
                    </td>

                    <td>
                        <?php echo $dato['grado'] ?>
                    </td>                    
                    <td>
                        <?php
                        $time = $dato['entrada'];
                        $times = date('H:i:s', strtotime($time));
                        echo $times;
                         ?>
                    </td>
                    <td>
                    <form action="validarexlt.php" method="post">
                            <?php
                            if ($dato['validar'] === null) {
                                #    echo "<input type='button'  value='Inválido' name='validar'>";
                                #} else {
                                #    echo "<input type='button'  value='Válido' name='validar'>";
                                echo "<input type='hidden' value='$dato[id]' name='id'>";
                                echo "<select name='valida'>
                                <option value='0'>Inválido</option>
                                <option value='1'>Válido</option>
                                </select>";
                                $dato1 = $dato['id'];
                                echo "<input type='submit' value='Envíar'>";
                            } else {
                                if ($dato['validar'] === "0") {
                                    echo "Inválido";
                                } else {
                                    echo "Válido";
                                }
                            }
                            ?>
                        </form>
                    </td>
                </tr>


            <?php
            }

            echo "</table>";
            mysqli_close($conectar)
            ?>
        </section>
    </main>
</body>

<?php

require "../layout/footerc.php";

?>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .volver {
        width: 50px;
        height: 50px;
        background-color: #9e1335;
        border-radius: 100%;
        display: flex;
        margin: 10px;
        position: fixed;
    }

    .vol {
        border-top: 20px solid white;
        border-right: 20px solid transparent;
        margin: auto;
        margin-left: 20px;
        rotate: -45deg;
    }

    footer {
        background: #9e1335;
        color: white;
        text-align: center;
        position: fixed;
        z-index: 0;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        font-family: sans-serif;
    }

    main {
        display: flex;
        width: auto;
        height: auto;
        flex-direction: column;
    }

    main div {
        font-family: sans-serif;
        margin: 40px auto 20px;
        background-color: #9e1335;
        color: white;
        padding: 5px 20px;
        border-radius: 2em;
    }

    section {
        margin: auto;
    }

    section table,
    tr,
    td,
    th {
        border: 2px solid black;
        border-collapse: collapse;
    }

    section table tr,
    td,
    th {
        width: 300px;
        height: 60px;
        text-align: center;
        font-family: sans-serif;
    }

    section table tr:nth-child(odd) td {
        background-color: #e0e0e0;
    }

    section table {
        width: 900px;
    }


    header {
        background: #9e1335;
        display: flex;
        flex-direction: row;
        height: 123.4px;
        user-select: none;
    }

    .uno {
        position: fixed;
        display: flex;
        text-align: center;

    }

    .uno h4 {
        margin: auto;
        color: white;
        font-family: sans-serif;
    }

    .uno img {
        width: 120px;
    }

    .uno hr {
        margin: auto;
        height: 110px;
        border-right: white solid 2px;
    }

    .dos {
        margin: auto;
        font-family: sans-serif;
        color: white;

    }

    .tres {
        display: flex;
        flex-direction: column;
        color: white;
        font-family: sans-serif;
        margin: auto;
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
    }

    .four a {

        color: black;
        text-decoration: none;
        margin: auto;
        color: #FFF;
        background: #000;
        font-family: sans-serif;
        font-size: 20px;
        padding: 10px;
        border-radius: .7em;

    }

    .four {
        display: flex;
        width: 130px;
    }
</style>