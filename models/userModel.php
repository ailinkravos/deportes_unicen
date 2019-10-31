<?php

class userModel{
    private $user;

    public function __construct(){
        $this->user= new PDO('mysql:host=localhost;'.'dbname=db_usuario;charset=utf8','root','');
    }
    
    //obtiene un usario
    public function getByUserName($username){
        $query=$this->user->prepare('SELECT * FROM facultad WHERE nombre_facultad=?');
        $query->execute(array($fNombre));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    //guarda un usuario nuevo en la DB 
    public function save ($email, $contraseña){
        $query=$this->user->prepare('INSERT INTO usario(email, contraseña) VALUES (?,?)'); //acá le digo que me inserte (INSERT INTO) un elemento nuevo con esos atributos
        $query->execute([$email, $contraseña]);
    }
}
