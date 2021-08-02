<?php

test('unauthenticated user should be redirected to login', function () {
    test()->get(route('dashboard'))
        ->assertRedirect(route('login'));
});
