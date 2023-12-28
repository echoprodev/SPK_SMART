<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\NilaiAlternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PDF;

class PageController extends Controller
{
    // Page Profile
    public function profile(Request $request)
    {
        return view(
            'pages.profile.editprofile',
            [
                'user' => $request->user()
            ]
        );
    }

    // Update Profile
    public function update(Request $request)
    {
        $request->user()->update([
            'name'      => $request->name,
            'username'  => $request->username,
            'password'  => Hash::make($request->get('password'))
        ]);

        return redirect()->route('profile')->with('update-profile', 'Profile telah diperbarui');
    }

    // Page Ubah Password
    public function password(Request $request)
    {
        return view(
            'pages.profile.resetpassword',
            [
                'user' => $request->user()
            ]
        );
    }

    // Upadate Password
    public function reset(Request $request)
    {
        $request->user()->update([
            'password'  => Hash::make($request->get('password'))
        ]);

        return redirect()->route('profile')->with('update-profile', 'Password Telah Diperbarui');
    }

    // page Error
    public function error()
    {
        return view('pages.page404');
    }

    public function getDetails($id = 0)
    {
        $alternatif = Alternatif::where('id', $id)->first();

        return response()->json($alternatif);
    }


    public function cetak_pdf()
    {
        $data = NilaiAlternatif::all();



        $hasil = $data->sortByDesc('N_total');

        $rank = 1;
        $rankingData = $hasil->map(function ($item) use (&$rank) {
            $item->rank = $rank++;
            return $item;
        });

        $pdf = PDF::loadview('pages.hasil.print', ['hasil' => $hasil]);
        return $pdf->stream();
    }

}
