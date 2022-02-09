<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\pinjam;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjam = Pinjam::with('buku')->get();
        return view('pinjam.index', compact('pinjam'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pinjam = Pinjam::all();
        $buku = Buku::all();
        return view('pinjam.create', compact('pinjam', 'buku'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_register' => 'required',
            'kode_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $pinjam = new pinjam;
        $pinjam->kode_register = $request->kode_register;
        $pinjam->kode_pinjam = $request->kode_pinjam;
        $pinjam->tgl_pinjam = $request->tgl_pinjam;
        $pinjam->tgl_kembali = $request->tgl_kembali;
        $pinjam->save();
        return redirect()->route('pinjam.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function show(pinjam $pinjam)
    {
        $pinjam = Pinjam::findOrFail($id);
        return view('pinjam.show', compact('pinjam'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pinjam = Pinjam::findOrFail($id);
        $buku = Buku::all();
        return view('pinjam.edit', compact('pinjam', 'buku'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pinjam $pinjam)
    {
        $validated = $request->validate([
            'kode_register' => 'required',
            'kode_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $pinjam = Pinjam::findOrFail($id);
        $pinjam->kode_register = $request->kode_register;
        $pinjam->kode_pinjam = $request->kode_pinjam;
        $pinjam->tgl_beli = $request->tgl_beli;
        $pinjam->tgl_kembali = $request->tgl_kembali;
        $pinjam->save();
        return redirect()->route('pinjam.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(pinjam $pinjam)
    {
        $pinjam = Pinjam::findOrFail($id);
        $pinjam->delete();
        return redirect()->route('pinjam.index');

    }
}
