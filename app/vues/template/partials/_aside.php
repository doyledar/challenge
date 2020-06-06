<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
  <div class="sidebar-box">
    <form action="#" class="search-form">
      <div class="form-group">
        <span class="icon icon-search"></span>
        <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
      </div>
    </form>
  </div>
  <div class="sidebar-box ftco-animate">
    <div class="categories">
      <h3>Categories</h3>
      <!--<li><a href="#">Illustration <span class="ion-ios-arrow-forward"></span></a></li>
      <li><a href="#">Branding <span class="ion-ios-arrow-forward"></span></a></li>
      <li><a href="#">Application <span class="ion-ios-arrow-forward"></span></a></li>
      <li><a href="#">Design <span class="ion-ios-arrow-forward"></span></a></li>
      <li><a href="#">Marketing <span class="ion-ios-arrow-forward"></span></a></li>-->
      <?php include_once '../app/controleurs/categoriesControleur.php';
       \App\Controleurs\Categories\indexActionCategories($connexion);
      ?>
    </div>
  </div>

  <div class="sidebar-box ftco-animate">
    <h3>Recent Blog</h3>
    <?php include_once '../app/controleurs/postsControleur.php';
     \App\Controleurs\Posts\latestIndex($connexion);
    ?>

  <div class="sidebar-box ftco-animate">
    <h3>Tag Cloud</h3>
    <div class="tagcloud">
      <?php include_once '../app/controleurs/tagsControleur.php';
       \App\Controleurs\Tags\indexActionTags($connexion);
      ?>
    </div>
  </div>

</div>
