<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MakananTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_page_makanan_open_correctly_with_login()
    {
        $user = User::factory()->create([
            'username' => 'user'
        ]);
 
        $response = $this->actingAs($user)
                         ->get('/makanan');
        $response->assertStatus(200);
        $response->assertSeeText('Kode Makanan');
    }
}
