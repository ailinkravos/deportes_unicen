<?php
require_once "Controllers/TareasController.php";
require_once "Controllers/UserController.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');


if($action == ''){
    $controller->GetTareas();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "facultades"){
            $controller=new facultadesController();
            $controller->getFacultades();
            //obtiene las facultades
        }
        }elseif($partesURL[0] == "eliminarFac") {
            $controller = new facultadesController();
            $controller->deleteFacultades();
            // eliminar la facultad
        }
        elseif($partesURL[0] == "editarFac"){
            $controller = new facultadesController();
        }
    }
}

?>