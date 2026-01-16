<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_users()
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $users = User::factory()->count(15)->create();

        $this->actingAs($admin)
            ->get('/admin/users')
            ->assertStatus(200)
            ->assertJsonCount(10, 'data');
    }

    public function test_admin_can_update_user()
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $user = User::factory()->create();

        $this->actingAs($admin)
            ->put("/admin/users/{$user->id}", [
                'name' => 'Updated Name',
                'email' => 'updated@example.com',
            ])
            ->assertStatus(200)
            ->assertJson(['message' => 'User updated successfully']);
    }

    public function test_admin_can_soft_delete_user()
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $user = User::factory()->create();

        $this->actingAs($admin)
            ->delete("/admin/users/{$user->id}")
            ->assertStatus(200)
            ->assertJson(['message' => 'User soft deleted successfully']);

        $this->assertSoftDeleted('users', ['id' => $user->id]);
    }
}
