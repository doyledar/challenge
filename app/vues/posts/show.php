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
<h2>Tags</h2>
<?php foreach ($tags as $tag): ?>
<div class="">
  <p><?php echo $tag['name']; ?></p>
</div>
<?php endforeach; ?>

<div class="about-author d-flex p-4 bg-light">
  <div class="bio mr-5">
    <img src="images/<?php echo $author['image']; ?>" alt="Image placeholder" class="img-fluid mb-4">
  </div>
  <div class="desc">
    <h3><?php echo $author['firstname']. ' '.$author['lastname']; ?></h3>
    <p><?php echo $author['biography']; ?></p>
  </div>
</div>
