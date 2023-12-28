<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternatif = Alternatif::all();

        return view('pages.alternatif.index',
            [
                'alternatif' => $alternatif
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
        return view('pages.alternatif.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alternatif = Alternatif::create([
            'nama_lengkap'              => $request->nama_lengkap,
            'jenis_kelamin'             => $request->jenis_kelamin,
            'usia_alternatif'           => $request->usia_alternatif,
            'sertifikat_alternatif'     => $request->sertifikat_alternatif,
            'pengalaman_alternatif'     => $request->pengalaman_alternatif,
            'bb_alternatif'             => $request->bb_alternatif,
            'alamat'                    => $request->alamat
        ]);

        return redirect()->route('admin.alternatif.index')->with('success', 'Data berhasil disimpan');
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

        return view('pages.alternatif.edit', [
            'alternatif' => $alternatif
        ]);
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
            'nama_lengkap'              => $request->nama_lengkap,
            'jenis_kelamin'             => $request->jenis_kelamin,
            'usia_alternatif'           => $request->usia_alternatif,
            'sertifikat_alternatif'     => $request->sertifikat_alternatif,
            'pengalaman_alternatif'     => $request->pengalaman_alternatif,
            'bb_alternatif'             => $request->bb_alternatif,
            'alamat'                    => $request->alamat

        ]);

        return redirect()->route('admin.alternatif.index')->with('update', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alternatif = Alternatif::find($id);

        $alternatif->delete();

        return redirect()->route('admin.alternatif.index')->with('delete', 'Data berhasil dihapus');
    }
}
