<?php
  /*
    ../app/controleurs/tagsControleur.php
    Contrôleur des tags
 */

 namespace App\Controleurs\Tags;
 use \App\Modeles\Tags;

 function indexActionTags(\PDO $connexion) {
   // 1. On demande les tags au modèle et on les met dans $tags
     include_once '../app/modeles/tagsModele.php';
     $tags = tags\findAll($connexion);
     include_once '../app/vues/tags/index.php';
   //  echo "controleur coucou";
     /*foreach ($categories as $categorie):
       echo $categorie['name'];
     endforeach;*/
 }
