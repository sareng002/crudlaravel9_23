{{-- ambil Templet Dari componen App --}}
<x-app-layout>
    {{-- hider aplikasi --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Penduduk') }}
        </h2>
    </x-slot>

    {{-- pesan error yang di kirim dari controller --}}
    @if (session()->has('berhasil'))
        <x-alert titel="{{ session('berhasil') }}" />
    @endif
    @if (session()->has('hapus'))
        <x-alert titel="{{ session('hapus') }}" />
    @endif
    @if (session()->has('update'))
        <x-alert titel="{{ session('update') }}" />
    @endif

    {{-- konten yang di tampilkan --}}
    <div class="lg:container lg:mx-auto w-full">
        <div class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
                <div class="bg-slate-900 text-slate-100 overflow-hidden shadow-sm sm:rounded-lg py-2">
                    <div class="px-4 py-2  uppercase">
                        Data Penduduk Desa Barumanis Tahun 2023
                    </div>

                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between  px-4 py-2">
                        <div class="w-full flex  lg:flex-row lg:items-center ">
                            <form action="" method="get"
                                class="flex w-full  lg:flex-row items-center justify-start">
                                <div class="flex  lg:flex-row">
                                    <input type="text"
                                        class="lg:w-96 bg-slate-900 hover:bg-slate-700 lg-mb-0 lg:mt-0  rounded-lg shadow-md ring-2 ring-white shadow-slate-100  text-sm justify-between px-2 py-1"
                                        name="cari" placeholder="cari data..." value="{{ $request->cari }}">
                                </div>
                                <div class="flex lg:flex-row">
                                    <button type="submit"
                                        class="outline-none rounded-lg px-2 py-1 items-center hover:text-green-600">
                                        <x-logo-cari></x-logo-cari>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- TAMPILAN MODE LAPTOP/PC --}}
                    <div class="overflow-auto shadow hidden sm:block px-2 lg:px-4 bg-slate-900 text-slate-100">
                        <table class="table-auto w-full mt-2">
                            <tr>
                                <th class="border-b text-xs lg:text-sm border-r border-l border-t p-1 bg-gray-400">
                                    No
                                </th>
                                <th class="border-b text-xs lg:text-sm border-r border-l border-t p-1 bg-gray-400">
                                    NIK</th>
                                <th class="border-b text-xs lg:text-sm border-r border-l border-t p-1 bg-gray-400">
                                    KK</th>
                                <th class="border-b text-xs  lg:text-sm border-r border-l border-t p-1 bg-gray-400">
                                    NAMA</th>
                                <th class="border-b text-xs lg:text-sm border-r border-l border-t p-1 bg-gray-400">
                                    JENIS KELAMIN</th>
                                <th class="border-b text-xs lg:text-sm border-r border-l border-t p-1 bg-gray-400">
                                    ALAMAT
                                </th>
                                <th
                                    class="border-b text-xs lg:text-sm border-r border-l border-t p-1 bg-gray-400 uppercase">
                                    Aksi
                                </th>
                            </tr>

                            {{-- kode loping data gaya baru --}}
                            @php
                                $i = 1;
                            @endphp
                            @forelse ($tb_penduduk as $list)
                                <tr>
                                    <td class="w-10 border-b  border-r border-l border-t p-1 text-xs lg:text-sm">
                                        {{ $i++ }}
                                    </td>
                                    <td class=" w-10 border-b  border-r border-l border-t p-1 text-xs lg:text-sm">
                                        {{ $list->nik }}
                                    </td>
                                    <td class="border-b  border-r border-l border-t p-1 text-xs lg:text-sm">
                                        {{ $list->kk }}
                                    </td>
                                    <td class="border-b  border-r border-l border-t p-1 text-xs lg:text-sm">
                                        {{ $list->nama }}
                                    </td>
                                    <td class="w-20 md:w-5 border-b  border-r border-l border-t p-1 text-xs lg:text-sm">
                                        {{ $list->kelamin }}
                                    </td>
                                    <td class=" border-b  border-l border-t p-1 text-xs lg:text-sm">
                                        {{ $list->alamat }}
                                    </td>

                                    <td
                                        class="flex flex-col lg:flex-row items-center justify-between  border-b  border-r border-l border-t p-1 lg:py-2 md:py-4 text-xs lg:text-sm">
                                        <div class="flex items-center">
                                            <div class="px-2">
                                                <a class="flex flex-col lg:flex-row px-2 py-1 bg-indigo-700 ring-2 ring-white shadow-slate-200 text-xs lg:text-sm rounded-lg shadow-lg hover:bg-indigo-200 hover:text-slate-900"
                                                    href="/penduduk/{{ $list->id }}/detail">
                                                    {{-- Lihat Detail --}}
                                                    <x-logo-lihat></x-logo-lihat>
                                                </a>

                                            </div>
                                            <div class=" flex flex-col lg:flex-row items-center px-1">
                                                <a href="/create"
                                                    class="flex flex-col lg:flex-row items-center bg-green-600 rounded-lg shadow-lg p-1 lg:px-2 lg:py-1 ring-white hover:bg-green-100 hover:text-slate-800 ring-2 lg:text-xs  text-xs">

                                                    <x-logo-tamba>

                                                    </x-logo-tamba>
                                                    {{-- Tambah Data --}}
                                                </a>
                                            </div>
                                            <div class="px-1 flex items-center">
                                                <a class="flex flex-col lg:flex-row px-2 py-1 bg-yellow-800 ring-2 ring-white text-xs lg:text-sm items-center rounded-lg shadow-lg hover:bg-yellow-100 hover:text-slate-900"
                                                    href="/penduduk/{{ $list->id }}/edit">
                                                    {{-- Edit --}}
                                                    <x-logo-edit></x-logo-edit>
                                                </a>
                                            </div>
                                            <div class="flex flex-col lg:flex-row item px-2 py-1">
                                                <a href="/penduduk/{{ $list->id }}/hapus"
                                                    class="rounded-lg ring-2 ring-white shadow-lg shadow-white px-2 py-1 bg-rose-700 hover:bg-rose-400">
                                                    <x-logo-hapus />
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <div
                                    class="p-2 lg:p-4 shadow-lg shadow-slate-200 w-1/3 bg-rose-500 rounded-lg items-center">
                                    <p class="p-2 text-slate-200 font-semibold">Maaf Data tidak ditemukan</p>
                                </div>
                            @endforelse
                        </table>
                        <div class="p-2 rounded-md bg-slate-300 mt-2 ">
                            {{ $tb_penduduk->links() }}
                        </div>
                    </div>

                    {{-- Tampilan Mode mobail --}}
                    <div class="md:hidden bg-gray-800 p-2">

                        {{-- LUPING DATA --}}
                        @php
                            $j = 1;
                        @endphp
                        @forelse ($tb_penduduk as $ul)
                            <div class="bg-slate-600 md:p-4 rounded-lg shadow-lg mb-2">

                                <p class="text-xs px-4 py-1">NO : {{ $j++ }}</p>
                                <p class="text-xs px-4 py-1">NIK : {{ $ul->nik }}</p>
                                <p class="text-xs px-4 py-1">KK : {{ $ul->kk }}</p>
                                <p class="text-xs px-4 py-1">NAMA : {{ $ul->nama }}</p>
                                <p class="text-xs px-4 py-1">JENIS KELAMIN : {{ $ul->kelamin }}</p>
                                <p class="text-xs px-4 py-1">ALAMAT : {{ $ul->alamat }}</p>

                                <p class="text-xs px-4 py-1 border-t-2 border-slate-500 mt-2">
                                <div class="flex items-center justify-end p-2">
                                    <div class="flex items-center">
                                        <div class="px-1">
                                            <a class="flex flex-col lg:flex-row px-2 py-1 bg-indigo-700 ring-2 ring-white shadow-slate-200 text-xs lg:text-sm rounded-lg shadow-lg hover:bg-indigo-200 hover:text-slate-900"
                                                href="/penduduk/{{ $list->id }}/detail">
                                                {{-- Lihat Detail --}}
                                                <x-logo-lihat />
                                            </a>

                                        </div>
                                        <div class="px-1">
                                            <a href="/create"
                                                class="flex flex-col lg:flex-row items-center bg-green-600 rounded-lg shadow-lg p-1 lg:px-2 lg:py-1 ring-white hover:bg-green-100 hover:text-slate-800 ring-2 lg:text-xs  text-xs">

                                                <x-logo-tamba />
                                                {{-- Tambah Data --}}
                                            </a>
                                        </div>
                                        <div class="px-1">
                                            <a class="flex flex-col lg:flex-row px-2 py-1 bg-yellow-800 ring-2 ring-white text-xs lg:text-sm rounded-lg shadow-lg hover:bg-yellow-100 hover:text-slate-900"
                                                href="/penduduk/{{ $list->id }}/edit">
                                                {{-- Edit --}}
                                                <x-logo-edit />
                                            </a>
                                        </div>
                                        <div class="px-1">
                                            <a href="/penduduk/{{ $list->id }}/hapus"
                                                class="flex flex-col lg:flex-row px-2 py-1 rounded-lg ring-2 ring-white shadow-lg shadow-white  bg-rose-700 hover:bg-rose-400">
                                                <x-logo-hapus />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </p>
                            </div>
                        @empty
                            <div
                                class="p-2 lg:p-4 shadow-lg shadow-slate-200 w-full lg:w-1/3 bg-rose-500 rounded-lg items-center">
                                <p class="p-2 items-center text-slate-200 font-semibold">
                                    Maaaf Data Tidak Ditemukan
                                </p>
                            </div>
                        @endforelse

                    </div>
                    {{-- ahir tampilan Mode mobail --}}
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center mb-2 px-4 text-xs lg:hidden">
        {{-- mengatur nafigasi Halaman --}}
        {{ $tb_penduduk->links() }}
    </div>
    {{-- ahir konten --}}
</x-app-layout>
