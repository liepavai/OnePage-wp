console.log(0);
jQuery(document).ready(function(){
console.log(1);

	jQuery('.burger-nav').click(function(){
console.log(2);
		jQuery('.menu').toggleClass('open');
	});
});