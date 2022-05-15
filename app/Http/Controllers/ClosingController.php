<?php

namespace App\Http\Controllers;

use App\Models\Closing;
use App\Traits\ClosingTrait;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreClosingRequest;
use App\Http\Requests\UpdateClosingRequest;
use App\Models\User;

class ClosingController extends Controller
{
    use ClosingTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(request('status')) {
        //     if(request('status') == 'belum') {
        //         $closing = Closing::latest()->with('user')->whereStatus('belum');
        //     }
        //     if(request('status') == 'sudah') {
        //         $closing = Closing::latest()->with('user')->whereStatus('sudah');
        //     }
        //     if(request('status') == 'tolak') {
        //         $closing = Closing::latest()->with('user')->whereStatus('tolak');
        //     }
        // } else {
        //     $closing = Closing::latest()->with('user');
        // }

        return view('admin.ceremony.index', [
            'userClosings' => User::has('closings')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClosingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClosingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Closing  $closing
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.ceremony.show', [
            'userClosings' => $user->closings
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Closing  $closing
     * @return \Illuminate\Http\Response
     */
    public function edit(Closing $closing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClosingRequest  $request
     * @param  \App\Models\Closing  $closing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClosingRequest $request, Closing $closing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Closing  $closing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Closing $closing)
    {
        $closing->delete();

        Alert::success('Berhasil', "Data {$closing->user->name} Berhasil di hapus");

        return redirect()->back();
    }
}
