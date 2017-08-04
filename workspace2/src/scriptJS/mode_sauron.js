//Mode Sauron : Remplace toutes les images pas des images de Sauron, elles seront importées dans le code HTML


function ModeSauron() {
  document.body.style.backgroundImage = "url('../img/Sauron_folder/Sauron 7.jpg')"; // <3 <3 <3 Best Background Ever !! <3 <3 <3
  document.body.style.backgroundSize = "1366px 769px";
  document.body.style.backgroundRepeat = "no-repeat";
  document.getElementById('icone').setAttribute('href', '../img/Sauron_folder/Sauron_ico.ico');
  var C = document.getElementsByClassName('classique');
  var MS = document.getElementsByClassName('Mode_Sauron');
  var i = 0;
  for (i=0; i < C.length; i++){
      C[i].style.display = 'none';
  }
  for (i=0; i < MS.length; i++){
      MS[i].style.display = 'block';
  }
}