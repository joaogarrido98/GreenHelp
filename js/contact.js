$(document).ready(function () {
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
  $("#myBtn").click(function (event) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });
  $('#form').submit(function (event) {
    event.preventDefault();
    if ($('#form')[0].checkValidity() === false) {
      event.stopPropagation();
    } else {
      var name = $("#name").val();
      var email = $("#email").val();
      var phone = $("#phone").val();
      var message = $("#message").val();
      var status = navigator.onLine;
      if (status) {
        $.ajax({
          url: "Contactus.php",
          type: "GET",
          dataType: "text",
          data: { 'name': name, 'email': email, 'phone': phone, 'message': message },
          success: function (response) {
            if (response == "Error") {
              $(".form-control").val('');
              $("#emailnotsent").css("display", "block");
              $("#emailnotsent").fadeOut(4000);
            } else {
              $(".form-control").val('');
              $("#emailsent").css("display", "block");
              $("#form").css("display", "none");
            }
          },
          error: function (xhrjq, msg, error) {
            $(".form-control").val('');
            $("#emailnotsent").css("display", "block");
            $("#emailnotsent").fadeOut(4000);
          }
        });
      } else {
        $("#form").css("display", "none");
      }
    }
    $('#form').addClass('was-validated');
  });
  $(document).ajaxStart(function () {
    $("#spinner").show();
    $("#send").hide();
  })
    .ajaxStop(function () {
      $("#spinner").hide();
      $("#send").show();
    });

  AOS.init({
    duration: 800,
    easing: "ease-in-out"
  });

});
(function () {
  'use strict';
  window.addEventListener('load', function () {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
