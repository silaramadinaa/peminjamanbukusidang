<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman.create');

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
            'kode_pinjam' => 'required',
            'no_anggota' => 'required',
            'kode_petugas' => 'required',
        ]);

        $peminjaman = new Peminjaman;
        $peminjaman->kode_pinjam = $request->kode_pinjam;
        $peminjaman->no_anggota = $request->no_anggota;
        $peminjaman->kode_petugas = $request->kode_petugas;
        $peminjaman->save();
        return redirect()->route('peminjaman.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(peminjaman $peminjaman)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('$peminjaman.show', compact('$peminjaman'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(peminjaman $peminjaman)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.edit', compact('peminjaman'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peminjaman $peminjaman)
    {
        $validated = $request->validate([
            'kode_pinjam' => 'required',
            'no_anggota' => 'required',
            'kode_petugas' => 'required',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->kode_pinjam = $request->kode_pinjam;
        $peminjaman->no_anggota = $request->no_anggota;
        $peminjaman->kode_petugas = $request->kode_petugas;
        $peminjaman->save();
        return redirect()->route('peminjaman.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(peminjaman $peminjaman)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman.index');

    }
}
