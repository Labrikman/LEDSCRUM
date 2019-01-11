<?php

// ##### Récup et test pseudo et code joueurs #####
  //Recup data session pour reconnaissance
  // Initialisation
  $pseudo = $_SESSION['pseudo'];
  $id = $_SESSION['id'];

  //Administrateur
  if ($pseudo=='Admin' && $code=='labrik') {
    
  }
    // ########## Pseudo ##########
    // Test d'existence
    if (isset($_POST['pseudo'])) {
      // Test si pas vide
      if ($_POST['pseudo'] != '') {
        // Si pas vide, Test et on nettoie au cas où
        $pseudo = strip_tags($_POST['pseudo']);
      } else {
        // Valeur par défaut
        $pseudo = '?';
      }
    } else {
      $erreur.="Champs pseudo manquant, pirate !<br>";
    }

    // ########## Code ##########
    // Test d'existence
    if (isset($_POST['code'])) {
      // Test si pas vide
      if ($_POST['code'] != '') {
        // Si pas vide, Test et on nettoie au cas où
        $code = strip_tags($_POST['code']);
      } else {
        // Valeur par défaut
        $code = '?';
      }
    } else {
      $erreur.="Champs code manquant, pirate !<br>";
    }


    // ##### Récup et selection joueurs par l'Admin

    // if ($pseudo=='Admin' && $code=='labrik') {
      // Incrémantation de la SESSION
      // session_start();
      // $_SESSION['width'] = $width;
      // $_SESSION['height'] = $height;
      // $_SESSION['top'] = $top;
      // $_SESSION['left'] = $left;
      // direction à la page administrateur
    //   header('Location:admin.php');
    // }


    // ########## Pseudo joueur 1 ##########
    // Test d'existence
    if (isset($_POST['pseudo1'])) {
      // Test si pas vide
      if ($_POST['pseudo1'] != '') {
        // Si pas vide, Test et on nettoie au cas où
        $pseudo1 = strip_tags($_POST['pseudo1']);
      } else {
        // Valeur par défaut
        $pseudo1 = '?';
      }
    } else {
      $erreur.="Champs pseudo manquant, pirate !<br>";
    }

    // ########## Pseudo joueur 2 ##########
    // Test d'existence
    if (isset($_POST['pseudo2'])) {
      // Test si pas vide
      if ($_POST['pseudo2'] != '') {
        // Si pas vide, Test et on nettoie au cas où
        $pseudo2 = strip_tags($_POST['pseudo2']);
      } else {
        // Valeur par défaut
        $pseudo2 = '?';
      }
    } else {
      $erreur.="Champs pseudo manquant, pirate !<br>";
    }








 ?>
