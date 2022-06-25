@extends('layout.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah data siswa</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Siswa *</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="nis">NIS *</label>
                            <input type="number" name="nis" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat *</label>
                            <textarea class="form-control" name="alamat"></textarea>
                        </div>

                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Tambah Siswa</button>
                        </div>

                        <div class="form-group mt-2">
                            <a href="{{ url('/') }}"> << Kembali ke halaman utama</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection