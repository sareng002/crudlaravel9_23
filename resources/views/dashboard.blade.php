<x-app-layout>
    <div class="min-h-screen bg-slate-700">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="lg:py-4 py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 lg:p-4 bg-white border-b border-gray-200">
                        <div class="px-2 py-4 rounded-lg">
                            {{-- data Desa --}}
                            <div class="p-4 bg-slate-200 mb-6 rounded-lg shadow-lg shadow-slate-500">
                                <p class="font-semibold text-sm lg:text-xl uppercase py-2 text-slate-600">
                                    Jumlah Data Penduduk Desa
                                </p>
                                <div class="text-sm lg:text-base">
                                    <table>
                                        <tr>
                                            <td>Jumlah Penduduk</td>
                                            <td class="px-4 lg:px-12">:</td>
                                            <td class="flex justify-end">{{ $tb_penduduk }} Jiwa</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Laki-Laki</td>
                                            <td class="px-4 lg:px-12">:</td>
                                            <td class="flex justify-end">{{ $jumlahlk }} Jiwa</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Perempuan</td>
                                            <td class="px-4 lg:px-12">:</td>
                                            <td class="flex justify-end">{{ $jumlahpr }} Jiwa</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Kepala Keluarga</td>
                                            <td class="px-4 lg:px-12">:</td>
                                            <td class="flex justify-end">{{ $jumlahkk }} Jiwa</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- data Dusun --}}
                            <div class="p-4 items-center bg-slate-200 rounded-lg mb-6 shadow-lg shadow-slate-700">
                                <p class="uppercase text-slate-600 text-sm lg:text-xl font-semibold">
                                    Jumlah penduduk Dusun
                                </p>
                                <div class="flex text-sm lg:text-base">
                                    <div class="flex">
                                        <table>
                                            <th>
                                                @foreach ($kkket as $ketalamat)
                                                    <tr>
                                                        <td class="flex">{{ $ketalamat }}</td>
                                                        <td class="px-4 lg:px-8">:</td>
                                                    </tr>
                                                @endforeach
                                            </th>
                                        </table>
                                    </div>
                                    <div class="flex">
                                        <table>
                                            <th>
                                                @foreach ($kkjum as $kkl)
                                                    <tr>
                                                        <td class="flex justify-end">{{ $kkl }} Jiwa</td>
                                                    </tr>
                                                @endforeach
                                            </th>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- agama --}}
                            <div class=" bg-slate-200 rounded-lg shadow-lg shadow-slate-700 p-4">
                                <p class="uppercase text-slate-600 text-sm lg:text-xl font-semibold">
                                    Jumlah Data Penduduk Menurut Agama
                                </p>
                                <div class="flex text-sm  lg:text-base">
                                    <div class="flex">
                                        <table>
                                            <th>
                                                @foreach ($agmket as $ket)
                                                    <tr>
                                                        <td class="flex"> Agama {{ $ket }}</td>
                                                        <td class="px-2">:</td>
                                                    </tr>
                                                @endforeach
                                            </th>
                                        </table>
                                    </div>
                                    <div class="flex">
                                        <table>
                                            <th>
                                                @foreach ($agmjum as $item)
                                                    <tr>
                                                        <td class="flex justify-end">{{ $item }} Jiwa</td>
                                                    </tr>
                                                @endforeach
                                            </th>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
