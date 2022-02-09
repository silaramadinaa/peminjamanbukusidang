<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Models\peminjaman;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::with('peminjamen')->get();
        return view('anggota.index', compact('anggota'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = Anggota::all();
        $peminjaman = Peminjaman::all();
        return view('anggota.create', compact('anggota', 'peminjaman'));

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
            'no_anggota' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $anggota = new Anggota;
        $anggota->no_anggota = $request->no_anggota;
        $anggota->nama = $request->nama;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        return redirect()->route('anggota.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(anggota $anggota)
    {
        $anggota = Anggota::findOrFail($id);
        return view('$anggota.show', compact('$anggota'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(anggota $anggota)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.edit', compact('anggota'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anggota $anggota)
    {
        $validated = $request->validate([
            'no_anggota' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->no_anggota = $request->no_anggota;
        $anggota->nama = $request->nama;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        return redirect()->route('anggota.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(anggota $anggota)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        return redirect()->route('anggota.index');

    }
}
