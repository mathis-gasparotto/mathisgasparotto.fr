$(document).ready(function() {
  setTimeout(function() {
    const body = document.getElementsByTagName('body')[0]
    body.classList.remove('loading')

    const header = document.getElementById("header")
    const header_height = header.getBoundingClientRect().height
    const mobile_navbar = document.querySelector(".nav-mobile")
    const mobile_navbar_height = mobile_navbar.getBoundingClientRect().height

    const main = document.querySelector(".main .page")

    main.style.paddingBottom = mobile_navbar_height + 'px'
    
    const hamburger_menu = document.querySelector(".hamburger-menu")
    
    const container = document.querySelector(".screen-container")
    
    const click_to_select = document.querySelector(".screen-container .main .click-to-select")

    const skills = document.getElementById("skills")
    const projects = document.getElementById("projects")
    const futur_projects = document.getElementById("futur-projects")
    const who = document.getElementById("who")
    const contact = document.getElementById("contact")
    const contact_form = document.getElementById("contact-form")

    const desktop_nav_links = document.querySelectorAll(".nav-desktop .nav-link")

    const nav_skills = document.getElementById('nav-skills')
    const nav_projects = document.getElementById('nav-projects')
    const nav_who = document.getElementById('nav-who')
    const nav_contact = document.getElementById('nav-contact')

    const go_to_top = document.getElementById('go-to-top')
    const go_to_top_height = go_to_top.getBoundingClientRect().height

    go_to_top.style.top = window.pageYOffset + window.innerHeight - go_to_top_height - 30 + 'px'

    const mobile_navbar_progress = document.querySelector(".nav-mobile .progress-bar .progressed-mobile")
    const tablet_navbar_progress = document.querySelector(".nav-mobile .progress-bar .progressed-tablet")

    const skills_imgs = document.querySelectorAll(".skills .skills-section .img-container .img")

    const skills_top = skills.getBoundingClientRect().top

    window.onscroll = function() {
      const documentHeight_mobile = body.getBoundingClientRect().height - window.innerHeight
      let windowY = window.pageYOffset

      go_to_top.style.top = windowY + window.innerHeight - go_to_top_height - 30 + 'px'

      let contentY = document.getElementById("page-content").getBoundingClientRect().top + windowY
      let header_scroll = header_height + windowY
      header.style.top = windowY + "px"
      if (header_scroll >= contentY) {
        header.classList.add('scrolled')
        go_to_top.style.opacity = 1
      } else {
        go_to_top.style.opacity = 0
        header.classList.remove('scrolled')
      }


      // skills img spin

      // Spin on different direction
      const skills_imgs_length = skills_imgs.length
      let additionnal_cont = 0
      for(var i = 0; i < skills_imgs_length / 2; i++) {
        skills_imgs[ 2 * i ].style.transform = "rotate(" + windowY * 0.2 +"deg)"
      }
      if (skills_imgs_length % 2) {
        additionnal_cont = 1
      } 
      for(var i = 0; i < skills_imgs_length / 2 - additionnal_cont; i++) {
        skills_imgs[ 2 * i + 1 ].style.transform = "rotate(" + windowY * -0.2 +"deg)"
      }

      // Spin on same direction
      // skills_imgs.forEach(skills_img => {
      //   skills_img.style.transform = "rotate(" + windowY * 0.2 +"deg)"
      // })


      // Mobile nav

      const gap = 50

      let skillsY = skills.getBoundingClientRect().top + windowY
      let projectsY = projects.getBoundingClientRect().top + windowY
      let whoY = who.getBoundingClientRect().top + windowY
      let contactY = contact.getBoundingClientRect().top + windowY

      let custom_header_scroll = header_scroll + gap


      if(custom_header_scroll < skillsY) {
        nav_skills.classList.remove('active')
        nav_projects.classList.remove('active')
        nav_who.classList.remove('active')
        nav_contact.classList.remove('active')
      } else if(custom_header_scroll >= skillsY && custom_header_scroll < projectsY) {
        nav_skills.classList.add('active')
        nav_projects.classList.remove('active')
        nav_who.classList.remove('active')
        nav_contact.classList.remove('active')
      } else if(custom_header_scroll >= projectsY && custom_header_scroll < whoY) {
        nav_skills.classList.remove('active')
        nav_projects.classList.add('active')
        nav_who.classList.remove('active')
        nav_contact.classList.remove('active')
      } else if(custom_header_scroll >= whoY && custom_header_scroll < contactY) {
        nav_skills.classList.remove('active')
        nav_projects.classList.remove('active')
        nav_who.classList.add('active')
        nav_contact.classList.remove('active')
      } else if(custom_header_scroll >= contactY) {
        nav_skills.classList.remove('active')
        nav_projects.classList.remove('active')
        nav_who.classList.remove('active')
        nav_contact.classList.add('active')
      }



      // Progress bar - mobile nav bar
      // splited in 4
      if(custom_header_scroll < skillsY) {
        mobile_navbar_progress.style.width = 0
      } else if(custom_header_scroll >= skillsY && custom_header_scroll < projectsY) {
        mobile_navbar_progress.style.width = ((custom_header_scroll - skillsY) * 25) / (projectsY - skillsY) + "%"
      } else if(custom_header_scroll >= projectsY && custom_header_scroll < whoY) {
        mobile_navbar_progress.style.width = 25 + ((custom_header_scroll - projectsY) * 25) / (whoY - projectsY) + "%"
      } else if(custom_header_scroll >= whoY && custom_header_scroll < contactY) {
        mobile_navbar_progress.style.width = 50 + ((custom_header_scroll - whoY) * 25) / (contactY - whoY) + "%"
      } else if(custom_header_scroll >= contactY) {
        mobile_navbar_progress.style.width = 75 + ((custom_header_scroll - contactY) * 25) / (documentHeight_mobile - contactY + gap) + "%"
      }
      
      // splited in 5
      if(custom_header_scroll < skillsY) {
        tablet_navbar_progress.style.width = (custom_header_scroll * 20) / skillsY + "%"
      } else if(custom_header_scroll >= skillsY && custom_header_scroll < projectsY) {
        tablet_navbar_progress.style.width = 20 + ((custom_header_scroll - skillsY) * 20) / (projectsY - skillsY) + "%"
      } else if(custom_header_scroll >= projectsY && custom_header_scroll < whoY) {
        tablet_navbar_progress.style.width = 40 + ((custom_header_scroll - projectsY) * 20) / (whoY - projectsY) + "%"
      } else if(custom_header_scroll >= whoY && custom_header_scroll < contactY) {
        tablet_navbar_progress.style.width = 60 + ((custom_header_scroll - whoY) * 20) / (contactY - whoY) + "%"
      } else if(custom_header_scroll >= contactY) {
        tablet_navbar_progress.style.width = 80 + ((custom_header_scroll - contactY) * 20) / (documentHeight_mobile - contactY + gap) + "%"
      }
    }
    
    $(".scroll-animation").click(function(event) {
      event.preventDefault()
      window.scroll({
        top: $($(this).attr("href")).offset().top - header_height,
        behavior: 'smooth',
      })
    })
  
    $(".scroll-to-top").click(function(event) {
      event.preventDefault()
      scrollToTop()
    })
  
    function scrollToTop() {
      window.scroll({
        top: 0,
        behavior: 'smooth',
      })
      header.classList.remove('scrolled')
    }
    

    const home_page = document.querySelector(".screen-container .main-container .home-page")
    const home_page_btns = document.querySelectorAll(".home_link")
    
    const cv_page = document.querySelector(".screen-container .main-container .cv-page")
    const cv_page_btns = document.querySelectorAll(".cv_link")
    
    const contact_page = document.querySelector(".screen-container .main-container .contact-page")
    const contact_page_btns = document.querySelectorAll(".contact_link")
    
    
    function swapPageToMainPage(elem) {
      event.preventDefault()
      let main = document.querySelector(".screen-container .main  .page")
      elem.after(main)
      click_to_select.after(elem)
    }
  
    function changePageTitle(title) {
      document.title = title
    }
  
    function swapToHomePage() {
      swapPageToMainPage(home_page)
      changePageTitle("Développeur Web - Mathis GASPAROTTO")
      window.history.pushState({'page_id': 1}, "", "/")
    }
    function swapToCvPage() {
      swapPageToMainPage(cv_page)
      changePageTitle("CV | Développeur Web - Mathis GASPAROTTO")
      window.history.pushState({'page_id': 2}, "", "/cv/")
    }
    function swapToContactPage() {
      swapPageToMainPage(contact_page)
      changePageTitle("Contact | Développeur Web - Mathis GASPAROTTO")
      window.history.pushState({'page_id': 4}, "", "/contact/")
    }
    
    home_page_btns.forEach(home_page_btn => {
      home_page_btn.addEventListener("click", () => {
        swapToHomePage()
      })
    })
  
    cv_page_btns.forEach(cv_page_btn => {
      cv_page_btn.addEventListener("click", () => {
        swapToCvPage()
      })
    })
    
    contact_page_btns.forEach(contact_page_btn => {
      contact_page_btn.addEventListener("click", () => {
        swapToContactPage()
      })
    })
   
    hamburger_menu.addEventListener("click", () => {
      container.classList.toggle("active")
      
      const nav_links = document.querySelectorAll(".nav-link")
         
      click_to_select.addEventListener("click", () => {
        container.classList.remove("active")
      })
  
      nav_links.forEach(nav_link => {
        nav_link.addEventListener("click", () => {
          container.classList.remove("active")
        })
      })

      desktop_nav_links.forEach(nav_link => {
        nav_link.addEventListener("click", () => {
          container.classList.remove("active")
          event.preventDefault()
          window.scroll({
            top: (eval(nav_link.getAttribute('href').replace('#', '') + '_top') - header_height) + 5,
            behavior: 'smooth',
          })
        })
      })
      
    })
  }, 1500)

  
})