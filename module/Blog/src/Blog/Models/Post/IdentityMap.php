<?php

namespace Blog\Models\Post;

class IdentityMap {
    private $_dataMapper;

    public function __construct(DataMapper $pdm) {
        $this->_dataMapper = $pdm;
    }
}