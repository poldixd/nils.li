<?php

namespace Database\Factories;

use App\Enums\ProjectStatusEnum;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->words(3, true),
            'link' => fake()->url(),
            'published_at' => fake()->date(max: 'now'),
            'tags' => fake()->randomElements(Tag::all(), rand(1, 5)),
            'status' => ProjectStatusEnum::PUBLISHED,
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterMaking(function (Project $project) {
            $this->addImagesToProject($project);
        })->afterCreating(function (Project $project) {
            $this->addImagesToProject($project);
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function drafted()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => ProjectStatusEnum::DRAFT,
            ];
        });
    }

    public function addImagesToProject(Project $project)
    {
        $project->addMedia(resource_path('images/placeholders/desktop.png'))->preservingOriginal()->toMediaCollection('image_desktop')->responsiveImages();
        $project->addMedia(resource_path('images/placeholders/mobile.png'))->preservingOriginal()->toMediaCollection('image_mobile')->responsiveImages();
    }
}
