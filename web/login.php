<?php

require __DIR__ . '/../vendor/autoload.php';

$session = new Models\Session;
$messageError = $session->get('messageError');
$session->remove('messageError');

require '../src/Views/login.phtml';