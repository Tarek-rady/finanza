<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Repositories\Sql\CategoryRepository;
use App\Repositories\Sql\ServiceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ServiceController extends Controller
{
    protected $serviceRepo , $categoryRepo;

    public function __construct(ServiceRepository $serviceRepo , CategoryRepository $categoryRepo)
    {

      $this->serviceRepo = $serviceRepo ;
      $this->categoryRepo = $categoryRepo ;

    }

    public function index()
    {
         $services = $this->serviceRepo->getAll();
         return view('dashboard.backend.services.index' , compact('services'));
    }


    public function create()
    {
        $categories = $this->categoryRepo->getWhere(['type' => 'service']);
         return view('dashboard.backend.services.create' , compact('categories'));
    }


    public function store(ServiceRequest $request)
    {

       $data = $request->all();
       $this->serviceRepo->create($data);
        return redirect(route('admin.services.index'))->with('success', __('models.added_successfully'));

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categories = $this->categoryRepo->getWhere(['type' => 'service']);
        $service = $this->serviceRepo->findOne($id);
        return view('dashboard.backend.services.edit' , compact('categories' , 'service'));
    }


    public function update(ServiceRequest $request, $id)
    {
        $service = $this->serviceRepo->findOne($id);
         $data = $request->all();
        $service->update($data);
        return redirect(route('admin.services.index'))->with('success', __('models.added_successfully'));

    }


    public function destroy($id)
    {
         $this->serviceRepo->findOne($id)->delete();

        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }
}
