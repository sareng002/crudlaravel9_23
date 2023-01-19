// alert('ini javascrpt jarak jauh')

// alert("mulai");
// for (let i = 0; i < 5; i++) {
//   alert("tes" + i);
// }
// alert("selesai");

// let angka1 = prompt("masukan nilai Angka:");
// if (angka1 % 2 == 0) {
//   alert("anda memasukan Angka" + angka + "bilangan genap");
// } else {
//   alert("anda memasukan Angka" + angka + "bilangan ganjil");
// }
// ambil Elemen yang telah di buat tadi
var keyword = document.getElementById("cari");
var cari = document.getElementById("tombol");
var container = document.getElementById("container");

// ini adalah even click pada java script
// cari.addEventListener("mouseover", function () {
//   alert("mantap...........");
// });

// tambahkan even ketika input nya di tulis kan
keyword.addEventListener("keyup", function () {
  // buat opjek ajax
  var ajax = new XMLHttpRequest();

  // cex kesiapan ajax
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      container.innerHTML = ajax.responseText;
    }
  };
  // exsekusi ajax nya

  ajax.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, true);
  ajax.send();
});
