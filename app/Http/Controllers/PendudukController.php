<?php

namespace App\Http\Controllers;

// use App\Models\tb_umur;
use App\Models\opction;
use App\Models\tb_penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index(Request $request)
    {
        $tb_penduduk = tb_penduduk::latest()->filter(request(['cari']))->paginate(5)->withQueryString();

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

    public function update($id, Request $request)
    {
        $tb_penduduk = tb_penduduk::find($id);
        $tb_penduduk->update($request->except(['_token']));

        return redirect('/penduduk')->with('update', 'databerhasil di Update');
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
}
