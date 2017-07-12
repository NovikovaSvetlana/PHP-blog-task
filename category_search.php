<?php
    require_once "functions_1.php";
    $assetsDirectory = 'assets';
    $categoryPost = getPostFromCategory($_GET['categoryId']);
//        require_once "lib/main.php";

    include "view/header.php";
    $counter = 0;
    ?>
    <?php foreach ($categoryPost as $post):?>
        <?php if ($counter == 0) {
           echo "<h2>".$post['title']."</h2>";
            $counter = 1;
       } ?>
    <div class="row">
       <div class="col l8">
        <div class="row">
                <div class="col l6 s12 m6">
                <?php include "view/short_post.php"; ?>
<!--
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <span class="card-title"><?= $post['title'];?></span>
                      <p><?= $post['content'];?></p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                    </div>
                  </div>
-->
                </div>
              </div>
        </div>
    <?php endforeach; ?> 
  
        <div class="col l4">
            <?php require_once "view/category_list.php" ?>
        </div>
    </div>
     
     <?php // getFooter();
    include "view/footer.php";
    ?>