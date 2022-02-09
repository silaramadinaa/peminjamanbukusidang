@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Peminjaman</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container"><br>
        Data Peminjaman
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('peminjaman.create') }}"
                            class="btn btn-sm btn-outline-primary float-right">Tambah
                            Peminjaman</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Kode Pinjam</th>
                                    <th>No Anggota</th>
                                    <th>Kode Petugas</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($peminjaman as $data)
                                    <tr>
                                        <td>{{ $data->kode_pinjam }}</td>
                                        <td>{{ $data->no_anggota }}</td>
                                        <td>{{ $data->kode_petugas }}</td>
                                        <td>
                                            <form action="{{ route('peminjaman.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                {{-- <a href="{{ route('peminjaman.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('peminjaman.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a> --}}
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
