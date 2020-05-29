<?php
/*
  ./app/vues/posts/index.php
  Liste des postsControleur
  Variables disponibles:
      - $posts ARRAY(ARRAY))
 */
?>
<h2><?php echo $title ?></h2>
<ul>
  <?php foreach ($posts as $post): ?>
    <h3 class="heading mb-3">
      <a href="?postID=<?php echo $post['id']; ?>">
        <?php echo $post['title']; ?>
      </a>
    </h3>

    <p>
        <?php echo $post['resume'];?>
      </a>
    </p>
    <p>
       <?php echo $post['jour']; ?>-
       <?php echo $post['mois']; ?>-
       <?php echo $post['annee']; ?>

    </p>

    <p><a href="#" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
  <?php endforeach; ?>
</ul>
