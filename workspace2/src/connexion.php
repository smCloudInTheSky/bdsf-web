<?php

include("modele.php");
include("vue.php");
include("config.php");

//header('Location: index.php');

EnTete("Vérification de vos papiers...", "", "");
Navigateur_NonCo();

//recuperer la valeur saisie dans le champ "mdp"
if(isset($_POST['mdp'])) {
  //echo "<p> vérification en cours... </p>";
  if (verif_mdp($_POST['ID'],$_POST['mdp'])){
      echo "<img class=\"featurette-image img-responsive center-block\" src=\"img/Sauron_folder/welcome.gif\" width=\"750\" alt=\"Bienvenue\"/>";
      ?>
      <script>
        window.location.replace("index.php"); //On bouge vers index.php, le code javascript est plus fiable que la version php (header)
      </script>
      <?php
  };
}
else {
  affiche_erreur(4);
}
Pied();
?>
