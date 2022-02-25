const nav = document.querySelector("nav");
const introduction = document.querySelector(".introduction-spacer");

$(window).scroll(function (e) {
  console.log(introduction.offsetHeight);
  if (window.pageYOffset > introduction.offsetHeight) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
});
