<?php
require_once "./View/LoginView.php";
class AuthHelper{

    function __construct(){
        $this->view = new LoginView();
    }

    function checkLoggedIn(){
        if(!isset($_SESSION["email"])){
            $this->view->showLogin("Inicie Sesion por favor!");    
        die;
        }
        else{
            return true;
        }
    }
    static private function start() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }
    static public function login($user) {
        self::start();
        $_SESSION['logged'] = true;
        $_SESSION['id'] = $user->id_user;
        $_SESSION['usuario'] = $user->usuario;
        $_SESSION['rol'] = $user->rol;
        $_SESSION['nick'] = $user->nick;
        
    }
    public static function logout() {
        self::start();
        session_destroy();
    }

    public static function getLoggedUser() {
        self::start(); 
        if (isset($_SESSION['email'])){
            $data=[]; 
            $data['user'] = $_SESSION['email'];
            $data['rol'] = $_SESSION['rol'];
            
           return $data;
        }
        else
            return null;
    }     

    public static function getLoggedUserName() {
        self::start();
        if (isset($_SESSION['user'])) {
            return $_SESSION['usuario'];
        } else {
            return null;
        }
    }
    public static function isAdmin() {
        self::start();
        if (isset($_SESSION['usuario'])) {
            return ($_SESSION['rol'] == 1);
        }
        else
            return false;
    }
}