<?php 
require_once 'views/loginView.php'; 
require_once 'models/userModel.php';

class loginController {

    private $view;
    
    public function __construct() {
        $this->view = new loginView();
    }
    
    
    // // encontró un user con el username que mandó, y tiene la misma contraseña
    // if (!empty($user) && password_verify($password, $user->password)) {
    //     // INICIO LA SESSION Y LOGUEO AL USUARIO
    //     session_start();
    //     $_SESSION['ID_USER'] = $user->id;
    //     $_SESSION['USERNAME'] = $user->username;

    //     header('Location: ver');
    // } else {
    // $this->view->showLogin("Login incorrecto");
    // }

    public function showLogin() {
        $this->view->showLogin();
    }

}

