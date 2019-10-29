<?php
require_once 'models/facultadesModel.php';
require_once 'views/facultadesView.php';

class facultadesController{
    
    private $model; 
    private $view;

    function __construct () {
  
      $this->model=new facultadesModel();
      
      $facultades=$this->model->getFacultades();
      $this->view=new facultadesView($facultades);
    }
  
    //muestra facultades
    public function getFacultades (){
    $this->view->displayFacultades();
   }
    //muestra facultad
     public function getFacultad($facultadNombre){
        $facultad=$this->model->getFacultad($facultadNombre);
        $this->view->displayFacultad($facultad);
      }

  public function deleteFacultad($params = null){  //borra facultad. me pasa por parámetro el ID de la facultad a eliminar
    $idFacultad = $params ['ID']; //busca el ID que pasa en la URL
    $this->model->deleteFacultad($idFacultad);
    header("location: " . BASE_URL); //redirije
  }

  public function editFacultad($params=null){ //edita facultad
    $idFacultad=$params ['ID'];
    $this->model->editFacultad($idFacultad);
    header("location: ". BASE_URL); //redirije
  }

  public function addFacultad(){
    //me traigo lo que el usuario me envió por el form mediante el method POST
    $nombre_facultad = $_POST['nombre facultad'];
    $sede = $_POST['sede'];                             //ACOMODAR

    $this->model->addFacultad($titulo,$descripcion,$prioridad); //llamo a la función del MODEL que añade elemento y le paso por parámetro las variables que ya declaré con la informacion del usuario via Form
    header("location: ".BASE_URL); //Redirijo a la URL que debe mostrarse luego de ADD el elemento en la DB
  }
}