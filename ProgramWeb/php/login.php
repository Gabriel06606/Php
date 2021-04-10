
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.md5.js"></script>
    <script src="js/sjcl.js"></script>
    <script src="js/index.js"></script>

</head>

<body>
    <div class="login-box">
        <h1>Login</h1>

        <div class="textbox">
            <input type="text" id="tNome" placeholder="Nome" name="Nome"/> <br>
        </div>

        <div class="textbox">
            <input type="password" placeholder="Senha"  id="lSenha">
        </div>

        <br>

        <div class="cadastro" id="tCadastro">
            Sem cadastro ? <a href="./cadastro.php">Cadastre - se</a>
        </div>

        <br>

        <div class>
            <button class="button" id="lEnviar">Enviar</button>
        </div>
    </div>
</body>
</html>