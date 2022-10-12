<?php

use function Pest\Laravel\get;

it('has a Datenschutzerklärung page', function () {
    get('/datenschutzerklaerung')->assertOk();
});
