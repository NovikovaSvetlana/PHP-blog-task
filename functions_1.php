<?php
    /**
     * Функция для получения все доступных категорий
     * 
     * @return array    массив категорий
     */
    function getCategories(){
        return unserialize(file_get_contents('data/categories.txt'));
    }

    /**
     * Функция для получения поста
     * 
     * @param  integer $postId      идентификатор поста
     * @return array                массив содержащий сам пост
     */
    function getPost($postId){
        $allPosts = getPosts();
        foreach($allPosts as $post){
            if($post['id'] == $postId){
                return $post;
            }
        }

        return null;
    }
    /**
     * Функция для получения всех постов в указанной категории
     * @param  integer $categoryId      ид категории
     * @return array                    массив постов
     */
    function getPostFromCategory($categoryId){
        $allPosts = getPosts();
        $posts = [];
        foreach($allPosts as $post){
            if($post['category_id'] == $categoryId){
                $posts[] = $post;
            }
        }

        return $posts;   
    }
    /**
     * Функция для получения комментариев к указаному посту
     * 
     * @param  integer $postId      идентификатор поста
     * @return array                массив комментариев
     */
    function getComments($postId){
        $allComments = unserialize(file_get_contents('data/comments.txt'));
        $comments = [];
        foreach($allComments as $comment){
            if($comment['post_id'] == $postId){
                $comments[] = $comment;
            }
        }

        return $comments;
    }
    /**
     * Функция для получения всех постов
     * @return array    массив поостов
     */
    function getPosts(){
        return unserialize(file_get_contents('data/posts.txt'));
    }

    /**
     * Функция для добавления новой категории
     * @param    string $title      название категории
     * @return   integer            идентификатор созданной категории
     */
    function addCategory($title){
        $categories = getCategories();
        $id = time();
        $categories[] = [
            'id' => $id,
            'title' => $title
        ];

        file_put_contents('data/categories.txt',serialize($categories));
        return $id;
    }

    /**
     * Функция для добавления нового поста
     * @param   string  $title         название поста
     * @param   integer $categoryId    идентификатор категории
     * @param   string  $content       тело поста
     *
     * @return  integer     идентификатор созданного поста
     */
    function addPost($title, $categoryId, $content){
        $posts = getPosts();
        $id = time();
        $posts[] = [
            'id' => $id,
            'title' => $title,
            'content' => $content,
            'category_id' => $categoryId
        ];

        file_put_contents('data/posts.txt',serialize($posts));
        return $id;
    }

    /**
     * Функция для добавления комментария
     * @param   integer $postId     идентификатор поста
     * @param   string  $content    тело коммента
     * @return  integer             идентификатор созданного комментария 
     */
    function addComment($postId, $content){
        $comments = unserialize(file_get_contents('data/comments.txt'));
        $id = time();
        $comments[] = [
            'id' => $id,
            'content' => $content,
            'post_id' => $postId
        ];

        file_put_contents('data/comments.txt',serialize($comments));
        return $id;
    }