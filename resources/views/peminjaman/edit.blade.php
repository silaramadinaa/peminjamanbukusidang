@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Edit Data Peminjaman</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Peminjaman</div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Kode Pinjam</label>
                                <input type="number" name="kode_pinjam" value="{{ $peminjaman->kode_pinjam }}"
                                    class="form-control @error('kode_pinjam') is-invalid @enderror">
                                @error('kode_pinjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan No Anggota</label>
                                <input type="number" name="no_anggota" value="{{ $peminjaman->no_anggota }}"
                                    class="form-control @error('no_anggota') is-invalid @enderror">
                                @error('no_anggota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Kode Petugas</label>
                                <input type="number" name="kode_petugas" value="{{ $peminjaman->kode_petugas }}"
                                    class="form-control @error('kode_petugas') is-invalid @enderror">
                                @error('kode_petugas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
