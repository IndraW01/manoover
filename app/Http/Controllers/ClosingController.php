<?php

namespace App\Http\Controllers;

use App\Models\Closing;
use App\Http\Requests\StoreClosingRequest;
use App\Http\Requests\UpdateClosingRequest;
use App\Traits\ClosingTrait;

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
        return view('admin.ceremony.index', [
            'closings' => Closing::latest()->with('user')->get()
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
    public function show(Closing $closing)
    {
        return view('admin.ceremony.show', [
            'closing' => $closing
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
        //
    }
}
