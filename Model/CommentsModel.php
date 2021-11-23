<?php


class CommentsModel {
    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_jugadores;charset=utf8', 'root', '');
    }
    
    //@return array
    //Retorna todos los comentarios en la tabla comentario ordenados por id_comentario
    function getComments() {
        $query = $this->db->prepare('SELECT * FROM comments');
        $query->execute();
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        return $comments;

    }
    function getPlayerComments($id)
    {
        $query = $this->db->prepare('SELECT * FROM comments INNER JOIN usuarios ON comments.id_user = usuarios.id_user WHERE id_player=?');
        $query->execute(array($id));

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    function insertComment($comment, $punctuation, $id_user, $id_player){
        $agregar = 'INSERT INTO comments ( comment, punctuation, id_user, id_player) VALUES ( ?,?,?,?);';
        $query = $this->db->prepare($agregar);
        $query->execute(array($comment, $punctuation, $id_user, $id_player));

        $ultimoId = $this->db->lastInsertId();

        return  $ultimoId;
    }
    function deleteComment($id)
    {
        $query = $this->db->prepare('DELETE FROM comments WHERE id_comment=?');
        $query->execute(array($id));

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function getComment($id){
        $query = $this->db->prepare('SELECT * FROM comments  WHERE id_comment=?');
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_OBJ);
    }
    function updateComment($id, $comment , $punctuation, $id_user, $id_player){
        $sentencia = $this->db->prepare("UPDATE comments SET comment=?, punctuation=?, id_user=?, id_player=? WHERE id_comment=?");
        $sentencia->execute(array($comment , $punctuation, $id_user, $id_player, $id));
    }
}
