<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /**
     * @var ProjectRepository
     */
    public $projectRepository;

    /**
     * @param ProjectRepository $projectRepository
     */
    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * @desc Returns the view with the project-data(if it exsist)
     * @return void
     */
    public function show($slug)
    {
        dd($slug);
    }

}
