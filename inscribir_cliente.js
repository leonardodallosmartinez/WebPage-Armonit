$(function () {
    'use strict'
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated')
        }, false)
      });
      
    //$(".hdate").val(hoy.toLocaleDateString() + " - " + hoy.getHours() +  ":" + hoy.getMinutes() + ":" + hoy.getSeconds()); 
    //$(".hdate").val(hoy.get);
    
    $("form").on("submit", function(){
      let hoy = new Date();
      $(".hdate").val(hoy.toLocaleDateString() + " - " + hoy.getHours() +  ":" + hoy.getMinutes() + ":" + hoy.getSeconds());
    });
  });

