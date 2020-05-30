<?php

/*
  ./app/modeles/tagsModele.php
 */
namespace App\Modeles\Tags;

function indexByPostId(\PDO $connexion, int $id){
    $sql = "SELECT *
            FROM tags t
            JOIN posts_has_tags pt
              ON t.id = pt.tag_id
            JOIN posts p ON p.id = pt.post_id
            WHERE p.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
