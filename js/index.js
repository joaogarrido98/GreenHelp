$(document).ready(function () {
  $(document).on("scroll", function () {
    if ($(document).scrollTop() > 86) {
      $("#banner").addClass("shrink");
    }
    else {
      $("#banner").removeClass("shrink");
    }
  });
  AOS.init({
    duration: 800,
    easing: "ease-in-out"
  });
});