<?php

include("modele.php");
include("vue.php");
include("config.php");

header('Location: index.php');

EnTete("Départ vers le Forodwaith lointain...", "", "");
Navigateur_Co();

detruire_session();



Pied();
?>