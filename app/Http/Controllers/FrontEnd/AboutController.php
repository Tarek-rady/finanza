<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Repositories\Sql\CategoryRepository;
use App\Repositories\Sql\ClintRepository;
use App\Repositories\Sql\ProjectRepository;
use App\Repositories\Sql\StaticPageRepository;

class AboutController extends Controller
{

    protected $staticRepo , $categoryRepo , $clintRepo , $projectRepo;

    public function __construct(StaticPageRepository $staticRepo , CategoryRepository $categoryRepo , ClintRepository $clintRepo ,ProjectRepository $projectRepo)
    {
        $this->staticRepo = $staticRepo;
        $this->categoryRepo = $categoryRepo;
        $this->clintRepo = $clintRepo;
        $this->projectRepo = $projectRepo;
    }


    public function about()
    {
        $about = $this->staticRepo->findWhere(['type' => 'about']);
        $feautures =  $this->categoryRepo->getWhere(['type' => 'feauture']);
        $clints_count = $this->clintRepo->getWhere(['type' => 'clint'])->count();
        $team_count = $this->clintRepo->getWhere(['type' => 'team'])->count();
        $projects_count = $this->projectRepo->getAll()->count();
        $teams = $this->clintRepo->getWhere(['type' => 'team']);

        return view('site.front.about-us' , compact('about' , 'feautures' , 'clints_count' , 'team_count' , 'projects_count' , 'teams'));

    }
}
