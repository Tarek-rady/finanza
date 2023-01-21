<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutRequest;
use App\Http\Requests\Admin\SettingRequest;
use App\Repositories\Sql\SettingRepository;
use App\Repositories\Sql\StaticPageRepository;
use Illuminate\Support\Facades\Storage;
class StaticController extends Controller
{
    protected $staticRepo , $settingRepo;

    public function __construct(StaticPageRepository $staticRepo , SettingRepository $settingRepo)
    {
        $this->staticRepo  = $staticRepo ;
        $this->settingRepo  = $settingRepo ;
    }




    public function about()
    {
        $about = $this->staticRepo->findWhere(['type' => 'about']);
        return view('dashboard.backend.setting.about' , compact('about'));
    }

    public function about_store(AboutRequest $request)
    {
        $about = $this->staticRepo->findWhere(['type' => 'about']);

        $data = $request->except('img' , 'type');

        $data['type'] = 'about' ;

        if ($request->hasFile('img')) {

            Storage::delete($about->img);

            $data['img'] = $request->file('img')->store('admins');

        } else {
            $data['img'] = $about->img;
        }

        $about->update($data);


        return redirect(route('admin.about'))->with('success', __('models.added_successfully'));

    }

    public function setting()
    {
        $setting = $this->settingRepo->findWhere(['type' => 'setting']);
        return view('dashboard.backend.setting.setting' , compact('setting'));
    }

    public function setting_store(SettingRequest $request)
    {

        $setting = $this->settingRepo->findWhere(['type' => 'setting']);

        $data = $request->except('type' , 'icon');

        $data['type'] = 'setting' ;


        $setting->update($data);


        return redirect(route('admin.setting'))->with('success', __('models.added_successfully'));

    }


}
