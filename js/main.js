/* 
Hi Tim!

Gebruik $(document).ready(... altijd maar 1 keer.
jQuery werkt met zogenaamde css-selectors, dwz dat je elementen op de pagina kunt beetp[akken net zoals je dit met css 
zou doen. 

Een voorbeeld met css:
#mijnIdSelector{
 ...
}

Een voorbeeld met jQuery:
$("#mijnIdSelector")...

Om een selector te kunnen vinden moet je html document volledig ingeladen zijn. Precies hiervoor dient de $(document).ready
Alles wat binnen $(document).ready staat wordt pas uitgevoerd indien je html document volledig klaar is met laden. Daarom
heeft een js bestand wat van jQuery gebruik maakt altijd maar één keer $(document).ready erin staan.

De rest van deze code ziet er wel oke uit

Gr Mark
*/


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


