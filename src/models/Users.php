<?php

namespace DAW;

class Users {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    // public function getAll(){
    //     $stm = $this->sql->prepare("select * from user");
    //     $stm->execute();
        
    //     $tasks = array();
    //     while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
    //         $tasks[] = $task;
    //     }
    //     return $tasks;
    // }

}
