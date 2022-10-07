$(document).ready(function() {

  let navbar = document.getElementById("navbar");
  window.onscroll = function() {
    var windowY = window.pageYOffset;
    var contentY = document.getElementById("page-content").getBoundingClientRect().top + windowY;
    var navbar_height = navbar.getBoundingClientRect().height;
    var navbar_scroll = navbar_height + windowY;
    navbar.style.top = windowY + "px";
    if (navbar_scroll >= contentY) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
    if (windowY >= 50) {
      navbar.classList.add('mobile-scrolled');
    } else {
      navbar.classList.remove('mobile-scrolled');
    }
  }
  
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
    navbar.classList.remove('scrolled');
  };

  
  const hamburger_menu = document.querySelector(".hamburger-menu");

  const container = document.querySelector(".screen-container");
  
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
    event.preventDefault();
    let main = document.querySelector(".screen-container .main  .page");
    elem.after(main);
    click_to_select.after(elem);
  }

  function changePageTitle(title) {
    document.title = title;
  }

  function swapToHomePage() {
    swapPageToMainPage(home_page);
    changePageTitle("Développeur Web - Mathis GASPAROTTO");
    window.history.pushState({'page_id': 1}, "", "/");
  }
  function swapToCvPage() {
    swapPageToMainPage(cv_page);
    changePageTitle("CV | Développeur Web - Mathis GASPAROTTO");
    window.history.pushState({'page_id': 2}, "", "/cv/");
  }
  function swapToPortfolioPage() {
    swapPageToMainPage(portfolio_page);
    changePageTitle("Portfolio | Développeur Web - Mathis GASPAROTTO");
    window.history.pushState({'page_id': 3}, "", "/portfolio/");
  }
  function swapToContactPage() {
    swapPageToMainPage(contact_page);
    changePageTitle("Contact | Développeur Web - Mathis GASPAROTTO");
    window.history.pushState({'page_id': 4}, "", "/contact/");
  }
  
  home_page_btns.forEach(home_page_btn => {
    home_page_btn.addEventListener("click", () => {
      swapToHomePage();
    });
  });

  cv_page_btns.forEach(cv_page_btn => {
    cv_page_btn.addEventListener("click", () => {
      swapToCvPage();
    });
  });

  portfolio_page_btns.forEach(portfolio_page_btn => {
    portfolio_page_btn.addEventListener("click", () => {
      swapToPortfolioPage();
    });
  });
  
  contact_page_btns.forEach(contact_page_btn => {
    contact_page_btn.addEventListener("click", () => {
      swapToContactPage();
    });
  });
 
  hamburger_menu.addEventListener("click", () => {
    container.classList.toggle("active");
    
    const nav_links = document.querySelectorAll(".nav-link");
       
    click_to_select.addEventListener("click", () => {
      container.classList.remove("active");
    });

    nav_links.forEach(nav_link => {
      nav_link.addEventListener("click", () => {
        container.classList.remove("active");
      });
    });
    
  });
  
})