$(document).ready(function() {

  const hamburger_menu = document.querySelector(".hamburger-menu");
  const container = document.querySelector(".screen-container");

  hamburger_menu.addEventListener("click", () => {
    container.classList.toggle("active");

    const main_active = document.querySelector(".screen-container.active .main");
    const home_btn = document.querySelector("#home_link");


    main_active.addEventListener("click", () => {
      container.classList.remove("active");
    });

    home_btn.addEventListener("click", () => {
      container.classList.remove("active");
    });
  });

  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.querySelector(".screen-container .navbar").style.top = "0";
    } else {
      document.querySelector(".screen-container .navbar").style.top = "-100px";
    }
    prevScrollpos = currentScrollPos;
  }

})