<?php
/*
  ./app/vues/posts/latest.php
  Derniers posts
  Variables disponibles:
      - $post ARRAY(id, title, created_at, resume, image, content, author_id, category_id)
 */
?>
<div class="sidebar-box ftco-animate">
  <?php foreach($latestPosts as $latestPost): ?>
    <div class="block-21 mb-4 d-flex">
      <a class="blog-img mr-4" style="background-image: url('images/<?php echo $latestPost['image'];?>');"></a>
      <div class="text">
        <h3 class="heading"><a href="#"><?php echo $latestPost['resume']; ?></a></h3>
        <div class="meta">
          <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
          <div><a href="#"><span class="icon-person"></span> Admin</a></div>
          <div><a href="#"><span class="icon-chat"></span> 19</a></div>
        </div>
      </div>
    </div>
  <?php endforeach ?>
