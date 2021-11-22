<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";
require_once "./Helpers/AuthHelper.php";

class LoginController {

    private $model;
    private $view;

    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
        $this->authHelper = new AuthHelper();
    }

    function logout(){
        AuthHelper::logout();
        $this->view->showLogin("Te deslogueaste!");
    }

    function login(){
        $this->view->showLogin();
    }
    
    function register(){
        $this->view->showRegister();
    }
    
    function registerUser(){
        if((!empty($_POST['nick'])) && (!empty($_POST['input_user'])) && (!empty($_POST['input_password']))){
            $nickname = $_POST['nick'];
            $username = $_POST['input_user'];
            $password = $_POST['input_password'];
            
            $existeUsuario = $this->model->getUser($username);
            if (!$existeUsuario) {
                        $hash = password_hash($password, PASSWORD_DEFAULT);
                        $user = $this->model->saveUserInDDBB($nickname, $username, $hash, $rol = "usuario");
                        if($user>0){
                            $_SESSION["usuario"] = $username; 
                            $_SESSION['admin'] = 0;
                            $_SESSION['nickname'] = $nickname;;
                            $_SESSION['rol'] = "usuario";
                            $this->view->showHome($username);
                        }else{
                            $this->view->showRegister("Registro inválido. Reintente");
                        }
                    }
                }

            else {
                $this->view->showRegister('El mail ingresado no esta disponible');
                die();
            }
        }
    
    function verifyLogin(){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $contraseña = $_POST['password'];
           
     
            
            $user = $this->model->getUser($email);
     
            
            if ($user && password_verify($contraseña, $user->contraseña)) {
                
                AuthHelper::login($user);
                $_SESSION["email"] = $email;
                $_SESSION['rol'] = $user->rol; 
                $_SESSION['nick'] = $user->nick;
                $this->view->showLogin("Logueado Exitosamente");
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        }
    }
    function showUsuarios() {
        
        if (AuthHelper::isAdmin()){
            $listaUsuarios = $this->model->getAll();
            $this->view->showUsuarios($listaUsuarios);
        }else{
            header("Location: " . BASE_URL . 'inicio');
        }
    }  

    function altaAdmin($id)
    {
        if (AuthHelper::isAdmin()) {
            $this->model->altaAdmin($id);
            header("Location: " . BASE_URL . 'usuarios');
        }
    
    }
    function bajaAdmin($id)
    {
        if (AuthHelper::isAdmin()) {
            $this->model->bajaAdmin($id);
            header("Location: " . BASE_URL . 'usuarios');
        }
    
    }
    function removeUser($id)
    {
        $this->authHelper->checkLoggedIn();
        if (AuthHelper::isAdmin()) {
            $this->model->removeUser($id);
            header("Location: " . BASE_URL . 'usuarios');
        }
    
    }
}