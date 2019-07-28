/*!
 * Vallenato 1.0
 * A Simple JQuery Accordion
 *
 * Designed by Switchroyale
 * 
 * Use Vallenato for whatever you want, enjoy!
 */

$(document).ready(function()
{
	//Add Inactive Class To All Accordion Headers
	$('.accordion-header').toggleClass('inactive-header');
//	$('.accordion-header').addClass('accordion-view-more1');
	//Set The Accordion Content Width
//	var contentwidth = $('.accordion-header').width();
//	$('.accordion-content').css({'width' : contentwidth });

	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
//			$('.active-header').removeClass('accordion-view-more2');
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			//$(this).toggleClass('accordion-view-more1').toggleClass('accordion-view-more1').toggleClass('accordion-view-more2');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			//$(this).toggleClass('.accordion-view-more2').toggleClass('.accordion-view-more1');
//			$('.active-header').addClass('accordion-view-more2');
			$(this).next().slideToggle().toggleClass('open-content');			
		}
		
		//else {			
			//$(this).toggleClass('active-header').toggleClass('inactive-header');
			//$('.inactive-header').toggleClass('accordion-view-more2').toggleClass('accordion-view-more1');
			//$('.accordion-header').addClass('accordion-view-more1');
			//$(this).next().slideToggle().toggleClass('open-content');
		
		//}
	});
	
	return false;
});