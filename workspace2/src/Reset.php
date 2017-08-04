<?php

	include("config.php");
	include("modele.php");
	include("vue.php");

    EnTete("Cthulhu répond à votre demande d'aide", "", "");

    if(isset($_SESSION) && $_SESSION['co'] == 1){
        Navigateur_Co();
    }
    else {
        Navigateur_NonCo();
    }
    
    if(!isset($_POST) || empty($_POST)){
        form_reset();
    }
    else {
        if(!reini($_POST)){
            form_reset();
        }
    }
    
    Pied();

?>