<?php

use App\Models\Project;

use function Pest\Laravel\get;

it('has a index page', function () {
    get('/')->assertOk();
});

it('sees a new project', function () {
    Project::factory()->create([
        'title' => 'Foo Project'
    ]);

    get('/')
        ->assertOk()
        ->assertSee('Foo Project');
});

it('doesn\'t sees drafted project', function () {
    Project::factory()->drafted()->create([
        'title' => 'Foo Draft Project'
    ]);

    get('/')
        ->assertOk()
        ->assertDontSee('Foo Draft Project');
});