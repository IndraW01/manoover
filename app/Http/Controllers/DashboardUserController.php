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
        $band = Auth::user()->band;
        $closing = Auth::user()->closings()->whereStatus('sudah')->get();
        $bayarClosing = Auth::user()->closings()->whereStatus('belum')->whereTipe('ps1')->get();

        // dd($bayarClosing)
        // $myTickets = Auth::user()-

        return view('layouts.dashboardUser', [
            'pubg' => $pubg,
            'mobileLegend' => $mobileLegend,
            'valorant' => $valorant,
            'futsal' => $futsal,
            'band' => $band,
            'closing' => $closing,
            'bayarClosing' => $bayarClosing
        ]);
    }

    public function myTickets()
    {
        $myTickets = Auth::user()->closings()->whereStatus('sudah')->get();
        $myData = Auth::user()->dataPendaftaran;

        return view('layouts.myTicket', [
            'myTickets' => $myTickets,
            'myData' => $myData,
        ]);
    }
}
