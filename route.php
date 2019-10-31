<?php
require_once "controllers/facultadesController.php"; 
require_once "controllers/loginController.php";

$action = $_GET["action"];

//Constantes
define("HOME", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

// CONSTANTES PARA RUTEO
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');
    define("VER", BASE_URL . 'ver');

$controller=new facultadesController();

// si no viene una "action", definimos una por defecto
if($action == ''){
    $_GET['action'] = 'ver';
    $_GET['action'] = 'login';
    $controller->getFacultades();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);
        if($partesURL[0]=="login"){
            $controller = new loginController();
            $controller->showLogin();
        }
        elseif($partesURL[0] == "site"){
            $controller->getFacultad($partesURL[1]);
            //obtiene la facultad
        }
        }elseif($partesURL[0] == "eliminarFac") {
            $controller->deleteFacultad();
            // elimina la facultad
        }
        elseif($partesURL[0] == "editarFac"){
            $controller->editFacultad();
            //edita la facultad
        }
        elseif($partesURL[0]=="agregarFac"){
            $controller->addFacultad();
             //agrega facultad
        }
    }           