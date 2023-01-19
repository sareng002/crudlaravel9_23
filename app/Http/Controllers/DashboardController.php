<?php

namespace App\Http\Controllers;

use App\Models\tb_penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $tb_penduduk = tb_penduduk::all()->count();
        $jumlahlk = tb_penduduk::where('kelamin', 'laki-laki')->count();
        $jumlahpr = tb_penduduk::where('kelamin', 'Perempuan')->count();
        $jumlahkk = tb_penduduk::where('shdk', 'Kepala Keluarga')->count();
        $jumlahkk = tb_penduduk::where('shdk', 'Kepala Keluarga')->count();

        // hitung per alamat
        $kk = tb_penduduk::select(DB::raw('alamat, count(alamat) as alamat_jumlah'))->groupby('alamat')->orderby('alamat', 'asc')->get();
        $kkket = [];
        $kkjum = [];
        foreach ($kk as $jumkk) {
            $kkket[] = $jumkk->alamat;
            $kkjum[] = $jumkk->alamat_jumlah;
        }

        // hitung per agama
        $setagama = tb_penduduk::select(DB::raw('agama, count(agama) as jumlah_agama'))->groupby('agama')->orderby('agama', 'asc')->get();
        $agmket = [];
        $agmjum = [];
        foreach ($setagama as $jumagm) {
            $agmket[] = $jumagm->agama;
            $agmjum[] = $jumagm->jumlah_agama;
        }

        // dd($agmket);
        return \view('/dashboard')->with(
            [
                'tb_penduduk' => $tb_penduduk,
                'jumlahlk' => $jumlahlk,
                'jumlahpr' => $jumlahpr,
                'jumlahkk' => $jumlahkk,
                'kkket' => $kkket,
                'kkjum' => $kkjum,
                'agmjum' => $agmjum,
                'agmket' => $agmket,
            ]);
    }
}
