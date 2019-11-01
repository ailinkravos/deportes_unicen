<?php
require_once "controllers/facultadesController.php"; 
require_once "controllers/loginController.php";
require_once "controllers/copasController.php";
require_once "controllers/securedController.php";

//Constantes
define("HOME", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');


$action = $_GET["action"];
$facultadesController=new facultadesController();
$loginController=new loginController();
$copasController=new copasController();
$securedController=new securedController();

// si no viene una "action", definimos una por defecto
if($action == ''){
    $controller->getFacultades();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);
        if($partesURL[0]=="login"){
            $loginController->showLogin();
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
        elseif($partesURL[0]=="mostrarCopas"){
            $controllerCopas=new copasController();
            $copasController -> displayCopas();
            //muestra las copas de la facultad
        }
        // elseif($partesURL[0]=="alumno"){
        //     $controllerAlumno=new alumnosController();
        //     $alumnosController -> displayAlumnos();
        //     //muestra los alumnos de la facultad ?? 
        // }
        else{
            $controller->getFacultades();
        }
    }    
