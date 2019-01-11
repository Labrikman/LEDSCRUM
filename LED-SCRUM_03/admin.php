<?php
// ############# SESSION ################
session_start();

// Initialisation
$pseudo = $_SESSION['pseudo'];
$id = $_SESSION['id'];


 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />
  <script src="js/script.js"></script>
  <script src="js/client.js"></script>
  <title>LED SCRUM Admin</title>
</head>

<!-- Dans le header il y a seulement le logo LED SCRUM -->
<header>
  <div class="logo1">
    <img src="images\logo-LEDSCRUM.png" alt="logo led scrum" class="logo">
  </div>
</header>
<body>
  <!-- C'est les deux boutons controleur de la visibilité du SCREEN-->
  <div class="view">
    <p class="inline">  Activer/désactiver viewer</p>
    <button type="button" id="view" class="button active" name="button"></button>
    <p class="inline">  Premier ou second plan</p>
    <button type="button" id="index" class="button active" name="button"></button>
  </div>

  <!-- SCREEN c'est le moniteur où se déroule le jeux -->
  <section id="screen" class="screen screen-off">
    <div class="promo"></div>
    <div class="playground" id="play1">
      <div class="content-j">
        <div class="joueur1"></div>
      </div>
      <div class="content-j">
        <div class="joueur2"></div>
      </div>
    </div>
  </section>

  <!-- Section de l'administration du jeux -->
  <section class="admin">

    <!-- réglage du SCREEN (dimension, couleur, logo partenaire)-->
    <div class="reglage media">
      <h2>Réglage média</h2>
      <div class="centre">
        <h3>Dimensions et Position</h3>
        <p>Vous ne devez pas voir la bordure bleu clair sur les LED.</p>
          <div id="click-dim">
            <input type="number" class="nbr" id="reg-width" placeholder="Longueur">
            <input type="number" class="nbr" id="reg-height" placeholder="Largeur">
            <input type="number" class="nbr" id="reg-top" placeholder="Hauteur">
            <input type="number" class="nbr" id="reg-left" placeholder="Marge">
          </div>

        <h3>Couleur</h3>
        <input type="color" class="txt" id="color1"  >
        <input type="color" class="txt" id="color2"  >
        <button type="button" id ="boutcolor" class="button active" name="button"></button>
        <h3>Background</h3>
        <p>Placez le fichier dans le dossier images.</p>
        <p class="petit">(Le nom du fichier ne doit pas contenir d'espaces)</p>
        <input type="file" id='image' placeholder="Ajouter">
        <button type="button" id ="boutfile" class="button active" name="button"></button>
      </div>
    </div>

    <!-- réglage du JEUX -->
    <div class="reglage jeu">
      <div id="form">
      //  <?php
        echo "<h1>Bienvenu Admin ".$pseudo."</h1>";
        echo "<div class='hidden' id='pseudo'>".$pseudo."</div>";
        echo "<div class='hidden' id='id'>".$id."</div>";
        ?>
      <button type="button" id="send-data" value="0"></button>
    </div>
    </div>

    <!-- Communiction avec la Base De Données -->
    <div class="reglage bdd">
      <div id="recv_message"></div>


    </div>
  </section>
  <script src="ws://localhost:8080/ws/lib/WebSocket.js"></script>
</body>
<footer></footer>
</html>
