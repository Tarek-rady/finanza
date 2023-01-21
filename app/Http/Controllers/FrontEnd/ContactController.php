<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Repositories\Sql\ContactUsRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contactRepo ;

    public function __construct(ContactUsRepository $contactRepo)
    {
        $this->contactRepo = $contactRepo ;
    }
    public function contact()
    {
       return view('site.front.contact');
    }


    public function contact_us(ContactRequest $request)
    {

       $data = $request->all();
       $this->contactRepo->create($data);

       return redirect(route('web.contacts'))->with('success', __('models.added_successfully'));

    }
}
