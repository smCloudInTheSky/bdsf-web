<?php

    include("modele.php");
    include("vue.php");
    include("config.php");
    
    verif_authent_capitaine();
    
    EnTete("Modifier les saintes écritures", "", "upbook");
    
    Navigateur_Co();
    
    echo "<div class=\"easter_eggs\" style=\"left:500px\"><img src=\"img/Sauron_folder/mordor.jpg\" width=\"650\" alt=\"BD-SF\" class=\"Mode_Sauron\" style=\"display:none\"/></div>";
    
    if(!isset($_POST) || empty($_POST)) {
        form_update_livre();
    }
    else {
        if(!up_book($_FILES,$_POST)){
            form_update_livre();
        }
        else {
            affiche_success(6);
            form_update_livre();
        }
    }

    Pied();
    verif_Sauron();

?>