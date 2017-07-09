<!--Вам необходимо реализовать мини блог. На сайте должно быть минимум 5 страниц: вывод всех записей, вывод конкретной записи, вывод всех записей в указанной категории, создание записи и создание категории. На каждой странице, кроме страниц добавления, вы должны выводить перечень доступных категорий в виде ссылок. При выводе каждого поста (на страницах «вывод всех записей» и «вывод записей в указанной категории»), у вас должна быть ссылка, кликнув на которою будет открыт соответствующий пост. Также вам необходимо реализовать добавление комментария.   При добавлении поста, вам будет необходим select со списком категорий. Форма добавления комментариев, должна быть на странице поста, вам также понадобиться скрытое поле ввода, которое должно хранить идентификатор поста. Все необходимые функции для получения или добавления вы найдете в файле functions.php-->
<?php
        require_once "functions_1.php";
        require_once "lib/main.php";
    ?>
    <?php getHeader(); ?>
    
    <div class="row">
       <div class="col l8">
        <div class="row">
                <div class="col l6 s12 m6">
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <span class="card-title">Card Title</span>
                      <p>I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                      <a href="#">This is a link</a>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6">
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <span class="card-title">Card Title</span>
                      <p>I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                      <a href="#">This is a link</a>
                    </div>
                  </div>
              </div>
        </div>
        <div class="row">
                <div class="col l6 s12 m6">
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <span class="card-title">Card Title</span>
                      <p>I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                      <a href="#">This is a link</a>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6">
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <span class="card-title">Card Title</span>
                      <p>I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                      <a href="#">This is a link</a>
                    </div>
                  </div>
              </div>
        </div>
        <div class="row">
                <div class="col l6 s12 m6">
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <span class="card-title">Card Title</span>
                      <p>I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                      <a href="#">This is a link</a>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6">
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <span class="card-title">Card Title</span>
                      <p>I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                      <a href="#">This is a link</a>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col l4">
            <?php require_once "view/category_list.php" ?>
        </div>
    </div>
    
    <?php getFooter(); ?>
    