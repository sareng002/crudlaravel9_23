<x-app-layout>
    <div class="">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Penduduk') }}
            </h2>
        </x-slot>

        <div class="py-4 bg-slate-900">
            <div class="max-w-2xl h-full mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 bg-slate-200 border-b border-gray-200 uppercase text-xl">
                        <div class="bg-indigo-600 py-2 rounded-lg text-center font-semibold text-slate-200">
                            input Data Penduduk Data Penduduk
                        </div>
                    </div>
                    <div class="bg-slate-200">
                        <form action="/penduduk/store" method="Post">
                            @csrf
                            <div class="px-5 py-1 text-sm">
                                <x-sareng fild="nik" name="nik" type="text" label="Nomor Nik" maxlength="16"
                                    placeholder="masukan Nomor nik" />
                            </div>
                            <div class="px-5 py-1 text-sm">
                                <x-sareng fild="kk" name="kk" type="text" label="Nomor KK" maxlength="16"
                                    placeholder="masukan Nomor kk" />
                            </div>
                            <div class="px-5 py-1 text-sm">
                                <x-sareng fild="nama" name="nama" type="text" label="Nama" maxlength="100"
                                    placeholder="masukan Nama" />
                            </div>

                            <div class="px-5 py-2 text-sm">
                                <label for="kelamin" class="flex @error('kelamin') text-rose-500 @enderror">Jenis
                                    Kelamin
                                    @error('kelamin')
                                        <p class="flex text-sm text-rose-500 px-1">*{{ $message }}</p>
                                    @enderror
                                </label>
                                <select name="kelamin" id="kelamin" class="rounded-lg text-sm w-full text-slate-700 ">
                                    @foreach ($opctions as $opction)
                                        @if (old('kelamin') == $opction->jenis_kelamin)
                                            <option class="bg-white border-spacing-0 text-sm rounded-lg w-full"
                                                value="{{ $opction->jenis_kelamin }}" selected>
                                                {{ $opction->jenis_kelamin }}
                                            </option>
                                        @else
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->jenis_kelamin }}">
                                                {{ $opction->jenis_kelamin }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            {{-- tempat Lahir --}}
                            <div class="px-5 py-1 text-sm">
                                <x-sareng fild="tempat_lahir" name="tempat_lahir" type="text" label="Tempat lahir"
                                    maxlength="100" placeholder="masukan tempat Lahir" />
                            </div>
                            {{-- tgl lahir --}}
                            <div class="px-5 py-1 text-sm">
                                <x-sareng fild="tgl_lahir" name="tgl_lahir" type="date" label="Tanggal Lahir"
                                    maxlength="10" placeholder="masukan tgl Lahir" />
                            </div>
                            <div class="px-5 py-1 text-sm">
                                <label for="alamat" class="flex  @error('alamat') text-rose-500 @enderror">Alamat
                                    @error('alamat')
                                        <p class="flex text-rose-500 px-1"> * {{ $message }}</p>
                                    @enderror
                                </label>
                                <select name="alamat" id="alamat" class="text-sm rounded-lg w-full text-slate-500">
                                    @foreach ($opctions as $opction)
                                        @if (old('alamat') == $opction->alamat)
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->alamat }}" selected>
                                                {{ $opction->alamat }}
                                            </option>
                                        @else
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->alamat }}">
                                                {{ $opction->alamat }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="px-5 py-2 text-sm">
                                <label for="agama" class="flex @error('agama') text-rose-500 @enderror">Agama
                                    @error('agama')
                                        <p class="flex text-rose-500 px-1"> * {{ $message }}</p>
                                    @enderror
                                </label>
                                <select name="agama" id="agama" class=" text-sm rounded-lg w-full text-slate-500">
                                    @foreach ($opctions as $opction)
                                        @if (old('agama') == $opction->agama)
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->agama }}" selected>
                                                {{ $opction->agama }}
                                            </option>
                                        @else
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->agama }}">
                                                {{ $opction->agama }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            {{-- pekerjaan --}}
                            <div class="px-5 py-2 text-sm">
                                <label for="pekerjaan"
                                    class="flex @error('pekerjaan') text-rose-500 @enderror">Pekerjaan
                                    @error('pekerjaan')
                                        <p class="flex text-rose-500 px-1">{{ $message }}</p>
                                    @enderror
                                </label>
                                <select name="pekerjaan" id="pekerjaan"
                                    class=" text-sm rounded-lg w-full text-slate-500">
                                    @foreach ($opctions as $opction)
                                        @if (old('pekerjaan') == $opction->pekerjaan)
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->pekerjaan }}" selected>
                                                {{ $opction->pekerjaan }}
                                            </option>
                                        @else
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->pekerjaan }}">
                                                {{ $opction->pekerjaan }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            {{-- Pendidikan --}}
                            <div class="px-5 py-2 text-sm">
                                <label for="pendidikan"
                                    class="flex @error('pendidikan') text-rose-500 @enderror">Pendidikan
                                    @error('pendidikan')
                                        <p class="flex text-rose-500 px-1"> * {{ $message }}</p>
                                    @enderror
                                </label>
                                <select name="pendidikan" id="pendidikan"
                                    class=" text-sm rounded-lg w-full text-slate-500">
                                    @foreach ($opctions as $opction)
                                        @if (old('pendidikan') == $opction->pendidikan)
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->pendidikan }}" selected>
                                                {{ $opction->pendidikan }}
                                            </option>
                                        @else
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->pendidikan }}">
                                                {{ $opction->pendidikan }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            {{-- shdk --}}

                            <div class="px-5 py-2 text-sm">
                                <label for="shdk" class="flex @error('shdk') text-rose-500 @enderror">SHDK
                                    @error('shdk')
                                        <p class="flex text-rose-500 px-1"> * {{ $message }}</p>
                                    @enderror
                                </label>
                                <select name="shdk" id="shdk"
                                    class=" text-sm rounded-lg w-full text-slate-500">
                                    @foreach ($opctions as $opction)
                                        @if (old('shdk') == $opction->shdk)
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->shdk }}" selected>
                                                {{ $opction->shdk }}
                                            </option>
                                        @else
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->shdk }}">
                                                {{ $opction->shdk }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            {{-- jenis_rumah --}}
                            <div class="px-5 py-2 text-sm">
                                <label for="jenis_rumah"
                                    class="flex @error('jenis_rumah') text-rose-500 @enderror">Jenis Rumah
                                    @error('jenis_rumah')
                                        <p class="flex text-rose-500 lg:text-sm text-xs px-1"> * {{ $message }}</p>
                                    @enderror
                                </label>
                                <select name="jenis_rumah" id="jenis_rumah"
                                    class=" text-sm rounded-lg w-full text-slate-500">
                                    @foreach ($opctions as $opction)
                                        @if (old('jenis_rumah') == $opction->jenis_rumah)
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->jenis_rumah }}" selected>
                                                {{ $opction->jenis_rumah }}
                                            </option>
                                        @else
                                            <option class="bg-white border-spacing-0 rounded-lg w-full"
                                                value="{{ $opction->jenis_rumah }}">
                                                {{ $opction->jenis_rumah }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>


                            <div class="flex items-center justify-end px-4 py-2 mr-2">
                                <div class="px-4">
                                    <a href="/penduduk"
                                        class="flex items-center justify-end rounded-lg bg-blue-700 hover:bg-blue-200 text-white p-2 ring-2  ring-white hover:text-slate-900 hover:ring-indigo-700 shadow-lg shadow-indigo-700">
                                        <x-logo-kembali></x-logo-kembali>
                                    </a>
                                </div>
                                <button type="submit"
                                    class="flex p-2 rounded-lg bg-green-500 text-center font-semibold text-lg shadow-lg  text-white ring-2 ring-white hover:ring-2 hover:ring-green-800 hover:bg-green-200 shadow-green-700">
                                    <x-logo-simpan></x-logo-simpan>
                                </button>


                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
