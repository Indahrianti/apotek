<?php

namespace App\Http\Controllers;

use App\Models\Asal;
use Illuminate\Http\Request;

class AsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asal = Asal::all();
        return view('asal.index', compact('asal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asal.create');

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
            'asal_brangkat' => 'required'
        ]);

        $asal = new Asal;
        //db              create
        $asal->asal_brangkat = $request->asal_brangkat;
        $asal->save();
        return redirect()->route('asal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asal  $asal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asal = Asal::findOrFail($id);
        return view('asal.show', compact('asal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asal  $asal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asal = Asal::findOrFail($id);
        return view('asal.edit', compact('asal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asal  $asal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi data
        $validated = $request->validate([
            'asal_brangkat' => 'required'
        ]);

        $asal = Asal::findOrfail($id);
        $asal->asal_brangkat = $request->asal_brangkat;
        $asal->save();
        return redirect()->route('asal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asal  $asal
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $asal = Asal::findOrFail($id);
        $asal->delete();
        return redirect()->route('asal.index');
    }
}
