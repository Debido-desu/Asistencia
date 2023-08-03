<head>
    <meta charset="UTF-8">
    <title>Página de Acceso</title>
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
    </header>
    <section> 
        <div class="form">
            <div class="right">
                <form action="../Asistencia/models/logIn.php" method="POST">
                    <label for="perfil">PERFIL</label><br>
                    <select name="select" id="select1">
                        <option value="">Seleccionar</option>
                        <option value="coordinador">Coordinador(a)</option>
                        <option value="docentes">Docente</option>
                    </select><br><br>
                    <label for="cedula">DOCUMENTO</label><br>
                    <input id="input1" type="number" name="documento" min="0"><br><br>
                    <label for="password">CONTRASEÑA</label><br>
                    <input id="input1" type="password" name="contraseña"><br>
                    <?php
                    if (isset($_GET['error'])) {
                    ?>
                        <p class="error">
                            <?php
                            echo $_GET["error"]
                            ?>
                        </p>
                    <?php
                    }
                    ?>
                    <button type="submit" id="input2">ENVIAR</button>
                </form>
                <h4>¿Olvidaste la contraseña?</h4>
            </div>
            <hr>
            <div class="left">
                <p>
                    Si no tienes un <br>
                    usuario y contraseña,<br>
                    por favor dar <b>click</b> en <br>
                    registrarse.
                </p>
                <button type="submit" id="input2" onclick='location.href="singup.php"'>REGISTRARSE</button>
            </div>
        </div>
    </section>

</body>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        background-size: cover;
        background-repeat: no-repeat;
        height: auto;
        width: auto;
        display: block;
    }

    section {
        display: flex;
        width: auto;
        height: auto;
    }

    .form {
        width: auto;
        height: auto;
        margin: auto;
        margin-top: 3%;
        padding: 20px 20px 10px 20px;
        text-align: center;
        border: 10px rgba(200, 200, 200, 1) solid;
        box-shadow:
            10px 10px 10px gray;
        display: flex;
        flex-direction: row;
    }


    form label {
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        float: left;
        padding-left: 10px;
        padding-bottom: 5px;
        user-select: none;
        font-weight: bold;
    }

    #select1 {
        background: rgba(255, 255, 255, 1);
        width: 430px;
        height: 40px;
        padding: 0 10px 0 10px;
        border-radius: 1em;
        font-family: Helvetica, sans-serif;
        font-size: 15px;
        border: 2px black solid;
    }

    #select1 option {
        background: rgba(255, 255, 255, 1);
    }

    #input1 {
        border: 2px black solid;
        background: rgba(255, 255, 255, 1);
        width: 430px;
        height: 40px;
        padding: 0 10px 0 10px;
        border-radius: 1em;
        font-family: Helvetica, sans-serif;
        font-size: 15px;
    }

    #input2 {
        border: none;
        width: 160px;
        height: 60px;
        font-family: Arial, Helvetica, sans-serif;
        color: rgba(255, 255, 255, 1);
        background: #9e1335;
        margin-top: 65px;
        border-radius: 1em;
        font-size: 20px;
        font-weight: bold;
        user-select: none;
    }



    .error {
        user-select: none;
        position: fixed;
        z-index: 0;
        margin-left: 10px;
        width: 390px;
        padding: 7px;
        background: #9e1335;
        margin-top: 13px;
        font-family: Arial, Helvetica, sans-serif;
        border: 2px #9e1355 inset;
        color: rgba(255, 255, 255, 1);
        border-radius: 1em;
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

    .form hr {
        margin: 20px;
        border-left: gray 3px solid;
        border-radius: 1em;
    }

    .right h4{
        margin: 20px;
        font-family: sans-serif;
    }

    .left p{
        font-family: sans-serif;
        font-size: 25px;
        margin: 70px 30px 0 30px;
        user-select: none;
    }
</style>
