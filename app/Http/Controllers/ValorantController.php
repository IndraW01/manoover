<?php

namespace App\Http\Controllers;

use App\Models\Valorant;
use App\Traits\ValorantTrait;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreValorantRequest;
use App\Http\Requests\UpdateValorantRequest;

class ValorantController extends Controller
{
    use ValorantTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.valorant.index', [
            'valorants' => Valorant::latest()->with('user')->get()
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
     * @param  \App\Http\Requests\StoreValorantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreValorantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Valorant  $valorant
     * @return \Illuminate\Http\Response
     */
    public function show(Valorant $valorant)
    {
        return view('admin.valorant.show', [
            'valorant' => $valorant
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Valorant  $valorant
     * @return \Illuminate\Http\Response
     */
    public function edit(Valorant $valorant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateValorantRequest  $request
     * @param  \App\Models\Valorant  $valorant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateValorantRequest $request, Valorant $valorant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Valorant  $valorant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Valorant $valorant)
    {
        $valorant->delete();

        Alert::success('Berhasil', "Data {$valorant->nama_ketua_tim} Berhasil di hapus");

        return redirect()->back();
    }
}
