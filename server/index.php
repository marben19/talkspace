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
DB::$dbName = 'app_db';
DB::$encoding = 'utf8';


use Controller\Server\Server;


use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;


$router = new RouteCollector();
$server = new Server();


date_default_timezone_set('Asia/Manila');


#User.php

$router->get('talkspace/server/get-teachers', fn() => $server->get_teachers());
$router->post('talkspace/server/signin', fn() => $server->login_user());
$router->post('talkspace/server/signup', fn() => $server->register_user());
$router->post('talkspace/server/logout', fn() => $server->logout());



$dispatcher = new Dispatcher($router->getData());
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
echo $dispatcher->dispatch($httpMethod, $uri), "\n";

    

?>