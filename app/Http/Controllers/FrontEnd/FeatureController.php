<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Repositories\Sql\CategoryRepository;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    protected $categoryRepo ;
    public function __construct(CategoryRepository $categoryRepo)
    {
         $this->categoryRepo = $categoryRepo ;
    }
    public function features()
    {
        $abouts =  $this->categoryRepo->getWhere(['type' => 'about']);
        return view('site.front.feature' , compact('abouts'));
    }
}
