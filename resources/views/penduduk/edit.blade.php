<x-mysidebar>

    <x-slot name="kopsidebar">
        <h2 class="font-semibold text-md">
            {{ __('Tambah Data') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-2xl h-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-600 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200 uppercase text-xl ">
                    Edit Data Penduduk Data Penduduk
                </div>
                {{-- action="/warga/{{ $wargamodel->id }}" method="POST" --}}
                <form action="/penduduk/{{ $tb_penduduk->id }}" method="Post">
                    @method('PUT')
                    @csrf
                    <div class="px-5 py-4 ">
                        <label for="nik" class="text-white py-8">nik</label>
                        <input type="text" id="nik" name="nik" value="{{ old('nik', $tb_penduduk->nik) }}"
                            placeholder="Masukkan Nomor nik...."
                            class=" rounded-lg px-2 py-2 outline-none bg-red-200 focus:bg-yellow-50 text-sm w-full">
                    </div>
                    <div class="px-5 ">
                        <label for="nik" class="text-white">kk</label>
                        <input type="text" id="kk" name="kk" value="{{ $tb_penduduk->kk }}"
                            placeholder="Masukkan Nomor kk...."
                            class="rounded-lg px-2 py-2 outline-none bg-red-200 focus:bg-yellow-50 text-sm w-full">
                    </div>
                    <div class="px-5 py-2">
                        <label for="nik" class="text-white">nama</label>
                        <input type="text" id="nama" name="nama" value="{{ $tb_penduduk->nama }}"
                            placeholder="Masukkan Nama...."
                            class="rounded-lg px-2 py-2 outline-none bg-red-200 focus:bg-yellow-50 text-sm w-full">
                    </div>
                    <div class="px-5 py-2">
                        <label for="nik" class="text-white">jenis Kelamin</label>
                        <select name="kelamin" id="kelamin" class="bg-red-200 rounded-lg w-full text-slate-500">
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="">Pilih Jenis
                                Kelamin
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Laki-Laki"
                                @if ($tb_penduduk->kelamin == 'Laki-Laki') selected @endif>Laki-Laki
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Perempuan"
                                @if ($tb_penduduk->kelamin == 'Perempuan') selected @endif>Perempuan
                            </option>
                        </select>
                    </div>
                    <div class="px-5 py-2">
                        <label for="nik" class="text-white">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir"
                            value="{{ $tb_penduduk->tempat_lahir}}"
                            placeholder="Masukkan
                            tempat Lahir...."
                            class="rounded-lg px-2 py-2 outline-none bg-red-200 focus:bg-yellow-50 text-sm w-full">
                    </div>
                    <div class="px-5 py-2">
                        <label for="nik" class="text-white">TanggalLahir</label>
                        <input type="text" id="tgl_lahir" name="tgl_lahir" value="{{old('tgl_lahir',($tb_penduduk->tgl_lahir)) }}"
                        placeholder="Masukkan Tanggal Lahir...."
                        class="rounded-lg px-2 py-2 outline-none bg-red-200 focus:bg-yellow-50 text-sm w-full text-slate-500">

                    {{-- <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{old('tgl_lahir',$tb_penduduk->tgl_lahir) }}"
                            placeholder="Masukkan Tanggal Lahir...."
                            class="rounded-lg px-2 py-2 outline-none bg-red-200 focus:bg-yellow-50 text-sm w-full text-slate-500"> --}}
                    </div>
                    <div class="px-5 py-2">
                        <label for="nik" class="text-white">Alamat</label>
                        <select name="alamat" id="alamat" class="bg-red-200 rounded-lg w-full text-slate-500">
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="">
                                Pilih Alamat
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Desa Barumanis Dusun 1"
                                @if ($tb_penduduk->alamat == 'Desa Barumanis Dusun 1') selected @endif>
                                Desa Barumanis Dusun 1
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Desa Barumanis Dusun 2"
                                @if ($tb_penduduk->alamat == 'Desa Barumanis Dusun 2') selected @endif>
                                Desa Barumanis Dusun 2
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Desa Barumanis Dusun 3"
                                @if ($tb_penduduk->alamat == 'Desa Barumanis Dusun 3') selected @endif>
                                Desa Barumanis Dusun 3
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Desa Barumanis Dusun 4"
                                @if ($tb_penduduk->alamat == 'Desa Barumanis Dusun 4') selected @endif>
                                Desa Barumanis Dusun 4
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Desa Barumanis Dusun 5"
                                @if ($tb_penduduk->alamat == 'Desa Barumanis Dusun 5') selected @endif>
                                Desa Barumanis Dusun 5
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Desa Barumanis Dusun 6"
                                @if ($tb_penduduk->alamat == 'Desa Barumanis Dusun 6') selected @endif>
                                Desa Barumanis Dusun 6
                            </option>
                        </select>
                    </div>
                    <div class="px-5 py-2">
                        <label for="nik" class="text-white">Agama</label>
                        <select name="agama" id="agama" class="bg-red-200 rounded-lg w-full text-slate-500">
                            <option class="bg-white border-spacing-0 rounded-lg w-full value=">
                                Pilih agama
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Islam"
                                @if ($tb_penduduk->agama == 'Islam') selected @endif>
                                islam
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Keristen"
                                @if ($tb_penduduk->agama == 'Keristen') selected @endif>
                                Keristen
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Hindu"
                                @if ($tb_penduduk->agama == 'Hindu') selected @endif>
                                Hindu
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Budha"
                                @if ($tb_penduduk->agama == 'Budha') selected @endif>
                                Budha
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Kerohanian Sapta Darma"
                                @if ($tb_penduduk->agama == 'Kerohanian Sapta Darma') selected @endif>
                                Kerohanian Sapta Darma
                            </option>
                        </select>
                    </div>
                    <div class="px-5 py-2">
                        <label for="nik" class="text-white">Pekerjaan</label>
                        <select name="pekerjaan" id="pekerjaan" class="bg-red-200 rounded-lg w-full text-slate-500">
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="">
                                Pilih pekeraan
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Petani/Pekebun"
                                @if ($tb_penduduk->pekerjaan == 'Petani/Pekebun') selected @endif>
                                Petani/Pekebun
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Pedagang"
                                @if ($tb_penduduk->pekerjaan == 'Pedagang') selected @endif>
                                Pedagang
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Ibu Rumah Tangga"
                                @if ($tb_penduduk->pekerjaan == 'Ibu Rumah Tangga') selected @endif>
                                Ibu Rumah Tangga
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Buruh Tani"
                                @if ($tb_penduduk->pekerjaan == 'Buruh Tani') selected @endif>
                                BuruhTani
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Wiraswasta"
                                @if ($tb_penduduk->pekerjaan == 'Wiraswasta') selected @endif>
                                Wiraswasta
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Pelajar"
                                @if ($tb_penduduk->pekerjaan == 'Pelajar') selected @endif>
                                Pelajar
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="PNS"
                                @if ($tb_penduduk->pekerjaan == 'PNS') selected @endif>
                                PNS
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="TNI"
                                @if ($tb_penduduk->pekerjaan == 'TNI') selected @endif>
                                TNI
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="POLRI"
                                @if ($tb_penduduk->pekerjaan == 'POLRI') selected @endif>
                                POLRI
                            </option>
                        </select>
                    </div>
                    <div class="px-5 py-2">
                        <label for="nik" class="text-white">Pendidikan</label>
                        <select name="pendidikan" id="pendidikan"
                            class="bg-red-200 rounded-lg w-full text-slate-500">
                            <option class="bg-white border-spacing-0 rounded-lg w-full value=">
                                Pilih Pendidikan
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Tidak Tamat SD"
                                @if ($tb_penduduk->pendidikan == 'Tidak Tamat SD') selected @endif>
                                Tidak Tamat SD
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="sd"
                                @if ($tb_penduduk->pendidikan == 'sd') selected @endif>
                                SD
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="SMP"
                                @if ($tb_penduduk->pendidikan == 'SMP') selected @endif>
                                SMP
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="SMA"
                                @if ($tb_penduduk->pendidikan == 'SMA') selected @endif>
                                SMA
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="D1"
                                @if ($tb_penduduk->pendidikan == 'D1') selected @endif>
                                D1
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="D2"
                                @if ($tb_penduduk->pendidikan == 'D2') selected @endif>
                                D2
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="D3"
                                @if ($tb_penduduk->pendidikan == 'D3') selected @endif>
                                D3
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="S1"
                                @if ($tb_penduduk->pendidikan == 'S1') selected @endif>
                                S1
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="S2"
                                @if ($tb_penduduk->pendidikan == 'S2') selected @endif>
                                S2
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="S3"
                                @if ($tb_penduduk->pendidikan == 'S3') selected @endif>
                                S3
                            </option>
                        </select>
                    </div>
                    <div class="px-5 py-2">
                        <label for="nik" class="text-white">Status Hubungan Dalam Keluarga</label>
                        <select name="shdk" id="shdk" class="bg-red-200 rounded-lg w-full text-slate-500">
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="">
                                Pilih shdk
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Kepala Keluarga"
                                @if ($tb_penduduk->shdk == 'Kepala Keluarga') selected @endif>
                                Kepala Keluarga
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Istri"
                                @if ($tb_penduduk->shdk == 'Istri') selected @endif>
                                Istri
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Anak"
                                @if ($tb_penduduk->shdk == 'Anak') selected @endif>
                                Anak
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Orang Tua"
                                @if ($tb_penduduk->shdk == 'Orang Tua') selected @endif>
                                Orang Tua
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Lain nya"
                                @if ($tb_penduduk->shdk == 'Lain nya') selected @endif>
                                Lain nya
                            </option>

                        </select>
                    </div>
                    <div class="px-5 py-2">
                        <label for="nik" class="text-white">Jenis Rumah</label>
                        <select name="jenis_rumah" id="jenis_rumah"
                            class="bg-red-200 rounded-lg w-full text-slate-800">
                            <option class="bg-white border-spacing-0 rounded-lg w-full value=">
                                Pilih jenis Rumah
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Permanen"
                                @if ($tb_penduduk->jenis_rumah == 'Permanen') selected @endif>
                                Permanen
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Semi Permanen"
                                @if ($tb_penduduk->jenis_rumah == 'Semi Permanen') selected @endif>
                                Semi Permanen
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Papan"
                                @if ($tb_penduduk->jenis_rumah == 'Papan') selected @endif>
                                Kayu
                            </option>
                            <option class="bg-white border-spacing-0 rounded-lg w-full" value="Lainnya"
                                @if ($tb_penduduk->jenis_rumah == 'Lainnya') selected @endif>
                                Lainnya
                            </option>

                        </select>
                    </div>
                    <div class="flex items-center justify-end px-5 py-4 ">
                        <button type="submit"
                            class="px-4 py-2 text-slate-100 ring-2 ring-slate-100 rounded-lg bg-indigo-600 text-center font-semibold text-lg shadow-lg hover:bg-indigo-800">
                            Update
                        </button>
                    </div>
                </form>

                {{-- <script>
                    document.getElementById('tgl_lahir').addEventListener('input', function (e) {
                      let newValue = e.target.value.split('-').reverse().join('/');
                      e.target.value = newValue;
                    });
                  </script> --}}
            </div>

        </div>
    </div>
</x-mysidebar>
