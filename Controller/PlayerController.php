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

        
}
