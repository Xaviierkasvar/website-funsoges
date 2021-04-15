$(document).ready(function() {

  $('#key2').keyup(function() {

    var pass1 = $('#key1').val();
    var pass2 = $('#key2').val();

    if ( pass1 == pass2 ) {
      $('#checkey').css("background", "url(../img/check.png)");
    } else {
      $('#checkey').css("background", "url(../img/check-.png)");
    }

  });

});
$(function(){
        // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
        $("#adicional").on('click', function(){
          $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
        });
       
        // Evento que selecciona la fila y la elimina 
        $(document).on("click",".eliminar",function(){
          var parent = $(this).parents().get(0);
          $(parent).remove();
        });
      });

$(window).scroll(function() {
        if ($("#barra").offset().top > 56) {
            $("#barra").addClass("bg-dark");
        } else {
            $("#barra").removeClass("bg-dark");
        }
      });