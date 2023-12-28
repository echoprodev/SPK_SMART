<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\SubKriteria;
use Illuminate\Http\Request;

class SubKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_kriteria = SubKriteria::all();
        return view('pages.sub_kriteria.index', compact('sub_kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriteria = Kriteria::all();

        return view('pages.sub_kriteria.add', compact('kriteria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subkriteria = SubKriteria::create([
            'kategori_kriteria'  => $request->kategori_kriteria,
            'bobot_subkriteria'  => $request->bobot_subkriteria,
            'keterangan'         => $request->keterangan,
        ]);

        return redirect()->route('admin.sub-kriteria.index')->with('success', 'Data berhasil disimpan');
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
        $subkriteria = SubKriteria::find($id);
        $kriteria = Kriteria::all();

        return view('pages.sub_kriteria.edit', compact('subkriteria', 'kriteria'));
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
        $subkriteria = SubKriteria::findOrFail($id);
        $subkriteria->update([
            'kategori_kriteria'  => $request->kategori_kriteria,
            'bobot_subkriteria'  => $request->bobot_subkriteria,
            'keterangan'         => $request->keterangan,
        ]);

        return redirect()->route('admin.sub-kriteria.index')->with('update', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subkriteria = SubKriteria::find($id);

        $subkriteria->delete();

        return redirect()->route('admin.sub-kriteria.index')->with('delete', 'Data berhasil dihapus');
    }
}
