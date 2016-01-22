
(function($) {

	//Modal Responsive Nav
	$('.RespNav-Open').on('click touch', function(){
   	//console.log('Open menu clicked!');
   	$('#modal').addClass('js-modalIsVisible');
 	});

	$('.RespNav-close').on('click touch', function(){
   	//console.log('Close menu clicked!');
   	$('#modal').removeClass('js-modalIsVisible');
 	});
	//End
	




	

	//Chefs Slider
	$('.flexslider').flexslider({
	  animation: "slide",
	  initDelay: 1000
	});
	//End

	




	// New submit button to cover openTable default button
	$("#OT_submitWrap").append('<button class="[ btn btn-border btn--boxes btn--new-submit ]">Book Now</button>');






	// Set isActive Class to Menu Navigation Items
	var url = window.location.pathname,
			newUrl = url.split('?')[0]; // get rid of parameters

	//console.log('The url: ' + url);
	//console.log('The url without parameters: ' + newUrl);

	newUrl = newUrl.slice(1); // remove trailing slash
	//console.log('The url without trailing slash: ' + newUrl);
	
	
	newUrl = newUrl.split('/').slice(-1).pop(); // get rid of folder tree
	//console.log('The url without the folder tree: ' + newUrl);

	
	$('.main-nav__ul a[href="' + newUrl + '"]').addClass('isActive');
  //End





  //Home Page Pop UP new-york/
  var url = window.location.pathname;

  console.log('home URL = ' + url);


  function closePopUp() {
    $('#js-popUpModal').css({
      'opacity' : '0',
      'zIndex': '-3' 
    });

    $('html').removeClass('popUpHiddenOverflow');
  }

  if (url == '/new-york/') {
    
    console.log('home URL = ' + url);

    $('html').addClass('popUpHiddenOverflow');

    

    $('.popUpModal__close').on('click touch', closePopUp);

    //Close on ESC key
    $(document).on('keyup', function (e) {
      if(e.keyCode === 27) { closePopUp(); }
    });

  }
  //End





})(jQuery);