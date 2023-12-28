<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d_kriteria = Kriteria::all();

        return view('pages.kriteria.index', [
            'd_kriteria' => $d_kriteria
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kriteria.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kriteria = Kriteria::create([
            'nama_kriteria'         => $request->nama_kriteria,
            'bobot_kriteria'        => $request->bobot_kriteria,
            'normalisasi_kriteria'  => $request->bobot_kriteria / 100,
        ]);

        return redirect()->route('admin.kriteria.index')->with('success', 'Data berhasil disimpan');
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
        $kriteria = Kriteria::find($id);

        return view('pages.kriteria.edit', [
            'kriteria' => $kriteria
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
        $kriteria = Kriteria::findOrFail($id);

        $kriteria->update([
            'nama_kriteria'         => $request->nama_kriteria,
            'bobot_kriteria'        => $request->bobot_kriteria,
            'normalisasi_kriteria'  => $request->bobot_kriteria/100,

        ]);

        return redirect()->route('admin.kriteria.index')->with('update', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kriteria = Kriteria::find($id);

        $kriteria->delete();

        return redirect()->route('admin.kriteria.index')->with('delete', 'Data berhasil dihapus');
    }
}
