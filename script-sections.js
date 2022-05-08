
// DOLGOZATOK FORMAI KÖVETELMÉNYE SZEKCIÓNKÉNT
document.querySelectorAll('.sections-heading-cards').forEach(function (card) {
    card.addEventListener('click', function (event) {
        document.querySelectorAll('.sections-heading-cards').forEach(function (c) {
            if (!(c == event.target.parentNode && event.target.parentNode.classList.contains('active'))) {
                c.classList.remove('active');
            }
        });
        card.classList.toggle('active');
    });
});

// SLIDE HAMBURGER BECSÚSZÓ LISTA SZEKCIÓK
document.querySelector("#innerHamburger").addEventListener("click", function () {
    document.querySelector("#innerHeaderCards").classList.toggle("active"); 
    document.querySelector("#innerHamburger").classList.toggle("active");
}); 

//SCROLL-BACK BUTTON
window.addEventListener('scroll', function(event) {
    if (window.pageYOffset > 400) {
        document.querySelector("#scrollBack").classList.add('show');
    }
    else {
        document.querySelector("#scrollBack").classList.remove('show');
    }
});