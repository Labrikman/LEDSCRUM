<?php

// Création d'un objet PDO (connexion)
try {
  $connDB = new PDO(DSN, USER, MDP);
} catch (Exception $erreur) {
  echo $erreur -> getMessage();
  exit();
}
