<x-mysidebar>
    <x-slot name="kopsidebar">
        <h2 class="font-semibold text-md">
            {{ __('Detail Data') }}
        </h2>
    </x-slot>

    <div class="lg:py-4 py-2 rounded-lg">
        <div class="w-full lg:w-1/2 mx-auto sm:px-1 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg shadow-indigo-200 sm:rounded-lg p-4">
                <div
                    class="flex items-center p-1 lg:p-6 bg-indigo-600 rounded-lg border-b border-rose-600 shadow-xl text-slate-50 font-semibold uppercase">
                    Rincian Data Penduduk Personal
                </div>

                <div class=" items-center  mt-6 mb-4 text-sm lg:text-md">
                    <form action="/penduduk/{{ $tb_penduduk->id }}" method="Post">
                        <table class="lg:mx-4">
                            <tr>
                                <td class="px-2">no</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->id }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">nik</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->nik }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">kk</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->kk }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">nama</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->nama }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">Jenis Kelamin</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->kelamin }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">Tempat Lahir</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">Tempat Lahir</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->tgl_lahir->isoFormat('DD/MM/Y') }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">alamat</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->alamat }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">Agama</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->agama }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">Pekerjaan</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->pekerjaan }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">Pendidikan</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->pendidikan }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">Shdk</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->shdk }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">Jenis Rumah</td>
                                <td class="px-2">:</td>
                                <td class="px-2">{{ $tb_penduduk->jenis_rumah }}</td>
                            </tr>


                        </table>
                    </form>


                    <div class="flex justify-end items-center">
                        <x-mymodal text="Hapus">

                            <div class="text-slate-800 py-8">
                                <x-logo-warning/>
                                <div class="flex justify-center items-center">
                                    <p class="text-center text-sm uppercase font-semibold">
                                        konfirmasi Hapus Data
                                    </p>

                                </div>
                                <p class="text-center">
                                    apakah..? yakin akan menghapus
                                </p>
                                <p class="text-center uppercase">
                                    nama : {{ $tb_penduduk->nama }}
                                </p>
                            </div>

                            <form action="/penduduk/{{ $tb_penduduk->id }}" method="POST" class="w-full text-xs">
                                @csrf
                                @method('delete')
                                <div class="flex  items-center justify-end ">
                                    <div class="px-8">
                                        <button
                                        class="flex items-center bg-rose-700 px-4 py-2 rounded-md ring-2 ring-slate-50 hover:bg-red-200 hover:text-slate-900 text-slate-100">
                                        <x-logo-hapus />
                                        OK
                                    </button>
                                    </div>
                                    <div class="px-4 py-2">
                                        <a href="/penduduk"
                                            class="inline-flex justify-center  px-4 py-2 ring-2 ring-slate-500 text-white bg-slate-800 rounded hover:bg-gray-600 shadow-lg shadow-slate-50">
                                            Batal
                                        </a>
                                    </div>
                                </div>
                            </form>
                         </x-mymodal>
                        <a href="/penduduk"
                            class="flex items-center justify-end rounded-lg bg-blue-700 hover:bg-blue-400 text-white px-4 py-2">
                            <x-logo-kembali/> Kambali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-mysidebar>
