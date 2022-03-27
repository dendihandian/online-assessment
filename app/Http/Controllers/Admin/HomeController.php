<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class HomeController extends AdminBaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
