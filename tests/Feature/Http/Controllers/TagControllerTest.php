<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStoreTag()
    {
        $response = $this->post(
            'tags',
            [
                'name' => 'PHP'
            ]
        )
        ->assertRedirect('/');

        $this->assertDatabaseHas('tags', ['name' => 'PHP']);
    }

    public function testDestroy()
    {
        $tag = Tag::factory()->create();
//        $tag->refresh();
        $this->delete(
            "tags/$tag->id"
        )
            ->assertRedirect('/');
        $this->assertDatabaseMissing('tags', ['name' => $tag->name]);

    }

}
