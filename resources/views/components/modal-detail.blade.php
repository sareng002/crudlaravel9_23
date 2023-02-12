<!-- modal -->
<div class="px-4">

    <div id="detailModal" class="fixed top-0 right-0 left-0 bg-black/75 min-h-screen w-full p-2 hidden ">
            <div class="flex justify-center items-center py-40 lg:py-52  ">
                <div class=" bg-slate-50 rounded-lg w-full lg:w-1/3 p-2 text-slate-800">
                    contain modal
                    {{ $slot }}
                </div>
            </div>
    </div>
   </div>
<!-- modal -->

{{-- kode script untuk menampilkan modalnya --}}
<script>
    let modalDetail = document.getElementById('detailModal');
    let btnDetailt = document.getElementById("btnDetail");
    let btnCloseModal = document.getElementById("tutupModal");

    btnDetailt.onclick = function() {
        modalDetail.classList.remove('hidden');
        setTimeout(function () {
            modalDetail.classList.add('hidden')
        },5000)
    }

    btnCloseModal.onclick = function() {
        modalDetail.classList.add('hidden')
    }
</script>
