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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tujuan  $tujuan
     * @return \Illuminate\Http\Response
     */
    public function show(Tujuan $tujuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tujuan  $tujuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tujuan $tujuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tujuan  $tujuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tujuan $tujuan)
    {
        //
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
