<?php
require_once "controllers/facultadesController.php";
require_once "Controllers/userController.php"; //aun no está desarrollado
$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$controller=new facultadesController();

if($action == ''){
    $controller->getFacultades();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "site"){
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