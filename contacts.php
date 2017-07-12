<?php
    require_once "functions_1.php";
    $assetsDirectory = 'assets';
    $categoryPost = getPostFromCategory($_GET['categoryId']);
//        require_once "lib/main.php";

    include "view/header.php";
   
    ?>
       
    <h1>Наши Контакты</h1>
    <p>связаться с нами можно по телефону: +38-044-123456</p><br>
    <p>Или через электронную почту: sales@sales.com</p>
     
     <?php 
    include "view/footer.php";
    ?>