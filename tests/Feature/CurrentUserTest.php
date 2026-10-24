<?php

use App\Domains\Identity\Models\User;
use Laravel\Sanctum\Sanctum;

it('rejects requests without a token', function () {
    $this->getJson('/api/v1/user')->assertUnauthorized();
});

it('returns the authenticated user without sensitive fields', function () {
    $user = User::factory()->create();
    Sanctum::actingAs($user);

    $this->getJson('/api/v1/user')
        ->assertOk()
        ->assertJsonPath('data.id', $user->id)
        ->assertJsonPath('data.email', $user->email)
        ->assertJsonMissingPath('data.password')
        ->assertJsonMissingPath('data.remember_token');
});

it('is no longer served without the version prefix', function () {
    Sanctum::actingAs(User::factory()->create());

    $this->getJson('/api/user')->assertNotFound();
});
