<?php

    include("vue.php");
    include("modele.php");
    include("config.php");
    
    EnTete("BD-SF", "index", "");

    if(isset($_SESSION) && $_SESSION['co'] == 1){
        Navigateur_Co();
    }
    else {
        Navigateur_NonCo();
    }

//Rubrique de l'Index (HTML Fixe)
//##########################################################################################################################################
?>
<div class="container">
  </br>
  <div id="myCarousel" class="carousel slide classique" data-ride="carousel" style="display:block">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <!-- Slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="modesauron"> 
          <img class="featurette-image img-responsive center-block" src="img/classic_folder/Cthulhu.png" alt="Cthulhu" width="900" height="600"/>
          <div class="overlay">
              <img class="text" width="900" height="600" src="img/Sauron_folder/Sauron 31.jpg" alt="l'Armée de Sauron"/>
          </div>
        </div>
        <div class="carousel-caption">
          <h3 class="old" >Cthulhu l'Ancien</h3>
          <p class="old">Une photo exclusif du Grand Ancien endormi</p>
          <p class="blazed"> <a class="btn btn-lg btn-primary" href="https://fr.wikipedia.org/wiki/Cthulhu" role="button">Sa page Wikipédia</a></p>
        </div>
      </div>
  
      <div class="item">
        <img src="img/classic_folder/Death Star Fire.png" alt="Etoile Noire" width="900" height="600"/>
        <div class="carousel-caption">
          <h3 class="starwars">L'Etoile Noire</h3>
          <p class="aurabesh">N'est-ce pas Magnifique ? Encore un qui a defie l'autorite de l'Empire !</p>
          <p class="blazed"> <a class="btn btn-lg btn-primary" href="Dons.php" role="button">Soutenez la construction de l'étoile noire</a></p>
        </div>
      </div>
  
      <div class="item">
        <img src="img/classic_folder/Wallpaper Universe 2.jpeg" alt="Espace" width="600" height="300"/>
        <div class="carousel-caption">
          <h3 class="starcraft">L'Espace</h3>
          <p class="tron">Un peu de sérénité dans ce monde de brute</p>
          <p class="blazed"> <a class="btn btn-lg btn-primary" href="gallerie.php" role="button">Ur anus -- click here</a></p>
        </div>
      </div>
  
      <div class="item">
        <img src="img/classic_folder/Empire Flotte 2.jpg" alt="Empire" width="600" height="300"/>
        <div class="carousel-caption">
          <h3 class="aurabesh">La Marine Imperiale en route pour casser des rebelles</h3>
          <p class="aurabesh">Ah ! T'es pas d'accord avec moi ? Qu'entends-je ? Mais oui, c'est l'Empire venu te reduire au silence !</p>
        </div>
      </div>     
    
      <div class="item">
        <div class="modesauron"> 
          <img class = "featurette-image img-responsive center-block" src="img/classic_folder/Cloud-nobarb.jpg" alt="Cloud" width="600" height="300"/>
          <div class="overlay">
              <img class="text" width="600" src="img/Sauron_folder/Sauron 23.jpg" alt="Ah !"/>
          </div>
        </div>        
        <div class="carousel-caption">
          <h3 class="LSDA">Exclusivité BD-SF</h3>
          <p class="chevalier">Un dossier complet montrant les dessous des Grands Vassaux, comme par exemple la période où Cloud "barbe de soi" n'en avais pas !</p>
          <p class="chevalier"><a class="btn btn-lg btn-primary" href="https://www.youtube.com/watch?v=Ri7GzCUTC5s" role="button">Cliquez pour voir l'enquête complète</a></p>
        </div>
      </div> 

      <div class="item">
        <div class="modesauron"> 
          <img class = "featurette-image img-responsive center-block" src="img/classic_folder/Démon des Ténèbres.png" alt="Un démon des Ténèbres à 4 bras armé d'un Faux" width="600" height="300"/>
          <div class="overlay">
              <img class="text" height="400" src="img/Sauron_folder/Denescor 11.jpg" alt="Un Balrog Armuré"/>
          </div>
        </div>  
        <div class="carousel-caption">
          <h3 class="LSDA">Les Conseils de BD-SF</h3>
          <p class="oldmedium">Il est fortement déconseillé d'aller se battre contre un Démon Ancestrale de 100m de haut avec seulement une simple épée et sans avoir pris de petit-déjeuner au préalable</p>
          <p class="blazed"><a class="btn btn-lg btn-primary" href="https://www.youtube.com/watch?v=URZiDLpurfQ" role="button">Cliquez pour d'autres conseils du quotidien</a></p>
        </div>
      </div> 
    
  </div>

    <!-- Contrôles -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  <div id="myCarouselSauron" class="carousel slide Mode_Sauron" data-ride="carousel" style="display:none">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarouselSauron" data-slide-to="0" class="active"></li>
      <li data-target="#myCarouselSauron" data-slide-to="1"></li>
      <li data-target="#myCarouselSauron" data-slide-to="2"></li>
      <li data-target="#myCarouselSauron" data-slide-to="3"></li>
      <li data-target="#myCarouselSauron" data-slide-to="4"></li>
      <li data-target="#myCarouselSauron" data-slide-to="5"></li> <!-- class="Mode_Sauron" style="display:none" -->
    </ol>
    <!-- Slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/Sauron_folder/Sauron 10.jpg" alt="Sauron" width="600" height="300"/>
        <div class="carousel-caption">
          <h3 class="dragon">Sauron le Magnifique</h3>
          <p class="elfiqueitalic">Personne ne peut lui arriver à la cheville, il protège le Royaume Magique de BD-SF</p>
          <p class="chevalier"> <a class="btn btn-lg btn-primary" href="https://fr.wikipedia.org/wiki/Sauron" role="button">Sa page Wikipédia</a></p>
        </div>
      </div>
  
      <div class="item">
        <img src="img/Sauron_folder/balrog breath.gif" alt="barlrog gif" width="900" height="600"/>
        <div class="carousel-caption">
          <h3 class="dragon">Le Fléau de Durin</h3>
          <p class="rune">Ah !! Je brule !!</p>
          <p class="rune"> <a class="btn btn-lg btn-primary" href="https://static.ratedred.com/uploads/rhSajhkv-i3LjQJLS_Rbf0alI0s/web_LOTR_Thumbnail-3ZG7GMyprgQGWkabEwM9ww.jpg" role="button">Venez vous aussi bruler !</a></p>
        </div>
      </div>
  
      <div class="item">
        <img src="img/Sauron_folder/Thangorodrim (trois volcans d'Angband).jpg" alt="Angband" width="900" height="600"/>
        <div class="carousel-caption">
          <h3 class="dragon">La Fortresse de Morgoth</h3>
          <p class="elfiqueitalic">Tenue par Sauron en attendant son retour au Premier Âge</p>
          <p class="elfiqueitalic"> <a class="btn btn-lg btn-primary" href="#" role="button">Venez vous aussi protéger une forteresse du Mal !</a></p>
        </div>
      </div>
  
      <div class="item">
        <img src="img/Sauron_folder/L'Oeil.jpg" alt="L'Oeil" width="600" height="300"/>
        <div class="carousel-caption">
          <h3 class="dragon">Big Sauron is Watching You</h3>
          <p class="LSDA">Et ce qu'il voit au fond de votre âme le répugne ! David Pujadas ? Nu ?!</p>
        </div>
      </div>     
    
    <div class="item">
      <img src="img/Sauron_folder/Siege of Minas Tirith 1.jpg" alt="Minas Tirith" width="900" height="600"/>
      <div class="carousel-caption">
        <h3 class="dragon">Fake News !</h3>
        <p class="LSDA">On vous ment ! L'armée de Sauron n'a pas été vaincu sur les champs du Pelennor ! L'armée des Morts n'existe pas et Le Roi Sorcier n'a pas été vaincu par une pauvre humaine !</p>
        <p class="chevalier"><a class="btn btn-lg btn-primary" href="#" role="button">Cliquez pour connaître le véritable déroulement de la bataille</a></p>
      </div>
    </div> 
    
    <div class="item">
      <img src="img/Sauron_folder/Face à Morgoth.jpg" alt="Morgoth" width="600" height="300"/>
      <div class="carousel-caption">
        <h3 class="dragon">Bientôt de Retour</h3>
        <p class="LSDA">Morgoth le Valeureux sera bientôt de retour et sa première action sera de s'inscrire sur ce site que l'illustre Sauron lui a si bien vendu</p>
        <p class="chevalier"><a class="btn btn-lg btn-primary" href="#" role="button">Cliquez pour voir la date de cette évènement Mondial</a></p>
      </div>
    </div>
    
  </div>

    <!-- Contrôles -->
  <a class="left carousel-control" href="#myCarouselSauron" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarouselSauron" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>      
  </div>
