<?php
require_once 'models/facultadesModel.php';
require_once 'views/facultadesView.php';

class FacultadesController{
    
    private $model; 
    private $view;

    function __construct () {

        $this->model=new facultadesModel();
        $this->view=new facultadesView();
    }
  
    public function getFacultades (){ //muestra facultades
    $facultades=$this->facultadesModel->getFacultades(); 
    $this->facultadesView->displayFacultades($facultades);
  }

public function deleteFacultades(){  //borra facultades

}



}