<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Repositories\Sql\CategoryRepository;

class AboutController extends Controller
{
    protected $categoryRepo ;

    public function __construct(CategoryRepository $categoryRepo)
    {

        $this->categoryRepo = $categoryRepo ;
    }

    public function index()
    {
         $categories = $this->categoryRepo->getWhere(['type' => 'about']);
         return view('dashboard.backend.abouts.index', compact('categories'));
    }


    public function create()
    {
         return view('dashboard.backend.abouts.create');
    }


    public function store(CategoryRequest $request)
    {
        $data = $request->except('type');
         $data['type'] = 'about' ;

        $this->categoryRepo->create($data);
        return redirect(route('admin.abouts.index'))->with('success', __('models.added_successfully'));

    }



    public function edit($id)
    {
        $category = $this->categoryRepo->findOne($id);
         return view('dashboard.backend.abouts.edit' , compact('category'));
    }


    public function update(CategoryRequest $request, $id)
    {
        $category = $this->categoryRepo->findOne($id);

        $data = $request->except('type');

         $data['type'] = 'about' ;


        $category->update($data);
        return redirect(route('admin.abouts.index'))->with('success', __('models.updated_successfully'));

    }


    public function destroy($id)
    {

       $category = $this->categoryRepo->findOne($id)->delete();



         return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }


}
