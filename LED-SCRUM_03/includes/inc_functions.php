<?php

// ########## Format affichage code ##########
// $data -> entrée à formater (...)
// $type -> type de formatage (1 -> tableau | 2 -> Object)

function formAffCode($data, $type) {
  echo '<pre>';
  ($type == 1) ? print_r($data) : var_dump($data);
  echo '</pre>';
}

?>
