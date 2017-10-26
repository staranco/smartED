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
			$(".searchbar__icon").removeClass('close');
			$(".searchbar__input").attr("placeholder", "Search");
		}
	});

	// Ticker
	$(".ticker__token").click(function(e){
		e.preventDefault();
		var tickerHeight = $(".ticker__token").height();
		var countTickers = $(".ticker__token").index(this);
		var displacement = tickerHeight * countTickers;
		$(".ticker__band").css({
			'transform': 'translateY(' + -displacement + 'px)',
		});
		$(".ticker__token").removeClass('loaded');
		$(this).addClass('loaded');
		$(this).prev().addClass('loaded');
		$(this).next().addClass('loaded');
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('.dictionary').animate({
	          scrollTop: $('.dictionary').scrollTop() + target.offset().top - 200
	        }, 1000);
	        return false;
	      }
	    }
	});

	// Know what is the letter to show
	var articles = $(".results__letter"),
	    articlesPos = [],
	    articlesCur = -1,
	    targetOffset = 250;

	articles.each(function(){
		articlesPos.push($(this).offset().top);
	});

	$('.dictionary').bind("scroll", function(){
		var targ = articlesPos.binarySearch($('.dictionary').scrollTop() + targetOffset);
		if (targ != articlesCur) {
			articlesCur = targ;
			articles.removeClass("cur").eq(targ).addClass("cur");
		}

		// Get initial letter
		getInitialLetter();
	});

	Array.prototype.binarySearch = function(find) {
	  var low = 0, high = this.length - 1,
	      i, comparison;
	  while (low <= high) {
	    i = Math.floor((low + high) / 2);
	    if (this[i] < find) { low = i + 1; continue; };
	    if (this[i] > find) { high = i - 1; continue; };
	    return i;
	  }
	  return this[i] > find ? i-1 : i;
	};
});

// Display words
$.getJSON( "./js/dictionary.json", function(data) {
  var dictionary = data.dictionary;
  var d;
  for(d = 0; d < dictionary.length; d ++) {
    var letters = dictionary[d];
    var letterSectionId = (Object.keys(letters)).toString();
    var letterSection = $('<section/>', {
      'class': 'results__letter',
      'id': 'section_letter-' + letterSectionId
    }).appendTo('.results__container');

    $.each(letters, function(i, item) {
      var words = Object.values(letters[i]);
      var w;
      for(w = 0; w < words.length; w ++) {
        var word = Object.values(words[w])[0];
        var wordName = Object.values(word[0]).toString();
        var wordEtymology = Object.values(word[1]).toString();
        //To do: show word meanings
        var wordMeanings = Object.values(word[2]);
        var m;
        for(m = 0; m < wordMeanings.length; m ++) {
          var meaningEntry = $('<li/>', {
            'class': 'article__definition'
          }).appendTo('.article__definitions');
        }
        var wordArticle = $('<article/>', {
          'class': 'results__article',
          'data-letter': letterSectionId,
          html: (
            '<header class="article__header">' + wordName + '</header><p class="article__specs">' + wordEtymology + '</p><ul class="article__definitions" />')
        }).appendTo('.results__letter#section_letter-' + letterSectionId);
      }
    })
  }

}).done(function() {}).fail(function() {}).always(function() {});

/* FUNCTIONS */
function getInitialLetter() {
	var initialLetter = $('.dictionary section.cur').attr('id').slice(-1);
	$('.dictionary').bind("scroll", function(){
		$("#initial__display__letter").text(initialLetter);
	});
}
