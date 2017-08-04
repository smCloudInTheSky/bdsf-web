<?php

    include("config.php");
    include("modele.php");
    include("vue.php");

    EnTete("Demande d'aide à Cthulhu", "", "");

    if(isset($_SESSION) && $_SESSION['co'] == 1){
        Navigateur_Co();
    }
    else {
        Navigateur_NonCo();
    }
    
    if(!isset($_POST) || empty($_POST)){
        form_change();
    }
    else {
        if(!change($_POST)){
            form_change();
        }
    }

    Pied();
?>
