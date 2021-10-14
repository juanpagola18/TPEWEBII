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
    function getTeam($id){
        $sentencia = $this->db->prepare( "SELECT * FROM equipos WHERE id_equipo=?");
        $sentencia->execute($id);
        $team = $sentencia->fetch(PDO::FETCH_OBJ);
        return $team;
    } 

    function deleteTeam($id){
        try{
        $sentencia = $this->db->prepare( "DELETE FROM equipos WHERE id_equipo = ?");
        $sentencia->execute(array($id));
    }
    catch(Exception $e){
        return $e;
    }
    }   
    function createTeam($nombre, $pais, $campeonatos){
        $sentencia = $this->db->prepare( "INSERT INTO equipos (nombreEquipo, pais, campeonatos)
         VALUES(?,?,?)");
        $sentencia->execute(array($nombre, $pais, $campeonatos));
    }
    function editTeam($id,$nombre,$pais,$campeonatos){
        $sentencia=$this->db->prepare("UPDATE equipos SET nombreEquipo='$nombre', pais='$pais', campeonatos='$campeonatos',
        WHERE id_equipo=?");
        $sentencia->execute(array($id));
    }
}
