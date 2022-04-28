<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Traits\BandTrait;
use App\Http\Requests\StoreBandRequest;
use App\Http\Requests\UpdateBandRequest;
use RealRashid\SweetAlert\Facades\Alert;

class BandController extends Controller
{
    use BandTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('status')) {
            if(request('status') == 'belum') {
                $band = Band::latest()->with('user')->whereStatus('belum');
            }
            if(request('status') == 'sudah') {
                $band = Band::latest()->with('user')->whereStatus('sudah');
            }
            if(request('status') == 'tolak') {
                $band = Band::latest()->with('user')->whereStatus('tolak');
            }
        } else {
            $band = Band::latest()->with('user');
        }

        return view('admin.band.index', [
            'bands' => $band->get()
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
     * @param  \App\Http\Requests\StoreBandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBandRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function show(Band $band)
    {
        return view('admin.band.show', [
            'band' => $band
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBandRequest  $request
     * @param  \App\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBandRequest $request, Band $band)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function destroy(Band $band)
    {
        $band->delete();

        Alert::success('Berhasil', "Data {$band->nama_band} Berhasil di hapus");

        return redirect()->back();
    }
}
