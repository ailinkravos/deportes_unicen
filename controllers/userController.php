<?php 
include_once('./views/loginView.php'); 

class LoginController { 

private $view; 

public function __construct() { 
$this->view = new LoginView(); 
} 

public function showLogin() { 
$this->view->showLogin(); 
} 
}
