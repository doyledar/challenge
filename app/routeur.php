<?php

  /*
    ./app/routeur.php
  */

  // ROUTE PAR DEFAUT
  // LISTE DES DIX DERNIERS POSTS
  // PATTERN :/
  // CTRL postsControleur
  // ACTION : index

  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);
