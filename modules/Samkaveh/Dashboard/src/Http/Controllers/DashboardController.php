<?php

namespace Samkaveh\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }
 
    public function __invoke()
    {
        return view("Dashboard::dashboard");
    }
}