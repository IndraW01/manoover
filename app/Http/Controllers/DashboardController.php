<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Closing;
use App\Models\Futsal;
use App\Models\MobileLegend;
use App\Models\PubgMobile;
use App\Models\User;
use App\Models\Valorant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.home', [
            'user' => User::get(),
            'pubg' => PubgMobile::get(),
            'ml' => MobileLegend::get(),
            'valorant' => Valorant::get(),
            'futsal' => Futsal::get(),
            'band' => Band::get(),
            'closing' => Closing::get(),
        ]);
    }
}
