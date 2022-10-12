<?php

use function Pest\Laravel\get;

it('has a Impressum page', function () {
    get('/impressum')->assertOk();
});
