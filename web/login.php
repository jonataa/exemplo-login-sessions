<?php

session_start();
if (isset($_SESSION['messageError'])) {
	$messageError = $_SESSION['messageError'];
	unset($_SESSION['messageError']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" >
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1>Login</h1>
	<form action="doLogin.php" method="POST">
		<fieldset>
			<label for="usuario">Usuário</label>
			<input name="usuario" id="usuario" class="input-nome" />
		</fieldset>
		<fieldset>
			<label for="senha">Senha</label>
			<input name="senha" id="senha" type="password" />
		</fieldset>
		<?php if (isset($messageError)): ?>
		<?= $messageError; ?>
		<?php endif; ?>
		<button type="submit">Entrar</button>
	</form>
</body>
</html>









