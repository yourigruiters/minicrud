const nav = document.querySelector("nav");
const introduction = document.querySelector(".introduction-spacer");
const hamburger = document.querySelector("#hamburger");
const hamburgerOverlay = document.querySelector("#hamburger-overlay");
const hamburgerOverlayLinks = document.querySelectorAll("#hamburger-overlay a");
const hamburgerClose = document.querySelector("#hamburger-close");
const navList = document.querySelector("nav ul");

// Sticky navigation
$(window).ready(() => {
  if (window.pageYOffset > introduction.offsetHeight) {
    nav.classList.add("sticky");
  }
});

$(window).scroll(() => {
  if (window.pageYOffset > introduction.offsetHeight) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
});

// Navbar comes flying in
$(window).ready(() => {
  navList.classList.add("appear");
});

// Toggle hamburger overlay menu
hamburger.addEventListener("click", () => {
  hamburgerOverlay.style.height = "100%";
});

hamburgerClose.addEventListener("click", () => {
  hamburgerOverlay.style.height = "0px";
});

hamburgerOverlayLinks.forEach((link) => {
  link.addEventListener("click", () => {
    hamburgerOverlay.style.height = "0px";
  });
});
