<x-guest-layout>
    <x-nav />

    <div class="container mx-auto text-white">
        <div class="pt-8 py-2">
            <h1 class="text-2xl uppercase">Halaman Galery Desa</h1>
            <p>di isi dengan profail dan foto-kegiata</p>

            <button id="myBtn" class="bg-indigo-600 rounded-lg shadow-lg px-4 py-4">Tambah Class</button>
            <p class="text">Ini adalah teks default</p>

            <script>
              // Mendapatkan elemen button dan paragraph
              var btn = document.getElementById("myBtn");
              var text = document.querySelector(".text");

              // Menambahkan event click pada button
              btn.addEventListener("click", function(){
                // Cek apakah kelas "new-class" sudah ada
                if (text.classList.contains("new-class")) {
                  // Replace class "new-class" dengan "old-class"
                  text.classList.replace("new-class", "old-class");
                } else {
                  // Menambahkan kelas "new-class"
                  text.classList.add("new-class");
                }
              });
            </script>
        </div>
    </div>



</x-guest-layout>
