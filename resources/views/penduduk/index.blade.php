{{-- ambil Templet Dari componen App --}}
<x-mysidebar>
    {{-- hider aplikasi --}}
    <x-slot name="kopsidebar">
        <h2 class="font-semibold text-md text-gray-100 leading-tight">
            {{ __('Data Penduduk Desa Barumanis Tahun 2023') }}
        </h2>
    </x-slot>

    {{-- pesan error yang di kirim dari controller --}}
    @if (session()->has('berhasil'))
        {{-- <x-alert titel="{{ session('berhasil') }}" /> --}}
        <script>
            swal.fire("Sempurna!", "{{ session('berhasil') }}", "success");
        </script>
    @endif
    @if (session()->has('update'))

        <script>
            Swal.fire(
            "Update data",
            "{{ session ('update') }}",
            "success"
            )
        </script>

    @endif

    @if (session()->has('hapus'))
        <script>
            swal.fire("Sempurna!", "{{ session('hapus') }}", "success");
        </script>
    @endif
    @if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
        })
    </script>
    @endif
    {{-- konten yang di tampilkan --}}
    <div class="lg:container lg:mx-auto w-full">
        <div class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
                <div class="bg-slate-900 text-slate-100 overflow-hidden shadow-sm sm:rounded-lg py-2">
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
                        <table class="table-auto w-full mt-2 border border-slate-100">
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
                                    <td class="w-10 border p-1 text-xs lg:text-sm">
                                        {{ $i++ }}
                                    </td>
                                    <td class=" w-10 border p-1 text-xs lg:text-sm">
                                        {{ $list->nik }}
                                    </td>
                                    <td class="border p-1 text-xs lg:text-sm">
                                        {{ $list->kk }}
                                    </td>
                                    <td class="border p-1 text-xs lg:text-sm">
                                        {{ $list->nama }}
                                    </td>
                                    <td class="w-20 md:w-5 border p-1 text-xs lg:text-sm">
                                        {{ $list->kelamin }}
                                    </td>
                                    <td class=" border-b  border-l border-t p-1 text-xs lg:text-sm">
                                        {{ $list->alamat }}
                                    </td>

                                    <td
                                        class="flex flex-col lg:flex-row items-center justify-between  border p-1 lg:py-4 md:py-4 text-xs lg:text-sm">
                                        <div class="flex items-center">
                                            <div class="px-2">
                                                <a  class="flex flex-col lg:flex-row px-2 py-1 bg-indigo-700 ring-2 ring-white shadow-slate-200 text-xs lg:text-sm rounded-lg shadow-lg hover:bg-indigo-200 hover:text-slate-900"
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
                                                    <x-logo-edit>

                                                    </x-logo-edit>
                                                </a>
                                            </div>
                                            <div class="flex flex-col lg:flex-row item px-2 py-1">
                                                <a  href="#" id="btnDetail" class="text-slate-100 rounded-lg ring-2 ring-white shadow-lg shadow-white px-4 py-2 bg-rose-700 hover:bg-rose-400">
                                                    xt
                                                    <x-modal-detail >
                                                        {{ $list->nama }}
                                                    </x-modal-detail>
                                                    {{-- {{ $text }} --}}
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <script>
                                    swal.fire("Peringatan", "data tidak di temukan!", "warning");
                                </script>
                            @endforelse
                        </table>

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






    {{-- ahir konten --}}
    <x-slot name="footer">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ $tb_penduduk->links() }}
        </h2>
    </x-slot>

    <script>
        const detail=document.getElementById('detail');
        detail.onclick=function()
        {

            const { value: formValues } = await Swal.fire({
            title: 'Multiple inputs',
            html:
                '<input id="swal-input1" class="swal2-input">' +
                '<input id="swal-input2" class="swal2-input">',
            focusConfirm: false,
            preConfirm: () => {
                return [
                document.getElementById('swal-input1').value,
                document.getElementById('swal-input2').value
                ]
            }
            })

            if (formValues) {
            Swal.fire(JSON.stringify(formValues))
            }


        }
    </script>
</x-mysidebar>
