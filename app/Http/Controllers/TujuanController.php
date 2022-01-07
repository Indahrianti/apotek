<?php

namespace App\Http\Controllers;

use App\Models\Tujuan;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tujuan = Tujuan::all();
        return view('tujuan.index', compact('tujuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tujuan.create');

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
            'tujuan_brangkat' => 'required'
        ]);

        $tujuan = new Tujuan;
        //db              create
        $tujuan->tujuan_brangkat = $request->tujuan_brangkat;
        $tujuan->save();
        return redirect()->route('tujuan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tujuan  $tujuan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tujuan = Tujuan::findOrFail($id);
        return view('tujuan.show', compact('tujuan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tujuan  $tujuan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tujuan = Tujuan::findOrFail($id);
        return view('tujuan.edit', compact('tujuan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tujuan  $tujuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //validasi data
        $validated = $request->validate([
            'tujuan_brangkat' => 'required'
        ]);

        $tujuan = Tujuan::findOrfail($id);
        $tujuan->tujuan_brangkat = $request->tujuan_brangkat;
        $tujuan->save();
        return redirect()->route('tujuan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tujuan  $tujuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tujuan $tujuan)
    {
        //
    }
}
