<?php

namespace Blog\Models\Post;

use Blog\Models;

class Post extends Models\DomainModelAbstract {
    /**
     * @var string
     */
    private $_title;

    /**
     * @param string $title
     */
    public function setTitle($title) {
        $this->_title = $title;
    }

    /**
     * @return string
     */
    public function getTitle() {
        return $this->_title;
    }


}