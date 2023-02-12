<!DOCTYPE html>
<html class="dark:bg-slate-900 text-white" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>


{{-- sidebar --}}
<div id="tutupsidebar" class="">
    <div
        class="fixed  top-0 left-0  min-h-screen w-full lg:w-1/5 bg-indigo-900 opacity-80 text-white shadow-lg shadow-black hidden sm:-my-px sm:ml-0 md:flex ">
        <div class="w-full ">
            <div
                class="flex justify-between items-center py-5 mb-4 border-b-2 border-indigo-600 shadow-lg shadow-indigo-300">
                <span class="px-8 uppercase">{{ Auth::user()->name }}</span>

            </div>
            <div>
                <div>
                    <div class="px-4 w-full py-2 hover:bg-indigo-700 rounded-lg uppercase font-semibold">
                        <a href="/dashboard" class="block px-4 py-2 hover:translate-x-8 hover:scale-x-110 duration-300  ">
                            {{ __('Dashboard') }}
                        </a>
                    </div>
                    <div class="px-4 w-full py-2 hover:bg-indigo-700 rounded-lg uppercase font-semibold">
                        <a href="/penduduk" class="block px-4 py-2 hover:translate-x-8 hover:scale-x-110 duration-300  ">
                            {{ __('penduduk') }}
                        </a>
                    </div>
                    <div class=" px-4 w-full py-2 hover:bg-indigo-700 rounded-lg uppercase font-semibold">
                        <a href="/penduduk/umur" class="block px-4 py-2 hover:translate-x-8 hover:scale-x-110 duration-300  ">
                            {{ __('Data umur') }}
                        </a>
                    </div>
                    <div class=" px-4 w-full py-2 hover:bg-indigo-700 rounded-lg uppercase font-semibold">
                        <a href="/penduduk/rekap" class="block px-4 py-2 hover:translate-x-8 hover:scale-x-110 duration-300  ">
                            {{ __('Rekap data dusun') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end sidebar --}}
{{-- main --}}
<div id="mainbar"
    class="absolute px-8 py-4 top-16 right-0 overscroll-auto hover:overscroll-contain flex justify-end items-center w-full lg:w-4/5 z-0">
    <div class="px-4 rounded-lg w-full mb-12 text-slate-800">
            {{ $slot }}
    </div>
    {{-- end main --}}
</div>

<div id="navbar" class="fixed top-0 right-0 bg-slate-900  w-full lg:w-4/5 shadow-lg shadow-slate-700">
    {{-- navbar --}}
    <nav class="container mx-auto text-slate-200 font-semibold p-4 bg-slate-900 ">
        <div class="flex justify-between items-center">
            <button id="btnsidebar"
                class="absolute top-4 left-4 shadow-lg hidden sm:-my-px sm:ml-0 sm:flex hover:bg-slate-400 rounded-full p-1 hover:-translate-x-4 hover:scale-x-110 duration-00 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                </svg>
            </button>
            <div class="flex lg:px-12 px-0 items-center gap-x-4 uppercase">
                <button id="buka" class="lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                {{-- <a href="#">home</a> --}}
                @if (isset($kopsidebar))
                    <header class="py-2">
                            {{ $kopsidebar }}
                    </header>
                @endif
            </div>
            {{-- navbar di laptop --}}

            {{-- navbar di hp --}}
            <div id="navhp" class="hidden">
                <div class="fixed top-14 left-0 lg:hidden w-1/3">
                    <div class="bg-slate-600  border-t-2 text-sm border-slate-400 w-full">
                        <div class="border-b-2  border-slate-400">
                            <a href="#" class="block py-2 px-8 hover:bg-indigo-700 rounded-lg">login</a>
                            <a href="#" class="block py-2 px-8 hover:bg-indigo-700 rounded-lg">logaut</a>
                        </div>
                        <div class="px-4 w-full py-1 hover:bg-indigo-700 rounded-lg uppercase font-semibold">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </div>
                        <div class=" px-4 w-full py-1 hover:bg-indigo-700 rounded-lg uppercase font-semibold">
                            <a href="#"class="block px-4 py-1 ">Menu2</a>
                        </div>
                        <div class=" px-4 w-full py-1 hover:bg-indigo-700 rounded-lg uppercase font-semibold">
                            <a href="#"class="block px-4 py-1 ">Menu3</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{-- edn navbar --}}
</div>
{{-- footer --}}
<div id="navfooter" class="fixed bottom-0 right-0 w-full lg:w-4/5 bg-slate-200 text-white">
    <div class="p-1">
        {{ $footer ?? '' }}
    </div>
</div>
{{-- end footer --}}

{{-- <script src={{ asset('src/js/modal.js') }}> </script> --}}
<script>

const tutupsidebar = document.getElementById("tutupsidebar");
let navbar = document.getElementById("navbar");
let navfooter = document.getElementById("navfooter");
let mainbar = document.getElementById("mainbar");
let btnsidebar = document.getElementById("btnsidebar");
let buka = document.getElementById("buka");
let navhp = document.getElementById("navhp")

btnsidebar.onclick = function () {
    // tutupsidebar.classList.toggle("hidden");
    tutupsidebar.classList.toggle("-translate-x-80");
    tutupsidebar.classList.toggle("ease-in");
    tutupsidebar.classList.toggle("ease-out");
    tutupsidebar.classList.toggle("duration-500");
    tutupsidebar.classList.toggle("opacity-80");


    navbar.classList.toggle("lg:w-4/5");
    navbar.classList.toggle("ease-in");
    navbar.classList.toggle("duration-300");
    navbar.classList.toggle("opacity-80");

    navfooter.classList.toggle("lg:w-4/5");
    navfooter.classList.toggle("ease-in");
    navfooter.classList.toggle("ease-out");
    navfooter.classList.toggle("duration-300");
    navfooter.classList.toggle("opacity-80");

    mainbar.classList.toggle("lg:w-4/5");
    mainbar.classList.toggle("ease-in");
    mainbar.classList.toggle("ease-out");
    mainbar.classList.toggle("duration-300");
    mainbar.classList.toggle("opacity-80");

    btnsidebar.classList.toggle("left-10");
};

buka.onclick = function () {
    navhp.classList.toggle("hidden");
    setTimeout(function () {
        navhp.classList.add("hidden");
    }, 5000);
};

</script>
</body>

</html>
