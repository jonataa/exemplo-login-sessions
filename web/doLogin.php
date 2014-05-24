<?php

$usuario = $_POST['usuario'];
$senha 	 = $_POST['senha'];

require __DIR__ . '/../src/Models/User.php';
require __DIR__ . '/../src/Models/Session.php';
require __DIR__ . '/../src/Controllers/Login.php';

$loginController = new Controllers\Login;
$loginController->doLogin($usuario, $senha);