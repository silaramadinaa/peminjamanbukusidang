@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Edit Data Pinjam</h1>
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
                    <div class="card-header">Data Pinjam</div>
                    <div class="card-body">
                        <form action="{{ route('pinjam.update', $pinjam->id) }}" method="post">
                            @csrf
                            @method('put')
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
                                <input type="text" name="kode_pinjam" value="{{ $pinjam->kode_pinjam }}"
                                    class="form-control @error('kode_pinjam') is-invalid @enderror">
                                @error('kode_pinjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tanggal Pinjam</label>
                                <input type="date" name="tgl_pinjam" value="{{ $pinjam->tgl_pinjam }}"
                                    class="form-control @error('tgl_pinjam') is-invalid @enderror">
                                @error('tgl_pinjam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tanggal Kembali</label>
                                <input type="date" name="tgl_kembali" value="{{ $pinjam->tgl_kembali }}"
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
@endsection
