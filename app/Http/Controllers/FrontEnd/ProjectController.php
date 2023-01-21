<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Repositories\Sql\ProjectRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $projectRepo ;

    public function __construct(ProjectRepository $projectRepo)
    {
       $this->projectRepo = $projectRepo ;
    }

    public function projects()
    {
        $projects = $this->projectRepo->getAll();
        return view('site.front.projects' , compact('projects'));
    }
}
