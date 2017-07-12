
   <?php
    require_once "functions_1.php";
    $assetsDirectory = 'assets';
    $allPosts = getPosts();
//        require_once "lib/main.php";

    include "view/header.php";

    ?>
    
    <?php require_once "view/category_list.php" ?>
      
    
    <?php // getFooter();
    include "view/footer.php";
    ?>