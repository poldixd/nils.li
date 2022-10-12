<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Tag
{
    protected static $tags = [
        'Design',
        'Nuxt.js',
        'JavaScript',
        'Tailwind CSS',
        'PHP',
        'Laravel',
        'Bootstrap',
        'Wordpress',
    ];

    public static function all(): Collection
    {
        return collect(self::$tags);
    }
}
