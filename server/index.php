<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Content-Type: application/json; charset=UTF-8");

require_once('controller/Server.php');

require '../vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'lms_student';
DB::$encoding = 'utf8';


use Controller\Server\Server;


use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;


$router = new RouteCollector();
$user = new User();


date_default_timezone_set('Asia/Manila');


#User.php

// $router->post('lms/studentapi/get-single-message', fn() => $user->get_single_message());



$dispatcher = new Dispatcher($router->getData());
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
echo $dispatcher->dispatch($httpMethod, $uri), "\n";

    

?>