<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    public function dashboard()
    {
        $pubg = Auth::user()->pubg;
        $mobileLegend = Auth::user()->mobileLegend;
        $valorant = Auth::user()->valorant;
        $futsal = Auth::user()->futsal;

        return view('layouts.dashboardUser', [
            'pubg' => $pubg,
            'mobileLegend' => $mobileLegend,
            'valorant' => $valorant,
            'futsal' => $futsal,
        ]);
    }
}
