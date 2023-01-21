<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Sql\ContactUsRepository;
use App\Repositories\Sql\ServerEmailRepository;
use Illuminate\Http\Request;

class ServerEmailController extends Controller
{
    protected $serverEmailRepo , $contactRepo ;

    public function __construct(ServerEmailRepository $serverEmailRepo , ContactUsRepository $contactRepo)
    {
        $this->serverEmailRepo = $serverEmailRepo ;
        $this->contactRepo = $contactRepo ;
    }

    public function index()
    {
        $servers = $this->serverEmailRepo->getAll();

        return view('dashboard.backend.servers.index' , compact('servers'));
    }

    public function contactUs()
    {
        $contacts = $this->contactRepo->getAll();

        return view('dashboard.backend.servers.contact' , compact('contacts'));
    }
}
