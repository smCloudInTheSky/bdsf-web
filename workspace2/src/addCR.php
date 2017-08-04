<?php

    include("modele.php");
    include("vue.php");
    include("config.php");
    
    verif_authent_capitaine();
    
    EnTete("Les CRoniques de BD-SF", "", "");
    
    Navigateur_Co();

    echo "<div class=\"easter_eggs\" style=\"left:600px\"><img src=\"img/Sauron_folder/Sauron face (slow).gif\" width=\"600\" alt=\"BD-SF\" class=\"Mode_Sauron\" style=\"display:none\"/></div>";
     
    /*seule "form_recherche" appelle "recherche.php" avec une méthode POST, on vérifie donc ici si une recherche vient d'être quémandée*/
    if(!isset($_POST) || empty($_POST)) {
        form_add_cr();
    }
    else {
        create_CR($_FILES,$_POST); /*ajout du CR*/
        form_add_cr(); /*Pour taper une nouvelle recherche*/
    }
    Pied();
    verif_Sauron();
?>