<?php

namespace Tests\Unit\Models;

use App\Models\Tag;
use PHPUnit\Framework\TestCase;

class TagTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_slug()
    {
        $tag = new Tag;
        $tag->name = "PHP project";
        $this->assertEquals('php-project', $tag->slug);
    }
}
