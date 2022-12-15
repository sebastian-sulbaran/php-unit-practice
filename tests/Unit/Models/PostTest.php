<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    //Mutator
    public function test_set_name_in_lowercase()
    {

        $post = new Post;
        $post->name = "Proyecto en PHP";
        $this->assertEquals("proyecto en php", $post->name);
        //$this->assertTrue(true);

    }

    //Accessor
    public function test_get_slug()
    {

        $post = new Post;
        $post->name = "Proyecto en PHP";
        $this->assertEquals("proyecto-en-php", $post->slug);
        //$this->assertTrue(true);

    }

    public function test_get_href()
    {
        $post = new Post;
        $post->name = "Proyecto en PHP";
        $this->assertEquals('blog/proyecto-en-php', $post->href());
    }

}
