<?php

namespace App\Http\Controllers;

use App\Models\NilaiAlternatif;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        $data = NilaiAlternatif::all();



        $sortedData = $data->sortByDesc('N_total');

        $rank = 1;
        $rankingData = $sortedData->map(function ($item) use (&$rank) {
            $item->rank = $rank++;
            return $item;
        });

        return view('pages.hasil.index', compact( 'data', 'sortedData'));
    }
}
