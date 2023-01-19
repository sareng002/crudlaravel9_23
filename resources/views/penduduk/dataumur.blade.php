<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('data Usia') }}
        </h2>
    </x-slot>

    <div class="min-h-screen  bg-slate-900">

        <div class="container mx-auto">


            {{-- TAMPILAN MODE LAPTOP/PC --}}
            <div class="overflow-auto shadow hidden  sm:block px-8 py-8 lg:px-4  text-slate-100">
                <table class="table-auto w-full">
                    <tr>
                        <th class=" border-t border-r border-l border-slate-600 text-sm p-1">Nomor</th>
                        <th class=" border-t border-r border-slate-600 text-sm p-1">kk</th>
                        <th class=" border-t border-r border-slate-600 text-sm p-1">nik</th>
                        <th class=" border-t border-r border-slate-600 text-sm p-1">nama</th>
                        <th class=" border-t border-r border-slate-600 text-sm p-1">tanggal Lahir</th>
                        <th class=" border-t border-r border-slate-600 text-sm p-1">Usia</th>
                        <th class=" border-t border-r border-slate-600 text-sm p-1">Jenis Kelamin</th>
                        <th class=" border-t border-r border-slate-600 text-sm p-1">Alamat</th>
                    </tr>

                    {{-- kode loping data gaya baru --}}

                    @forelse ($dataumur as $umur)
                        <tr>
                            <td class=" border-t border-b border-r border-l border-slate-600 text-sm p-1">
                                {{ $i++ }}
                            </td>
                            <td class=" border-t border-r  border-b border-slate-600 text-sm p-1">{{ $umur->kk }}
                            </td>
                            <td class=" border-t border-r  border-b border-slate-600 text-sm p-1">{{ $umur->nik }}
                            </td>
                            <td class=" border-t border-r  border-b border-slate-600 text-sm p-1">{{ $umur->nama }}
                            </td>
                            <td class=" border-t border-r  border-b border-slate-600 text-sm p-1">{{ $umur->tgl_lahir }}
                            </td>
                            <td class=" border-t border-r  border-b border-slate-600 text-sm p-1">{{ $umur->usia }}
                            </td>
                            <td class=" border-t border-r  border-b border-slate-600 text-sm p-1">{{ $umur->kelamin }}
                            </td>
                            <td class=" border-t border-r border-b border-slate-600 text-sm p-1">{{ $umur->alamat }}
                            </td>

                        </tr>
                    @empty
                        <div class="p-2 lg:p-4 shadow-lg shadow-slate-200 w-1/3 bg-rose-500 rounded-lg items-center">
                            <p class="p-2 text-slate-200 font-semibold">Maaf Data tidak ditemukan</p>
                        </div>
                    @endforelse
                </table>
                <div class="py-8">
                    <div class="p-1 rounded-md bg-slate-300 mt-2 ">
                        {{ $dataumur->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Tampilan Mode mobail --}}
    <div class="md:hidden bg-gray-800 p-2">

        {{-- LUPING DATA --}}

        @forelse ($dataumur as $ul)
            {{ $i++ }}
        @empty
            <div class="p-2 lg:p-4 shadow-lg shadow-slate-200 w-full lg:w-1/3 bg-rose-500 rounded-lg items-center">
                <p class="p-2 items-center text-slate-200 font-semibold">
                    Maaaf Data Tidak Ditemukan
                </p>
            </div>
        @endforelse

    </div>
    {{-- ahir tampilan Mode mobail --}}

</x-app-layout>
