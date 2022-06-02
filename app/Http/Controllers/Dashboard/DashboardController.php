<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Traits\GeneralTrait;
use JavaScript;


class DashboardController extends Controller
{
    use GeneralTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['page_title'] = 'Home';
        return view('dashboard.index', $data);
    }

    public function profile()
    {
        $data['page_title'] = 'Profile';
        return view('dashboard.account.profile', $data);
    }


}
