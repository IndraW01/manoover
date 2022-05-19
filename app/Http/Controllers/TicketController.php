<?php

namespace App\Http\Controllers;

use App\Models\Closing;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('admin.ticketAll.index', [
            'tickets' => Closing::with('user')->oldest()->get()
        ]);
    }
}
