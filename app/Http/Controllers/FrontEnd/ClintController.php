<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Repositories\Sql\ClintRepository;

class ClintController extends Controller
{
   protected $clintRepo ;

   public function __construct(ClintRepository $clintRepo)
   {
      $this->clintRepo = $clintRepo;
   }
   public function clints()
   {
      $clints = $this->clintRepo->getWhere(['type' => 'clint']);
      return view('site.front.clints' , compact('clints'));
   }


   public function teams()
   {
     $teams = $this->clintRepo->getWhere(['type' => 'team']);
     return view('site.front.teams' , compact('teams'));
   }

   public function page_404()
   {
      return view('site.front.page404');
   }
}
