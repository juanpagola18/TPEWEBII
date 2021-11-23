<?php
require_once './Model/CommentsModel.php';
require_once './Model/UserModel.php';
include_once "./Helpers/AuthHelper.php";
require_once './api/ApiView.php';

class ApiController {

    private $model;
    private $view;
   

    function __construct(){
        $this->model = new CommentsModel();
        $this->view = new ApiView();
        $this->authHelper = new AuthHelper();
 
    }


    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }


    public function getComments(){
    $comments = $this->model->getComments();
    return $this->view->response($comments, 200);
}
function getPlayerComments($params = null){
    $id = $params[':ID'];
    $comment = $this->model->getPlayerComments($id);

    if ($comment) {
        $this->view->response($comment, 200);
    } else {
        $this->view->response("No se encontraron comentarios para este peleador", 404);
    }
}

function insertComment(){
    $this->authHelper->checkLoggedIn();

    $data = $this->getBody();

    
    $comment = $data->comment;
    $punctuation = $data->punctuation;
    $id_user = $data->id_user;
    $id_player = $data->id_player;
   

    $ultimoId = $this->model->insertComment($comment, $punctuation, $id_user, $id_player);

    if ($ultimoId) {
        $this->view->response("Agregado comentario con el id: {$ultimoId}", 200);
    } else {
        $this->view->response("El comentario no fue creado", 500);
    }
}

    function deleteComment($params = null){
        $id = $params[':ID'];
        $comment = $this->model->getComment($id);

        if($comment){
        $this->model->deleteComment($id);
        return $this->view->response("El comentario con el id=$id fue borrado", 200);
         }
        else {
            $this->view->response("No se pudo eliminar, ya que no existia tarea con ese ID", 404);
        }
    }

    function updateComment($params = null){
        $id = $params[':ID'];
        $data = $this->getBody();

        $comment = $data->comment;
        $punctuation = $data->punctuation;
        $id_user = $data->id_user;
        $id_player = $data->id_player;

        $comentario = $this->model->getComment($id);

        if ($comentario) {
            $this->model->updateComment($id, $comment , $punctuation, $id_user, $id_player);
            $this->view->response("El comentario se actualizó correctamente", 200);
        } else {
            return $this->view->response("El comentario con el id=$id no existe", 404);
        }
    }
    
}