$(function () {
    $("#CaptchaInputText").addClass("form-control");
    $("#form-contact").submit(function (event) {
        $("#mensaje").empty();
        $("#mensaje").removeClass("alert alert-success alert-danger");
        $.ajax(
              {
                  url: 'Contacto/Index',
                  dataType: 'json',
                  data: $(this).serialize(),
                  type: 'POST',
                  success: function (data) {
                      $(this).empty();
                      if (data.isOK) {
                          $("#mensaje").addClass("alert alert-success");
                          $("#mensaje").append(data.mensaje);
                          $('#mensaje').fadeIn('fast').delay(15000).fadeOut('slow');
                      } else {

                          $("#mensaje").addClass("alert alert-danger");
                          $("#mensaje").append(data.mensaje);
                          $('#mensaje').fadeIn('fast').delay(4000).fadeOut('slow');
                      }
                  },
                  error: function (xhr) {
                      //alert(xhr.statusText);
                  }
              });
        event.preventDefault();
    });
});
