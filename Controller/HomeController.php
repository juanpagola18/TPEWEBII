<?php

require_once "View/HomeView.php";
require_once "./Helpers/AuthHelper.php";

class HomeController{

    private $view;

    function __construct(){
        $this->view=new HomeView();
        $this->authHelper = new AuthHelper();
    }

    function showHome(){
        
        $this->view->showHome();
    }
}
