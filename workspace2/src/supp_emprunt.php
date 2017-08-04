<?php

    include("modele.php");
    include("vue.php");
    include("config.php");
    
    verif_authent_admin();
    
    //header('Location: index.php');
    
    EnTete("Rendez-le Nous !", "", "");
    
    Navigateur_Co();
    
    if(supp_emprunt($_POST['emprunt'])){
        affiche_success(3);
    }
    else {
        affiche_erreur(13);
    }
    
    Pied();
    verif_Sauron();
?>    