// tests/Feature/Api/DivelogTest.php

<?php

use App\Models\Divelog;
use App\Models\User;

// 作成のテスト
it('allows authenticated users to create a divelog', function () {
  $user = User::factory()->create();
  $token = $user->createToken('test_token')->plainTextToken;

  $data = ['divelog' => 'This is a new divelog'];

  $response = $this->postJson('/api/divelogs', $data, [
    'Authorization' => 'Bearer ' . $token
  ]);

  $response->assertStatus(201);
  $response->assertJson(['divelog' => 'This is a new divelog']);
});

// 一覧取得のテスト
it('displays a list of divelogs', function () {
  $user = User::factory()->create();
  $token = $user->createToken('test_token')->plainTextToken;

  Divelog::factory()->count(3)->create();

  $response = $this->getJson('/api/divelogs', [
    'Authorization' => 'Bearer ' . $token
  ]);

  $response->assertStatus(200);
  $response->assertJsonCount(3);
});

// 詳細取得のテスト
it('displays a specific divelog', function () {
  $user = User::factory()->create();
  $token = $user->createToken('test_token')->plainTextToken;

  $divelog = Divelog::factory()->create();

  $response = $this->getJson('/api/divelogs/' . $divelog->id, [
    'Authorization' => 'Bearer ' . $token
  ]);

  $response->assertStatus(200);
  $response->assertJson(['id' => $divelog->id]);
});

// 更新のテスト
it('allows a user to update their divelog', function () {
  $user = User::factory()->create();
  $token = $user->createToken('test_token')->plainTextToken;

  $divelog = Divelog::factory()->create(['user_id' => $user->id]);

  $data = ['divelog' => 'Updated divelog content'];

  $response = $this->putJson('/api/divelogs/' . $divelog->id, $data, [
    'Authorization' => 'Bearer ' . $token
  ]);

  $response->assertStatus(200);
  $response->assertJson(['divelog' => 'Updated divelog content']);
});

// 削除のテスト
it('allows a user to delete their divelog', function () {
  $user = User::factory()->create();
  $token = $user->createToken('test_token')->plainTextToken;

  $divelog = Divelog::factory()->create(['user_id' => $user->id]);

  $response = $this->deleteJson('/api/divelogs/' . $divelog->id, [], [
    'Authorization' => 'Bearer ' . $token
  ]);

  $response->assertStatus(200);
  $response->assertJson(['message' => 'Divelog deleted successfully']);
});

