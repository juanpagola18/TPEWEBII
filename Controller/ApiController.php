<?php
require_once './Model/CommentsModel.php';
include_once('./Model/UserModel.php');
include_once "./Helpers/AuthHelper.php";
require_once './View/ApiView.php';

class LoginController {

    private $model;
    private $view;

    function __construct(){
        $this->model = new ApiModel();
        $this->view = new ApiView();
        $this->authHelper = new AuthHelper();
    }
    public function getComments($params = [])
    { 
        if (!empty($params)) {
            $id_producto = $params[':ID'];
            $listComment = $this->model->getComments($id_producto);
            if ($listComment)
                $this->view->response($listComment, 200);
            else
                $this->view->response("Sin comentarios", 200);     
        }
        else
           $this->view->response(null, 404);
    }

}