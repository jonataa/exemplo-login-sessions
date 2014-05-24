<?php

namespace Models;

class User
{

	protected $session;

	public function __construct(Session $session = null)
	{
		$this->session = $session;
	}

	private function getUsers()
	{
		$users[] = ['usuario' => 'usuario', 'senha' => 'usuario'];
		$users[] = ['usuario' => 'usuario2', 'senha' => 'usuario2'];
		return $users;
	}

	public function isExists($usuario, $senha)
	{
		$exists = false;
		foreach($this->getUsers() as $user) 
			if ($usuario === $user['usuario']
					&& $senha === $user['senha'])
			{
				$exists = true;		
				break;	
			}			

		return $exists;
	}

	public function isLogged()
	{				
		$session = $this->session->getSession();
		return isset($session['login']) 
			   || $session['login'] === '1';
	}

}





