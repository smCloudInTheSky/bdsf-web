<?php

    include("vue.php");
    include("modele.php");
    include("config.php");
    
    EnTete("La Galerie de Sauron", "gallerie", "");

    if(isset($_SESSION) && $_SESSION['co'] == 1){
        Navigateur_Co();
    }
    else {
        Navigateur_NonCo();
    }
?>

<body>
    <div> <!-- Pour le </div> du "Pied()"-->

        <!-- L'Univers : Wallpaper Universe 27 / Sauron 13-->
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Wallpaper Universe 27.jpg" style="display:block">
            <img src="img/classic_folder/Wallpaper Universe 27.jpg" alt="Wallpaper Universe 27" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Sauron 13.jpg" style="display:none">
            <img src="img/Sauron_folder/Sauron 13.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">L'Univers</div>
        </div>

         <!--  : Groupe de combat / Sauron 30-->       
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Groupe de Combat.jpg" style="display:block">
            <img src="img/classic_folder/Groupe de Combat.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Sauron 30.jpg" style="display:none">
            <img src="img/Sauron_folder/Sauron 30.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Groupe de Combat</div>
        </div>

        <!--  : Super Elemental Giant.jpg / Morgoth 10-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Super Elemental Giant.jpg" style="display:block">
            <img src="img/classic_folder/Super Elemental Giant.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Morgoth 10.jpg" style="display:none">
            <img src="img/Sauron_folder/Morgoth 10.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Un géant élémentaire, cool !</div>
        </div>

         <!--  : Trou Noir 1.jpg / Sauron 43-->       
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Trou Noir 1.jpg" style="display:block">
            <img src="img/classic_folder/Trou Noir 1.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Sauron 43.jpg" style="display:none">
            <img src="img/Sauron_folder/Sauron 43.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Un gros trou noir</div>
        </div>

        <!--  : Démon 7 / Sauron 48-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Démon 7.jpg" style="display:block">
            <img src="img/classic_folder/Démon 7.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Sauron 48.jpg" style="display:none">
            <img src="img/Sauron_folder/Sauron 48.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Un démon bien vénère</div>
        </div>
        
        <!--  : Dragon 1 / Sauron 44-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Dragon 1.jpg" style="display:block">
            <img src="img/classic_folder/Dragon 1.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Sauron 44.jpg" style="display:none">
            <img src="img/Sauron_folder/Sauron 44.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Un beau dragon</div>
        </div>
        
        <!-- L'Univers : Wallpaper Universe 2 / Sauron 14-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Wallpaper Universe 2.jpeg" style="display:block">
            <img src="img/classic_folder/Wallpaper Universe 2.jpeg" alt="Wallpaper Universe 2" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Sauron 14.jpg" style="display:none">
            <img src="img/Sauron_folder/Sauron 14.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">L'Univers</div>
        </div>

        <!-- L'Univers : Wallpaper Universe 5 / Sauron 21-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Wallpaper Universe 5.jpg" style="display:block">
            <img src="img/classic_folder/Wallpaper Universe 5.jpg" alt="Wallpaper Universe 5" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Sauron 21.jpg" style="display:none">
            <img src="img/Sauron_folder/Sauron 21.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">L'Univers</div>
        </div>

        <!-- Le Finalizer : The Finalizer / Ancalagon-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/The Finalizer (Resurgent Class).jpg" style="display:block">
            <img src="img/classic_folder/The Finalizer (Resurgent Class).jpg" alt="Star Wars 7 - Destroyer" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Ancalagon le Noir.jpg" style="display:none">
            <img src="img/Sauron_folder/Ancalagon le Noir.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Le Finalizer (Star Wars 7)</div>
        </div>

        <!-- Destroyer Victoire : Destroyer Victoire / Sauron 41-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Destroyer Victoire Bombardement.jpg" style="display:block">
            <img src="img/classic_folder/Destroyer Victoire Bombardement.jpg" alt="Destroyer Victoire" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Sauron 41.png" style="display:none">
            <img src="img/Sauron_folder/Sauron 41.png" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Destroyer Victoire (Star Wars)</div>
        </div>

        <!--  : Dragon 22 / Sauron 23-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Dragon 22.jpg" style="display:block">
            <img src="img/classic_folder/Dragon 22.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Sauron 23.jpg" style="display:none">
            <img src="img/Sauron_folder/Sauron 23.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Dragon trop Kawaï</div>
        </div>

        <!--  : Dragon 20 (Big Dragon) / Sauron 31-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Dragon 20 (Big Dragon).jpg" style="display:block">
            <img src="img/classic_folder/Dragon 20 (Big Dragon).jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Sauron 31.jpg" style="display:none">
            <img src="img/Sauron_folder/Sauron 31.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Un bon gros dragon</div>
        </div>

        <!--  : concept Zonama 1 / Morgoth 8-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/concept Zonama 1.jpg" style="display:block">
            <img src="img/classic_folder/concept Zonama 1.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Morgoth 8.jpg" style="display:none">
            <img src="img/Sauron_folder/Morgoth 8.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Paysage</div>
        </div>

        <!--  : Cyborg 1 / Morgoth 13-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Cyborg 1.jpg" style="display:block">
            <img src="img/classic_folder/Cyborg 1.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Morgoth 13.jpg" style="display:none">
            <img src="img/Sauron_folder/Morgoth 13.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Un bon gros robot</div>
        </div>

        <!--  : The Wolves of Death / Sauron 45-->
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/The Wolves of Death.jpg" style="display:block">
            <img src="img/classic_folder/The Wolves of Death.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Sauron 45.png" style="display:none">
            <img src="img/Sauron_folder/Sauron 45.png" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Skyrim</div>
        </div>

        <!--  : Trou_Noir_2 / Sauron 47-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Trou_Noir_2.jpg" style="display:block">
            <img src="img/classic_folder/Trou_Noir_2.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Sauron 47.jpg" style="display:none">
            <img src="img/Sauron_folder/Sauron 47.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Ancien fond d'écran, RIP</div>
        </div>

        <!--  : Lusankya vs Reaper / l'anneau unique 2-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/Lusankya vs Reaper.jpg" style="display:block">
            <img src="img/classic_folder/Lusankya vs Reaper.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/l'anneau unique (2).jpg" style="display:none">
            <img src="img/Sauron_folder/l'anneau unique (2).jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Bataille spatiale</div>
        </div>

        <!--  : concept Valc VII 10 / L'Oeil-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/concept Valc VII 10.jpg" style="display:block">
            <img src="img/classic_folder/concept Valc VII 10.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/L'Oeil.jpg" style="display:none">
            <img src="img/Sauron_folder/L'Oeil.jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Un petit chateau bien comme il faut</div>
        </div>

        <!--  : concept Valc VII 9 / Balrog vs Army-->        
        <div class="gallery">
          <a class="classique" target="_blank" href="img/classic_folder/concept Valc VII 9.jpg" style="display:block">
            <img src="img/classic_folder/concept Valc VII 9.jpg" alt="" width="600" height="400">
          </a>
          <a class="Mode_Sauron" target="_blank" href="img/Sauron_folder/Balrog 43 (vs Army).jpg" style="display:none">
            <img src="img/Sauron_folder/Balrog 43 (vs Army).jpg" alt="Sauron (bah oui)" width="600" height="400">
          </a>
          <div class="desc">Whaoh c'est trop beau</div>
        </div>  
      
    </div>
    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<?php

Pied();

?>