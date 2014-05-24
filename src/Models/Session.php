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
	{	$this->session[$key] = $value;	
	}

	public function get($key)
	{	return isset($this->session[$key]) ? $this->session[$key] : false;
	}	

	public function remove($key)
	{	unset($this->session[$key]);
	}

	public function getSession()
	{	return $this->session;
	}

}