<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::whereIsAdmin('0')->paginate(10),
        ]);
    }
}
