"use strict";

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

	// Get date 
	//getDateYear();

	// Open & close aside
	$( document ).on('click', '.nav__user', function(event) {
		$(".user__icon").toggleClass('highlight');
		$(".indexpage").toggleClass('shrink');
	});

	//Form Doubt
	$('span.doubt-sign').hover(
		function () {
			$(this).parent('.input-label-content').parent('.input-label').siblings('.doubt').addClass('active');
		},
		function () {
			$(this).parent('.input-label-content').parent('.input-label').siblings('.doubt').removeClass('active');
		}
	);

	// Remove disabled attribute
	$(".user__settings__input__edit").click(function(event){
	   event.preventDefault();

	   if($(".user__settings__input__edit").children($('i')).hasClass('save')) {
	   		$(this).children($('i')).removeClass('save');
	   		$(this).siblings($(".user__settings__input")).prop("disabled", true); 
	   } else {
	   		$(".user__settings__input__edit").children($('i')).removeClass('save');
	   		$(this).children($('i')).addClass('save');
	   		$(".user__settings__input").prop("disabled", true); 
	   		$(this).siblings($('.user__settings__input')).prop("disabled", false);
			$(".user__settings__input__block").removeClass('editing');
			$(this).parent($(".user__settings__input__block")).addClass('editing');
	   }
	});

	// Searchbar animation
	$(".searchbar__input").focusin(function() {
		if($(".searchbar__input").prop("placeholder").length > 0 || $(".searchbar__input").prop("value").length > 0) {
			$(".searchbar__icon").fadeOut(100);
			$(this).attr("placeholder", "");
		}
	});

	$(".searchbar__input").focusout(function() {
		$(".searchbar__icon").fadeIn(300);
		if($(".searchbar__input").prop("value").length <= 0) {
			$(".searchbar__icon").removeClass('close');
			$(this).attr("placeholder", "Search");
		} else {
			$(".searchbar__icon").addClass('close');
		}
	});

	$(".searchbar__icon").click(function(){
		if($(".searchbar__input").prop("value").length >= 1) {
			$(".searchbar__input").val("");
		}
	});
});

/* FUNCTIONS */

/* Get date Year
function getDateYear() {
    var d = new Date();
    var year = d.getFullYear();
    document.getElementById("date").innerHTML = year.toString();
}*/

