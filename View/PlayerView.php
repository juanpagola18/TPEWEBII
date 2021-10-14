<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class PlayerView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function selectEquipos($teams){
        $this->smarty->assign('teams', $teams);
    }

    function showPlayers($players){
        $this->smarty->display('templates/header.tpl');        
        $this->smarty->assign('players', $players);
        $this->smarty->display('templates/playerTable.tpl');
        $this->smarty->display('templates/footer.tpl');
    }

    function showPlayer($player){
        
        $this->smarty->display('templates/header.tpl'); 
        $this->smarty->assign('player', $player);
        $this->smarty->display('templates/playerDetail.tpl');
        $this->smarty->display('templates/footer.tpl');
     }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showLoginLocation(){
        header("Location: ".BASE_URL."login");
    }

    function showEdit($players){
        $this->smarty->display('templates/header.tpl');        
        $this->smarty->assign('players', $players);
        $this->smarty->display('templates/editPlayers.tpl');
        $this->smarty->display('templates/footer.tpl');
    }   
    
}