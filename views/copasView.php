<?php
class copasView{
    private $smarty;

public function __construct($copas){
    $this->smarty = new Smarty(); 
        $this->smarty->assign ('URL',BASE_URL);
        $this->smarty->assign('copas', $copas);
}
//muestra las copas en el mismo template que muestra la facultad
public function displayCopas(){
    $this->smarty->display('../templates/ver_facultad.tpl'); //le digo que muestre el archivo template
 }

 //genera y muestra un mensaje de error
 public function showError($msgError){
    echo "<h1>ERROR!</h1>"; //imprimo "ERROR!"
    echo "<h2>{$msgError}</h2>"; //imprimo el mensaje de error que me fue pasado por parámetro
}
}
