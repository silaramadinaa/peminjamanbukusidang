@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    Halaman Penjaga

@stop

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Penjaga</div>
                    <div class="card-body">
                        <form action="{{ route('penjaga.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">Masukan Kode Petugas</label>
                                <select name="kode_petugas" class="form-control @error('kode_petugas') is-invalid @enderror">
                                    @foreach ($peminjaman as $data)
                                        <option value="{{ $data->id }}">{{ $data->kode_petugas }}</option>
                                    @endforeach
                                </select>
                                @error('kode_petugas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Petugas</label>
                                <input type="text" name="nama_petugas"
                                    class="form-control @error('nama_petugas') is-invalid @enderror">
                                @error('nama_petugas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Alamat</label>
                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control @error('jk') is-invalid @enderror">
                                @error('jk')
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
