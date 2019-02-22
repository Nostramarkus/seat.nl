// Open and close filter div on model-overview page

$(document).ready(function(){

    //open id filter-overview
    $('#openFilterOverview').click(function(){
        $('#filter-overview').show();
      });

    //close id filter-overview
    $('#hideFilterOverview').click(function(){
        $('#filter-overview').hide();
    })  
});

// Change color car on configurator.php

$(document).ready(function() {
 
    $('.configurator-change-color input').on('click', function() {
        var carColor = $(this).attr('data-image');
   
        $('.active').removeClass('active');
        $('.configurator-header-image img[data-image = ' + carColor + ']').addClass('active');
        $(this).addClass('active');
    });
   
  });


