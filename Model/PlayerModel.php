<?php

class PlayerModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_jugadores;charset=utf8', 'root', '');
    }

    function getPlayers(){
        $sentencia = $this->db->prepare( "SELECT * FROM jugadores");
        $sentencia->execute();
        $players = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $players;
    } 
    function getPlayer($id){
        $sentencia = $this->db->prepare( "SELECT * FROM jugadores WHERE id=?");
        $sentencia->execute(array($id));
        $player = $sentencia->fetch(PDO::FETCH_OBJ);
        return $player;

    }

   /* function insertTask($mermelada, $descripcion, $prioridad, $finalizada){
        $sentencia = $this->db->prepare("INSERT INTO tareas(titulo, descripcion, prioridad, finalizada) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($mermelada,$descripcion,$prioridad, $finalizada ));
    }

    function deleteTaskFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM tareas WHERE id_tarea=?");
        $sentencia->execute(array($id));
    }

    function updateTaskFromDB($id){
        $sentencia = $this->db->prepare("UPDATE tareas SET finalizada=1 WHERE id_tarea=?");
        $sentencia->execute(array($id));
    }

    function getTask($id){
        $sentencia = $this->db->prepare( "select * from tareas WHERE id_tarea=?");
        $sentencia->execute(array($id));
        $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tarea;
    }*/
}