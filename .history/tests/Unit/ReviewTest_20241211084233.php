<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Media;
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

        $media = Media::factory()->create([
            'title' => 'title',
            'author' => 'author',
            'description' => 'description',
            'image' => 'image',
            'publish_date' => '2000-01-01',
            'media_type' => 'media_type',
        ]);

        $data = [
            'rating' => 5,
            'review' => 'Test review!',
            'mediaid' => 1,
        ];

        $response = $this->post('/submit-review',$data);

        $this->assertDatabaseHas('reviews_need_approval', [
            'rating' => 5,
            'review' => 'Great movie!',
            'user_id' => $user->id,
            'media_id' => $media->id,
        ]);

        $response->assertSessionHas('success', 'Review submitted for review');
    }
}
