<?php 
require_once('libs/Smarty.class.php'); 

class LoginView { 

//$this->smarty->assign('basehref', BASE_URL);   

public function showLogin($error = null) { 
$smarty = new Smarty(); 
$smarty->assign('titulo', 'Iniciar Sesión'); 
//$smarty->assing('error', $error);
$smarty->display('templates/login.tpl'); 
} 

}

