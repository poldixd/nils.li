<?php

use function Pest\Laravel\get;

it('has a Datenschutzerkl√§rung page', function () {
    get('/datenschutzerklaerung')->assertOk();
});
