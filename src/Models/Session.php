<?php

namespace Models;

class Session
{
	protected $session;

	public function __construct()
	{
		session_start();
		$this->session = &$_SESSION;
	}

	public function add($key, $value)
	{
		$this->session[$key] = $value;	
	}

	public function getSession()
	{	return $this->session;
	}

}