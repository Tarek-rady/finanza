<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Clint;
use App\Models\Project;
use App\Models\Service;
use App\Models\User;

class DashboardController extends Controller
{
    public function home()
    {
        $admins = User::count();
        $banners = Banner::count();
        $feautures = Category::Where('type' , 'feauture')->count();
        $abouts = Category::Where('type' , 'about')->count();
        $categories = Category::Where('type' , 'service')->count();
        $services = Service::count();
        $works = Project::count();
        $clints = Clint::where('type' , 'clint')->count();
        $teams = Clint::where('type' , 'team')->count();

        return view('dashboard.home' , compact('admins' , 'banners' , 'feautures' , 'abouts' , 'categories' , 'services' , 'works' , 'clints' , 'teams' ));

    }

}
