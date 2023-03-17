
var navbar = document.getElementById("navbarsticky");
var menuWrapper = document.getElementById("menu-wrapper");
var lastScrollTop = 0;
window.onscroll = function () {
    var currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (currentScrollTop > lastScrollTop) {
        // Cuộn xuống
        if (currentScrollTop >= navbar.offsetTop + navbar.offsetHeight) {
            menuWrapper.classList.add("sticky");
        }
    } else {
        // Cuộn lên
        menuWrapper.classList.remove("sticky");
    }
    lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
}
