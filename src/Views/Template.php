<?php

namespace Views;

class Template
{

	protected $layout;

	public function __construct($layout = '../src/Views/layout.phtml')
	{
		$this->layout = $layout;
	}

	public function render($page, $data = array())
	{
		foreach ($data as $key => $value) {
			$this->{$key} = $value;
		}

		$this->page = $page;
		require $this->layout;
	}

	public function content()
	{	require $this->page;
	}

}