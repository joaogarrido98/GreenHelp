$(document).ready(function () {
    $("#myBtn").click(function (event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    $(document).on("scroll", function () {
        if ($(document).scrollTop() > 86) {
            $("#banner").addClass("shrink");
            $('#myBtn').fadeIn();
        }
        else {
            $("#banner").removeClass("shrink");
            $('#myBtn').fadeOut();
        }
    });
    AOS.init({
      duration: 800,
      easing: "ease-in-out"
    });
});

  