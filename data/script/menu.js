$(document).ready(function() {

  const hamburger_menu = document.querySelector(".hamburger-menu");
  /* -- Test for animation to return to the page from the nav menu --
  const hamburger_menu_active = document.querySelector(".screen-container.active .hamburger-menu");
  */
  const container = document.querySelector(".screen-container");
  /* -- Test for animation to return to the page from the nav menu --
  const page_content = document.querySelector(".page-content");
  */

  hamburger_menu.addEventListener("click", () => {
    container.classList.toggle("active");

    const main_active = document.querySelector(".screen-container.active .main");
    const home_btn = document.querySelector("#home_link");

    /* -- Test for animation to return to the page from the nav menu --
    page_content.classList.add('active');
    */

    main_active.addEventListener("click", () => {
      container.classList.remove("active");
    });

    home_btn.addEventListener("click", () => {
      container.classList.remove("active");
    });
  });
  /*-- Test for animation to return to the page from the nav menu --
  hamburger_menu_active.addEventListener("click", () => {
    //wait
    page_content.classList.remove('active');
  });
  */

  /* -- Disparition en scroll vers le bas, et apparition en scroll vers le haut --
  
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.querySelector(".screen-container .navbar").style.top = "0";
    } else {
      document.querySelector(".screen-container .navbar").style.top = "-100px";
    }
    prevScrollpos = currentScrollPos;
  }*/

})