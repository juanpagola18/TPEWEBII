<?php
require_once "./Model/PlayerModel.php";
require_once "./View/PlayerView.php";
require_once "./Model/TeamModel.php";
require_once "./Helpers/AuthHelper.php";

class PlayerController{

    private $model;
    private $view;
    private $teamModel;

    function __construct(){
        $this->model = new PlayerModel();
        $this->teamModel = new TeamModel();
        $this->view = new PlayerView();
        $this->authHelper = new AuthHelper();
    }
    function loadSelectEquipos(){
                $selectEquipos = $this->teamModel->getTeams();
                $this->view->selectEquipos($selectEquipos);
            }
    function redirectPlayerMenu(){
                header("Location: ".BASE_URL."players");
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
        
    function showByEquipo(){
        if(!empty($_POST)){
        $this->loadSelectEquipos();
        $usuario = $this->authHelper->checkLoggedIn();
        $jugadoresByEquipo = $this->model->getPlayersByTeam($_POST['equipo']);
        $this->view->showPlayers($jugadoresByEquipo, $usuario); }
       
    
    }
    function deletePlayer($id){
        $this->authHelper->checkLoggedIn();
        $this->model->deletePlayer($id);
        $this->redirectPlayerMenu();
    }
    function addPlayer(){
        $this->authHelper->checkLoggedIn();
        if(!empty($_POST)){
        $this->model->createPlayer($_POST['name'],$_POST['playedGames'],$_POST['score'],$_POST['team']);
        }
        $this->redirectPlayerMenu();
    }   
    function editPlayerMenu($id){
        $this->authHelper->checkLoggedIn();
        $selectEquipos = $this->teamModel->getTeams();
        $this->view->selectEquipos($selectEquipos);
        $player = $this->model->getPlayer($id);
        $this->view->showEditPlayer($player);

    }
    function editPlayer($id){
        $this->authHelper->checkLoggedIn();
        if(!empty($_POST)){
        $this->model->editPlayer($id,$_POST['newName'],$_POST['newPlayedGames'],$_POST['newScore'],$_POST['newTeam']);
        $this->redirectPlayerMenu();
        }
    }
}
