<x-guest-layout>
    <x-nav />

    <div class="container mx-auto">
        <div class="pt-8 py-2 bg-slate-50 rounded-lg p-4">
            <h1 class="text-2xl uppercase">Halaman contac</h1>
            <p>Belum Tau Mau d isi Apa....????</p>
            <button id="btnalerttes" class="bg-indigo-500 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg ">alert tes</button>
            <button id="btnsucces" class="bg-green-600 hover:bg-green-800 rounded-lg px-4 py-2 text-white">alert sukses</button>
        </div>
    </div>
    <script>
        let timerInterval
        let btnalerttes = document.getElementById("btnalerttes");

        btnalerttes.onclick = function ()
        {
            Swal.fire({
            title: 'Auto close alert!',
            html: 'I will close in <b></b> milliseconds.',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
            }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
            })

        };
        const btnsucces=document.getElementById('btnsucces');
        btnsucces.onclick=function()
        {
            Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
            )
        }



    </script>
</x-guest-layout>
