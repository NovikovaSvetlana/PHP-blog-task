<?php 
$categories = getCategories();

//   echo "<pre>";
//var_dump($categories);
//echo "</pre>";
?>
   
    <ul class="collection with-header">
      <li class="collection-header"><h4>Уроки</h4></li>
       <ul class="collection">
           <?php foreach ($categories as $category):?>
            <li class="collection-item"><a href="category_search.php?categoryId=<?= $category['id']?>"><?= $category['title'];?></a></li>
        <?php endforeach;?>
    </ul>
    </ul>