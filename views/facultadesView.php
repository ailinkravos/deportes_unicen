<?php
require_once ('./libs/Smarty.class.php');

class facultadesView{

    private $smarty;

    public function __construct($facultades){
        $this->smarty = new Smarty();  //inicializo Smarty
        $this->smarty->assign('titulo', "Olimpiadas"); 
        $this->smarty->assign ('URL',BASE_URL);
        $this->smarty->assign('facultades', $facultades); //declaro una variable con el valor de la variable pasada por parámetro.
    }
     public function displayFacultades(){
        $this->smarty->display ('../templates/ver_facultades.tpl'); //le digo que muestre el archivo template
     }

     public function displayFacultad($facultad){
        $this->smarty->assign('facultad',$facultad);
        $this->smarty->display('../templates/ver_facultad.tpl');
     }

    //genera y muestra un mensaje de error
     public function showError($msgError){
        echo "<h1>ERROR!</h1>"; //imprimo "ERROR!"
        echo "<h2>{$msgError}</h2>"; //imprimo el mensaje de error que me fue pasado por parámetro
    }

}

