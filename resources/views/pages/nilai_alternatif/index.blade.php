@extends('layouts.dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Database</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Data Penilaian Alternatif</li>
                    </ol>
                </div>
                @if (session('success'))
                    <div class="col-sm-12 alert alert-success" id="pesan" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('update'))
                    <div class="col-sm-12 alert alert-warning" id="pesan" role="alert">
                        {{ session('update') }}
                    </div>
                @endif

                @if (session('delete'))
                    <div class="col-sm-12 alert alert-danger" id="pesan" role="alert">
                        {{ session('delete') }}
                    </div>
                @endif

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="card-title">Data Penilaian Alternatif</h3>
                            </div>
                            <div class="col-4">
                                {{-- <a href="{{ route('admin.nilai-alternatif.create') }}" class="btn btn-sm btn-primary float-right"><i
                                        class="fas fa-plus"></i>Penilaian Alternatif</a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Usia</th>
                                    <th>Berat Badan</th>
                                    <th>Serifikat</th>
                                    <th>Pengalaman</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $id = 1;
                                ?>
                                @forelse ($alternatif as $items)
                                    <tr>

                                        <td>{{ $id++ }}</td>
                                        <td>{{ $items->nama_lengkap }}</td>
                                        <td>{{ $items->usia_alternatif }}</td>
                                        <td>{{ $items->bb_alternatif }}</td>
                                        <td>{{ $items->sertifikat_alternatif }}</td>
                                        <td>{{ $items->pengalaman_alternatif }}</td>

                                        <td>
                                            <a href="{{ route('admin.nilai-alternatif.edit', $items->id) }}"
                                                class="btn btn-primary btn-sm"
                                                onclick="return confirm('Apakah anda ingin mengubah data? dengan nama ({{ $items->nama_lengkap }})')"><i
                                                    class="fas fa-edit"></i> Input Nilai</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>

                                        <td colspan="6" class="text-center">Database Masih Kosong</td>

                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

    {{-- remove element --}}
    <script>
        const timer = setTimeout(notification, 3000);

        function notification() {
            const element = document.getElementById("pesan");
            element.remove();
        };
    </script>
@endsection
