<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Repositories\Sql\CategoryRepository;
use App\Repositories\Sql\ContactUsRepository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected  $categoryRepo , $contactRepo ;
    public function __construct(CategoryRepository $categoryRepo , ContactUsRepository $contactRepo)
    {
       $this->categoryRepo = $categoryRepo ;
       $this->contactRepo = $contactRepo ;
    }

    public function services()
    {
         return view('site.front.services');
    }

    public function service_details($id)
    {
        $category = $this->categoryRepo->findOne($id);

        return view('site.front.service-details' , compact('category'));
    }


    public function contact_us(ContactRequest $request)
    {
       $data = $request->all();
       $this->contactRepo->create($data);

       return redirect(route('web.services'))->with('success', __('models.added_successfully'));

    }
}
