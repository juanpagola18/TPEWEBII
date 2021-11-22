<?php

require_once 'libs/Router.php';
require_once 'api/ApiController.php';

//creo router
$router = new Router();

//traer todos los comentarios
$router->addRoute('comments', 'GET', 'ApiController', 'getComments');
//traer un comentario
$router->addRoute('comments/:ID', 'GET', 'ApiController', 'getComment');
//borrar un comentario
$router->addRoute('comments/:ID', 'DELETE', 'ApiController', 'deleteComment');
//crear un comentario
$router->addRoute('comments', 'POST', 'ApiController', 'insertComment');
//actualizar un comentario
$router->addRoute('comments/:ID', 'PUT', 'ApiController', 'updateComment');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);