<!DOCTYPE html>
<html>

<head>
    <title>Laporan Hasil Penerimaan Calon Instruktur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <center>
            <h4>Laporan Hasil Penerimaan Calon Instruktur</h4>
            <h4>Re Fitness Gym Pasuruan</h4>
        </center>
        <br />
        {{-- <a href="/pegawai/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a> --}}
        <table class="table table-bordered" style="margin-left: -80px; width: 130%; font-size: 9pt;">
            <thead>
                <tr>
                    <th>No.</th>
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
                <?php
                $id = 1;
                $max = 100;
                $mid = 50;
                $min = 40;
                ?>
                @foreach ($hasil as $value)
                    <tr>

                        <td>{{ $id++ }}</td>
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

</body>

</html>
