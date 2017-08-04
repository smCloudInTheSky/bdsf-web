<?php
    include("modele.php");
    include("vue.php");
    include("config.php");

    verif_authent_admin(); /*Cette page est révservée aux Super-Administrateurs*/
    
    EnTete("Vive les Autodafés !", "", "upbook");
    
    Navigateur_Co();
    
    echo "<div class=\"easter_eggs\" style=\"left:540px\"><img src=\"img/Sauron_folder/dragon-Feu.jpg\" width=\"600\" height=\"300\" alt=\"autodafé par un dragon\" class=\"Mode_Sauron\" style=\"display:none\"/></div>";

    if(!isset($_POST) || empty($_POST)) {
        form_supp_livre();
    }
    else {
        if(!supp_book($_POST['ID'])){
            //affiche_erreur();
            form_supp_livre();
        }
    }
    
    Pied();
    verif_Sauron();
?>