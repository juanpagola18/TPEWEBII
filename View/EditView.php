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
    function showEdit($players){
        $this->smarty->display('templates/header.tpl');
        $this->smarty->assign('players', $players);
        $this->smarty->display('templates/editPlayers.tpl');
        $this->smarty->display('templates/footer.tpl');
    }
}