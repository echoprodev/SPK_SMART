@extends('layouts.dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile <b>{{ Auth::user()->name }}</b></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
                <div class="col-md-12">
                    @if (session('update-profile'))
                        <div class="col-sm-12 alert alert-success" id="pesan" role="alert">
                            {{ session('update-profile') }}
                        </div>
                    @endif
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
                            <h2>Data Profile</h2>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- /.tab-pane -->

                                <div class="active tab-pane" id="settings">
                                    <form class="form-horizontal" method="POST" action="{{ route('profile.update') }}">
                                        @method('patch')
                                        @csrf

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" id="inputName"
                                                    placeholder="Name" value="{{ old('name', $user->name) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputEmail"
                                                    placeholder="Email" name="username"
                                                    value="{{ old('name', $user->username) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Role Akses</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2"
                                                    placeholder="Name" readonly value="{{ old('name', $user->role) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <a href="{{ route('profile.password') }}" class="btn btn-danger">Ubah Password</a>
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

    <script>
        const timer = setTimeout(notification, 5000);

        function notification() {
            const element = document.getElementById("pesan");
            element.remove();
        };
    </script>
@endsection
