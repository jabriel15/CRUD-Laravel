@extends('layout.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Latihan CRUD</h1>
                    <a href="{{ url('create') }}" class="btn btn-primary">+ Tambah Siswa</a>
                </div>

                <div class="col-lg-8 mt-5">
                    <table class="table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $dataSiswa)
                        <tr>
                            <td>{{ $dataSiswa->id }}</td>
                            <td>{{ $dataSiswa->name }}</td>
                            <td>{{ $dataSiswa->nis }}</td>
                            <td>{{ $dataSiswa->alamat }}</td>
                            <td>
                                <a href="{{ url('/show/'.$dataSiswa->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ url('/destroy/'.$dataSiswa->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
