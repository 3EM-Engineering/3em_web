const navbarXL = document.querySelector(".navbarXL");
const mobileNav = document.getElementById("mobileNav");

navbarFitScreen(window.innerWidth);

window.addEventListener("resize", function () {
  var w = window.innerWidth;
  navbarFitScreen(w);
});

function navbarFitScreen(w) {
  if (w >= 895) {
    mobileNav.classList.add("navbarXL");
    mobileNav.classList.remove("navbarSM");
    mobileNav.classList.add("d-none");
    navbarXL.classList.remove("d-none");
  } else {
    mobileNav.classList.remove("navbarXL");
    mobileNav.classList.add("navbarSM");
    mobileNav.classList.remove("d-none");
    navbarXL.classList.add("d-none");
  }
}
