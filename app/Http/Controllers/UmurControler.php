<?php

namespace App\Http\Controllers;

use App\Models\tb_rens_umur;
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
}
