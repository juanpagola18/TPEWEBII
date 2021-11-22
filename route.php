<?php
require_once "Controller/PlayerController.php";
require_once "Controller/LoginController.php";
require_once "Controller/HomeController.php";
require_once "Controller/TeamController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; 
}
$params = explode('/', $action);

$playersController = new PlayerController();
$loginController = new LoginController();
$homeController = new HomeController();
$teamsController = new TeamController();




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
        $playersController->showByEquipo();
        break;
    case 'deletePlayer';
        $playersController->deletePlayer($params[1]);
        break;
    case 'deleteTeam';
        $teamsController->deleteTeam($params[1]);
        break;
    case 'addPlayer':
        $playersController->addPlayer();
        break;
    case 'addTeam':
        $teamsController->addTeam();
        break;
    case 'editPlayerMenu';
        $playersController->editPlayerMenu($params[1]);
        break;
    case 'editTeamMenu';
        $teamsController->editTeamMenu($params[1]);
        break;
    case 'editPlayer';
        $playersController->editPlayer($params[1]);
        break;
    case 'editTeam';
        $teamsController->editTeam($params[1]);
        break;
    case 'usuarios':
        $loginController->showUsuarios();
        break;
    case "altaAdmin":
        $loginController->altaAdmin($params[1]);
        break;
    case "bajaAdmin":
        $loginController->bajaAdmin($params[1]);
        break;
    case "removeUser":
        $loginController->removeUser($params[1]);
        break;

    default: 
        echo('404 Page not found'); 
        break;
}


?>