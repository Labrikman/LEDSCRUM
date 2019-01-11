<?php

// Initialisation
$erreur = '';
$date = date("Y.m.d");

// ##### Récupération et test des données du formulaire #####

    // ########## Pseudo ##########
    // Test d'existence
    if (isset($_POST['pseudo'])) {
      // Test si pas vide
      if ($_POST['pseudo'] != '') {
        // Si pas vide, Test et on nettoie au cas oùt
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
        // Si pas vide, Test et on nettoie au cas oùt
        $code = strip_tags($_POST['code']);
      } else {
        // Valeur par défaut
        $code = '?';
      }
    } else {
      $erreur.="Champs code manquant, pirate !<br>";
    }



//##### Redirection si administrateur ou joueur ########

      //Administrateur
      if ($pseudo=='Admin' && $code=='labrik') {
          // Incrémantation de la SESSION
          session_start();
          $_SESSION['pseudo'] = $pseudo;
          $_SESSION['code'] = $code;
          // direction à la page administrateur
          header('Location:admin.php');
      } elseif ($pseudo=='?'|| $code=='?'){
        header('Location:index.php?e=2');
      } else {

        // ########### CRM DB #############

          // Initialisation
          require('includes/inc_config.php');
          // Connexion DB
          require('includes/inc_connOK.php');

          // Vérification d'éventuel doublon ou profil existant
          $requete = 'SELECT log_pseudo, log_code, log_id FROM login WHERE log_pseudo LIKE "'.$pseudo.'" LIMIT 1';
          // Exécution de la requête
          $obj_resultats = $connDB -> query($requete);
          $resultat = $obj_resultats -> fetch(PDO::FETCH_ASSOC);

          // Si Doublon profil
          if ($resultat['log_pseudo'] == $pseudo) {
            // Doublon profil trouvé !
            $doublon = $resultat['log_pseudo'];

            //Requête - Check le code du doublon
            // $requete = 'SELECT log_code FROM login WHERE log_pseudo LIKE "'.$pseudo.'" LIMIT 1';
            // $obj_resultats = $connDB -> query($requete);
            // $code_verif = $obj_resultats -> fetch(PDO::FETCH_ASSOC);

            if($resultat['log_code'] == $code){
              // Redirection vers la fiche avec ID joueur
              $doublon_id = $resultat['log_id'];
              // Incrémantation de la SESSION
              $_SESSION['pseudo'] = $pseudo;
              $_SESSION['code'] = $code;
              $_SESSION['id'] = $doublon_id;

              header('Location:phone.php?id='.$doublon_id);
            } else{
              // Redirection vers page login avec message d'erreur pseudo/code
              header('Location:index.php?e=2');
            }
          // Si pas de doublon on créé le profil
          } else {
            // Pas de doublon, on créé un utilisateur (joueur)
            // Préparation de la requête
            $requete = 'INSERT INTO login (log_pseudo, log_code, log_date) VALUES ("'.$pseudo.'", "'.$code.'", "'.$date.'")';

            // Exécution de la requête
            $resultat = $connDB -> exec($requete);

            // ### Traitement du résultat ###

                // Erreur dans la requête
                if ($resultat===false) {
                  header('Location:index.php');
                // Requête ok mais aucune incidence sur la DB
                } elseif ($resultat==0) {
                  header('Location:index.php');
                // Insertion ok
                } else {
                  // Récupération de l'ID du nouveau joueur
                  $id = $connDB -> lastInsertId();

                  // ############# SESSION ################

                  // Initialisation
                  $_SESSION['pseudo'] = $pseudo;
                  $_SESSION['code'] = $code;
                  $_SESSION['id'] = $id;

                  // Redirection vers le profil du nouveau joueur
                  header('Location:phone.php?id='.$id);
                }
              }

              // Deconnexion DB
              require('includes/inc_connKO.php');

      }











      // // ##### Récupération (et sécurisations) des données du formulaire
      // // IDENTIFIANT
      // if (!empty($_POST['pseudo'])) {
      //   $pseudo = htmlspecialchars($_POST['pseudo']);
      // } else {
      //   $_SESSION['erreur'] = 1;
      // }
      // // MOT DE PASSE
      // if (!empty($_POST['code'])) {
      //   $code = htmlspecialchars($_POST['code']);
      // } else {
      //   $_SESSION['erreur'] = 1;
      // }
      // // ID
      // if (!empty($_POST['id'])) {
      //   $id = htmlspecialchars($_POST['id']);
      // } else {
      //   $_SESSION['erreur'] = 1;
      // }
      // // Erreur ?
      // if ($_SESSION['erreur']!=0) {
      //   header('Location:index.php');
      // }




?>
