<?php
require_once ('libs/Smarty.class.php');

class facultadesView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();  //inicializo Smarty
        $this->smarty->assign() //continuará...
    }

     public function displayFacultades($facultades){
        $this->smarty->assign('facultades',$facultades); //declaro una variable con el valor de la variable pasada por parámetro.
        $this->smarty->display ('templates/nombredelarchivo.tpl'); //le digo que muestre el archivo template -HAY QUE CREARLO -
     }
    //genera y muestra un mensaje de error
     public function showError($msgError){
        echo "<h1>ERROR!</h1>"; //imprimo "ERROR!"
        echo "<h2>{$msgError}</h2>"; //imprimo el mensaje de error que me fue pasado por parámetro
    }

}