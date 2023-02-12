<?php

namespace App\Http\Controllers;

// use App\Models\tb_umur;
use App\Models\opction;
use App\Models\tb_penduduk;
use Illuminate\Http\Request;
use DateTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
{
    public function index(Request $request)
    {
        $tb_penduduk = tb_penduduk::latest()->filter(request(['cari']))->paginate(100)->withQueryString();

        //  menampilkan Data Di Halaman Html
        return \view('penduduk.index', compact(['tb_penduduk', 'request']));
    }

    public function create()
    {
        return \view('penduduk.create', [
            'opctions' => opction::all(),
        ]);
    }

    public function store(Request $request)
    {
        // validasi data
        $validasidata = $request->validate([
            'nik' => 'required|max:16|min:16|unique:tb_penduduk',
            'kk' => 'required|max:16|min:16|',
            'nama' => 'required',
            'kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required',
            'shdk' => 'required',
            'jenis_rumah' => 'required',

        ]);
    //    $request->session()->flash('berhasil','databerhasil di simpan');
        // dd($request->except(['_token']));
        tb_penduduk::create($validasidata);

        return \redirect('/penduduk')->with('berhasil', 'databer hasil di simpan');
    }

    public function edit($id)
    {
        // dd($id);
        $tb_penduduk = tb_penduduk::find($id);
        // dd($tb_penduduk);
        return \view('penduduk.edit', \compact(['tb_penduduk']));
    }
    public function lihat($id)
    {
        // dd($id);
        $tb_penduduk = tb_penduduk::find($id);
        // dd($tb_penduduk);
        return \view('penduduk.index', \compact(['tb_penduduk']));
        }

public function update($id, Request $request){

$tb_penduduk = tb_penduduk::find($id);
// Konversi format tanggal
$date = Carbon::createFromFormat('Y-m-d H:i:s', $request->tgl_lahir);
if ($date) {
$tb_penduduk->nik = $request->nik;
$tb_penduduk->kk = $request->kk;
$tb_penduduk->nama = $request->nama;
$tb_penduduk->kelamin = $request->kelamin;
$tb_penduduk->tempat_lahir = $request->tempat_lahir;
$tb_penduduk->tgl_lahir = $date;
$tb_penduduk->alamat = $request->alamat;
$tb_penduduk->agama = $request->agama;
$tb_penduduk->pekerjaan = $request->pekerjaan;
$tb_penduduk->pendidikan = $request->pendidikan;
$tb_penduduk->shdk = $request->shdk;
$tb_penduduk->jenis_rumah = $request->jenis_rumah;
$tb_penduduk->save();
return redirect('/penduduk')->with('update', 'Data berhasil di Update');
} else {
// Tampilkan error jika format tanggal tidak valid
return redirect()->back()->withErrors(['tgl_lahir' => 'Format tanggal tidak valid']);
}
}

    public function delet($id)
    {
        // dd($id);
        $tb_penduduk = tb_penduduk::find($id);
        // dd($tb_penduduk);
        return \view('penduduk.hapus', \compact(['tb_penduduk']));
    }

    public function destroy($id)
    {
        //destroy
        $tb_penduduk = tb_penduduk::find($id);
        $tb_penduduk->delete();

        return redirect('/penduduk')->with('hapus', 'databerhasil di hapus');
    }

    public function detail($id)
    {
        // dd($id);
        $tb_penduduk = tb_penduduk::find($id);
        // dd($tb_penduduk);
        return \view('penduduk.detail', \compact(['tb_penduduk']));
    }
    public function dusun()
    {
    $tb_penduduk = tb_penduduk::all()->count();
    $jumlahlk = tb_penduduk::where('kelamin', 'laki-laki')->count();
    $jumlahpr = tb_penduduk::where('kelamin', 'Perempuan')->count();
    $jumlahkk = tb_penduduk::where('shdk', 'Kepala Keluarga')->count();
    $jumlahkk = tb_penduduk::where('shdk', 'Kepala Keluarga')->count();

    // hitung per alamat
    $kk = tb_penduduk::select(DB::raw('alamat, count(alamat) as alamat_jumlah'))->groupby('alamat')->orderby('alamat',
    'asc')->get();
    $kkket = [];
    $kkjum = [];
    foreach ($kk as $jumkk) {
    $kkket[] = $jumkk->alamat;
    $kkjum[] = $jumkk->alamat_jumlah;
    }

    // hitung per agama
    $setagama = tb_penduduk::select(DB::raw('agama, count(agama) as
    jumlah_agama'))->groupby('agama')->orderby('agama',
    'asc')->get();
    $agmket = [];
    $agmjum = [];
    foreach ($setagama as $jumagm) {
    $agmket[] = $jumagm->agama;
    $agmjum[] = $jumagm->jumlah_agama;
    }

    // dd($agmket);
    return \view('/penduduk.rekap_usia')->with(
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
