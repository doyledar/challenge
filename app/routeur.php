<?php

  /*
    ./app/routeur.php
  */

  use \App\Controleurs\Posts;
  use \App\Controleurs\Comments;

  //  ROUTE DU CONTACT:
  //  PATTERN: /?contact
  //  CTRL: Aucun
  //  ACTION: Aucune
  if (isset($_GET['contact'])):
    GLOBAL $title, $content;
    $title = "Contact";
    ob_start();
      include '../app/vues/template/partials/_contact.php';
    $content = ob_get_clean();



/*
  //  ROUTE DE RECEPTION DU FORMULAIRE COMMENTAIRES
  //  PATTERN: /?comment=add
  //  CTRL: commentControleur
  //  ACTION: show
  //  Image + title + content

  if (isset($_POST['comment'])):
     include_once '../app/controleurs/commentsControleur.php';
     \App\Controleurs\Comments\addAction($connexion);
*/


  //ROUTE DU DETAIL D'UN POST
  //  PATTERN: /?postID=x
  //  CTRL: postsControleur
  //  ACTION: show
  //  Image + title + content

  elseif (isset($_GET['postID'])):
     include_once '../app/controleurs/postsControleur.php';
     \App\Controleurs\Posts\showAction($connexion, $_GET['postID']);



  // ROUTE PAR DEFAUT
  // LISTE DES DIX DERNIERS POSTS
  // PATTERN :/
  // CTRL postsControleur
  // ACTION : index
  else:
    include_once '../app/controleurs/postsControleur.php';
    \App\Controleurs\Posts\indexAction($connexion);
  endif;
