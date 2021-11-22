<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class PlayerView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        $authHelper = new AuthHelper();
        $userLogged = $authHelper->getLoggedUser();
        $this->getSmarty()->assign('userLogged', $userLogged);
    }
    public function getSmarty() {
        return $this->smarty;        
    }
    function selectEquipos($teams){
        $this->smarty->assign('teams', $teams);
    }

    function showPlayers($players){    
        $this->smarty->assign('players', $players);
        $this->smarty->display('templates/playerTable.tpl');
    }

    function showPlayer($player){
        
        $this->smarty->assign('player', $player);
        $this->smarty->display('templates/playerDetail.tpl');

     }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showLoginLocation(){
        header("Location: ".BASE_URL."login");
    }

    function showEdit($players){
      
        $this->smarty->assign('players', $players);
        $this->smarty->display('templates/editPlayers.tpl');

    }   
    function showEditPlayer($player){
        $this->smarty->assign('player', $player);
        $this->smarty->display('templates/editSelectPlayer.tpl');
    }
    
}