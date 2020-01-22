<?php

require_once 'backend/routing.php';

session_start();

$router = new Routing();
$router->run();

?>
