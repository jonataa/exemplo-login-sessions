<?php

$usuario = $_POST['usuario'];
$senha 	 = $_POST['senha'];

require '../src/Models/User.php';
require '../src/Models/Session.php';

$userModel = new Models\User;
if ($userModel->isExists($usuario, $senha)) {
	// carrega a sessão	
	$sessionModel = new Models\Session;	
	$sessionModel->add('login', '1');	

	// redireciona para área restrita		
	header('Location: area_restrita.php');	
} else {
	header('Location: login.php');	
}