<?php

    include("vue.php");
    include("modele.php");
    include("config.php");
    
    verif_authent_capitaine();
    
    EnTete("Espionnage", "profil", "");
    
    Navigateur_Co();

    //echo "<p> profil : ". $_SESSION['profil']. "</p>";    
    $res = get_users();
    //echo "<p> data : ". $data. "</p>";
    //echo "<p> taille data : ". db_count($data)."</p>";
    $j = db_count($res);
    echo "<h1> Liste des Inscrits : </h1></br>";
    echo "<img class=\"easter_eggs Mode_Sauron\" src=\"img/Sauron_folder/Sauron 21.jpg\" height=\"150\" alt=\"début d'un grand pouvoir\" style=\"display:none;left:5px;\"/>";
    if ($j==0){
        affiche_erreur(2);
    }
    $i=1;
    while ($j > 0){
        $gens = db_fetch($res);
        vue_users($gens,$i);
        $j = $j -1;
        $i = $i +1;
    }
    
    //Pied();
    echo "</body></html>";
    verif_Sauron();
?>