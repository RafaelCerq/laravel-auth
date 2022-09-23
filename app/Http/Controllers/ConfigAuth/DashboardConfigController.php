<?php

namespace App\Http\Controllers\ConfigAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardConfigController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = trans('system.dashboard');
        return view('config-auth/dashboard-config', compact('page'));
    }
}
