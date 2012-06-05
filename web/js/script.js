/* Author: Adam Elsodaney @ ArchFizz */

/**
 *	Front Page Slideshow Carousel
 */
$('.carousel').carousel({
  interval: 6000
})

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
  columnWidth: 10
  isAnimated: true
});
*/


