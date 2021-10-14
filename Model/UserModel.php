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
    
    function saveUserInDDBB($nickname, $username, $hash){
        $query = $this->db->prepare("INSERT INTO usuarios(nick, usuario, contraseña) VALUES(?,?,?)");
        $query->execute(array($nickname, $username, $hash));
        return $query->rowCount();
    }


}