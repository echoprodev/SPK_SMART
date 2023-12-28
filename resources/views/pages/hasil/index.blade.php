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
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card text-center" id="btn_proses">
                    <div class="card-body">
                        <button class="btn-primary" onclick="proses()">Proses HItung Metode SMART</button>
                    </div>
                </div>
                {{-- Tabel Hasil --}}
                <div class="card" style="display: none;" id="data_tabel">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="card-title">Data Hasil Perhitungan Metode SMART</h3>
                            </div>
                            <div class="col-4">
                                <a href="{{route('print.index')}}" class="btn btn-sm btn-primary float-right"><i
                                        class="fas fa-print"></i> Cetak Laporan</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Usia</th>
                                    <th>Berat Badan</th>
                                    <th>Serifikat</th>
                                    <th>Pengalaman</th>
                                    <th>Nilai Total</th>
                                    <th>Rangking</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sortedData as $value)
                                    <tr>
                                        <td>{{ $value->nama_alternatif }}</td>
                                        <td>{{ $value->N_usia }}</td>
                                        <td>{{ $value->N_bb }}</td>
                                        <td>{{ $value->N_sertifikat }}</td>
                                        <td>{{ $value->N_pengalaman }}</td>
                                        <td>{{ $value->N_total }}</td>
                                        <td>{{ $value->rank }}</td>

                                        {{-- <td>
                                        <a href="{{ route('admin.nilai-alternatif.edit', $data->id) }}"
                                            class="btn btn-primary btn-sm"
                                            onclick="return confirm('Apakah anda ingin mengubah data? dengan nama ({{ $data->nama_lengkap }})')"><i
                                                class="fas fa-edit"></i> Input Nilai</a>
                                    </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

    {{-- Proses Hitung Metode SMART --}}
    <script>
        function proses() {
            var btnproses = document.getElementById("btn_proses");
            var tbhasil   = document.getElementById("data_tabel")

            btnproses.style.display = "none";
            tbhasil.style.display = "block";
        }
    </script>
@endsection
