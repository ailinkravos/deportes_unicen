<?php
class facultadesModel{

    private $db;

    //armo el constructor del model y le declaro con qué BBDD se va a comunicar
    public function __construct(){  
        $this->$db = new PDO('mysql:host=localhost;'.'dbname=db_deportistas;charset=utf8','root','');
    }
    public function getFacultades(){
        $query=$this->db->prepare ('SELECT * FROM facultad');
        $promesa-> execute(); //ejecuto
        return $promesa->fetchAll(PDO::FETCH_OBJ); //me trae los elementos y los retorna
    }


}