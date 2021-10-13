<?php

class TeamModel{
    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_jugadores;charset=utf8', 'root', '');
    }

    function getTeams(){
        $sentencia = $this->db->prepare( "SELECT * FROM equipos");
        $sentencia->execute();
        $teams = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $teams;
    } 
}
