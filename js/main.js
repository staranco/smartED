window.onload = function() {
  if(/iP(hone|ad)/.test(window.navigator.userAgent)) {
    document.body.addEventListener('touchstart', function() {}, false);
  }
};

/* DOCUMENT READY */
$(document).ready(function() {
		
    //Remove # from href
	$( document ).on('click', 'a', function(event) {
		var ahref = $(this).attr('href');
		if(ahref=="#"){
			event.preventDefault(); 
		}
	});

	// Equal Heights 
	$(function() {
	    $('.equal-height').matchHeight();
	});

	// Sticky Menu
	if (!($('.banner').length))  {
		$('.header').removeAttr("id","home");
	} else {
		$('.header').attr("id","home");
	}

	// Trigger submenu on hover
	$('.no-touch .menu__item.user').hover(function() {
		$('.submenu').toggleClass('active');
	});

	// Trigger submenu on mobile
	if ($(window).width() <= 1025) {  
        $( document ).on( "click", '.menu__item.user', function() {
		  $('.main').addClass('active');
		  $('.overlay').addClass('active');
		});
   	} 
	$(window).resize(function(){
       	if ($(window).width() <= 1025) {  
            $( document ).on( "click", '.menu__item.user', function() {
			  $('.main').addClass('active');
			  $('.overlay').addClass('active');
			});
       	}     
	});

	$( document ).on( "click", '.overlay', function() {
		$('.main').removeClass('active');
		$('.overlay').removeClass('active');
	});

	// Slider
	$('.carousel').owlCarousel({
		navigation : false, 
		pagination: true,
		slideSpeed : 800,
		singleItem: true,
		autoHeight: false,

		afterAction: function(el){
		   //remove class active
		   this
		   .$owlItems
		   .removeClass('active')

		   //add class active
		   this
		   .$owlItems //owl internal $ object containing items
		   .eq(this.currentItem)
		   .addClass('active')    
		} 
	});
	var owl = $(".carousel").data('owlCarousel');
	
	$( document ).on( "click", ".navigation__item_prev", function() {
	  owl.prev()
	});
	$( document ).on( "click", ".navigation__item_next", function() {
	  owl.next()
	});

	/* Show or Hide tables with tabs nav */
	$( document ).on( "click", ".tabs__link", function() {
	  var tabSelector = $(this).attr('data-rel');

	  $( ".tabs__link" ).removeClass('active');
	  $( this ).addClass('active');

	  $( ".course__tabs .content__block" ).removeClass('active');
	  $( ".course__tabs .content__block#" + tabSelector ).addClass('active');
	});

	// Magnific Popup
	$('.popup__link').magnificPopup({
		type:'inline',
		midClick: false,
		removalDelay: 300,
		fixedContentPos: true,
   		fixedBgPos: true,
		mainClass: 'mfp-fade'
	});

	/* Show or Hide tables with tabs nav on POPUP */
	$( document ).on( "click", ".popup__tab a", function() {
	  var tabSelector = $(this).attr('data-rel');

	  $( ".popup__tab a" ).removeClass('active');
	  $( this ).addClass('active');

	  $( ".popup__content" ).removeClass('active');
	  $( ".popup__content#" + tabSelector ).addClass('active');
	});

	// Get date 
	getDateYear();
});

/* FUNCTIONS */

/* Print message */
function print(message) {
    document.write(message);
}

/* Get date Year*/
function getDateYear() {
    var d = new Date();
    var year = d.getFullYear();
    document.getElementById("date").innerHTML = year.toString();
}
