// sidenav transition-burger

var sidenav = document.querySelector("aside");
var sidenav_trigger = document.querySelector("[sidenav-trigger]");
var burger = sidenav_trigger.firstElementChild;
var top_bread = burger.firstElementChild;
var bottom_bread = burger.lastElementChild;

sidenav_trigger.addEventListener("click", function () {
  if (page == "virtual-reality") {
    sidenav.classList.toggle("xl:left-[18%]");
  }
  sidenav.classList.toggle("translate-x-0");
  sidenav.classList.toggle("shadow-soft-xl");
  if (page == "rtl") {
    top_bread.classList.toggle("-translate-x-[5px]");
    bottom_bread.classList.toggle("-translate-x-[5px]");
  } else {
    top_bread.classList.toggle("translate-x-[5px]");
    bottom_bread.classList.toggle("translate-x-[5px]");
  }
});

window.addEventListener("click", function (e) {
  if (!sidenav.contains(e.target) && !sidenav_trigger.contains(e.target)) {
    if (sidenav.classList.contains("translate-x-0")) {
      sidenav_trigger.click();
    }
  }
});
