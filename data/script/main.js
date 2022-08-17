$(document).ready(function() {

  $(".scroll-animation").click(function(event) {
    event.preventDefault();
    $("html, body").animate({
      scrollTop: $($(this).attr("href")).offset().top
    }, 1000);
  });

  $(".scroll-to-top").click(function(event) {
    event.preventDefault();
    scrollToTop();
  });

  function scrollToTop() {
    $("html, body").animate({
      scrollTop: $("body").offset().top
    }, 1000);
  };
  
  const hamburger_menu = document.querySelector(".hamburger-menu");
  /* -- Test for animation to return to the page from the nav menu --
  const hamburger_menu_active = document.querySelector(".screen-container.active .hamburger-menu");
  */
  const container = document.querySelector(".screen-container");
  /* -- Test for animation to return to the page from the nav menu --
  const page_content = document.querySelector(".page-content");
  */
 
 
  const click_to_select = document.querySelector(".screen-container .main .click-to-select");
 
  const home_page = document.querySelector(".screen-container .main-container .home-page");
  const home_page_btns = document.querySelectorAll(".home_link");

  const cv_page = document.querySelector(".screen-container .main-container .cv-page");
  const cv_page_btns = document.querySelectorAll(".cv_link");
  
  const portfolio_page = document.querySelector(".screen-container .main-container .portfolio-page");
  const portfolio_page_btns = document.querySelectorAll(".portfolio_link");

  const contact_page = document.querySelector(".screen-container .main-container .contact-page");
  const contact_page_btns = document.querySelectorAll(".contact_link");
  
  
  function swapPageToMainPage(elem) {
    let main = document.querySelector(".screen-container .main  .page");
    elem.after(main);
    click_to_select.after(elem);
  }

  function changePageTitle(title) {
    document.title = title;
  }

  
  home_page_btns.forEach(home_page_btn => {
    home_page_btn.addEventListener("click", () => {
      swapPageToMainPage(home_page);
      scrollToTop();
      changePageTitle("Développeur Web - Mathis GASPAROTTO");
    });
  });

  cv_page_btns.forEach(cv_page_btn => {
    cv_page_btn.addEventListener("click", () => {
      swapPageToMainPage(cv_page);
      scrollToTop();
      changePageTitle("CV | Développeur Web - Mathis GASPAROTTO");
    });
  });

  portfolio_page_btns.forEach(portfolio_page_btn => {
    portfolio_page_btn.addEventListener("click", () => {
      swapPageToMainPage(portfolio_page);
      scrollToTop();
      changePageTitle("Portfolio | Développeur Web - Mathis GASPAROTTO");
    });
  });
  
  contact_page_btns.forEach(contact_page_btn => {
    contact_page_btn.addEventListener("click", () => {
      swapPageToMainPage(contact_page);
      scrollToTop();
      changePageTitle("Contact | Développeur Web - Mathis GASPAROTTO");
    });
  });
 
  hamburger_menu.addEventListener("click", () => {
    container.classList.toggle("active");
    
    const nav_links = document.querySelectorAll(".nav-link");

    /* -- Test for animation to return to the page from the nav menu --
    page_content.classList.add('active');
    */

    /*main_active.addEventListener("click", () => {
      container.classList.remove("active");
    });*/
    
    /*home_btn.addEventListener("click", () => {
      container.classList.remove("active");
    });*/
       
    
    click_to_select.addEventListener("click", () => {
      container.classList.remove("active");
    });

    nav_links.forEach(nav_link => {
      nav_link.addEventListener("click", () => {
        container.classList.remove("active");
      });
    });
    
  });
  
  /*-- Test for animation to return to the page from the nav menu --
  hamburger_menu_active.addEventListener("click", () => {
    //wait
    page_content.classList.remove('active');
  });
  */

  /* -- Disparition du header en scroll vers le bas, et apparition en scroll vers le haut --
  
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