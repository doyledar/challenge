<?php

/*
  ./app/modeles/postsModele.php
 */
namespace App\Modeles\Posts;

function findAll(\PDO $connexion) {
  $sql = "SELECT id, title, image, resume, DAYOFMONTH(created_at) as jour, MONTH(created_at) as mois, YEAR(created_at) as annee
          FROM posts
          ORDER BY created_at DESC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  // Tableau indexé de tableaux associatifs
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findOneById(\PDO $connexion, int $id) {
  $sql = "SELECT  *
          FROM posts p
          WHERE p.id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC); // Tableau associatif
}

function latestIndex(\PDO $connexion) {
  $sql = "SELECT id, title, image, resume, DAYOFMONTH(created_at) as jour, MONTH(created_at) as mois, YEAR(created_at) as annee
          FROM posts
          ORDER BY created_at DESC
          LIMIT 3;";
  $rs = $connexion->query($sql);
  // Tableau indexé de tableaux associatifs
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
