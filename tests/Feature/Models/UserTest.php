<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function testUser()
    {

        User::factory()->create([
            'email' => 'admin@admin.test'
        ]);

        $this->assertDatabaseHas(// se usa para validar si el dato esta en caso de creaciones

        'users',
            [
                'email' => 'admin@admin.test'
            ]);

        $this->assertDatabaseMissing( // se usa para validar si el dato falta en caso de eliminaciones
            'users',
            [
                'email' => 'no-existe@admin.test'
            ]);
    }
}
