@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop
@section('content')
    <div class="container"><br>
        Halaman Buku
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Buku
                        <a href="{{ route('buku.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                            Buku</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Kode Register</th>
                                    <th>Judul</th>
                                    <th>Nama Pengarang</th>
                                    <th>Nama Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Cover</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($buku as $data)
                                    <tr>
                                        <td>{{ $data->kode_register }}</td>
                                        <td>{{ $data->judul }}</td>
                                        <td>{{ $data->pengarang }}</td>
                                        <td>{{ $data->penerbit }}</td>
                                        <td>{{ $data->thn_terbit }}</td>
                                        <td><img src="{{ $data->image() }}" alt="" style="width:150px; height:150px;"
                                                alt="Cover"></td>
                                        <td>
                                            <form action="{{ route('buku.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                {{-- <a href="{{ route('buku.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('buku.show', $data->id) }}"
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


@stop
@section('css')


@section('js')
@stop
@endsection
