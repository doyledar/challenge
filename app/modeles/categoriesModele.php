<?php

/*
  ./app/modeles/categoriesModele.php
 */
namespace App\Modeles\Categories;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM categories
          ORDER BY name ASC
          ;";
  $rs = $connexion->query($sql);
  // Tableau indexé de tableaux associatifs
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
