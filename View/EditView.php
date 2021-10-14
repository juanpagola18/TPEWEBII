<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class EditView{
    private $smarty;

    function __construct(){
        $this->smarty= new Smarty();
    }
    function selectEquipos($teams){
        $this->smarty->assign('teams', $teams);
    }
    function showPlayers($players){
        $this->smarty->display('templates/header.tpl');
        $this->smarty->assign('players', $players);
        $this->smarty->display('templates/editPlayers.tpl');
        $this->smarty->display('templates/footer.tpl');
    }
    function showEditPlayer($player){
        $this->smarty->display('templates/header.tpl');
        $this->smarty->assign('player', $player);
        $this->smarty->display('templates/editSelectPlayer.tpl');
        $this->smarty->display('templates/footer.tpl');
    }
    function showTeams($teams){
        $this->smarty->display('templates/header.tpl');
        $this->smarty->assign('teams', $teams);
        $this->smarty->display('templates/editTeams.tpl');
        $this->smarty->display('templates/footer.tpl');
    }
    function showEditTeam($team){
        $this->smarty->display('templates/header.tpl');
        $this->smarty->assign('team', $team);
        $this->smarty->display('templates/editSelectTeam.tpl');
        $this->smarty->display('templates/footer.tpl');
    }

}