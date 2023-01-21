<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Http\Requests\Site\ServerEmailRequest;
use App\Repositories\Sql\BannerRepository;
use App\Repositories\Sql\CategoryRepository;
use App\Repositories\Sql\ClintRepository;
use App\Repositories\Sql\ContactUsRepository;
use App\Repositories\Sql\ProjectRepository;
use App\Repositories\Sql\ServerEmailRepository;
use App\Repositories\Sql\StaticPageRepository;

class HomeController extends Controller
{

   protected $bannerRepo , $staticPageRepo , $categoryRepo , $clintRepo , $projectRepo , $serverRepo , $contactRepo;
   public function __construct(BannerRepository $bannerRepo , StaticPageRepository $staticPageRepo , CategoryRepository $categoryRepo
                               , ClintRepository $clintRepo , ProjectRepository $projectRepo , ServerEmailRepository $serverRepo , ContactUsRepository $contactRepo
                              )
   {
      $this->bannerRepo = $bannerRepo ;
      $this->staticPageRepo = $staticPageRepo ;
      $this->categoryRepo = $categoryRepo ;
      $this->clintRepo = $clintRepo ;
      $this->projectRepo = $projectRepo ;
      $this->serverRepo = $serverRepo ;
      $this->contactRepo = $contactRepo ;
   }


    public function home()
    {

        $banners = $this->bannerRepo->getAll();
        $about = $this->staticPageRepo->findWhere(['type' => 'about']);
        $feautures =  $this->categoryRepo->getWhere(['type' => 'feauture']);
        $abouts =  $this->categoryRepo->getWhere(['type' => 'about']);
        $clints_count = $this->clintRepo->getWhere(['type' => 'clint'])->count();
        $team_count = $this->clintRepo->getWhere(['type' => 'team'])->count();
        $projects_count = $this->projectRepo->getAll()->count();
        $categories = $this->categoryRepo->getWhere(['type' => 'service']);
        $projects = $this->projectRepo->getAll();
        $teams = $this->clintRepo->getWhere(['type' => 'team']);
        $clints = $this->clintRepo->getWhere(['type' => 'clint']);




        return view('site.front.home' , compact('banners' , 'about' , 'feautures' , 'clints_count' ,
                     'projects_count' , 'team_count' , 'abouts' , 'categories' , 'projects' , 'teams' , 'clints')) ;
    }


    public function servce_email(ServerEmailRequest $request)
    {

        $data = $request->all();

        $this->serverRepo->create($data);

        return redirect(route('web.home'))->with('success', __('models.added_successfully'));

    }


    public function contact_us(ContactRequest $request)
    {
       $data = $request->all();
       $this->contactRepo->create($data);


       return redirect(route('web.home'))->with('success', __('models.added_successfully'));

    }
}
