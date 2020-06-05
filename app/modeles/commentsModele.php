<?php

/*
  ./app/modeles/commentsModele.php
 */
namespace App\Modeles\Comments;

function indexByPostId(\PDO $connexion, int $id){
    $sql = "SELECT *
            FROM comments c
            WHERE c.post_id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
