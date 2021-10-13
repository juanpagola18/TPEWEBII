<?php
require_once "./Model/PlayerModel.php";
require_once "./View/PlayerView.php";
require_once "./Helpers/AuthHelper.php";

class PlayerController{

    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new PlayerModel();
        $this->view = new PlayerView();
        $this->authHelper = new AuthHelper();
    }

    function showPlayers(){

    //    $this->authHelper->checkLoggedIn();

        $players = $this->model->getPlayers();
        $this->view->showPlayers($players);
    }
    function showPlayer($id){

    
            $player = $this->model->getPlayer($id);
            $this->view->showPlayer($player);
        }

/*    function createTask(){
        if(!isset($_POST['done'])){
            $done = 0;
        }else{
            $done = 1;
        }

        $this->model->insertTask($_POST['title'], $_POST['description'], $_POST['priority'], $done);
        $this->view->showHomeLocation();
    }

    function deleteTask($id){
        $this->authHelper->checkLoggedIn();

        $this->model->deleteTaskFromDB($id);
        $this->view->showHomeLocation();
    }

    function updateTask($id){
        $this->authHelper->checkLoggedIn();

        $this->model->updateTaskFromDB($id);
        $this->view->showHomeLocation();
    }
    
    function viewTask($id){
        $this->authHelper->checkLoggedIn();

        $task = $this->model->getTask($id);
        $this->view->showTask($task);
    }
*/
}
