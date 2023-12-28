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
                        <li class="breadcrumb-item active">Tambah Kriteria</li>
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
                            <h2>Data Kriteria</h2>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- /.tab-pane -->

                                <div class="active tab-pane" id="settings">
                                    <form class="form-horizontal" method="POST" action="{{ route('admin.kriteria.store') }}">
                                        @method('post')
                                        @csrf

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nama Kriteria</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama_kriteria" id="inputName"
                                                    placeholder="Nama Kriteria">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Bobot Kriteria</label>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" id="inputEmail" name="bobot_kriteria">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
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
