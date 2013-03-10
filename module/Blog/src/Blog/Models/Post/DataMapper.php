<?php

namespace Blog\Models\Post;

use Blog\Models;

class DataMapper implements Models\DataMapperInterface {
    private $_dbCon = "postgresql";


    public function getPostById($id) {

        $post = new Post();
        $post->setId($id);

        return $post;
    }
}