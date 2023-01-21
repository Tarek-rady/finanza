<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamRequest;
use App\Repositories\Sql\ClintRepository;
use Illuminate\Support\Facades\Storage;


class TeamController extends Controller
{
    protected $clintRepo ;

    public function __construct(ClintRepository $clintRepo)
    {

        $this->clintRepo = $clintRepo ;

    }

    public function index()
    {
         $clints = $this->clintRepo->getWhere(['type' => 'team']);
         return view('dashboard.backend.teams.index' , compact('clints'));
    }


    public function create()
    {
         return view('dashboard.backend.teams.create');
    }


    public function store(TeamRequest $request)
    {

        $data = $request->except('img' ,  'type');

        $data['type'] = 'team' ;

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('teams');
        }


        $this->clintRepo->create($data);

        return redirect(route('admin.teams.index'))->with('success', __('models.added_successfully'));

    }





    public function edit($id)
    {
        $clint = $this->clintRepo->findOne($id);

        return view('dashboard.backend.teams.edit' , compact('clint'));

    }


    public function update(TeamRequest $request, $id)
    {
         $clint = $this->clintRepo->findOne($id);
         $data = $request->except('img'  , 'type' );
         $data['type'] = 'team' ;


        if ($request->hasFile('img')) {

            Storage::delete($clint->img);

            $data['img'] = $request->file('img')->store('teams');

        } else {
            $data['img'] = $clint->img;
        }

       
        $clint->update($data);
        return redirect(route('admin.teams.index'))->with('success', __('models.added_successfully'));

    }


    public function destroy($id)
    {
         $clint = $this->clintRepo->findOne($id);

        if ($clint->img) {
            Storage::delete($clint->img);
        }

        $clint->delete();

        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }




}
