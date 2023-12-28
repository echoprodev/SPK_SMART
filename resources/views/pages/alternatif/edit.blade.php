@extends('layouts.dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Alternatif</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <!-- /.col -->
                <div class="col-md-8 ">
                    <div class="card justify-content-center">
                        <div class="card-header p-3">
                            <h2>Data Alternatif</h2>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- /.tab-pane -->

                                <div class="active tab-pane" id="settings">
                                    <form class="form-horizontal" method="POST" action="{{ route('admin.alternatif.update', $alternatif->id) }}">
                                        @method('patch')
                                        @csrf

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nama_lengkap" id="inputName"
                                                    value="{{$alternatif->nama_lengkap}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">
                                                <select name="jenis_kelamin" class="form-control" id="">
                                                    <option value="" selected disabled>=== Pilih Jenis Kelamin ===</option>
                                                    <option value="Laki-Laki" {{$alternatif->jenis_kelamin == 'Laki-Laki' ? 'selected' : ''}}>Laki-Laki</option>
                                                    <option value="Perempuan" {{$alternatif->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Usia</label>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" name="usia_alternatif" id="inputName" value="{{$alternatif->usia_alternatif}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Sertifikat</label>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" name="sertifikat_alternatif" id="inputName" value="{{$alternatif->sertifikat_alternatif}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Pengalaman</label>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" name="pengalaman_alternatif" id="inputName" value="{{$alternatif->pengalaman_alternatif}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Berat Badan</label>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" name="bb_alternatif" id="inputName" value="{{$alternatif->bb_alternatif}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea name="alamat" class="form-control" id="" cols="30" rows="5">{{$alternatif->alamat}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-9">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
