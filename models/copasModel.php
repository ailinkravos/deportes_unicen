<?php
class copasModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_deportistas;charset=utf8','root','');
    }

    public function getCopas(){
        $query->this->prepare('SELECT * FROM copas');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}