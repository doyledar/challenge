<?php

/*
    ../app/modeles/authorsModele.php

*/

namespace App\Modeles\Authors;

function findOneById(\PDO $connexion, int $id){
    $sql = "SELECT *
            FROM authors a
            JOIN posts p
              ON a.id = p.author_id
            WHERE p.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}
