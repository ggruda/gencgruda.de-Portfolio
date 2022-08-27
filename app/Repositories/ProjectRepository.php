<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllProjects()
    {
        return Project::all();
    }
}
