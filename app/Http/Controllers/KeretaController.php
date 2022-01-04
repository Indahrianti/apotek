<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use App\Models\Asal;
use App\Models\Tujuan;

use Illuminate\Http\Request;

class KeretaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kereta = Kereta::all();
        return view('kereta.index', compact('kereta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asal = Asal::all();
        $tujuan = Tujuan::all();

        return view('kereta.create', compact('asal','tujuan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'nama_KA' => 'required'
        ]);

        $kereta = new Kereta;
        //db              create
        $kereta->nama_KA = $request->nama_KA;
        $kereta->asal_id = $request->asal_id;
        $kereta->tujuan_id = $request->tujuan_id;

        $kereta->save();
        return redirect()->route('kereta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function show(Kereta $kereta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function edit(Kereta $kereta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kereta $kereta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $kereta = Kereta::findOrFail($id);
        $kereta->delete();
        return redirect()->route('kereta.index');
    }
}
