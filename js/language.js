$(document).ready(function(){
    $("#lang").change(function(){
    var lang = $("#lang").val();
       $.ajax({
        url: "language.php",
        type: "GET",
        dataType: "text",
        data: {'lang': lang},
        success:function(response){
            location.reload();
          },
          error: function(xhrjq, msg, error){
              alert("Couldn't change language");
              location.reload();
          }
       });
    });
});