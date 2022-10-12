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
        $this->splitedProjects = Project::published()
            ->get()
            ->split(2);
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
