<?php
require_once("config.php");
require_once("Controller/Controlador.php");
if(isset($_GET['m'])):    
    if(method_exists("ModelController",$_GET['m'])):
        ModelController::{$_GET['m']}();
    endif;
else:
    ModelController::index();
endif;
?>