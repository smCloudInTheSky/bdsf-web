function ModifAdmin() {
    //active les champs réserver aux Super-Admins 
    var x = document.getElementsByClassName('ModifAdmin');
    var i = 0;
    for (i=0; i < x.length; i++) {
        x[i].style.display='block';
    }
}

function ModifCapitaine() {
    //active les champs réserver aux capitaines
    var x = document.getElementsByClassName('ModifCapi');
    var i = 0;
    for (i=0; i < x.length; i++) {
        x[i].style.display='block';
    }
}

function HidePerso(){
    var x = document.getElementsByClassName('Perso');
    var y = document.getElementsByClassName('PersoInput');
    var i = 0;
    for(i=0;i < x.length;i++){
        x[i].style.display='none';
    }
    for(i=0;i < y.length;i++){
        y[i].checked='false'; //empêche à l'admin de tricher en sélectionnant le choix avant de repasser à lui
    }
    document.getElementById('ByDefault').checked='true';
}

function ShowPerso(){
    var x = document.getElementsByClassName('Perso');
    var i = 0;
    for(i=0;i < x.length;i++){
        x[i].style.display='block';
    }                
}

function ClassicChamp(){
    document.getElementById('champ').style.display='block';
    document.getElementById('ConfirmInput').style.display='none';
    document.getElementById('pts').style.display='none';
    document.getElementById('champ').setAttribute('type', 'text');
    document.getElementById('photo').style.display='none';
    //document.getElementById('nophoto').style.display='block';
    //document.getElementById('other').style.display='block';
    //document.getElementById('adminnophoto').style.display='block';
}

function PasswordChamp(){
    document.getElementById('champ').style.display='block';
    document.getElementById('ConfirmInput').style.display='block';
    document.getElementById('pts').style.display='none';
    document.getElementById('champ').setAttribute('type', 'password');
    document.getElementById('photo').style.display='none';
    //document.getElementById('nophoto').style.display='block';
    document.getElementById('ConfirmInput').setAttribute('type', 'password');
    //document.getElementById('adminnophoto').style.display='block';    
}

function ShowFormImage(){
    document.getElementById('champ').style.display='none';
    document.getElementById('ConfirmInput').style.display='none';
    document.getElementById('pts').style.display='none';
    document.getElementById('photo').style.display='block';
    //document.getElementById('adminnophoto').style.display='none';    
}
    
function Showpts(){
    document.getElementById('champ').style.display='block';
    document.getElementById('ConfirmInput').style.display='none';
    document.getElementById('pts').style.display='block';
    document.getElementById('champ').setAttribute('type', 'text');
    document.getElementById('photo').style.display='none';
    //document.getElementById('nophoto').style.display='block';
    //document.getElementById('adminnophoto').style.display='block';    
}   

function Mailchamps(){
    document.getElementById('champ').style.display='block';
    document.getElementById('ConfirmInput').style.display='block';
    document.getElementById('pts').style.display='none';
    document.getElementById('champ').setAttribute('type', 'text');
    document.getElementById('photo').style.display='none';
    //document.getElementById('nophoto').style.display='block';
    document.getElementById('ConfirmInput').setAttribute('type', 'text');
    //document.getElementById('adminnophoto').style.display='block';    
}

function verifrequired(form){
    //Si on ne demande pas de changer l'image de profil, le "champ" est obligatoire
    //On vérifie que les doubles champs correspondent
    //on checked si une image a bien été chargé (sinon ça va être difficile de la charger)
    if (form.carac.value != "image"){
        if(form.champ.value.length == 0){
            alert('Terminez ce formulaire ! Maintenant !');
            form.champ.style.backgroundColor = "#fba";
            form.champ.placeholder = "Apprends à remplir entièrement un formulaire avant de l'envoyer !!!";
            return false;
        }
        else {
            if(form.carac.value == "mdp" || form.carac.value == "mail"){
                if (form.champ.value != form.ConfirmInput.value){
                    alert('Non, tu t\'es trompé... comme d\'habitude... il faut que les deux correspondent ...');
                    form.ConfirmInput.style.backgroundColor = "#fba";
                    form.champ.placeholder = "Cette tanchitude... #FACEPALM";
                    form.ConfirmInput.placeholder = "Et en plus on t'avais prévenu... #FACEPALM";
                    return false;
                }
            }
            return true;
        }
    }
    else {
        if(form.avatar.value.length == 0){
            alert('Mais où est la photo ?!!');
            return false;
        }
        return true;
    }
}