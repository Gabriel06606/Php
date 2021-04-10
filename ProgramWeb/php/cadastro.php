<?php
session_start();
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/jquery.md5.js"></script>
		<script src="../js/sjcl.js"></script>
		<script src="../js/index.js"></script>
		<script src="https://raw.github.com/danpalmer/jquery.complexify.js/master/jquery.complexify.js"></script>

	</head>
	<body>
		<div class="login-box">
			<h1>Cadastro</h1>
			<div class="textbox">
				
				<input method="POST" action="acessar.php" name="Nome" type="text"  id="tNome" placeholder="Nome"/> <br>
			</div>

			<div action=""class="textbox">
				<input type="text" id="idSobrenome"  placeholder="Sobrenome" name="Sobrenome"/> <br>
			</div>

			<div class="textbox">
				<input type="text" id="idUsuario" placeholder="Usuario" name="Usuario"/> <br>
			</div>

			<div class="textbox">
				<input type="password" placeholder="Senha" id="idSenha", name="Senha">
			</div>
			<div id="pass-info"></div>
			<div class="textbox">
				<input type="password" placeholder="Confirme sua senha"  id="tSenha2">
			</div>

			<div class="textbox" style="width: 70px;">
				<input type="text" id="idIdade"  placeholder="Idade" name="Idade" style="width: 50px;"/> <br>
			</div>

			<br>
			<div class>
				<a href="login.php"><button class="button" id="bEnviar" name="enviar" onclick="window.location.href ='login.php'" >Enviar</button></a>
			</div>

			<?php
			
			?>


		</div>
	</body>
</html>