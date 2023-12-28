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
                        <li class="breadcrumb-item active">Tambah Sub Kriteria</li>
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
                            <h2>Data Sub Kriteria</h2>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- /.tab-pane -->

                                <div class="active tab-pane" id="settings">
                                    <form class="form-horizontal" method="POST" action="{{ route('admin.sub-kriteria.update', $subkriteria->id) }}">
                                        @method('put')
                                        @csrf

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Katergori Kriteria</label>
                                            <div class="col-sm-9">
                                                <select name="kategori_kriteria" id="" class="form-control">
                                                    @foreach ($kriteria as $data)
                                                        <option value="{{$data->nama_kriteria}}"{{$data->nama_kriteria == $subkriteria->kategori_kriteria ? 'selected' : ''}}>{{$data->nama_kriteria}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Bobot Sub Kriteria</label>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" id="inputEmail" name="bobot_subkriteria" value="{{$subkriteria->bobot_subkriteria}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Keterangan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputEmail" name="keterangan" value="{{$subkriteria->keterangan}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-10">
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
