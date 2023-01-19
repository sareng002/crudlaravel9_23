<x-guest-layout>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-4 bg-slate-700 ">

        <div class="bg-slate-200 rounded-lg px-4 py-2">
            <div class="p-4 text-sm">
                <p class="font-semibold uppercase pb-4 ">Pesan Konfirmasi</p>
                <p class="text-xs">Anda Akan Menghapus Data ......!</p>
                <p class="text-xs">Nama: {{ $tb_penduduk->nama }}</p>
                <p class="text-xs">No NIK: {{ $tb_penduduk->nik }}</p>
            </div>
            <form action="/penduduk/{{ $tb_penduduk->id }}" method="POST" class="w-full text-xs">
                @csrf
                @method('delete')
                <div class="flex  items-center justify-end ">
                    <button
                        class="flex items-center bg-rose-700 px-4 py-2 rounded-md ring-2 ring-slate-50 hover:bg-red-200 hover:text-slate-900 text-slate-100">
                        <x-logo-hapus />
                        OK
                    </button>
                    <div class="px-4 py-2">
                        <a href="/penduduk"
                            class="inline-flex justify-center  px-4 py-2 ring-2 ring-slate-500 text-white bg-slate-800 rounded hover:bg-gray-600 shadow-lg shadow-slate-50">
                            Batal
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>





</x-guest-layout>
