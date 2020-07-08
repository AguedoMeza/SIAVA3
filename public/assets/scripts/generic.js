$(document).ready(function() {

  $('.form-user').submit(function(event) {
    event.preventDefault();

    $.ajax({
      url: $(this).attr('action'),
      type: 'POST',
      dataType: 'json',
      data: $(this).serialize()
    })
    .done(function(response) {
      // Termina
        console.log(response.valid);

      if (response.valid) {
        if (response.redirect) {
//            alert( response.redirect);
          window.location.href = response.redirect;
          
        } else {
          swal(
            'Éxito!',
            response.mensaje,
            'success'
          );
        }
      }
      // Termina
      else {
          if(response.redirect){
              window.location.href = response.redirect;
          }else{
          
        swal(
          '',
          response.mensaje,
          'error'
        );
        }
      }
      // console.log("success");
    })
    .fail(function(response) {
      // console.log("error");
         console.log(response);
    })
    .always(function() {
      // console.log("complete");s
    });


  });

});
