<div class="mt-6 " x-data="{ open: true }">
    <!-- Dialog (full screen) -->
    <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full "
        style="background-color: rgba(0,0,0,.5);" x-show="open">

        <!-- A basic modal dialog with title, body and one button to close -->
        <div class="h-auto p-2 mx-auto ring-2 ring-white  bg-green-700 rounded shadow-lg md:max-w-xl md:p-6 lg:p-4 md:mx-0 "
            @click.away="open = false">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left ">
                <p
                    class="text-md leading-2 bg-green-700 text-gray-100 px-4 lg:px-12 py-2 lg:py-4 shadow-lg shadow-slate-100  rounded-md">

                    {{ $titel }} 😀

                </p>
            </div>
            <div class="flex mt-5 sm:mt-6 ">
                <span class="flex w-full rounded-md shadow-sm items-end justify-end px-4 animate-pulse">
                    <button @click="open = false"
                        class="inline-flex justify-center  px-4 py-1 text-white bg-slate-800 rounded hover:bg-gray-600 shadow-lg shadow-slate-50">
                        <x-logo-close />
                        close
                    </button>
                </span>

            </div>
        </div>
    </div>

</div>
