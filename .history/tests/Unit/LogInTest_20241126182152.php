<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;

class LogInTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_log_in()
    {
        $user = User::factory()->create([
            'email' => 'testemail@testemail.com',
            'password' => bcrypt('testpassword'),
        ]);

        $response = $this->post('/login', [
            'email' => 'testemail@testemail.com',
            'password' => 'testpassword',
        ]);

        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
    }

    public function test_user_can_log_in_with_incorrect_email()
    {
        $user = User::factory()->create([
            'email' => 'testemail@testemail.com',
            'password' => bcrypt('testpassword'),
        ]);

        $response = $this->post('/login', [
            'email' => 'incorrect@testemail.com',
            'password' => 'testpassword',
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_user_can_log_in_with_incorrect_email()
    {
        $user = User::factory()->create([
            'email' => 'testemail@testemail.com',
            'password' => bcrypt('testpassword'),
        ]);

        $response = $this->post('/login', [
            'email' => 'incorrect@testemail.com',
            'password' => 'testpassword',
        ]);

        $response->assertSessionHasErrors('email');
    }

}
