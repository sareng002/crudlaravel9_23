<div class="mt-6" x-data="{ open: false }">

    <!-- Button (blue), duh! -->
    <button class="px-4 py-2 text-white bg-blue-500 rounded select-none no-outline focus:shadow-outline"
        @click="open = true">Open Modal</button>

    <!-- Dialog (full screen) -->
    <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
        style="background-color: rgba(0,0,0,.5);" x-show="open">

        <!-- A basic modal dialog with title, body and one button to close -->
        <div class="h-auto p-4 mx-auto text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0"
            @click.away="open = false">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    {{ $titel }}
                    <x-logo-simpan />

                    <div class="mt-2">
                        <p class="text-sm leading-5 text-gray-500">
                            {{ $pesan }}
                        </p>
                    </div>
            </div>

            <!-- One big close button.  --->
            <div class="mt-5 sm:mt-6">
                <span class="flex w-full rounded-md shadow-sm">
                    <button @click="open = false"
                        class="inline-flex justify-center  px-4 py-2 text-white bg-green-600 rounded hover:bg-blue-700">
                        close
                    </button>
                </span>
                <span class="flex w-full rounded-md shadow-sm items-end justify-end px-4 animate-pulse">
                    <a href="/penduduk"
                        class="inline-flex justify-center  px-4 py-1 text-white bg-slate-800 rounded hover:bg-gray-600 shadow-lg shadow-slate-50">
                        masuk
                    </a>
                </span>
            </div>

        </div>
    </div>
</div>
