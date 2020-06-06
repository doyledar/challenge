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

function addAction(\PDO $connexion){
  $sql = " INSERT INTO comments
         SET pseudo  = :pseudo,
             content = :content,
             post_id = :post_id,
        .    created_at = NOW() ;";
  $envoi = $connexion->prepare($sql);
  $envoi->bindValue(':pseudo', $_POST['pseudo'], \PDO::PARAM_STR);
  $envoi->bindValue(':content', $_POST['content'], \PDO::PARAM_STR);
  $envoi->bindValue(':post_id', $_POST['post_id'], \PDO::PARAM_INT);
  $envoi->execute();
  return($envoi);
}
