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
  <title>LED SCRUM JOUEUR</title>
</head>

<header>
  <div class="logo">
      <img src="images\logo-LEDSCRUM.png" alt="logo led scrum" class="logo">
  </div>
</header>

<body class="phone">
  <main class="centre">
    <section class="play">
      <!-- Joueur connecté - non selectionné -->
      <div class="wait">
        <?php
        echo "<h1>Désolé ".$pseudo."</h1>";
        echo "Vous n'avez pas été sélectionné !";
        echo "LA PROCHAINE FOIS PEUT-ÊTRE ;)";
        ?>
      </div>

      <!-- affichage des meilleurs score si j'ai le temps ??? -->
      

      <!-- Réception du décompte -->
      <div id="users"></div>
    </section>
  </main>


</body>

<footer></footer>
</html>
