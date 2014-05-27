<?php

$usuario = $_POST['usuario'];
$senha 	 = $_POST['senha'];

require __DIR__ . '/../vendor/autoload.php';

$loginController = new Controllers\Login;
$loginController->doLogin($usuario, $senha);