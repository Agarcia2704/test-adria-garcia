<?php

namespace DAW;

class Users {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $stm = $this->sql->prepare("select * from alumnes");
        $stm->execute();
        
        $tasks = array();
        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }
        return $tasks;
    }

    public function addAlumnes($Nom, $Cognoms, $DataNaixement, $Carrer, $Numero, $Ciutat, $CodiPostal) {
        $stm = $this->sql->prepare('INSERT INTO alumnes (Nom, Cognoms, DataNaixement, Carrer, Numero, Ciutat, CodiPostal) VALUES (:Nom, :Cognoms, :DataNaixement, :Carrer, :Numero, :Ciutat, :CodiPostal);');
        $result = $stm->execute(['Nom' => $Nom, 'Cognoms' => $Cognoms, 'DataNaixement' => $DataNaixement, 'Carrer' => $Carrer, 'Numero' => $Numero, 'Ciutat' => $Ciutat, 'CodiPostal' => $CodiPostal]);
    }

    public function register($nombre, $correo, $contrasena) {
        $stm = $this->sql->prepare('INSERT INTO register (nombre, correo, contrasena) VALUES (:nombre, :correo, :contrasena);');
        $result = $stm->execute(['nombre' => $nombre, 'correo' => $correo, 'contrasena' => $contrasena]);
    }
}
