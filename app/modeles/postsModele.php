<?php

/*
  ./app/modeles/postsModele.php
 */
namespace App\Modeles\Posts;

function findAll(\PDO $connexion) {
  $sql = "SELECT id, title, resume, DAYOFMONTH(created_at) as jour, MONTH(created_at) as mois, YEAR(created_at) as annee
          FROM posts
          ORDER BY created_at DESC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  // Tableau indexé de tableaux associatifs
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
