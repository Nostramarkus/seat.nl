// Open and close filter div on model-overview page

$(document).ready(function(){

    //open div
    $('#openFilterOverview').click(function(){
        $('#filter-overview').show();
      });

    //close div
    $('#hideFilterOverview').click(function(){
        $('#filter-overview').hide();
    })  
     
});
