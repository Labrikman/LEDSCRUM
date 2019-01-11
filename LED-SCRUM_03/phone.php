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
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />
  <script src="js/phone.js"></script>
  <script src="js/client.js"></script>

  <title>LED SCRUM ACCUEIL</title>
</head>

<header>
  <div class="logo">
      <img src="images\logo-LEDSCRUM.png" alt="logo led scrum" class="logo">
  </div>
</header>

<body class="phone">
  <main class="centre">
    <section class="play">
      <!-- Joueur connecté - Attente séléction -->
      <div class="wait">
        <?php
        echo "<h1>Bienvenu ".$pseudo."</h1>";
        echo "<div class='hidden' id='pseudo'>".$pseudo."</div>";
        echo "<div class='hidden' id='id'>".$id."</div>";
        echo "<p>A la mi-temps, appuyez sur le bouton</p>";
        echo "<p>pour savoir si vous êtes sélectionné !</p>";
        echo "</br>";
        ?>
      </div>

      <!-- Joueur sélectionné - Envoi des data -->
      <form action="selection.php" method="post" enctype="multipart/form-data">
          <input type="text" name="code-match" id="code-match" value="" class="log" placeholder="code match">
          <input type="submit" value="MI-TEMPS" id="disparition">
        </form>

      <!-- Réception du décompte -->
      <div id="users"></div>
    </section>
  </main>


</body>

<footer></footer>
</html>
