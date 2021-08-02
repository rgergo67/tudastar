<?php

namespace Tests;

use Laravel\Dusk\Browser;

function browseAs($browser, $type): Browser
{
    return $browser->loginAs($user = User::factory()->create());
}
