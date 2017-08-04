<?php

    include("vue.php");
    include("modele.php");
    include("config.php");
    
    EnTete("La Galerie de Sauron", "profil", "");

    if(isset($_SESSION) && $_SESSION['co'] == 1){
        Navigateur_Co();
    }
    else {
        Navigateur_NonCo();
    }
?>
    <h1 class="dragon" style="text-align:center">Remerciements</h1></br>
    <h2 class="blazed" style="text-align:center">Nous Remercions pour leur grand apport dans la conception de ce site :</h2></br>
    <div class="global-profil" style="top:400px">
        <hr class="featurette-divider"> 
        <div class="profil">
          <h3 class="LSDA"><strong>Sauron le Magnifique, l'unique et le Tout Puissant</strong></h3>
          <p class="LSDA">Pour avoir supervisé le projet et permis d'utiliser sa Forteresse pour stocker les oeuvres de BD-SF </br></br> Sans lui et ses sbires, ce site n'existerait pas et nos livres n'auraient pas eu de rangement décent</p>
        </div> <!-- la précédente balise -->
        <div class="profil-image">
            <img class="featurette-image img-responsive center-block classique" src="img/profiles/Lord of the Mordor.jpg" alt="profil"/>
            <img class="featurette-image img-responsive center-block Mode_Sauron" src="img/Sauron_folder/Morgoth 10.jpg" alt="couverture" style="display:none"/>
        </div>
      </br>
    </div>
    <div class="global-profil" style="top:800px">
        <hr class="featurette-divider"> 
        <div class="profil">
          <h3 class="old"><strong>Cthulhu le Grand Ambassadeur des Puissances, L'être que personne ne peut voir</strong></h3>
          <p class="oldmedium">Pour être sorti de son sommeil pour assurer le développement du site. </br></br> Sans lui la sécurité et la gestion des emprunts n'auraient jamais existés</p>
        </div> <!-- la précédente balise -->
        <div class="profil-image">
            <img class="featurette-image img-responsive center-block classique" src="img/profiles/Cthulhu.jpg" alt="profil"/>
            <img class="featurette-image img-responsive center-block Mode_Sauron" src="img/Sauron_folder/Morgoth 10.jpg" alt="couverture" style="display:none"/>
        </div>
      </br>
    </div>
    <div class="global-profil" style="top:1200px">
        <hr class="featurette-divider"> 
        <div class="profil">
          <h3 class="chevalier"><strong>Diablo le Terrifiant, Seigneur du Chaos</strong></h3>
          <p class="chevalier">Pour son temps pris pour le concept design du site et l'interface </br></br> Sans lui, le site ne serait qu'une simple page blanche avec la tête de Sauron en fond </br>(même si ça aurait fait un site très bien... je ne remets pas en cause la beauté du Seigneur des Ténèbres...)</p>
        </div> <!-- la précédente balise -->
        <div class="profil-image">
            <img class="featurette-image img-responsive center-block classique" src="img/profiles/Diablo.jpg" alt="profil"/>
            <img class="featurette-image img-responsive center-block Mode_Sauron" src="img/Sauron_folder/Morgoth 10.jpg" alt="couverture" style="display:none"/>
        </div>
      </br>
    </div>
    <div class="global-profil" style="top:1600px">  
        <hr class="featurette-divider"> 
        <h3 class="dragon">Nous remercions aussi les 4 Fondateurs pour avoir écrit ces </br></br>remerciements, présenté ce produit magnifique et assuré son </br></br>fonctionnement pour les Millénaires à venir</h3>
    </div>

</body>
</html>