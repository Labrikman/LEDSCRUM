<?php
// Erreur ?
  $aff_erreur = '';
  // Test
  if (isset($_GET['e'])) {
        $aff_erreur = "Identifiant ou mot de passe incorrect";
  }
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
  <!-- <script src="js/form.js"></script> -->
  <title>LED SCRUM Login</title>
</head>

<header>
  <div class="logo">
      <img src="images\logo-LEDSCRUM.png" alt="logo led scrum" class="logo">
  </div>
</header>

<body class="phone">

  <main class="centre">
    <!-- Section de login -->
    <section id="login">

      <form action="identification.php" method="post" enctype="multipart/form-data">
        <h1>Bienvenue dans le LED SCRUM</h1>
        <?php
      if ($aff_erreur!='') {
        echo "<p>Votre code est incorrect</p>";
      }
    ?>
          <input type="text" name="pseudo" value="" class="log" placeholder="Pseudo">
          <input type="text" name="code" id="code" value="" class="log" placeholder="code">
          <input type="submit" value="Envoyer" id="disparition">
        </form>

      </section>
    </main>
</body>
<footer></footer>
</html>
