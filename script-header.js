// HAMBURGER LENYÍLÓ LISTA
document.querySelector("#headerHamburger").addEventListener("click", function () {
    document.querySelector("#headerList").classList.toggle("active"); 
    /*kivalasztjuk a header elemet es hozzaadjuk az "active" nevu classt*/
}); /*amikor raklikkelunk a headerHamburger id-ju elemre - click az event amint lehallgatunk s a function a tevekenyseg amit elvegzunk clickeleskor */

document.querySelector("#searchBar").addEventListener("click", function(){
    document.querySelector("#headerList").classList.toggle("search");
});