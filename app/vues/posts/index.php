<?php
/*
  ./app/vues/posts/index.php
  Liste des postsControleur
  Variables disponibles:
      - $posts ARRAY(ARRAY))
 */
?>
<h2><?php echo $title ?></h2>
  <?php foreach ($posts as $post): ?>
  <div class="blog-entry justify-content-end">
    <a href="article.html" class="block-20" style="background-image: url('images/<?php echo $post['image'];?>');">
    </a>
    <div class="text p-4 float-right d-block">
    	<div class="topper d-flex align-items-center">
    		<div class="one py-2 pl-3 pr-1 align-self-stretch">
    			<span class="day"><?php echo $post['jour']; ?></span>
    		</div>
    		<div class="two pl-0 pr-3 py-2 align-self-stretch">
    			<span class="yr"><?php echo $post['annee']; ?></span>
    			<span class="mos"><?php echo $post['mois']; ?></span>
    		</div>
    	</div>
    	<h3 class="heading mb-3">
        <a href="?postID=<?php echo $post['id']; ?>">
          <?php echo $post['title']; ?>
        </a>
      </h3>
          <p><a href="?postID=<?php echo $post['id']; ?>" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
    </div>
  </div>
  <?php endforeach; ?>
