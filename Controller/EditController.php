<?php
require_once "./View/EditView.php";
require_once "./Model/PlayerModel.php";
require_once "./Model/TeamModel.php";


class EditController{

    private $model;
    private $view;
    private $teamModel;
   

    function __construct(){
        $this->model= new PlayerModel();
        $this->view= new EditView();
        $this->teamModel= new TeamModel();


    }
    function loadSelectEquipos(){
        $selectEquipos = $this->teamModel->getTeams();
        $this->view->selectEquipos($selectEquipos);
    }
    function showEditMenu(){
        $this->loadSelectEquipos();
        $players = $this->model->getPlayers();
        $this->view->showEdit($players);

    }
    function deletePlayer($id){
        $this->model->deletePlayer($id);
        $this->showEditMenu();
    }
    function addPlayer($name, $playedGames, $score, $team){
        $this->model->createPlayer($name, $playedGames, $score, $team);
        $this->showEditMenu();
        
    }


}