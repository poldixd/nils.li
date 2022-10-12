<?php

namespace App\Models;

use App\Enums\ProjectStatusEnum;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Project extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'link',
        'published_at',
        'tags',
        'status',
    ];

    protected $casts = [
        'title' => 'string',
        'link' => 'string',
        'published_at' => 'string',
        'tags' => 'array',
    ];

    public function scopePublished(Builder $query): void
    {
        $query->where('status', ProjectStatusEnum::PUBLISHED);
    }
}
