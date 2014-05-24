<?php

require __DIR__ . '/../src/Models/Session.php';

$session = new Models\Session;
$session->remove('login');
header('Location: login.php');