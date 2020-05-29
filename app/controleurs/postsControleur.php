<?php

  /*
    ../app/controleurs/postsControleur.php
    Contrôleur des posts
 */

 namespace App\Controleurs\Posts;
 use \App\Modeles\Posts;

 function indexAction(\PDO $connexion) {
   // 1. On demande les posts au modèle et on les met dans $posts
     include_once '../app/modeles/postsModele.php';
     $posts = Posts\findAll($connexion);

   // 2. On charge la vue index dans $content
     GLOBAL $title, $content;
     $title = "Liste des 10 derniers posts";
     ob_start();
       include '../app/vues/posts/index.php';
     $content = ob_get_clean();
 }
