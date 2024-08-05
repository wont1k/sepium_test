<?php 
require_once __DIR__ . "/config/database.php";
require_once __DIR__ . '/app/models/user.php';
require_once __DIR__ . "/app/Router.php";

$router = new Router($mysql);
$router->route();

