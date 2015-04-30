$(document).ready(function() {

  $('input').blur(function() {
	console.log($(this))
    // check if the input has any value (if we've typed into it)
    if ($(this).val())
      $(this).addClass('used');
    else
      $(this).removeClass('used');
  });
  
});


$(document).ready(function(){
    $('.submit').click(function(){
       $('button').html('');
       $('button').removeClass('submit');    
       $('button').addClass('loader');
       setTimeout(function() {
           $('button').removeClass('loader');
           $('button').addClass('success');
           $('button').removeClass('submit');
           $('button').html('<i class="ion-checkmark-round"></i>');
      }, 2000);

       
       
        
    });
    
});