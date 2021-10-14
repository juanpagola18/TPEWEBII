<?php
require_once "Controller/PlayerController.php";
require_once "Controller/LoginController.php";
require_once "Controller/HomeController.php";
require_once "Controller/TeamController.php";
require_once "Controller/EditController.php";
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}
$params = explode('/', $action);

$playersController = new PlayerController();
$loginController = new LoginController();
$homeController = new HomeController();
$teamsController = new TeamController();
$editController = new EditController();


// determina que camino seguir según la acción
switch ($params[0]) {
    case 'loginForm': 
        $loginController->login(); 
        break;
    case 'register': 
        $loginController->register(); 
        break;
    case 'registerUser': 
        $loginController->registerUser(); 
        break;
    case 'logout': 
        $loginController->logout(); 
        break;
    case 'verify': 
        $loginController->verifyLogin(); 
        break;
    case 'home': 
        $homeController->showHome(); 
        break;
    case 'players':
        $playersController->showPlayers();
        break;
    case 'showPlayer':
        $playersController->showPlayer($params[1]);
        break;
    case 'teams':
        $teamsController->showTeams();
        break;
    case 'selectEquipos':
        $playersController->showByEquipo($_POST['equipo']);
        break;
    case 'edit':
        $editController->showEditMenu();
        break;
    case 'delete';
        $editController->deletePlayer($params[1]);
        break;
    case 'addPlayer':
        $editController->addPlayer($_POST['name'],$_POST['playedGames'],$_POST['score'],$_POST['team']);
        break;
   /* case 'updateTask': 
        $taskController->updateTask($params[1]); 
        break;
    case 'viewTask': 
        $taskController->viewTask($params[1]); 
        break;*/
    default: 
        echo('404 Page not found'); 
        break;
}


?>