<?php

namespace App\Http\Controllers;

use App\Models\PubgMobile;
use App\Http\Requests\StorePubgMobileRequest;
use App\Http\Requests\UpdatePubgMobileRequest;
use App\Traits\PubgTrait;

class PubgMobileController extends Controller
{
    use PubgTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pubg.index', [
            'pubgMobiles' => PubgMobile::latest()->with('user')->get()
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
     * @param  \App\Http\Requests\StorePubgMobileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePubgMobileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PubgMobile  $pubg
     * @return \Illuminate\Http\Response
     */
    public function show(PubgMobile $pubg)
    {
        return view('admin.pubg.show', [
            'pubgMobile' => $pubg
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PubgMobile  $pubg
     * @return \Illuminate\Http\Response
     */
    public function edit(PubgMobile $pubg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePubgMobileRequest  $request
     * @param  \App\Models\PubgMobile  $pubg
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePubgMobileRequest $request, PubgMobile $pubg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PubgMobile  $pubg
     * @return \Illuminate\Http\Response
     */
    public function destroy(PubgMobile $pubg)
    {
        //
    }
}
