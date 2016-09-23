var Page = (function() {
				
				var config = {
						$bookBlock : $( '#bb-bookblock' ),
						$navNext : $( '#nn' ),
						$navPrev : $( '#pp' ),
						// $navFirst : $( '#bb-nav-first' ),
						// $navLast : $( '#bb-nav-last' )
					},
					init = function() {
						config.$bookBlock.bookblock( {
							speed : 800,
							shadowSides : 0.8,
							shadowFlip : 0.7
						} );
						initEvents();
					},
					initEvents = function() {
						
						var $slides = config.$bookBlock.children();

						// add navigation events
						config.$navNext.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'next' );
							return false;
						} );

						config.$navPrev.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'prev' );
							return false;
						} );

						// config.$navFirst.on( 'click touchstart', function() {
							// config.$bookBlock.bookblock( 'first' );
							// return false;
						// } );
// 
						// config.$navLast.on( 'click touchstart', function() {
							// config.$bookBlock.bookblock( 'last' );
							// return false;
						// } );
						
						// add swipe events
						$slides.on( {
							'swipeleft' : function( event ) {
								config.$bookBlock.bookblock( 'next' );
								return false;
							},
							'swiperight' : function( event ) {
								config.$bookBlock.bookblock( 'prev' );
								return false;
							}
						} );

						// add keyboard events
						$( document ).keydown( function(e) {
							var keyCode = e.keyCode || e.which,
								arrow = {
									left : 37,
									up : 38,
									right : 39,
									down : 40
								};

							switch (keyCode) {
								case arrow.left:
									config.$bookBlock.bookblock( 'prev' );
									break;
								case arrow.right:
									config.$bookBlock.bookblock( 'next' );
									break;
							}
						} );
					};

					return { init : init };

			})();
				

$(document).ready(function(){
	
	var img = $( this );
	alert(img.attr('class'));
	var sliderUl= $( '<div class="main clearfix">'+
				'<div class="bb-custom-wrapper">'+
					'<div id="bb-bookblock" class="bb-bookblock">'+
						'<div class="bb-item">'+
							'<a href="#"><img src="images/demo1/1.jpg" alt="image01"/></a>'+
						'</div>'+
						'<div class="bb-item">'+
							'<a href="#"><img src="images/demo1/2.jpg" alt="image02"/></a>'+
						'</div>'+
						'<div class="bb-item">'+
							'<a href="#"><img src="images/demo1/3.jpg" alt="image03"/></a>'+
						'</div>'+
						'<div class="bb-item">'+
							'<a href="#"><img src="images/demo1/4.jpg" alt="image04"/></a>'+
						'</div>'+
						'<div class="bb-item">'+
							'<a href="#"><img src="images/demo1/5.jpg" alt="image05"/></a>'+
						'</div>'+
					'</div>'+
					'<nav>'+
						'<a id="pp" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>'+
						'<a id="nn" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>'+
					'</nav>'+
				'</div>'+
			'</div>' );
			
	var slider= $( '<div id="container"></div>' ).append(sliderUl);
	
	$('.og-fullimg').append(slider);
	
	$.getScript("js/jquery.bookblock.js", function(){
		Page.init();
		
		
	
	});

});
				
	