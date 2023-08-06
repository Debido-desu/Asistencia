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
            <div class="left">
                <h1>
                    ¿Ya tienes una cuenta?
                </h1>
                <button type="submit" id="input2" onclick='location.href="login.php"'>INICIAR SESSIÓN</button>
            </div>
            <hr>
            <div class="right">
                <h1>
                    <form action="../Asistencia/models/singup.php" method="post">
                        <table class="datosform">
                            <tr>
                                <td>
                                    <label for="perfil">PERFIL:</label>
                                </td>
                                <td>
                                    <label for="correo">E-MAIL:</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="select" id="select1">
                                        <option value="">Seleccionar</option>
                                        <option value="coordinador">Coordinador(a)</option>
                                        <option value="docentes">Docente</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="email" name="correo" id="">
                                </td>
                            </tr>
                            <tr>
                                <td><label for="nombre">NOMBRE:</label></td>
                                <td><label for="apellidos">APELLIDOS:</label></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="nombre"></td>
                                <td><input type="text" name="apellidos"></td>
                            </tr>
                            <tr>
                                <td><label for="documento">DOCUMENTO:</label></td>
                                <td><label for="password">CONTRASEÑA:</label></td>
                            </tr>
                            <tr>
                                <td><input type="number" name="documento"></td>
                                <td><input type="password" name="password"></td>
                            </tr>
                        </table>
                        <table class="term">
                            <tr>
                                <td><input type="checkbox" name="terv" id="terv" value="1"></td>
                                <td>Estoy de acuerdo con los terminos de uso y politicas de privacidad.</td>
                            </tr>
                        </table>
                        <table class="errorta">
                            <tr>
                                <td>
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
                                </td>
                            </tr>
                        </table>
                        <input type="submit" value="CONTINUAR" id="input2">
                    </form>
                </h1>
            </div>
        </div>
    </section>

</body>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .datosform {
        font-family: sans-serif;
        font-weight: bold;
        margin: auto;
    }

    .term {
        padding-top: 20px;
        margin: auto;
        font-family: sans-serif;
        font-size: 15px;
    }

    #select1 {
        background: rgba(255, 255, 255, 1);
        width: 230px;
        height: 35px;
        padding: 0 10px 0 10px;
        border-radius: 1em;
        font-family: Helvetica, sans-serif;
        font-size: 15px;
        border: 2px black solid;
    }

    .datosform input {
        width: 230px;
        height: 35px;
        border: 2px black solid;
        border-radius: 1em;
        padding-left: 10px;
        font-family: sans-serif;
    }

    .datosform tr td {
        padding: 6px 8px 3px 8px;
    }



    .left {
        margin: auto;
        font-family: sans-serif;
        font-size: 15px;
    }

    .right {
        margin: auto;
    }

    .form hr {
        margin: 20px;
        border-left: gray 3px solid;
        border-radius: 1em;
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


    #input2 {
        border: none;
        width: 160px;
        height: 60px;
        font-family: Arial, Helvetica, sans-serif;
        color: rgba(255, 255, 255, 1);
        background: #9e1335;
        margin-top: 60px;
        margin-bottom: 20px;
        border-radius: 1em;
        font-size: 20px;
        font-weight: bold;
        user-select: none;
    }

    .errorta {
        margin: auto;
    }

    .error {
        user-select: none;
        position: fixed;
        z-index: 0;
        margin-left: -200px;
        width: 390px;
        padding: 7px;
        background: #9e1335;
        margin-top: 13px;
        font-family: Arial, Helvetica, sans-serif;
        border: 2px #9e1355 inset;
        color: rgba(255, 255, 255, 1);
        border-radius: 1em;
        text-align: center;
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
</style>