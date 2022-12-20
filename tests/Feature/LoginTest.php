<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_page_shown_correctly()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSeeText('Login');
        $response->assertSeeText('Register');
        $response->assertSee('username');
        $response->assertSee('password');
    }

    public function test_login_page_can_login()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_login_page_user_can_register()
    {
        $response = $this->followingRedirects()->post('/register', [
            'username' => 'user',
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => '12345678',
            'password-confirm' => '12345678'
        ]);

        $response->assertStatus(200);
        $response->assertSee('Dashboard');
    }
}
