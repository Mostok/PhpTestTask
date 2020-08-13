<?php
// 1. Общие настройки
session_start();
// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once ROOT . '/Components/Router.php';

// 3. Соединение с бд
require_once ROOT . "/Components/DataBase.php";
$db = new DataBase;
$db = $db->link;

// 4. вывод Router

$router = new Router();
$router->run();

require_once ROOT . "/Views/header.php";
