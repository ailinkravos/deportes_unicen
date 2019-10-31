<?php
require_once 'views/loginView.php'; 
require_once 'models/userModel.php';
require_once 'models/loginController';

class securedController{

    public function __construct() { 
        session_start(); 
        
        // verifica que este logueado 
        if(!isset($_SESSION['username'])){ 
        header('Location: login'); 
        die(); 
        if(isset($_SESSION['USERNAME'])){ // si esta logueado 
        if (time() - $_SESSION['LAST_ACTIVITY'] > 5000) { // expiro el timeout 
        header('Location: '.LOGOUT); 
        die(); 
        } 
        
        $_SESSION['LAST_ACTIVITY'] = time(); 
        } 
        else { 
        header('Location: '. LOGIN); 
        die(); 
        } 
        } 
    }
        
}