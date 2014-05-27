<?php

$root = dirname(__DIR__);

$srcFolder = function ($className, $path = 'src/%s.php') use ($root) {	
	$file  = $root . DIRECTORY_SEPARATOR;
	$file .= str_replace('\\', DIRECTORY_SEPARATOR, sprintf($path, $className));		
	require $file;
};

spl_autoload_register($srcFolder);