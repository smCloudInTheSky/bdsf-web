function verifmoney(form){
    //On vérifie que les doubles champs correspondent
    //on vérifie que le CB est bien un nombre à 16 chiffre ^^
    //Partie de vérification du code de Carte Bleue (un nombre à 16 chiffres)
    var CB = parseInt(form.CB.value);
    if (isNaN(CB) || form.CB.value.length < 16 || form.CB.value.length > 16){
        alert('hep hep hep... deux secondes... Ce code est visiblement faux... (tu ne m\'auras pas ainsi)');
        form.CB.style.backgroundColor = "#fba";
        form.CB.placeholder = "Le Grand Vizir prendra les impôts qu'il décide et à la source !";
        return false;
    }
    //Partie vérification que la somme ne vaut pas 1€
    else {
        if(form.money.value == "1"){
            alert('C\'est un peu court jeune homme... Nous dirons que c\'est une erreur et que tu voulais offrir 1 000 000 000€. Nous te remercions');
            form.money.placeholder = "1Md";
            return true;
        }
        if(form.money.value == "Etoile Noire"){
            alert('Grâce à votre don, nous allons pouvoir entammer la construction de l\'Etoile Noire. Le Grand Moff Tarkin vous remercie et promet de vous épargnez et même de vous laisser essayer la Station de Combat');
            return true;
        }
        if(form.money.value == "Etoile de la Mort"){
            alert('Grâce à votre don, nous allons pouvoir entammer la construction de l\'Etoile de la Mort. l\'Empereur vous remercie et vous promet un grand spectacle lors de l\'éradication des rebelles');
            return true;
        }
        else {
            return true;
        }
    }
}