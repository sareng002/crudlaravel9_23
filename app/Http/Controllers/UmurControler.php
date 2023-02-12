<?php

namespace App\Http\Controllers;

use App\Models\tb_rens_umur;
use App\Models\tb_rens_umur_lk;
use App\Models\tb_rens_umur_pr;
use App\Models\tb_umur;
use Illuminate\Http\Request;

class UmurControler extends Controller
{
    public function index(Request $request)
    {
        $i = 1;
        // $usiaall = tb_rens_umur::latest()->paginate(5);
        // dd($usiaall);
        $dataumur = tb_umur::paginate(10);

        return view('penduduk.dataumur')->with([
            'dataumur' => $dataumur,
            'i' => $i,
        ]);
    }
    public function rekap()
    {
    $i=1;
    $rekapumur=tb_rens_umur::all();
    $rekapumurlk=tb_rens_umur_lk::all();
    $rekapumurpr=tb_rens_umur_pr::all();

    return
    view('penduduk.rekap_usia')->with(['rekapumur'=>$rekapumur,'rekapumurlk'=>$rekapumurlk,'rekapumurpr'=>$rekapumurpr,"i"=>$i,
    ]);
    }
}