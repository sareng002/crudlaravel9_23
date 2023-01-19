<div class="antialiased font-sans bg-gray-900">
    <div x-data="{ open: false }">
        <div class="flex flex-col lg:flex-row justify-between w-full">
            <div class="bg-gray-900 text-gray-400">
                <div class="flex justify-between items-center px-4 lg:px-10 py-4">
                    <a href="/" class="flex py-2 items-center font-semibold text-xl uppercase text-white">
                        By Sutiyoso
                    </a>
                    <button @click="open= !open" class="-mr-2 flex items-center lg:hidden">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            {{-- navigasi Dekstop --}}
            <div class="flex justify-between items-center ">
                <div class="hidden space-x-1 lg:space-x-2 sm:-my-px sm:ml-10 lg:flex text-gray-100">
                    <div class="flex lg:items-center lg:px-4 lg:py-4">
                        <a href="/" class="lg:items-center  py-2 lg:py-2 lg:px-4 hover:text-white">Home</a>
                        <a href="/contac" class="lg:items-center  py-2 lg:py-2 lg:px-4 hover:text-white">Contact</a>
                        <a href="/galery" class="lg:items-center  py-2 lg:py-2 lg:px-4 hover:text-white">Galery</a>
                        <a href="/about"class="lg:items-center  py-2 lg:py-2 lg:px-4 hover:text-white">About</a>
                    </div>
                    <div class="flex lg:items-center lg:py-4">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="lg:items-center  py-2 lg:py-2 md:px-4 md:mr-4 hover:text-white">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="lg:items-center  py-2 lg:py-2 md:px-4 md:mr-4 hover:text-white">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="lg:items-center  py-2 lg:py-2 md:px-4 md:mr-4 hover:text-white">Register</a>
                                @endif
                            @endauth

                        @endif
                    </div>
                </div>
            </div>
            {{-- navigasi Mobail --}}
            {{-- <div :class="{ 'hidden': open === true }" --}}
            <div :class="{ 'hidden': open === false }"
                class="flex flex-col lg:flex-row lg:items-center bg-gray-900 litems-center justify-between text-gray-100 px-6 py-2 lg:border-none border-t-2 border-gray-500 text-sm lg:hidden">
                <div class="flex flex-col lg:flex-row lg:items-center lg:px-4">
                    <a href="/" class="block py-2 lg:py-2 lg:px-4">Home</a>
                    <a href="/contac" class="block py-2 lg:py-2 lg:px-4">Contact</a>
                    <a href="/galery" class="block py-2 lg:py-2 lg:px-4">Galery</a>
                    <a href="/about">About</a>
                </div>
                <div class="flex flex-col lg:flex-row lg:items-center">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="block py-2 lg:py-2 lg:px-4 hover:text-slate-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="block py-2 lg:py-2 lg:px-4 hover:text-slate-500">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="block py-2 lg:py-2 lg:px-4 hover:text-slate-500">Register</a>
                            @endif
                        @endauth

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @include('layouts.navigasi_gest')
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div> --}}
