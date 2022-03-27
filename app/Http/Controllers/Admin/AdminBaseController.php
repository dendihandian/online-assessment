<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

abstract class AdminBaseController extends Controller
{
    public function __construct()
    {
        $this->middleware(function (Request $request, Closure $next) {

            View::share('currentUrl', $request->url());
            View::share('loggedUser', $request->user());

            return $next($request);
        });
    }
}
