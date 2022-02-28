const nav = document.querySelector("nav");
const introduction = document.querySelector(".introduction-spacer");

// Sticky navigation
$(window).ready((e) => {
  if (window.pageYOffset > introduction.offsetHeight) {
    nav.classList.add("sticky");
  }
});

$(window).scroll((e) => {
  console.log(introduction.offsetHeight);
  if (window.pageYOffset > introduction.offsetHeight) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
});

const navList = document.querySelector("nav ul");

// Navbar comes flying in
$(window).ready((e) => {
  navList.classList.add("appear");
});
