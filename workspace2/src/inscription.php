<?php

    include("modele.php");
    include("vue.php");
    include("config.php");
    
    EnTete("Rejoignez les Ténèbres !!!", "inscription", "inscription");
    
    Navigateur_NonCo();
    
    if(!isset($_POST) || empty($_POST)) {
        form_inscription();
    }
    else {
        if(!create_user($_POST)){
            form_inscription();
            //affiche_erreur(5);
        }
        else {
            //réussite de l'inscription
            affiche_success(8);
        }
    }
    echo "<div class=\"easter_eggs\" style=\"left:650px;top:200px\"><img class=\"Mode_Sauron\" src=\"img/Sauron_folder/Propagande Sauron.jpg\" height=\"500\" alt=\"Welcome to The Mordor\" style=\"display:none\"/></div>";
    Pied();

?>