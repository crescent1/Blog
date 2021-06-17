<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class BDashboardController extends Controller
{
    /**
     * Undocumented function
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $user = Auth::user();

        return view('dashboard.index', [
            'user' => $user,
        ]);
    }
}
