<?php

  /*
    ../app/controleurs/commentsControleur.php
    Contrôleur des commentaires
 */

namespace App\Controleurs\Comments;
 use \App\Modeles\Comments;

function addAction(\PDO $connexion){
  /* Va ajouter le commentaire dans la db */
  include_once '../app/modeles/commentsModele.php';
  $envoi = Comments\addAction($connexion);


  GLOBAL $content;
  ob_start();
    include_once '../app/vues/posts/ajoutCommentaire.php';
  $content .= ob_get_clean();
}
