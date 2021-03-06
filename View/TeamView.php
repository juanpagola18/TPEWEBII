<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class TeamView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showTeams($teams){
       
        $this->smarty->assign('teams', $teams);
        $this->smarty->display('templates/teamsTable.tpl');
    }
    function showTeam($team){
        $this->smarty->assign('team', $team);
        $this->smarty->display('templates/editSelectTeam.tpl');
    }
 
   
}