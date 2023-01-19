<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data') }}
        </h2>
    </x-slot>

    <div class="lg:py-6 py-2 rounded-lg">
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
                    <div class="mt-4 p-6 flex justify-end items-center rounded">
                        <a href="/penduduk"
                            class="flex items-center justify-end rounded-lg bg-blue-700 hover:bg-blue-400 text-white px-4 py-2">
                            <x-logo-kembali></x-logo-kembali>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
