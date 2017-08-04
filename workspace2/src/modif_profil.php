<?php

    include("modele.php");
    include("vue.php");
    include("config.php");
    
    verif_authent();
    
    EnTete("Augmentez la taille de votre *****", "inscription", "Modif_Profil");
    
    Navigateur_Co();

    echo "<img id=\"MSMP\" class=\"easter_eggs Mode_Sauron\" src=\"img/Sauron_folder/Morgoth 8.jpg\" width=\"650\" alt=\"Oust !\" style=\"display:none;left:525px;\"/>";
    
    $grade = $_SESSION['grade'];
    
    if(!isset($_POST) || empty($_POST)) {
        form_grade($grade,$_SESSION['profil']);
    }
    else {
        //on essaie d'update le profil (qui renverra faux si le formulaire est erroné)
        if(!update_profil($_FILES,$_POST)){
            form_grade($grade,$_SESSION['profil']);
        }
        else {
            affiche_success(4);
        }
    }
    Pied();
    verif_Sauron();

?>