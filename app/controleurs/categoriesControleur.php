<?php

  /*
    ../app/controleurs/categoriesControleur.php
    Contrôleur des catégories
 */

namespace App\Controleurs\Categories;
use \App\Modeles\Categories;

function indexActionCategories(\PDO $connexion) {
  // 1. On demande les catégories au modèle et on les met dans $categories
    include_once '../app/modeles/categoriesModele.php';
    $categories = categories\findAll($connexion);
    include_once '../app/vues/categories/index.php';
  //  echo "controleur coucou";
    /*foreach ($categories as $categorie):
      echo $categorie['name'];
    endforeach;*/
}
