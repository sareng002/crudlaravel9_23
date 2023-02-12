// script buat buka modal
// let modal = document.getElementById("myModal");
// let btn = document.getElementById("tombolku");
// let btnClose = document.getElementById("tutup");

// btn.onclick = function () {
//     modal.classList.remove("hidden");
//     setTimeout(function () {
//         modal.classList.add("hidden");
//     }, 5000);
// };

// btnClose.onclick = function () {
//     modal.classList.add("hidden");
// };

// script buka sidebar

// const tutup = document.getElementById("tutup");
const tutupsidebar = document.getElementById("tutupsidebar");
let navbar = document.getElementById("navbar");
let navfooter = document.getElementById("navfooter");
let mainbar = document.getElementById("mainbar");
let btnsidebar = document.getElementById("btnsidebar");
let buka = document.getElementById("buka");
let navhp = document.getElementById("navhp")


// let closeMenu = document.getElementById("closesidebar");

btnsidebar.onclick = function () {
    // tutupsidebar.classList.toggle("hidden");
    tutupsidebar.classList.toggle("-translate-x-80");
    tutupsidebar.classList.toggle("ease-in");
    tutupsidebar.classList.toggle("ease-out");
    tutupsidebar.classList.toggle("duration-500");
    // tutupsidebar.classList.toggle("opacity-80");


    navbar.classList.toggle("lg:w-4/5");
    navbar.classList.toggle("ease-in");
    navbar.classList.toggle("duration-300");
    // navbar.classList.toggle("opacity-80");

    navfooter.classList.toggle("lg:w-4/5");
    navfooter.classList.toggle("ease-in");
    navfooter.classList.toggle("ease-out");
    navfooter.classList.toggle("duration-300");
    // navfooter.classList.toggle("opacity-80");

    mainbar.classList.toggle("lg:w-4/5");
    mainbar.classList.toggle("ease-in");
    mainbar.classList.toggle("ease-out");
    mainbar.classList.toggle("duration-300");
    // mainbar.classList.toggle("opacity-80");

    btnsidebar.classList.toggle("left-10");
};
// btnsidebar.onclick = function() {

//     tutupsidebar.classList.toggle("hidden");
//     tutupsidebar.classList.toggle("animate__fadeOut");
//     navbar.classList.toggle("lg:w-4/5");
//     navfooter.classList.toggle("lg:w-4/5");
//     mainbar.classList.toggle("lg:w-4/5");
//     btnsidebar.classList.toggle("left-5");
// };

buka.onclick = function () {
    navhp.classList.toggle("hidden");
    setTimeout(function () {
        navhp.classList.add("hidden");
    }, 5000);
};
