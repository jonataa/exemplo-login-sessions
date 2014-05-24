<?php

namespace Controllers;

class Login
{

	public function doLogin($usuario, $senha)
	{		
		$userModel = new \Models\User;		
		$sessionModel = new \Models\Session;
		if ($userModel->isExists($usuario, $senha)) {			
			$sessionModel->add('login', '1');				
			header('Location: area_restrita.php');	
		} else {
			$sessionModel->add('messageError', 'Usuário ou senha inválida!');
			header('Location: login.php');	
		}
	}

}