<?php

require_once 'libs/Router.php';
require_once 'api/ApiController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');


//creo router
$router = new Router();

//traer todos los comentarios
$router->addRoute('comments', 'GET', 'ApiController', 'getComments');
//traer un comentario
$router->addRoute('comments/:ID', 'GET', 'ApiController', 'getPlayerComments');
//borrar un comentario
$router->addRoute('comments/:ID', 'DELETE', 'ApiController', 'deleteComment');
//crear un comentario
$router->addRoute('comments', 'POST', 'ApiController', 'insertComment');
//actualizar un comentario
$router->addRoute('comments/:ID', 'PUT', 'ApiController', 'updateComment');

//para que rutee
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);