</div>

<div id="rubriques_index" class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette Mode_Sauron" style="display:none">
        <div class="col-md-7 col-md-push-5">
          <h2 class="old featurette-heading">Apprenez à vous battre avec le swag de Sauron <span class="text-muted">"Avec ou sans armée, il faut te rendre à l'évidence : tu es condamné !"</span></h2>
          <p class="LSDA lead">
            Simple et efficace, personne ne résistera à vos coups de massues. Vous deviendrez un véritable Seigneur du Mal en 10 séances seulement !
          </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/Sauron_folder/Le Coups de Sauron 2.gif" alt="Démonstration du swag atteint après 10 séances">
        </div>
      </div>

    <hr class="featurette-divider Mode_Sauron" style="display:none">

    <!-- Lui reste statique -->
    <?php affiche_CR(); ?>
    
    <!--Partie Classique-->
    <div class="row featurette classique" style="display:block">
        <div class="col-md-7 col-md-push-5">
          <h2 class="old featurette-heading">La Chute de TeDeum <span class="text-muted">"Il voulu être Sauron, il ne fut que Saruman"</span></h2>
          <p class="chevalier lead classique" style="display:block">
            Découvrez en avant première comment se finira le règne de TeDeum le Grand Vizir ! </br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/hwrfUgEfd18" frameborder="0" allowfullscreen></iframe>
          </p>
        </div>
        <div class="col-md-5 col-md-pull-7 modesauron">
          <img class="featurette-image img-responsive center-block" width="400" height="600" src="img/classic_folder/TeDeum.jpg" alt="Une image du Grand Vizir"/>
          <div class="overlay">
            <img class="featurette-image img-responsive center-block text" width="400" height="600" src="img/Sauron_folder/Sauron 16.jpg" alt="Saruman"/>
          </div>
        </div>
      </div>        
        
    <!--Partie Mode Sauron-->
    <div class="row featurette Mode_Sauron" style="display:none">
        <div class="col-md-7 col-md-push-5">
          <h2 class="old featurette-heading">La Prise de Bârad-Dûr <span class="text-muted">"Aucun problème, Sauron est immortel"</span></h2>
         <p class="LSDA lead">
            Découvrez en avant première comment La Bouche de Sauron trahit son Maître ! </br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/1ot9JtiHhiU" frameborder="0" allowfullscree></iframe>
        </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/Sauron_folder/Sauron 16.jpg" width="200%" height="200%" alt="Une image du Grand Sauron"/>
        </div>       
      </div>

    <hr class="featurette-divider">

    <!--Partie Classique-->
    <div class="row featurette classique" style="display:block">
        <div class="col-md-7">
          <h2 class="old featurette-heading">Et enfin une news inutile <span class="text-muted">"C'est dans l'adversité qu'on a le plus de chance d'être défait"</span></h2>
          <p class="chevalier lead">
            Un guerrier badass pour finir (le Grand Vizir le reconnaîtra)
          </p>
        </div>
        <div class="col-md-5 modesauron">
          <img class="featurette-image img-responsive center-block" width="600" src="img/classic_folder/Guerrier.jpg" alt="Une image de Guerrier"/>
          <div class="overlay">
            <img class="featurette-image img-responsive center-block text" width="600" src="img/Sauron_folder/Sauron 47.jpg" alt="Saruman"/>
          </div>
        </div>
      </div>
          
    <!--Partie Mode Sauron-->
    <div class="row featurette Mode_Sauron" style="display:none">
        <div class="col-md-7">
          <h2 class="old featurette-heading">Et enfin une news inutile <span class="text-muted">"C'est dans l'adversité qu'on a le plus de chance d'être défait"</span></h2>
          <p class="LSDA lead">
            Oui, oui, ça ne sert vraiment à rien. J'avais juste envie de mettre cette image de Sauron vraiment trop stylée !
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/Sauron_folder/Sauron 30.jpg" alt="Une image de Sauron">
        </div>
      </div>

    <hr class="featurette-divider">

    <!--Partie Classique-->
    <div class="row featurette classique" style="display:block">
        <div class="col-md-7 col-md-push-5">
          <h2 class="old featurette-heading">Un petit coquin ce Saruman <span class="text-muted">"Oh... You touch my tralala..."</span></h2>
          <p class="chevalier lead">
            Il semblerait que Gandalf soit gêné part les propos du Magicien Blanc...
            <iframe width="560" height="315" src="https://www.youtube.com/embed/h3dTDTEgqkQ" frameborder="0" allowfullscreen></iframe>
          </p>
        </div>
          <div class="col-md-5 col-md-pull-7 modesauron">
            <img class="featurette-image img-responsive center-block" width="300" height="600" src="img/classic_folder/Saroumane 3.png" alt="Saruman"/>
            <div class="overlay">
              <img class="featurette-image img-responsive center-block text" width="300" height="600" src="img/Sauron_folder/Sauron 48.jpg" alt="Sauron"/>
            </div>
          </div>
      </div>

    <!--Partie Mode Sauron-->
    <div class="row featurette Mode_Sauron" style="display:none">
        <div class="col-md-7 col-md-push-5">
          <h2 class="old featurette-heading">La Terreur du Mordor et d'Angmar : Gandalf 007 <span class="text-muted">"My name is The Grey, Gandalf the Grey."</span></h2>
          <p class="LSDA lead">
            Nos services secrets se mettent déjà sur la piste de cet espion des Valars aux ordres du Gondor
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LHwkdwEO8d8" frameborder="0" allowfullscreen></iframe>
          </p>
        </div>
        <div class="col-md-5 col-md-pull-7 modesauron">
          <img class="featurette-image img-responsive center-block" height="600" src="img/Sauron_folder/gandalf 3.jpg" alt="Gandalf"/>
          <div class="overlay">
            <img class="featurette-image img-responsive center-block text" height="600" src="img/Sauron_folder/Dance de Sauron.gif" alt="Une intrusion de Gandalf"/>
          </div>
        </div>
      </div>
      
    <hr class="featurette-divider">
    
    <!-- /END THE FEATURETTES -->
</div>
<?php
//##########################################################################################################################################
    Pied();
    verif_Sauron();

?>
