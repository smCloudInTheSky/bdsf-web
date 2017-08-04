<?php
    include("vue.php");
    include("modele.php");
    include("config.php");
    
    verif_authent();
    
    EnTete("La Meilleure Fonctionnalité du Site", "", "");

    Navigateur_Co();
    
    echo "<img class=\"easter_eggs Mode_Sauron\" src=\"img/classic_folder/Démon 7.jpg\" height=\"450\" alt=\"Obtenez le Pouvoir le Sauron\" style=\"display:none;left:525px;\"/>";
    
    if (!isset($_GET) || empty($_GET)) {
        super_formulaire();
    }
    else {
        affiche_success(7);
    }
    
    Pied();
    //pas de verif Sauron car cette page est réservée aux pigeons (donc les admins ne sont pas censés y arriver... mais ils peuvent s'ils la cherchent)
    
?>    