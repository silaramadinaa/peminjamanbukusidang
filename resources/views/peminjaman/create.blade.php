@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    Halaman Peminjaman

@stop

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Peminjaman</div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">Masukan Kode Pinjam</label>
                                <input type="number" name="kode_pinjam"
                                    class="form-control @error('kode_pinjam') is-invalid @enderror">
                                @error('kode_pinjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan No Anggota</label>
                                <input type="number" name="no_anggota"
                                    class="form-control @error('no_anggota') is-invalid @enderror">
                                @error('no_anggota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Kode Petugas</label>
                                <input type="number" name="kode_petugas"
                                    class="form-control @error('kode_petugas') is-invalid @enderror">
                                @error('kode_petugas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')

@stop

@section('js')

@stop
