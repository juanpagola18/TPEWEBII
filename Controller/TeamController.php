<?php
require_once "./Model/TeamModel.php";
require_once "./View/TeamView.php";
require_once "./Helpers/AuthHelper.php";


class TeamController{
    private $model;
    private $view;


    function __construct()
    {
        $this->model = new TeamModel();
        $this->view = new TeamView();
        $this->authHelper = new AuthHelper();
    }
    function redirectTeamMenu(){
        header("Location: ".BASE_URL."teams");
    }        

    function showTeams(){
            
            $teams = $this->model->getTeams();
            $this->view->showTeams($teams);
        }
        function deleteTeam($id){
            $this->authHelper->checkLoggedIn();
            $this->model->deleteTeam($id);
            $this->redirectTeamMenu();
        }
        function addTeam(){
            $this->authHelper->checkLoggedIn();
            if(!empty($_POST)){
            $this->model->createTeam($_POST['teamName'],$_POST['country'],$_POST['championships']);
            $this->redirectTeamMenu();
            }
        }
        function editTeamMenu($id){
            $this->authHelper->checkLoggedIn();
            $team = $this->model->getTeam($id);
            $this->view->showTeam($team);
    
        }
        function editTeam($id){
            $this->authHelper->checkLoggedIn();
            if(!empty($_POST)){
            $this->model->editTeam($id,$_POST['newTeamName'],$_POST['newCountry'],$_POST['newChampionships']);
            $this->redirectTeamMenu();
            }
        }
}
    