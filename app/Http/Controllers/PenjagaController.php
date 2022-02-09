<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use App\Models\penjaga;
use Illuminate\Http\Request;

class PenjagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjaga = Penjaga::with('peminjaman')->get();
        return view('penjaga.index', compact('penjaga'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjaga = penjaga::all();
        $peminjaman = Peminjaman::all();
        return view('penjaga.create', compact('penjaga', 'peminjaman'));

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
            'kode_petugas' => 'required',
            'nama_petugas' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
        ]);

        $penjaga = new Penjaga;
        $penjaga->kode_petugas = $request->kode_petugas;
        $penjaga->nama_petugas = $request->nama_petugas;
        $penjaga->alamat = $request->alamat;
        $penjaga->jk = $request->jk;
        $penjaga->save();
        return redirect()->route('penjaga.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penjaga  $penjaga
     * @return \Illuminate\Http\Response
     */
    public function show(penjaga $penjaga)
    {
        $penjaga = Penjaga::findOrFail($id);
        return view('penjaga.show', compact('penjaga'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penjaga  $penjaga
     * @return \Illuminate\Http\Response
     */
    public function edit(penjaga $penjaga)
    {
        $penjaga = Penjaga::findOrFail($id);
        $peminjaman = Peminjaman::all();
        return view('penjaga.edit', compact('penjaga', 'peminjaman'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penjaga  $penjaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penjaga $penjaga)
    {
        $validated = $request->validate([
            'kode_petugas' => 'required',
            'nama_petugas' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
        ]);

        $penjaga = Penjaga::findOrFail($id);
        $penjaga->kode_petugas = $request->kode_petugas;
        $penjaga->nama_petugas = $request->nama_petugas;
        $penjaga->alamat = $request->alamat;
        $penjaga->jk = $request->jk;
        $penjaga->save();
        return redirect()->route('penjaga.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penjaga  $penjaga
     * @return \Illuminate\Http\Response
     */
    public function destroy(penjaga $penjaga)
    {
        $penjaga = Penjaga::findOrFail($id);
        $penjaga->delete();
        return redirect()->route('penjaga.index');

    }
}
