<?php

require __DIR__ . '/../vendor/autoload.php';

$session = new Models\Session;
$messageError = $session->get('messageError');
$session->remove('messageError');

$t = new Views\Template;
$t->render('../src/Views/login/login.phtml', ['messageError' => $messageError]);