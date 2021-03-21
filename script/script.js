$(document).ready(function() {

  const navbar = $("#main-menu");
  const button = $("#top_button");

  $(window).scroll(function() {
    if ($(window).scrollTop() <= 80) {
      navbar.removeClass("nav-scroll");

      button.removeClass("top_button");
      button.addClass("top_button_del");
    } else {
      navbar.addClass("nav-scroll");

      button.addClass("top_button");
      button.removeClass("top_button_del");
    }
  });

})

$(document).ready(function() {
  $("#qui_button").click(function(event) {
    event.preventDefault();
    $("html, body").animate({
      scrollTop: $($(this).attr("href")).offset().top
    }, 500);
  });
});

$(document).ready(function() {
  $("#top_button a").click(function(event) {
    event.preventDefault();
    $("html, body").animate({
      scrollTop: $($(this).attr("href")).offset().top
    }, 500);
  });
});

$(document).ready(function() {
  $("#top_logo").click(function(event) {
    event.preventDefault();
    $("html, body").animate({
      scrollTop: $($(this).attr("href")).offset().top
    }, 500);
  });
});