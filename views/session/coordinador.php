<head>
    <meta charset="UTF-8">
</head>

<body>
    <header>
        <div class="uno">
            <img src="../Asistencia/assets/img/escudoa.png" alt="">
            <hr>
            <div class="tres">
                <span>I</span><span>E</span><span>B</span><span>S</span>
            </div>
        </div>
        <div class="dos">
            <h1>REGISTRO DE ASISTENCIA ESCOLAR</h1>
        </div>
        <div class="four">
            <?php
            if (isset($_SESSION['select'])) {
                echo '<a href="models/logOut.php">Cerrar</a>';
            }
            ?>
        </div>
    </header>
    <section>
        <li type="none">COORDINACIÓN</li>
        <?php
        if (isset($_SESSION['nombre'])) {
            echo "<h1>¡Bienvenido " . $_SESSION['nombre'] . "!</h1>";
        }
        ?>
        <div class="seccion">
            <button style="border-left: 8px solid black;" onclick="location.href='views/table/llegadast.php'">
                LLEGADAS TARDES
            </button>
            <button style="border-right: 8px solid black;" onclick="location.href='views/table/inasistencia.php'">
                INASISTENCIAS
            </button>

        </div>
    </section>

</body>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        background-color: #9e1335;
        height: auto;
        width: auto;
        display: block;
        border-bottom: #FFF 10px solid;
    }

    header {
        background: #FFF;
        display: flex;
        flex-direction: row;
        height: 123.4px;
        user-select: none;
        justify-content: space-between;
        border-bottom: 3px black solid;
    }

    .uno {
        display: flex;
        text-align: center;

    }


    .uno img {
        width: 120px;
    }

    .uno hr {
        margin: auto;
        height: 110px;
        border-right: black solid 2px;
    }

    .dos {
        font-family: sans-serif;
        color: black;
        display: flex;
    }

    .dos h1 {
        margin: auto;
    }

    .tres {
        display: flex;
        flex-direction: column;
        color: black;
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

    section {
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    section li {
        padding: 10px 20px 10px 20px;
        border: 10px white solid;
        width: 180px;
        border-radius: 3em;
        color: #FFF;
        font-family: sans-serif;
        margin-top: 10px;
        margin-left: 10px;
        font-size: 23px;
        user-select: none;
    }

    section h1 {
        color: #FFF;
        font-family: sans-serif;
        margin-top: 20px;
        margin-left: 10px;
        font-size: 25px;
        user-select: none;
    }

    .seccion {
        width: auto;
        height: auto;
        margin: auto;
        margin-top: 9%;
        display: flex;
    }

    .seccion button{
        font-size: 25px;
        padding: 40px;
        font-family: sans-serif;
        font-weight: bold;
        user-select: none;
    }

</style>