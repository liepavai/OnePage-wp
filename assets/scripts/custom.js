jQuery(document).ready(function(){
jQuery('.grid').masonry({
  // options
	itemSelector: '.grid-item',
	columnWidth: ".grid-item"
});

var elements = jQuery('.sticky');
 Stickyfill.add(elements);
});