<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class ProjectList extends Component
{
    public Collection $splitedProjects;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        /**
         * @todo Find a better way…
         */
        $this->splitedProjects = collect([
            collect(),
            collect(),
        ]);

        Project::published()
            ->orderByDesc('published_at')
            ->get()
            ->each(fn (Project $project, int $key) => $this->splitedProjects->get($key % 2)->push($project));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project-list');
    }
}
