<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BDashboardController extends Controller
{
    /**
     * Undocumented function
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function home()
    {
        return view('dashboard.index');
    }
}
