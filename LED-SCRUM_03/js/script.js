document.addEventListener('DOMContentLoaded', function() {

// ################ SCREEN ON/OFF ##############

  // Allumage du screen viewer
  var allume = function() {

  // Ciblage des éléments
      var screen = document.querySelector(".screen");
      var bouton = document.querySelectorAll(".button");
      var index = document.getElementById("index");
      // var bouton = document.getElementById("view");

  // Switch de classe
      screen.classList.toggle('screen-off');
      bouton.forEach((bouton) => {
        bouton.addEventListener('click', () => {
          bouton.classList.toggle('active');
        });
      });
    }

 index.addEventListener('click', (e) => {
   if(screen.style.zIndex = "0"){
     screen.style.zIndex = "2";
   } else {
     screen.style.zIndex = "0";
   }
 });

  document.querySelector('.button').onclick = allume;

// ################ POP UP Plein écran ################

  //Ciblage
  var larg = (document.body.clientWidth);

  //Boucle alerte
    if(larg<1200){
        alert("L'utilisation du mode Admistrateur se fait en mode plein écran");
    }

//########### Gestion des dimensions du sreen ###########

  // Ciblage
  var screen = document.getElementById('screen');
  var input = document.getElementById('click-dim');

  // FONCTION de click pour récupérer de la VALEUR des INPUT

  input.addEventListener('click', function(e) {
    // Ciblage initialisation
    var width_dim = document.getElementById('reg-width').value;
    var height_dim = document.getElementById('reg-height').value;
    var top_pos = document.getElementById('reg-top').value;
    var left_pos = document.getElementById('reg-left').value;

    //modification du style du SCREEN
    screen.style.width = width_dim+"px";
    screen.style.height = height_dim+"px";
    screen.style.top = top_pos+"px";
    screen.style.left = left_pos+"px";
    //console.log(width_dim, height_dim, top_pos, left_pos);


  });

// ########### Gestion de la couleur joueurs ############

  //Ciblage
  var joueur1 = document.querySelector('.joueur1');
  var joueur2 = document.querySelector('.joueur2');
  var couleur1 = document.getElementById('color1');
  var couleur2 = document.getElementById('color2');
  var boutcolor = document.getElementById('boutcolor');

  // var couleur_style1 = couleur1.style.value;
  // var couleur_style2 = couleur2.style.background;

  //Gestion de la modification de la couleur au click bouton
  boutcolor.addEventListener('click', function() {
    //Récupération des valeur à chaque click
    var color1 = couleur1.value;
    var color2 = couleur2.value;
    //Atribution de la couleur aux joueurs
    joueur1.style.background = color1;
    joueur2.style.background = color2;

    //console.log(color1);
});

//####### Ajout d'un logo ou d'une image en fond ###########

  //Ciblage
  var boutfile = document.getElementById('boutfile');
  var promo = document.querySelector(".promo");

  //Gestion de click pour inserer l'image
  boutfile.addEventListener('click', function() {

    //Récupération du nom de l'image
    var image = document.getElementById('image');
    var curFiles = image.files;
    var name = curFiles[0].name ;

    //Insertion de l'image dans le background
    //console.log(name);
    promo.style.backgroundImage = "url(images/"+name+")";

  });





  //permet de selectionner les joueurs et les inscrires dans la DB
  // fetch('selection.php')
  //   .then(response => {
  //     return response.json();
  //   }).then(data => {
  //     console.log(data);
  //   });






















});
