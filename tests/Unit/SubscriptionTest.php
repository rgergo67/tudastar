<?php

use App\Models\User;

test('inGracePeriod works', function () {
    $user = User::factory()->create();
    $user->subscription_ends_at = now()->subDays(config('subscription.grace_period_length'));
    expect($user->inGracePeriod())->toBeFalse();

    $user->subscription_ends_at = now()->subDays(config('subscription.grace_period_length')-1);
    expect($user->inGracePeriod())->toBeTrue();
});

test('subscriptionHasEnded works', function () {
    $user = User::factory()->create();
    $user->subscription_ends_at = now()->subDay();
    expect($user->subscriptionHasEnded())->toBeTrue();

    $user->subscription_ends_at = now()->addDay();
    expect($user->subscriptionHasEnded())->toBeFalse();
});
