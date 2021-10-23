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
    $action = 'home'; 
}
$params = explode('/', $action);

$playersController = new PlayerController();
$loginController = new LoginController();
$homeController = new HomeController();
$teamsController = new TeamController();
$editController = new EditController();



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
    case 'adminPlayer':
        $editController->showEditPlayerMenu();
        break;
    case 'adminTeam':
        $editController->showEditTeamMenu();
        break;
    case 'deletePlayer';
        $editController->deletePlayer($params[1]);
        break;
    case 'deleteTeam';
        $editController->deleteTeam($params[1]);
        break;
    case 'addPlayer':
        $editController->addPlayer();
        break;
    case 'addTeam':
        $editController->addTeam($_POST['teamName'],$_POST['country'],$_POST['championships']);
        break;
    case 'editPlayerMenu';
        $editController->editPlayerMenu($params[1]);
        break;
    case 'editTeamMenu';
        $editController->editTeamMenu($params[1]);
        break;
    case 'editPlayer';
        $editController->editPlayer($params[1],$_POST['newName'],$_POST['newPlayedGames'],$_POST['newScore'],$_POST['newTeam']);
        break;
    case 'editTeam';
        $editController->editTeam($params[1],$_POST['newTeamName'],$_POST['newCountry'],$_POST['newChampionships']);
        break;

    default: 
        echo('404 Page not found'); 
        break;
}


?>