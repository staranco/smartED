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

	/* Equal Heights */
	$(function() {
	    $('.equal-height').matchHeight();
	    $('.equal-height-01').matchHeight(); 
	});

	/* Mobile menu trigger */
	$('.mobilemenu__link').click(function(event) {
		$(this).toggleClass('close');
		$( ".header__container_right" ).toggleClass('open');
		$( ".overlay" ).fadeToggle('fast');
	});

	/* Get date */
	getDateYear();
	getDateMonthYear();
	
	/* Slick Slider */
	$('#carousel').owlCarousel({
		navigation : false, 
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem: true,
		pagination: false,
		rewindNav: false,
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

	var owl = $("#carousel").data('owlCarousel');
	
	$( document ).on( "click", ".navigation__item_prev", function() {
	  owl.prev()
	});
	$( document ).on( "click", ".navigation__item_next", function() {
	  owl.next()
	});

	/* Go to slide from thumbnails */
	$( document ).on( "click", ".thumbnails__item", function(e) {
		e.preventDefault();
		var numThumb = $(this).children('a').attr('data-rel');
		owl.goTo(numThumb - 1);
		$( ".thumbnails" ).toggleClass('visible');
	  	$( ".navigation__item_thumbnails" ).removeClass('close');
	  	$( ".hiddenlayer" ).removeClass('visible');
	  	$( "html" ).toggleClass('no-overflow-y');
	});

	/* Show thumbnails */
	$( document ).on( "click", ".navigation__item_thumbnails", function() {
	  $( ".thumbnails" ).toggleClass('visible');
	  $( ".hiddenlayer" ).toggleClass('visible');
	  $( ".navigation__item_thumbnails" ).toggleClass('close');
	  $( "html" ).toggleClass('no-overflow-y');
	});

	$('.hiddenlayer').click(function() {
		if ($('.thumbnails').hasClass('visible')) {
			$( ".thumbnails" ).toggleClass('visible');
	  		$( ".navigation__item_thumbnails" ).toggleClass('close');
	  		$( ".hiddenlayer" ).removeClass('visible');
		}
	});

	/* Show more Overblock */
	$( document ).on( "click", ".overblock__more_btn", function() {
	  $( ".overblock .paragraph" ).slideToggle('fast');
	  $( ".overblock__more_btn" ).toggleClass('close');
	});

	/* Show or Hide tables with tabs nav */
	$( document ).on( "click", ".tables__navigation .tables__navigation_link", function() {
	  var tableSelector = $(this).attr('data-rel');

	  $( ".tables__navigation_link" ).removeClass('active');
	  $( this ).addClass('active');

	  $( ".table" ).removeClass('active');
	  $( ".table#" + tableSelector ).addClass('active');
	});
});

/* FUNCTIONS */

/* Get date Year*/
function getDateYear() {
    var d = new Date();
    var year = d.getFullYear();
    var next = d.getFullYear() + 1;
    document.getElementById("date").innerHTML = year.toString() + ' - ' + next.toString();
}

/* Get date Month Year*/
function getDateMonthYear() {
	var monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
	  "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
	];
    var m = new Date();
    var year = m.getFullYear();
    var month = monthNames[m.getMonth()];
    document.getElementById("datemonth").innerHTML = month.toString() + ' ' + year.toString();
}