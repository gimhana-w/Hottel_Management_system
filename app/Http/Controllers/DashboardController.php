<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {

            
        $this->middleware(['permission:viwe-dashbord'])->only(['index', 'show']);
    }
    function index(){
        return view('dashboard');
    }
}
