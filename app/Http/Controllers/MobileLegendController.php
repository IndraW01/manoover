<?php

namespace App\Http\Controllers;

use App\Models\MobileLegend;
use App\Http\Requests\StoreMobileLegendRequest;
use App\Http\Requests\UpdateMobileLegendRequest;
use App\Traits\MobileLegendTrait;
use RealRashid\SweetAlert\Facades\Alert;

class MobileLegendController extends Controller
{
    use MobileLegendTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('status')) {
            if(request('status') == 'belum') {
                $mobileLegend = MobileLegend::latest()->with('user')->whereStatus('belum');
            }
            if(request('status') == 'sudah') {
                $mobileLegend = MobileLegend::latest()->with('user')->whereStatus('sudah');
            }
            if(request('status') == 'tolak') {
                $mobileLegend = MobileLegend::latest()->with('user')->whereStatus('tolak');
            }
        } else {
            $mobileLegend = MobileLegend::latest()->with('user');
        }

        return view('admin.mobileLegend.index', [
            'mobileLegends' => $mobileLegend->get()
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
     * @param  \App\Http\Requests\StoreMobileLegendRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMobileLegendRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MobileLegend  $mobileLegend
     * @return \Illuminate\Http\Response
     */
    public function show(MobileLegend $mobileLegend)
    {
        return view('admin.mobileLegend.show', [
            'mobileLegend' => $mobileLegend
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MobileLegend  $mobileLegend
     * @return \Illuminate\Http\Response
     */
    public function edit(MobileLegend $mobileLegend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMobileLegendRequest  $request
     * @param  \App\Models\MobileLegend  $mobileLegend
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMobileLegendRequest $request, MobileLegend $mobileLegend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MobileLegend  $mobileLegend
     * @return \Illuminate\Http\Response
     */
    public function destroy(MobileLegend $mobileLegend)
    {
        $mobileLegend->delete();

        Alert::success('Berhasil', "Data {$mobileLegend->nama_ketua_tim} Berhasil di hapus");

        return redirect()->back();
    }


}
