<?php

define('ROOT_SRC', dirname(__DIR__));

include ROOT_SRC . '/Models/Session.php';
$session = new Models\Session;

include ROOT_SRC . '/Models/User.php';
$user = new Models\User($session);

if (! $user->isLogged()) {
	$_SESSION['messageError'] = 'Você não tem acesso!';
	header('Location: login.php');
}