//########## Décompte avant départ ##########
var counter = 10;
var intervalId = null;

function finish() {
  clearInterval(intervalId);
  msg.innerHTML = "GO !";

  //##### GAME #####
  //Multiplication par 2
  var play1 = j1*2;
  //gestion du remplissage de la jauge
  joueur1.style.width = play1+"%";
}
// fonction du Bip
function bip() {
  counter--;
  if(counter == 0) finish();
  else {
      document.getElementById("bip").innerHTML = counter + " secondes restantes";
  }
}
function start(){
  intervalId = setInterval(bip, 1000);
}
