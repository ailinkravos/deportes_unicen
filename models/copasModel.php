<?php
class copasModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_deportistas;charset=utf8','root','');
    }
    //obtiene las copas de una facultad
    public function getCopas($ganador){
        $query=$this->db->prepare('SELECT * FROM copas WHERE ganador=?');
        $query->execute(array($ganador));
        return $query->fetch(PDO::FETCH_OBJ);
    }
}