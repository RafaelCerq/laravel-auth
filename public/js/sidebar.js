
$('.nav-link').click(function( event ){
    event.preventDefault();
    $('.nav-item').not($(this).parent().addClass('active')).removeClass('active');
  });
