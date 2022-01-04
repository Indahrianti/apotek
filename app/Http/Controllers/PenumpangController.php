<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use App\Models\Penumpang;
use Illuminate\Http\Request;

class PenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $penumpang = Penumpang::all();
         return view('penumpang.index', compact('penumpang'));
        // $penumpang = Penumpang::all();
        // return view('penumpang.index', compact('penumpang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kereta = Kereta::all();
        return view('penumpang.create', compact('kereta'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penumpang = new penumpang;
        $penumpang->nama_penumpang = $request->nama_penumpang;
        $penumpang->kereta_id = $request->kereta_id;
        $penumpang->asal = $request->asal;
        $penumpang->tujuan = $request->tujuan;
        $penumpang->kelas = $request->kelas;

        $penumpang->save();
        return redirect()->route('penumpang.index');

       /* $this->validate($request, ['nama_pel' => 'required|unique:penumpang']);
        $penumpang = Penumpang::create($request->only('nama_pel'));

        Session::flash("flash_notification", [
            "level"=>"succes",
            "message"=>"Berhasil menyimpan $penumpang->nama_pel"
        ]);
        return redirect()->route('penumpang.index'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function show(Penumpang $penumpang)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       /* $penumpang = Penumpang::findOrFail($id);
        $kereta = Kereta::all();
        return view('penumpang.edit', compact('penumpang','kereta')); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $penumpang = Penumpang::findOrFail($id);
        $penumpang->nama_penumpang = $request->nama_penumpang;
        $penumpang->kereta_id = $request->kereta_id;
        $penumpang->asal = $request->asal;
        $penumpang->tujuan = $request->tujuan;
        $penumpang->kelas = $request->kelas;
        $penumpang->save();

        return redirect()->route('penumpang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $penumpang = Penumpang::findOrFail($id);
        $penumpang->delete();
        return redirect()->route('penumpang.index');
    }
}
