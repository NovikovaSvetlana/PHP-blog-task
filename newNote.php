<?php
    require_once "functions_1.php";
    $assetsDirectory = 'assets';
    $categorySearch = getCategories();
//        require_once "lib/main.php";

    include "view/header.php";
  
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $newPostId = addPost($_POST['title'], $_POST['categoryId'], $_POST['content']);
        echo '<a href="note.php?postId='.$newPostId.'">Посмотреть пост</a>';
      }
    ?>
    
    <form method="POST" class="card grey lighten-3">
      <div class="row">
                         <div class="input-field col s12">
                            <select name="categoryId">
                               <?php foreach ($categorySearch as $category): ?>
                                <option value="<?= $category['id']; ?>">
                                    <?= $category['title']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                                 <label>Выберите тему для поста</label>
                          </div>
                    </div>

        <input type="text" name="title">
           <label for="ititle">Название поста</label>
            <div class="card-content">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea class="materialize-textarea" name="content" id="con"></textarea>
                        <label for="con">Enter new content</label>
                    </div>
                 </div>
            </div>
            <div class="card-action">
                <button class="btn red waves-effect waves-green">Submit</button>
            </div>
                    
    </form>
    
    
    
    <?php // getFooter();
    include "view/footer.php";
    ?>