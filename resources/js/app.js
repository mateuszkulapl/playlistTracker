// require('./bootstrap');

var toTopButton = document.getElementById("scrollTop"); 
toTopButton.addEventListener("click", goToTop);
window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        toTopButton.classList.remove("hidden");
    } else {
        toTopButton.classList.add("hidden");
    }
}
function goToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}