<?php
require_once 'models/copasModel.php';
require_once 'views/copasView.php';

class copasController{
    private $model;
    private $view;

function __construct(){
$this->model=new copasModel();
$copas->$this->model->getCopas();
}
//muestra las copas
public function displayCopas(){
    $this->view->displayCopas();
}
}
