//$(document).ready(function() {

//----------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------
// Mobile Menu Stuff
//----------------------------------------------------------------------------------------------------------------

$("ul.sub-menu").addClass('dropdown-menu');  
$('li.dropdown a').attr('data-toggle', 'dropdown');
$("li.menu-item-has-children a").append('<b class="caret"></b>');
$("li.menu-item-has-children .sub-menu li a b.caret").remove();

//----------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------
// Scroll to top
//----------------------------------------------------------------------------------------------------------------


$(window).scroll(function(){

	if ($(this).scrollTop() > 100) {
    	$('.scrollup').fadeIn();
  
  	} else {
    	$('.scrollup').fadeOut();
  
  	}	

}); 
 
$('.scrollup').click(function(){
  
	$("html, body").animate({ scrollTop: 0 }, 600);
	return false;

});


//----------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------
// Fancy Box
//----------------------------------------------------------------------------------------------------------------

/*
jQuery(document).ready(function() {
	$(".fancybox").fancybox({
		'width'         : '50%',
	    'height'        : '75%',
	    'autoScale'     : false,
	    'transitionIn'  : 'none',
	    'transitionOut' : 'none',
	    'type'          : 'iframe'
	});
});
*/
//----------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------
// Fitvids
//----------------------------------------------------------------------------------------------------------------
jQuery(".entry-content").fitVids();



//------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------
// WooCommerce Shoppong cart extras


function cart_dropdown_improvement() {
	var dropdown = $('.cart_dropdown'),
		subelement = dropdown.find('.dropdown_widget').css({display:'none', opacity:0});

	dropdown.hover(
		function(){ subelement.css({display:'block'}).stop().animate({opacity:1}, 200); },
		function(){ subelement.stop().animate({opacity:0}, function(){ subelement.css({display:'none'}); }); }
	);
}


jQuery(document).ready(function(){

	cart_dropdown_improvement();

	$(".quantity input[type=number]").each(function(){
		var number = $(this),
		newNum = $($('<div />').append(number.clone(true)).html().replace('number','text')).insertAfter(number);
		number.remove();
	});

});