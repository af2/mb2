/* Author: Adam Elsodaney @ ArchFizz */

/**
 *	Front Page Slideshow Carousel
 */
$('.carousel').carousel({
  interval: 6000
})

/**
 *	Dropdown for navbar
 */
$('.dropdown-toggle').dropdown();


/**
 *	jQuery Masonry: Preload images, constrain to 
 */
 
var $container = $('#wall');

$container.imagesLoaded( function(){
  $container.masonry({
    itemSelector : '.box'
  });
});

/*
$('#wall').masonry({
  itemSelector: '.box',
  whpe
  isAnimated: true
});
*/


