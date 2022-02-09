@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    Halaman Pinjam

@stop

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Pinjam</div>
                    <div class="card-body">
                        <form action="{{ route('pinjam.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">Masukan Kode Register</label>
                                <select name="kode_register"
                                    class="form-control @error('kode_register') is-invalid @enderror">
                                    @foreach ($buku as $data)
                                        <option value="{{ $data->id }}">{{ $data->kode_register }}</option>
                                    @endforeach
                                </select>
                                @error('kode_register')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Kode Pinjam</label>
                                <input type="text" name="kode_pinjam"
                                    class="form-control @error('kode_pinjam') is-invalid @enderror">
                                @error('kode_pinjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tanggal Pinjam</label>
                                <input type="date" name="tgl_pinjam"
                                    class="form-control @error('tgl_pinjam') is-invalid @enderror">
                                @error('tgl_pinjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tanggal Kembali</label>
                                <input type="date" name="tgl_kembali"
                                    class="form-control @error('tgl_kembali') is-invalid @enderror">
                                @error('tgl_kembali')
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
