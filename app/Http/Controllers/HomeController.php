<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $alternatif = Alternatif::count();
        $kriteria = Kriteria::count();
        return view(
            'pages.home',
            [
                'alternatif' => $alternatif,
                'kriteria' => $kriteria,
            ]
        );
    }
}
