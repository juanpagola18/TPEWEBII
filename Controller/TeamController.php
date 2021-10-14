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
    }

    function showTeams(){

            $teams = $this->model->getTeams();
            $this->view->showTeams($teams);
        }
    

}
    