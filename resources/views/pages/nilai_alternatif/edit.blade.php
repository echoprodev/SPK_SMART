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
                <div class="col-md-12 ">
                    <div class="card justify-content-center">
                        <div class="card-header p-3">
                            <h2>Data Alternatif</h2>
                        </div><!-- /.card-header -->
                        @if (session('error'))
                            <div class="col-sm-12 alert alert-danger" id="pesan" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- /.tab-pane -->
                                <div class="active tab-pane" id="settings">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form class="form-horizontal" method="POST"
                                                action="{{ route('admin.nilai-alternatif.store', $alternatif->id) }}">
                                                @method('post')
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-4 col-form-label">Nama
                                                        Lengkap</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="nama_alternatif"
                                                            id="inputName" value="{{ $alternatif->nama_lengkap }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-sm-4 col-sm-3">
                                                        <label for="">Data Alternatif</label>
                                                    </div>
                                                    <div class="offset-sm-1 col-sm-3">
                                                        <label for="">Nilai Alternatif</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-4 col-form-label">Usia</label>
                                                    <div class=" col-sm-3">
                                                        <input type="number" class="form-control" name="usia_alternatif"
                                                            id="inputName" value="{{ $alternatif->usia_alternatif }}"
                                                            readonly>
                                                    </div>
                                                    <div class="offset-sm-1 col-sm-3">
                                                        <input type="number" class="form-control" name="N_usia"
                                                            id="inputName" max="100" min="50">
                                                        <input type="number" class="form-control" name="NU_usia"
                                                            id="inputName" hidden>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName"
                                                        class="col-sm-4 col-form-label">Sertifikat</label>
                                                    <div class="col-sm-3">
                                                        <input type="number" class="form-control"
                                                            name="sertifikat_alternatif" id="inputName"
                                                            value="{{ $alternatif->sertifikat_alternatif }}" readonly>
                                                    </div>
                                                    <div class="offset-sm-1 col-sm-3">
                                                        <input type="number" class="form-control" name="N_sertifikat"
                                                            id="inputName">
                                                        <input type="number" class="form-control" name="NU_sertifikat"
                                                            id="inputName" hidden>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName"
                                                        class="col-sm-4 col-form-label">Pengalaman</label>
                                                    <div class="col-sm-3">
                                                        <input type="number" class="form-control"
                                                            name="pengalaman_alternatif" id="inputName"
                                                            value="{{ $alternatif->pengalaman_alternatif }}" readonly>
                                                    </div>
                                                    <div class="offset-sm-1 col-sm-3">
                                                        <input type="number" class="form-control" name="N_pengalaman"
                                                            id="inputName">
                                                        <input type="number" class="form-control" name="NU_pengalaman"
                                                            id="inputName" hidden>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-4 col-form-label">Berat
                                                        Badan</label>
                                                    <div class="col-sm-3">
                                                        <input type="number" class="form-control" name="bb_alternatif"
                                                            id="inputName" value="{{ $alternatif->bb_alternatif }}"
                                                            readonly>
                                                    </div>
                                                    <div class="offset-sm-1 col-sm-3">
                                                        <input type="number" class="form-control" name="N_bb"
                                                            id="inputName">
                                                        <input type="number" class="form-control" name="NU_bb"
                                                            id="inputName" hidden>
                                                        <input type="number" class="form-control" name="N_utility"
                                                            id="inputName" hidden>
                                                        <input type="number" class="form-control" name="N_total"
                                                            id="inputName" hidden>
                                                        <input type="number" class="form-control" name="rank"
                                                            id="inputName" hidden>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-sm-4 col-sm-9">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6">
                                            <table border="0">
                                                <tr>
                                                    <td colspan="7"><b>Keterangan Penilaian:</b></td>
                                                </tr>
                                                {{-- Usia dan Berat Badan --}}
                                                <tr>
                                                    <td colspan="3">Usia</td>
                                                    <td style="width: 25px"></td>
                                                    <td colspan="3">Berat Badan</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 120px">25 - 30 tahun</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>100 poin</td>
                                                    <td style="width: 25px"></td>
                                                    <td style="width: 120px">70 - 75 Kg</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>100 poin</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 120px">31 - 35 tahun</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>80 poin</td>
                                                    <td style="width: 25px"></td>
                                                    <td>76 - 90 Kg</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>80 poin</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 120px">36 - 40 tahun</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>60 poin</td>
                                                    <td style="width: 25px"></td>
                                                    <td>95 - 100 Kg</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>70 poin</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 120px">> 40 tahun</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>50 poin</td>
                                                    <td style="width: 25px"></td>
                                                    <td>105 - 110 Kg</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>50 poin</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" style="height: 4px"></td>
                                                </tr>
                                                {{-- Sertifikat dan Pengalaman --}}
                                                <tr>
                                                    <td colspan="3">Pengalaman</td>
                                                    <td style="width: 25px"></td>
                                                    <td colspan="3">Sertfikat</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 120px">> 3 tahun</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>100 poin</td>
                                                    <td style="width: 25px"></td>
                                                    <td>3 sertifikat</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>100 poin</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 120px">3 tahun</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>70 poin</td>
                                                    <td style="width: 25px"></td>
                                                    <td>2 sertifikat</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>70 poin</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 120px">2 tahun</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>60 poin</td>
                                                    <td style="width: 25px"></td>
                                                    <td>1 sertifikat</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>50 poin</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 120px">
                                                        <= 1 tahun</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>50 poin</td>
                                                    <td style="width: 25px"></td>
                                                    <td>0 sertifikat</td>
                                                    <td style="width: 20px">=</td>
                                                    <td>40 poin</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
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
        const timer = setTimeout(notification, 3000);

        function notification() {
            const element = document.getElementById("pesan");
            element.remove();
        };
    </script>
@endsection
