<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia | IEBS</title>
</head>

<body>
    <header>
        <img src="../Asistencia/assets/img/escudoa.png" alt="escudo" id="escudo">
        <hr>
        <div class="colegio">
            <span>I</span><br><span>E</span><br><span>B</span><br><span>S</span>
        </div>
        <p class="titulo">REGISTRO DE ASISTENCIA ESCOLAR</p>
    </header>
    <section>
        <div class="block1">
            <p>
                "LA PUNTUALIDAD ES LA<br>
                CLAVE PARA UNA OPERACIÓN<br>
                FLUIDA. CONFÍA EN NUESTRO<br>
                LECTOR DE HUELLA PARA<br>
                AGILIZAR LOS ACCESOS Y<br>
                MANTENER LA PUNTUALIDAD<br>
                EN EL INGRESO".
            </p>
            <a href="login.php">
                <input type="button" value="INGRESAR">
            </a>
        </div>
        <div class="block2">
            <video src="../Asistencia/assets/img/meninos.mp4" loop autoplay preload="auto" muted></video>
        </div>
    </section>
</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        height: auto;
        height: auto;
        display: block;
    }

    body {
        background-image: url(../Asistencia/assets/img/fondo_index2.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        border-bottom: 50px white solid;
    }

    header {
        display: flex;
        color: black;
        height: 120px;
        margin-top: 2%;
        background-color: rgba(255, 255, 255, 1);
        padding-top: 10px;
        /*background-color: #9e1335;*/
        user-select: none;
    }

    #escudo {
        width: 100px;
        height: 100px;
        margin-left: 4px;
        margin-right: 4px;
    }

    hr {
        border: none;
        background-color: black;
        width: 2px;
        height: 100px;
    }

    .colegio {
        font-weight: 600;
        font-style: normal;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 120%;
        text-align: center;
        margin-left: 12.5px;
        margin-top: 7px;
    }

    .titulo {
        font-weight: 600;
        font-size: 200%;
        margin-top: 2%;
        margin-left: 18%;
    }

    section {
        display: flex;
        flex-direction: row;
        margin-top: 5%;
    }

    .block1 {
        font-style: normal;
        font-family: 'Times New Roman', Times, serif;
        color: rgba(255, 255, 255, 0.7);
        font-size: 190%;
        font-weight: 100;
        text-align: center;
        letter-spacing: 2px;
        margin: auto;
        width: auto;
        user-select: none;
    }

    .block2 {
        width: auto;
        margin: auto;
    }


    input {
        color: red;
        font-size: 100%;
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-style: normal;
        text-decoration: dashed;
        padding: 4px 40px 4px 40px;
        border: none;
        border-radius: 5px;
        margin-top: 40px;
        font-weight: bold;
    }
</style>