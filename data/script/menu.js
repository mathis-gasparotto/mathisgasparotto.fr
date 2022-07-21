$(document).ready(function() {

  $(".scroll-animation").click(function(event) {
    event.preventDefault();
    $("html, body").animate({
      scrollTop: $($(this).attr("href")).offset().top
    }, 1000);
  });
  
  const hamburger_menu = document.querySelector(".hamburger-menu");
  /* -- Test for animation to return to the page from the nav menu --
  const hamburger_menu_active = document.querySelector(".screen-container.active .hamburger-menu");
  */
  const container = document.querySelector(".screen-container");
  /* -- Test for animation to return to the page from the nav menu --
  const page_content = document.querySelector(".page-content");
  */
 
  function swapPageToMainPage(elem) {
    var main = document.querySelector(".screen-container .main  .page");
    elem.after(main);
    click_to_select.after(elem);
    container.classList.remove("active");
  }

  function scrollToTop() {
    window.scrollTo(0, 0);
  }


  const click_to_select = document.querySelector(".screen-container .main .click_to_select");
 
  const home_page = document.querySelector(".screen-container .main-container .home-page");
  const home_page_btns = document.querySelectorAll(".home_link");

  const cv_page = document.querySelector(".screen-container .main-container .cv-page");
  const cv_page_btns = document.querySelectorAll(".cv_link");

  const portfolio_page = document.querySelector(".screen-container .main-container .portfolio-page");
  const portfolio_page_btns = document.querySelectorAll(".portfolio_link");

  const contact_page = document.querySelector(".screen-container .main-container .contact-page");
  const contact_page_btns = document.querySelectorAll(".contact_link");
  
  console.log(contact_page_btns);
  
  home_page_btns.forEach(home_page_btn => {
    home_page_btn.addEventListener("click", () => {
      swapPageToMainPage(home_page);
      // scrollToTop();
      // title accueil
    });
  });

  cv_page_btns.forEach(cv_page_btn => {
    cv_page_btn.addEventListener("click", () => {
      swapPageToMainPage(cv_page);
      // scrollToTop();
    });
  });

  portfolio_page_btns.forEach(portfolio_page_btn => {
    portfolio_page_btn.addEventListener("click", () => {
      swapPageToMainPage(portfolio_page);
      // scrollToTop();
    });
  });

  contact_page_btns.forEach(contact_page_btn => {
    contact_page_btn.addEventListener("click", () => {
      swapPageToMainPage(contact_page);
      // scrollToTop();
    });
  });
 
  hamburger_menu.addEventListener("click", () => {
    container.classList.toggle("active");

    const main_active = document.querySelector(".screen-container.active .main");

    /* -- Test for animation to return to the page from the nav menu --
    page_content.classList.add('active');
    */

    /*main_active.addEventListener("click", () => {
      container.classList.remove("active");
    });*/

    /*home_btn.addEventListener("click", () => {
      container.classList.remove("active");
    });*/
       
        
    home_page_btn.addEventListener("click", () => {
      container.classList.remove("active");
    });
    
    cv_page_btn.addEventListener("click", () => {
      container.classList.remove("active");
    });
   
    portfolio_page_btn.addEventListener("click", () => {
      container.classList.remove("active");
    });
   
    contact_page_btn.addEventListener("click", () => {
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