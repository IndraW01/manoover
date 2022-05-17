<?php

namespace App\Http\Controllers;

use App\Models\DataPendaftaran;
use App\Http\Requests\StoreDataPendaftaranRequest;
use App\Http\Requests\UpdateDataPendaftaranRequest;

class DataPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDataPendaftaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataPendaftaranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPendaftaran  $dataPendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(DataPendaftaran $dataPendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPendaftaran  $dataPendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPendaftaran $dataPendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataPendaftaranRequest  $request
     * @param  \App\Models\DataPendaftaran  $dataPendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataPendaftaranRequest $request, DataPendaftaran $dataPendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPendaftaran  $dataPendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPendaftaran $dataPendaftaran)
    {
        //
    }
}
