<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;

class ReviewTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_publish_review(){
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => 'password',
            'dob' => '2000-01-01',
        ]);
        $this->actingAs($user);

        $data = [
            'rating' => 5,
            'review' => 'Test review!',
            'mediaid' => 1,
        ];

        $response = $this->post('/submit-review',$data);

        $this->assertDatabaseHas('reviews_need_approvals', [
            'rating' => 5,
            'review' => 'Great movie!',
            'user_id' => 1,
            'media_id' => 1,
        ]);
    }
}
