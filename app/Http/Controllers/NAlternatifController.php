<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\NilaiAlternatif;
use App\Models\SubKriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NAlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternatif = Alternatif::all();
        $N_alternatif = NilaiAlternatif::all();
        return view(
            'pages.nilai_alternatif.index',
            [
                'N_alternatif' => $N_alternatif,
                'alternatif'   => $alternatif
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $alternatif = Alternatif::all();

        // return view(
        //     'pages.nilai_alternatif.add',
        //     [
        //         'alternatif' => $alternatif
        //     ]
        // );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Sub Kriteria

        // Sub Kriteria usia
        $usia = 'Usia';
        $MAXusia = SubKriteria::where('kategori_kriteria', $usia)
        ->max('bobot_subkriteria');
        $MINusia = SubKriteria::where('kategori_kriteria', $usia)
        ->min('bobot_subkriteria');

        // Sub Kriteria usia
        $sertifikat = 'Sertifikat';
        $MAXsertifikat = SubKriteria::where('kategori_kriteria', $sertifikat)
        ->max('bobot_subkriteria');
        $MINsertifikat = SubKriteria::where('kategori_kriteria', $sertifikat)
        ->min('bobot_subkriteria');

        // Sub Kriteria usia
        $pengalaman = 'Pengalaman';
        $MAXpengalaman = SubKriteria::where('kategori_kriteria', $pengalaman)
        ->max('bobot_subkriteria');
        $MINpengalaman = SubKriteria::where('kategori_kriteria', $pengalaman)
        ->min('bobot_subkriteria');

        // Sub Kriteria usia
        $berat_badan = 'Berat Badan';
        $MAXbb = SubKriteria::where('kategori_kriteria', $berat_badan)
        ->max('bobot_subkriteria');
        $MINbb = SubKriteria::where('kategori_kriteria', $berat_badan)
        ->min('bobot_subkriteria');


        // rumus nilai total
        $normaliasi_usia        = 40 / 100;
        $normaliasi_sertifikat  = 30 / 100;
        $normaliasi_pengalaman  = 20 / 100;
        $normaliasi_bb          = 10 / 100;

        $data = $request->all();

        $cek = DB::table('nilai_alternatif')
            ->where('nama_alternatif', $data['nama_alternatif'])
            ->exists();


        if ($cek) {
            return back()->with('error', 'Data nilai sudah diinput');
        }

        // Input Nilai
        $nama       = $request->input('nama_alternatif');
        $usia       = $request->input('N_usia');
        $sertifikat = $request->input('N_sertifikat');
        $pengalaman = $request->input('N_pengalaman');
        $bb         = $request->input('N_bb');

        // nlai utility
        $u_usia         = ($usia - 0) / (100 - 0);
        $u_sertifikat   = ($sertifikat - 0) / (100 - 0);
        $u_pengalaman   = ($pengalaman - 0) / (100 - 0);
        $u_bb           = ($bb - 0) / (100 - 0);

        $total        = ($u_usia * $normaliasi_usia) + ($u_sertifikat * $normaliasi_sertifikat) + ($u_pengalaman * $normaliasi_pengalaman) + ($u_bb * $normaliasi_bb);
        $rank           = ($u_usia * $normaliasi_usia) + ($u_sertifikat * $normaliasi_sertifikat) + ($u_pengalaman * $normaliasi_pengalaman) + ($u_bb * $normaliasi_bb);

        $data           = new NilaiAlternatif();
        $data->nama_alternatif  = $nama;
        $data->N_usia           = $usia;
        $data->N_sertifikat     = $sertifikat;
        $data->N_pengalaman     = $pengalaman;
        $data->N_bb             = $bb;
        $data->NU_usia          = $u_usia;
        $data->NU_sertifikat    = $u_sertifikat;
        $data->NU_pengalaman    = $u_pengalaman;
        $data->NU_bb            = $u_bb;
        $data->N_total          = $total;
        $data->rank             = $rank;
        $data->save();

        return redirect()->route('admin.nilai-alternatif.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alternatif = Alternatif::find($id);

        return view(
            'pages.nilai_alternatif.edit',
            [
                'alternatif' => $alternatif
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alternatif = Alternatif::findOrFail($id);

        $alternatif->update([
            'N_usia'           => $request->N_usia,
            'N_sertifikat'     => $request->N_sertifikat,
            'N_pengalaman'     => $request->N_pengalaman,
            'N_bb'             => $request->N_bb
        ]);

        return redirect()->route('admin.nilai-alternatif.index')->with('success', 'Nilai berahasil diinput');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
