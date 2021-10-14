<?php
require_once "./View/EditView.php";
require_once "./Model/PlayerModel.php";
require_once "./Model/TeamModel.php";
require_once "./Helpers/AuthHelper.php";


class EditController{

    private $model;
    private $view;
    private $teamModel;
   

    function __construct(){
        $this->model= new PlayerModel();
        $this->view= new EditView();
        $this->teamModel= new TeamModel();
        $this->authHelper = new AuthHelper();

    }
    function redirectEditPlayerMenu(){
        header("Location: ".BASE_URL."adminPlayer");
    }
    function redirectEditTeamMenu(){
        header("Location: ".BASE_URL."adminTeam");
    }
    function loadSelectEquipos(){
        $selectEquipos = $this->teamModel->getTeams();
        $this->view->selectEquipos($selectEquipos);
    }
    function showEditPlayerMenu(){
        $this->authHelper->checkLoggedIn();
        $this->loadSelectEquipos();
        $players = $this->model->getPlayers();
        $this->view->showPlayers($players);

    }
    function showEditTeamMenu(){
        $this->authHelper->checkLoggedIn();
        $this->loadSelectEquipos();
        $teams = $this->teamModel->getTeams();
        $this->view->showTeams($teams);
    }

    function deletePlayer($id){
        $this->model->deletePlayer($id);
        $this->redirectEditPlayerMenu();
    }
    function deleteTeam($id){
        $this->teamModel->deleteTeam($id);
        $this->redirectEditTeamMenu();
    }
    function addPlayer($name, $playedGames, $score, $team){
        $this->model->createPlayer($name, $playedGames, $score, $team);
        $this->redirectEditPlayerMenu();
    }
    function editPlayerMenu($id){
        $selectEquipos = $this->teamModel->getTeams();
        $this->view->selectEquipos($selectEquipos);
        $player = $this->model->getPlayer($id);
        $this->view->showEditPlayer($player);

    }
    function editPlayer($id,$name,$partidos,$goles,$equipo){
        $this->model->editPlayer($id,$name,$partidos,$goles,$equipo);
        $this->redirectEditPlayerMenu();
    }
    function addTeam($nombre, $pais, $campeonatos){
        $this->teamModel->createTeam($nombre, $pais, $campeonatos);
        $this->redirectEditTeamMenu();
    }
    function editTeamMenu($id){

        $team = $this->teamModel->getTeam($id);
        $this->view->showEditTeam($team);

    }
    function editTeam($id,$nombre,$pais,$campeonatos){
        $this->teamModel->editTeam($id,$nombre,$pais,$campeonatos);
        $this->redirectEditTeamMenu();
    }
}