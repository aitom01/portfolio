$(document).ready(function() {
	$(".fancybox").fancybox({fitToView:false, maxWidth: "90%",openEffect	: 'elastic', closeEffect: 'elastic',helpers : {
    		title : {
    			type : 'inside'
    		}
    	}});

	$('#devtabs a').click(function (e) {
	  e.preventDefault();
	  /*
	  $('#devtabs a').removeClass("active");
	  $(this).tab('show').addClass("active");
	  */

	  var target = $($(this).attr('href'));
	  var n = target.offset().top;
	  var highlight = target.find("div.js_highlight");

	  if(highlight.length==0){
	  	target.css({position: 'relative'});
	  	target.append('<div class="js_highlight">test</div>');
	  	var highlight = target.find("div.js_highlight");
		highlight.css({	
						position: 'absolute',
	  					top:'0px',
	  					left:'-10px',
	  					opacity: 0,
	  					backgroundColor: '#5923a1',
	  					borderRadius: '10px',
	  					width: (target.innerWidth()+20)+'px',
	  					height: (target.innerHeight()+10)+'px'
	  				});	  	
	  }
	  highlight.show().css({
  					width: (target.innerWidth()+20)+'px',
  					height: (target.innerHeight()+10)+'px'
  				});	

	  //var n = $('.tab-content').offset().top;
      $('html, body').animate({ scrollTop: n-15 }, 750,'swing',
      					function(){ 
      						highlight.animate({opacity: 0.05},300,'swing',
      							function(){ 
      								highlight.animate({opacity: 0},500,'swing',function(){highlight.hide()}) 
      							}
      						)
      					}
      				);
	});
	//$('#devtabs a:first').tab('show');
	$('.show_more').click(function (e) {
		e.preventDefault();
		var target = $(this).attr('rel');
		$('#'+target).animate({height: $('#'+target+' div:first').innerHeight()+'px'},1000,'swing',function(){$('#'+target).css({height: 'auto'})});
		$(this).fadeOut();
	});

}); 
