<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";

class LoginController {

    private $model;
    private $view;

    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

  /*  function logout(){
        session_start();
        session_destroy();
        $this->view->showLogin("Te deslogueaste!");
    }*/

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
                        $user = $this->model->saveUserInDDBB($nickname, $username, $hash);
                        if($user>0){
                            $_SESSION["usuario"] = $username; 
                            $_SESSION['admin'] = 0;
                            $_SESSION['nickname'] = $nickname;
                            $this->view->showHome();
                        }else{
                            $this->view->renderError("Registro inválido. Reintente");
                        }
                    }
                }

            else {
                $this->admView->renderRegisterForm('El mail ingresado no esta disponible');
                die();
            }
        }
    }


/*
    function verifyLogin(){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
     
            // Obtengo el usuario de la base de datos
            $user = $this->model->getUser($email);
     
            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $user->password)) {

                session_start();
                $_SESSION["email"] = $email;
                
                $this->view->showHome();
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        }
    }*/
