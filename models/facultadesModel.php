<?php
class facultadesModel{

    private $db;

    //armo el constructor del model y le declaro con qué BBDD se va a comunicar
    public function __construct(){  
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_deportistas;charset=utf8','root','');
    }
    public function getFacultades(){
        $query=$this->db->prepare ('SELECT * FROM facultad');
        $query-> execute(); //ejecuto
        return $query->fetchAll(PDO::FETCH_OBJ); //me trae los elementos y los retorna
    }
    //obtiene una facultad
    public function getFacultad($fNombre){
        $query=$this->db->prepare('SELECT * FROM facultad WHERE nombre_facultad=?');
        $query->execute(array($fNombre));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    //elimina un elemento según el ID
    public function deleteFacultad($idFacultad){
     $query=$this->db->prepare('DELETE from facultad where id_facultad=?'); //indico que debe eliminar de la DB el elemento que tenga el ID que le paso
     $query->execute([$idFacultad]);
    }
    //actualiza el elemento facultad
    public function end($idFacultad,$titulo){ //le envío el ID de la facultad que quiero modificar y el valor que tengo que insertar
     $query=$this->db->prepare ('UPDATE facultades SET titulo=? WHERE id_facultad=?'); //le pido que me modifique en la DB (UPDATE) el atributo (SET)que tenga tal ID (WHERE)
     $query->execute([$idFacultad,$titulo]);//Ejecuto la sentencia con los parámetros que me fueron pasados
    }
    //guarda un elemento nuevo en la DB 
    public function save ($nombre_facultad,$sede,$historia){ //chequear parámetros 
     $query->$this->db->prepare('INSERT INTO facultades(nombre_facultad,sede,historia) VALUES (?,?,?)'); //acá le digo que me inserte (INSERT INTO) un elemento nuevo con esos atributos
     $query->execute([$titulo]); //execute ??
    }
}