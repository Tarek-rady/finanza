<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\CategoryExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\CatRequest;
use App\Repositories\Sql\CategoryRepository;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
{
    protected $categoryRepo ;

    public function __construct(CategoryRepository $categoryRepo)
    {

        $this->categoryRepo = $categoryRepo ;
    }

    public function index()
    {
         $categories = $this->categoryRepo->getWhere(['type' => 'service']);
         return view('dashboard.backend.categories.index' , compact('categories'));
    }


    public function create()
    {
         return view('dashboard.backend.categories.create');
    }


    public function store(CatRequest $request)
    {
        $data = $request->except('img' , 'type');
         $data['type'] = 'service' ;

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('categories');
        }

        $this->categoryRepo->create($data);
        return redirect(route('admin.categories.index'))->with('success', __('models.added_successfully'));

    }



    public function edit($id)
    {
        $category = $this->categoryRepo->findOne($id);
         return view('dashboard.backend.categories.edit' , compact('category'));
    }


    public function update(CatRequest $request, $id)
    {
        $category = $this->categoryRepo->findOne($id);

        $data = $request->except('img', 'type');

         $data['type'] = 'service' ;
        if ($request->hasFile('img')) {

            Storage::delete($category->img);

            $data['img'] = $request->file('img')->store('categories');

        } else {
            $data['img'] = $category->img;
        }


        $category->update($data);
        return redirect(route('admin.categories.index'))->with('success', __('models.updated_successfully'));

    }


    public function destroy($id)
    {

       $category = $this->categoryRepo->findOne($id);

        if ($category->img) {
            Storage::delete($category->img);
        }

        $category->delete();

         return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }


}
