<!-- modal -->
<div class="px-4">
    <button id="tombolku" class="text-slate-100 rounded-lg ring-2 ring-white shadow-lg shadow-white px-4 py-2 bg-rose-700 hover:bg-rose-400">
        {{-- nama tombol --}}
        {{ $text }}
    </button>
    <div id="myModal" class="fixed top-0 right-0 left-0 bg-black/75 min-h-screen w-full p-2 hidden ">
            <div class="flex justify-center items-center py-40 lg:py-52  ">
                <div class=" bg-slate-50 rounded-lg w-full lg:w-1/3 p-2">
                    {{-- contain modal --}}
                    {{ $slot }}
                </div>
            </div>
    </div>
   </div>
<!-- modal -->

{{-- kode script untuk menampilkan modalnya --}}
<script>
    let modal = document.getElementById('myModal');
    let btn = document.getElementById("tombolku");
    let btnClose = document.getElementById("tutup");

    btn.onclick = function() {
        modal.classList.remove('hidden');
        setTimeout(function () {
            modal.classList.add('hidden')
        },5000)
    }

    btnClose.onclick = function() {
        modal.classList.add('hidden')
    }
</script>
