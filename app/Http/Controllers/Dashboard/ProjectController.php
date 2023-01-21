<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectRequest;
use App\Repositories\Sql\ProjectRepository;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    protected $projectRepo ;

    public function __construct(ProjectRepository $projectRepo)
    {

        $this->projectRepo = $projectRepo ;
    }

    public function index()
    {
         $projects = $this->projectRepo->getAll();
         return view('dashboard.backend.projects.index' , compact('projects'));
    }


    public function create()
    {
         return view('dashboard.backend.projects.create');
    }

    public function show($id)
    {
        # code...
    }


    public function store(ProjectRequest $request)
    {
        $data = $request->except('img');

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('projects');
        }

        $this->projectRepo->create($data);
        return redirect(route('admin.works.index'))->with('success', __('models.added_successfully'));

    }



    public function edit($id)
    {
        $project = $this->projectRepo->findOne($id);
         return view('dashboard.backend.projects.edit' , compact('project'));
    }


    public function update(ProjectRequest $request, $id)
    {
        $project = $this->projectRepo->findOne($id);

        $data = $request->except('img');

        if ($request->hasFile('img')) {

            Storage::delete($project->img);

            $data['img'] = $request->file('img')->store('projects');

        } else {
            $data['img'] = $project->img;
        }


        $project->update($data);
        return redirect(route('admin.works.index'))->with('success', __('models.updated_successfully'));

    }


    public function destroy($id)
    {

       $project = $this->projectRepo->findOne($id);

        if ($project->img) {
            Storage::delete($project->img);
        }

        $project->delete();

         return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }


}
