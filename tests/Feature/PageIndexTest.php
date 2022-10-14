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

it('sees sorted projects', function () {

    Project::factory()->create([
        'title' => 'Sort Position 5',
        'published_at' => now()->subDays(4),
    ]);
    Project::factory()->create([
        'title' => 'Sort Position 4',
        'published_at' => now()->subDays(3),
    ]);
    Project::factory()->create([
        'title' => 'Sort Position 3',
        'published_at' => now()->subDays(2),
    ]);
    Project::factory()->create([
        'title' => 'Sort Position 2',
        'published_at' => now()->subDays(1),
    ]);
    Project::factory()->create([
        'title' => 'Sort Position 1',
        'published_at' => now(),
    ]);

    get('/')
        ->assertOk()
        ->assertSeeInOrder([
            'Sort Position 1',
            'Sort Position 3',
            'Sort Position 5',
            'Sort Position 2',
            'Sort Position 4',
        ]);
});