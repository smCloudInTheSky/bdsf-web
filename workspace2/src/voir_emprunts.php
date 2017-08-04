<?php

    include("modele.php");
    include("vue.php");
    include("config.php");
    
    verif_authent_capitaine();
    
    //header('Location: index.php');
    
    EnTete("Ils nous les ont volé !!", "", "");
    
    Navigateur_Co();
    
    echo "<h1> Liste des Emprunts</h1></br>";
    echo "<div><img class=\"featurette-image img-responsive center-block Mode_Sauron\" src=\"img/Sauron_folder/Sauron 2.jpg\" alt=\"inscription\" style=\"display:none\"/></div>";

    //AFFICHAGE DU LIVRE - on commence par aller le chercher dans la BDD (car l'array ne passe pas en POST)
    $res = voir_all_emprunts();
    $i = 0;
    $j = db_count($res);
    if ($j==0){
        affiche_erreur(2);
    }
    while ($j > 0){
        $book = db_fetch($res);
        vue_all_emprunt($book,$i);
        $j = $j -1;
        $i = $i +1;
    }
    //ensuite on l'affiche avec vue_oeuvre
    //vue_oeuvre($book,0);
    //echo "<p> etat : ";printf($_POST['etat']);echo "</p>";
    //echo "<p> gens : ";printf($_SESSION['profil']);echo "</p>";
    //echo "<p> livre : ";printf($_POST['oeuvre']);echo "</p>";
    
    Pied();
    verif_Sauron();
?>    