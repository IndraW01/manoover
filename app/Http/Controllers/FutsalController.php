<?php

namespace App\Http\Controllers;

use App\Models\Futsal;
use App\Traits\FutsalTrait;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreFutsalRequest;
use App\Http\Requests\UpdateFutsalRequest;

class FutsalController extends Controller
{
    use FutsalTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.futsal.index', [
            'futsals' => Futsal::latest()->with('user')->get()
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
     * @param  \App\Http\Requests\StoreFutsalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFutsalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function show(Futsal $futsal)
    {
        return view('admin.futsal.show', [
            'futsal' => $futsal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function edit(Futsal $futsal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFutsalRequest  $request
     * @param  \App\Models\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFutsalRequest $request, Futsal $futsal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Futsal $futsal)
    {
        $futsal->delete();

        Alert::success('Berhasil', "Data {$futsal->nama_ketua_tim} Berhasil di hapus");

        return redirect()->back();
    }
}
