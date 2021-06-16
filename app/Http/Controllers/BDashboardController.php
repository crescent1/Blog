<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BDashboardController extends Controller
{
    public function home()
    {
        return view('home');
    }
}
