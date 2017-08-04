<?php

    include("modele.php");
    include("vue.php");
    include("config.php");
    
    verif_authent_capitaine();
    
    EnTete("Amenez le loot !", "", "addlivre");
    
    Navigateur_Co();

    echo "<div class=\"easter_eggs\" style=\"left:600px\"><img src=\"img/Sauron_folder/l'anneau unique (2).jpg\" width=\"600\" alt=\"BD-SF\" class=\"Mode_Sauron\" style=\"display:none\"/></div>";
     
    /*seule "form_recherche" appelle "recherche.php" avec une méthode POST, on vérifie donc ici si une recherche vient d'être quémandée*/
    if(!isset($_POST) || empty($_POST)) {
        form_add_livre();
    }
    else {
        //on envoie la création avant pour obtenir un retour des erreurs ou succès en premier
        create_book($_FILES,$_POST); /*ajout du livre*/
        form_add_livre(); /*Pour taper une nouvelle recherche*/
    }
    Pied();
    verif_Sauron();
?>