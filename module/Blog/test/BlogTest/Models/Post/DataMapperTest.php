<?php

namespace BlogTest\Models\Post;

use PHPUnit_Framework_TestCase;
use Blog\Models\Post\DataMapper;
use Blog\Models\Post\Post;

class DataMapperTest extends  PHPUnit_Framework_TestCase {
    public function testGetPostById() {
        // test values
        $id = 1;
        $title = 'first tested post';

        // setting up sample
        $pdm = new DataMapper();
        $post = $pdm->getPostById($id);

        $this->assertInstanceOf('Blog\Models\Post\Post', $post, 'Data Mapper did not return appropriate object type');
        $this->assertEquals($id, $post->getId());
//        $this->assertEquals($title, $post->getTitle());
    }
}