// JavaScript Document
$( document ).ready(function(){
	$('.slider').slider({full_width: true,indicators: false});
	$(".button-collapse").sideNav();
	$('.parallax').parallax();
	$('.carousel.carousel-slider').carousel({full_width: true});
	$('.modal-trigger').leanModal();

    $('.datepicker').pickadate({
    	selectMonths: true, // Creates a dropdown to control month
    	selectYears: 15 // Creates a dropdown of 15 years to control year
  	});


	
});
