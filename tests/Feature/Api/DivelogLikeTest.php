// tests/Feature/Api/DivelogLikeTest.php

<?php

use App\Models\User;
use App\Models\Divelog;

it('allows an authenticated user to like a divelog', function () {
  $user = User::factory()->create();
  $token = $user->createToken('test_token')->plainTextToken;

  $divelog = Divelog::factory()->create();

  $response = $this->postJson("/api/divelogs/{$divelog->id}/like", ['divelog' => $divelog->id], [
    'Authorization' => 'Bearer ' . $token
  ]);

  $response->assertStatus(201);
  $response->assertJson(['message' => 'Divelog liked successfully']);

  $this->assertDatabaseHas('divelog_user', [
    'user_id' => $user->id,
    'divelog_id' => $divelog->id
  ]);
});

it('allows an authenticated user to dislike a divelog', function () {
  $user = User::factory()->create();
  $token = $user->createToken('test_token')->plainTextToken;

  $divelog = Divelog::factory()->create();
  $user->likes()->attach($divelog);

  $response = $this->deleteJson("/api/divelogs/{$divelog->id}/like", ['divelog' => $divelog->id], [
    'Authorization' => 'Bearer ' . $token
  ]);

  $response->assertStatus(200);
  $response->assertJson(['message' => 'Divelog disliked successfully']);

  $this->assertDatabaseMissing('divelog_user', [
    'user_id' => $user->id,
    'divelog_id' => $divelog->id
  ]);
});

