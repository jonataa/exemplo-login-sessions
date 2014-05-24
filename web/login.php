<?php

require __DIR__ . '/../src/Models/Session.php';

$session = new Models\Session;
$messageError = $session->get('messageError');
$session->remove('messageError');

require '../src/Views/login.phtml';









