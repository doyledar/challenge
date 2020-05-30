<?php
/*
  ./app/vues/posts/show.php
  Détail d'un post
  Variables disponibles:
      - $post ARRAY(id, title, created_at, resume, image, content, author_id, category_id)
 */
?>
<div class="">
  <p class="mb-5">
    <img src="images/<?php echo $post['image']; ?>" alt="" class="img-fluid">
  </p>

  <h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<p><?php echo $post['content']; ?></p>
</div>
