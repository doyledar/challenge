<?php

  /*
    ./app/routeur.php
  */

  //ROUTE DU DETAIL D'UN POST
  //  PATTERN: /?postID=x
  //  CTRL: postsControleur
  //  ACTION: show
  //  Image + title + content

  if (isset($_GET['postID'])):
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
