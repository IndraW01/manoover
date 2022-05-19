<?php

namespace App\Http\Controllers;

use App\Models\Closing;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        if(request('status')) {
            if(request('status') == 'belum') {
                $closing =  Closing::with('user')->oldest()->whereStatus('belum');
            }
            if(request('status') == 'sudah') {
                $closing =  Closing::with('user')->oldest()->whereStatus('sudah');
            }
            if(request('status') == 'tolak') {
                $closing =  Closing::with('user')->oldest()->whereStatus('tolak');
            }
        } else {
            $closing =  Closing::with('user')->oldest();
        }

        return view('admin.ticketAll.index', [
            'tickets' => $closing->get(),
            'closings' => Closing::get(),
        ]);
    }
}
