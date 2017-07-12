<?php
    require_once "functions_1.php";
    $assetsDirectory = 'assets';
    $post = getPost($_GET['postId']);

//Проверка на то, каким методом запрашивается страница POST или GET
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    addComment($_POST['postId'], $_POST['content']);
}
    $comments = getComments($post['id']);
    include "view/header.php";
  
    ?>
    
    <div class="row">
       <div class="col l8">
            <div class="row">
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <span class="card-title"><?= $post['title']?></span>
                      <p>
                          <?= $post['content']?>
                      </p>
                    </div>
                    
                </div>
            </div>
            <div class="row">
               <h4>Comments</h4>
                <form method="POST" class="card grey lighten-3">
                   <input type="hidden" name="postId" value ="<?= $post['id']?>">
                   <div class="card-content">
                       <div class="row">
                           <div class="input-field col s12">
                               <textarea class="materialize-textarea" name="content" id="con"></textarea>
                               <label for="con">Enter your comment</label>
                           </div>
                       </div>
                   </div>
                   <div class="card-action">
                       <button class="btn red waves-effect waves-green">Submit</button>
                   </div>
                    
                </form>
                 <?php foreach ($comments as $comment):?>
                  <div class="card grey darken-3">
                    <div class="card-content white-text">
                      <p>
                          <?= $comment['content']?>
                      </p>
                    </div>
                    
                </div>
                <?php endforeach;?>
            </div>
            
        </div>
        <div class="col l4">
            <?php require_once "view/category_list.php" ?>
        </div>
    </div>
    
    <?php
    include "view/footer.php";
    ?>
    