//bannerslider script
$(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });




/*custom.min css for image hover background color*/
	
jQuery(document).ready(function($){
	//portfolio - show link
	$('.fdw-background,.fdw-background2,.fdw-background3').hover(
		function () {
			$(this).animate({opacity:'1'});
		},
		function () {
			$(this).animate({opacity:'0'});
		}
	);	
});
 
 

//owl carousel script
$(document).ready(function() {

      $("#owl-demo").owlCarousel({
        items : 7,
        lazyLoad : true,
        navigation : true
      });

    });
	



