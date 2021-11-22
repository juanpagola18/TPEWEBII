<?php

class UserModel{

    private $db;
    
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_jugadores;charset=utf8', 'root', '');
    }

    function getUser($email){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE usuario = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    function saveUserInDDBB($nickname, $username, $hash, $rol){
        $query = $this->db->prepare("INSERT INTO usuarios(nick, usuario, contraseña, rol) VALUES(?,?,?,?)");
        $query->execute(array($nickname, $username, $hash, $rol));
        return $query->rowCount();
    }
    function getAll() {
        $query = $this->db->prepare('SELECT * FROM usuarios');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function altaAdmin($id) {
        $query = $this->db->prepare('UPDATE usuarios SET rol = 1 WHERE id_user = ?');
        $query->execute([$id]);
    }
    public function bajaAdmin($id) {
        $query = $this->db->prepare('UPDATE usuarios SET rol = 0 WHERE id_user = ?');
        $query->execute([$id]);
    }
    public function removeUser($id) {
        $query = $this->db->prepare('DELETE FROM usuarios WHERE id_user = ?');
        $query->execute([$id]);
    }
}
