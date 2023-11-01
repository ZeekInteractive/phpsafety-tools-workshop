<?php

use App\User;

it('has default username', function() {
    $user = new User();
    expect($user->username)->toBe('guest');
});

it('can change username', function() {
    $user = new User();
    $user->username = 'john';
    expect($user->username)->toBe('john');
});

it('has no email by default', function() {
    $user = new User();
    expect($user->email)->toBeNull();
});

it('can set email', function() {
    $user = new User();
    $user->email = 'john@example.com';
    expect($user->email)->toBe('john@example.com');
});

it('is not an admin by default', function() {
    $user = new User();
    expect($user->isAdmin())->toBeFalse();
});
