<?php
require_once "./Model/PlayerModel.php";
require_once "./View/PlayerView.php";
require_once "./Model/TeamModel.php";

class PlayerController{

    private $model;
    private $view;
    private $teamModel;

    function __construct(){
        $this->model = new PlayerModel();
        $this->teamModel = new TeamModel();
        $this->view = new PlayerView();
    }
    function loadSelectEquipos(){
                $selectEquipos = $this->teamModel->getTeams();
                $this->view->selectEquipos($selectEquipos);
            }


    function showPlayers(){

    //    $this->authHelper->checkLoggedIn();
        $this->loadSelectEquipos();
        $players = $this->model->getPlayers();
        $this->view->showPlayers($players);
    }
    function showPlayer($id){

            $player = $this->model->getPlayer($id);
            $this->view->showPlayer($player);
        }
        
    function showByEquipo($id){
        $this->loadSelectEquipos();
        $jugadoresByEquipo = $this->model->getPlayersByTeam($id);
        $this->view->showPlayers($jugadoresByEquipo);
       
    
    }

        
/*    function createTask(){
        if(!isset($_POST['done'])){
            $done = 0;
        }else{
            $done = 1;
        }

        $this->model->insertTask($_POST['title'], $_POST['description'], $_POST['priority'], $done);
        $this->view->showHomeLocation();
    }

    function deleteTask($id){
        $this->authHelper->checkLoggedIn();

        $this->model->deleteTaskFromDB($id);
        $this->view->showHomeLocation();
    }

    function updateTask($id){
        $this->authHelper->checkLoggedIn();

        $this->model->updateTaskFromDB($id);
        $this->view->showHomeLocation();
    }
    
    function viewTask($id){
        $this->authHelper->checkLoggedIn();

        $task = $this->model->getTask($id);
        $this->view->showTask($task);
    }
*/
}
