/*
* debouncedresize: special jQuery event that happens once after a window resize
*
* latest version and complete README available on Github:
* https://github.com/louisremi/jquery-smartresize/blob/master/jquery.debouncedresize.js
*
* Copyright 2011 @louis_remi
* Licensed under the MIT license.
*/

 

var $event = $.event,
$special,
resizeTimeout;
// alert(cc)
 // $(document).ready(function(){
//      
     // $.ajax({
        // dataType : "json",
        // type : "POST",
          // data : {
            // site_id :site_id,
            // b_id : b_id,
             // c_id : c_id
        // },
       // url : 'services/adj_get_thumb_related_images.php',
// 
        // success : function(response) {
//          
             // var total_count=response.total_count;
                // //alert(total_count);
                // var ax='';
                // var rec_s= new Array();
                    // for(var i=0; i<total_count; i++)
                    // {
//                        
                // ax+= '<div class="bb-item"><a href="#"><img src="../'+response.data[i].image_url+'" alt="image01"/></a></div>' ;       
                    // } 
                    // pl=ax;
                       // cc='<div class="main clearfix">'+
                // '<div class="bb-custom-wrapper">'+
                    // '<div id="bb-bookblock" class="bb-bookblock">'+
                       // pl+
               // // this.$sliderUl=             $(
                    // '</div>'+
                    // '<nav>'+
                        // '<a id="pp" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>'+
                        // '<a id="nn" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>'+
                    // '</nav>'+
                // '</div>'+
            // '</div>';
          // //  foo=1;
//            
             // // site_id =1;
          // // b_id =1;
          // // c_id =3;
              // //this.$sliderUl= $( cc ).append( this.$sliderLi );
                 // // alert(cc);         // alert(pl)
                 // //im()
                  // //return cc;
                  // //this.$sliderUl= $( cc ).append( this.$sliderLi )
        // }
// });
 // });

$special = $event.special.debouncedresize = {
	setup: function() {
		
		$( this ).on( "resize", $special.handler );
	},
	teardown: function() {
		$( this ).off( "resize", $special.handler );
	},
	handler: function( event, execAsap ) {
		
		// Save the context
		var context = this,
			args = arguments,
			dispatch = function() {
				// set correct event type
				event.type = "debouncedresize";
				$event.dispatch.apply( context, args );
			};

		if ( resizeTimeout ) {
			clearTimeout( resizeTimeout );
		}

		execAsap ?
			dispatch() :
			resizeTimeout = setTimeout( dispatch, $special.threshold );
	},
	threshold: 250
	
	
};

// ======================= imagesLoaded Plugin ===============================
// https://github.com/desandro/imagesloaded

// $('#my-container').imagesLoaded(myFunction)
// execute a callback when all images have loaded.
// needed because .load() doesn't work on cached images

// callback function gets image collection as argument
//  this is the container

// original: MIT license. Paul Irish. 2010.
// contributors: Oren Solomianik, David DeSandro, Yiannis Chatzikonstantinou

// blank image data-uri bypasses webkit log warning (thx doug jones)
var BLANK = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

$.fn.imagesLoaded = function( callback ) {
	var $this = this,
		deferred = $.isFunction($.Deferred) ? $.Deferred() : 0,
		hasNotify = $.isFunction(deferred.notify),
		$images = $this.find('img').add( $this.filter('img') ),
		loaded = [],
		proper = [],
		broken = [];

	// Register deferred callbacks
	if ($.isPlainObject(callback)) {
		$.each(callback, function (key, value) {
			if (key === 'callback') {
				callback = value;
			} else if (deferred) {
				deferred[key](value);
			}
		});
	}

	function doneLoading() {
		var $proper = $(proper),
			$broken = $(broken);

		if ( deferred ) {
			if ( broken.length ) {
				deferred.reject( $images, $proper, $broken );
			} else {
				deferred.resolve( $images );
			}
		}

		if ( $.isFunction( callback ) ) {
			callback.call( $this, $images, $proper, $broken );
		}
	}

	function imgLoaded( img, isBroken ) {
		// don't proceed if BLANK image, or image is already loaded
		if ( img.src === BLANK || $.inArray( img, loaded ) !== -1 ) {
			return;
		}

		// store element in loaded images array
		loaded.push( img );

		// keep track of broken and properly loaded images
		if ( isBroken ) {
			broken.push( img );
		} else {
			proper.push( img );
		}

		// cache image and its state for future calls
		$.data( img, 'imagesLoaded', { isBroken: isBroken, src: img.src } );

		// trigger deferred progress method if present
		if ( hasNotify ) {
			deferred.notifyWith( $(img), [ isBroken, $images, $(proper), $(broken) ] );
		}

		// call doneLoading and clean listeners if all images are loaded
		if ( $images.length === loaded.length ){
			setTimeout( doneLoading );
			$images.unbind( '.imagesLoaded' );
		}
	}
	
		// if no images, trigger immediately
	if ( !$images.length ) {
		doneLoading();
	} else {
		$images.bind( 'load.imagesLoaded error.imagesLoaded', function( event ){
			// trigger imgLoaded
			imgLoaded( event.target, event.type === 'error' );
		}).each( function( i, el ) {
			var src = el.src;

			// find out if this image has been already checked for status
			// if it was, and src has not changed, call imgLoaded on it
			var cached = $.data( el, 'imagesLoaded' );
			if ( cached && cached.src === src ) {
				imgLoaded( el, cached.isBroken );
				return;
			}

			// if complete is true and browser supports natural sizes, try
			// to check for image status manually
			if ( el.complete && el.naturalWidth !== undefined ) {
				imgLoaded( el, el.naturalWidth === 0 || el.naturalHeight === 0 );
				return;
			}

			// cached images don't fire load sometimes, so we reset src, but only when
			// dealing with IE, or image is complete (loaded) and failed manual check
			// webkit hack from http://groups.google.com/group/jquery-dev/browse_thread/thread/eee6ab7b2da50e1f
			if ( el.readyState || el.complete ) {
				el.src = BLANK;
				el.src = src;
			}
		});
	}

	return deferred ? deferred.promise( $this ) : $this;
};

var Grid = (function() {
	

		// list of items
	var $grid = $( '#og-grid' ),
		// the items
		$items = $grid.children( 'li' ),
		// current expanded item's index
		current = -1,
		// position (top) of the expanded item
		// used to know if the preview will expand in a different row
		previewPos = -1,
		// extra amount of pixels to scroll the window
		scrollExtra = 0,
		// extra margin when expanded (between preview overlay and the next items)
		marginExpanded = 10,
		$window = $( window ), winsize,
		$body = $( 'html, body' ),
		// transitionend events
		transEndEventNames = {
			'WebkitTransition' : 'webkitTransitionEnd',
			'MozTransition' : 'transitionend',
			'OTransition' : 'oTransitionEnd',
			'msTransition' : 'MSTransitionEnd',
			'transition' : 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		// support for csstransitions
		support = Modernizr.csstransitions,
		// default settings
		settings = {
			minHeight : 200,
			maxHeight : 300,
			speed : 350,
			easing : 'ease'
		};

	function init( config ) {
		
		// the settings..
		settings = $.extend( true, {}, settings, config );

		// preload all images
		$grid.imagesLoaded( function() {
// alert(11)
			// save item´s size and offset
			saveItemInfo( true );
			// get window´s size
			getWinSize();
			// initialize some events
			initEvents();
		});
	}

	// add more items to the grid.
	// the new items need to appended to the grid.
	// after that call Grid.addItems(theItems);
	function addItems( $newitems ) {
		//alert(1221);
		$items = $items.add( $newitems );

		$newitems.each( function() {
			var $item = $( this );
			$item.data( {
				offsetTop : $item.offset().top,
				height : $item.height()
			} );
		} );

		initItemsEvents( $newitems );

	}

	// saves the item´s offset top and height (if saveheight is true)
	function saveItemInfo( saveheight ) {
		$items.each( function() {
			var $item = $( this );
			$item.data( 'offsetTop', $item.offset().top );
			if( saveheight ) {
				$item.data( 'height', $item.height() );
			}
		} );
	}

	function initEvents() {
		
		// when clicking an item, show the preview with the item´s info and large image.
		// close the item if already expanded.
		// also close if clicking on the item´s cross
		initItemsEvents( $items );
			
		// on window resize get the window´s size again
		// reset some values..
		$window.on( 'debouncedresize', function() {
			
			scrollExtra = 0;
			previewPos = -1;
			// save item´s offset
			saveItemInfo();
			getWinSize();
			var preview = $.data( this, 'preview' );
			if( typeof preview != 'undefined' ) {
				hidePreview();
			}

		} );

	}

	function initItemsEvents( $items ) {
		
		$items.on( 'click', 'span.og-close', function() {
			hidePreview();
			return false;
		} ).children( 'a' ).on( 'click', function(e) {

			var $item = $( this ).parent();
			// check if item already opened
			current === $item.index() ? hidePreview() : showPreview( $item );
			return false;

		} );
	}

	function getWinSize() {
		winsize = { width : $window.width(), height : $window.height() };
	}

	function showPreview( $item ) {

		var preview = $.data( this, 'preview' ),
			// item´s offset top
			position = $item.data( 'offsetTop' );

		scrollExtra = 0;
//alert(preview)
//preview='undefined';
		// if a preview exists and previewPos is different (different row) from item´s top then close it
		if( typeof preview != 'undefined' ) {

			// not in the same row
			if( previewPos !== position ) {
			   
				// if position > previewPos then we need to take te current preview´s height in consideration when scrolling the window
				if( position > previewPos ) {
					scrollExtra = preview.height;
				}
				 hidePreview();
			}
			// same row
			else {
			 // alert(3)
			  cx=1;
                 hidePreview();
                // preview.create();
                
                 return false;
			}
			
		}

		// update previewPos
		previewPos = position;
		// initialize new preview for the clicked item
		preview = $.data( this, 'preview', new Preview( $item ) );
		//preview.create();
		// expand preview overlay
		preview.open();

	}

	function hidePreview() {
		current = -1;
		var preview = $.data( this, 'preview' );
		preview.close();
		$.removeData( this, 'preview' );
	}
	
	// function hidePreview1() {
        // current = -1;
        // var preview = $.data( this, 'preview' );
        // preview.close();
        // $.removeData( this, 'preview' );
        // //preview.mse();
    // }


	// the preview obj / overlay
	function Preview( $item ) {
	 //   setTimeout( $.proxy( function() {
		this.$item = $item;
		
		this.expandedIdx = this.$item.index();
		///this.mse();
		 // setTimeout( $.proxy( function() {   
		 //alert(cx)
		 // $("#og-grid").animate({top: "50px",}, 500).delay(5000);
		 
		    // alert(foo)
		this.create();
		//}, this ), 5 );
		//this.update();
		
		 //}, this ), 1000 );
	}
	
	function loadScript(url){
		
		var imported = document.createElement('script');
		imported.src = url;
		document.head.appendChild(imported);
	}
	
	function testFun() {
		alert('done...');
	}


	Preview.prototype = {
		
	   create1 : function() {
	       alert(567);
	   },
		
		create : function() {
		 //   alert( 54);
	  //
			 //alert('create');
			// create Preview structure:
			this.$title = $( '<h3></h3>' );
			this.$description = $( '<p></p>' );
			this.$href = $( '<a href="#">Images</a>' );
			this.$href1 = $( '<a href="#">Videos</a>' );
			this.$href2 = $( '<a href="#">Documents</a>' );
            this.$href3 = $( '<a href="#">Need Assistance?</a>' );
			this.$details = $( '<div class="og-details"></div>' ).append( this.$title, this.$description, this.$href, this.$href1, this.$href2, this.$href3 );
			this.$loading = $( '<div class="og-loading"></div>' );
			
		if(foo==1)
		{
			this.$sliderUl= $( cc ).append( this.$sliderLi );
			
			
			this.$slider= $( '<div id="container"></div>' ).append( this.$sliderUl);
			
			// this.$nxtBtn=$('<div class="slider-nav"><span class="right">Right</span><span class="left">Left</span></div>');
			
			this.$fullimage = $( '<div class="og-fullimg"></div>' ).append( this.$slider );
			this.$closePreview = $( '<span class="og-close"></span>' );
			this.$previewInner = $( '<div class="og-expander-inner"></div>' ).append( this.$closePreview, this.$fullimage, this.$details );
			this.$previewEl = $( '<div class="og-expander"></div>' ).append( this.$previewInner );
			// append preview element to the item
			this.$item.append( this.getEl() );
			//alert(support)
			//this.testfun();
			//alert(support)
			// set the transitions for the preview and the item
			if( support ) {
				this.setTransition();
			}
			}
			else
			{
			    alert(1981)
			}
			//alert(cx)
			// if(cx==1)
         // {
             // return false;
         // }
			//alert(12)
		},
	
		update : function( $item ) {				
			
			
			this.testfun();
			if( $item ) {
				this.$item = $item;
			}
			
			// if already expanded remove class "og-expanded" from current item and add it to new item
			if( current !== -1 ) {
				var $currentItem = $items.eq( current );
				$currentItem.removeClass( 'og-expanded' );
				this.$item.addClass( 'og-expanded' );
				// position the preview correctly
				this.positionPreview();
			}
// this.create();
			// update current value
			current = this.$item.index();

			// update preview´s content
			var $itemEl = this.$item.children( 'a' ),
			
				eldata = {
					href : $itemEl.attr( 'href' ),
					// largesrc : $itemEl.data( 'largesrc' ),
					title : $itemEl.data( 'title' ),
					description : $itemEl.data( 'description' )
				};

			this.$title.html( eldata.title );
			this.$description.html( eldata.description );
			this.$href.attr( 'href', eldata.href );
			// this.$href1.attr( 'href', eldata.href );
			// this.$href2.attr( 'href', eldata.href );
            // this.$href3.attr( 'href', eldata.href );

			var self = this;
//-----------------------------------------------------------------------------------------------------------------------------			
			// // remove the current image in the preview
			// if( typeof self.$largeImg != 'undefined' ) {
				// self.$largeImg.remove();
			// }
// 
			// // preload large image and add it to the preview
			// // for smaller screens we don´t display the large image (the media query will hide the fullimage wrapper)
			// if( self.$fullimage.is( ':visible' ) ) {
				// this.$loading.show();
				// $( '<img/>' ).load( function() {
					// var $img = $( this );
// 					
					// if( $img.attr( 'src' ) === self.$item.children('a').data( 'largesrc' ) ) {
						// self.$loading.hide();
						// //self.$fullimage.find( 'img' ).remove();
						// self.$largeImg = $img.fadeIn( 350 );
						// //self.$fullimage.append( self.$largeImg);
						// self.$fullimage.append( self.$slider);
						// //self.$fullimage.append( self.$nxtBtn);
						// this.testfun();
						// //self.$sliderUl.append('<img src="icons/1/1.jpg"/><img src="icons/1/2.jpg"/><img src="icons/1/3.jpg"/>');
					// }
				// } ).attr( 'src', eldata.largesrc );	
			// }
//-----------------------------------------------------------------------------------------------------------------------------			
			//alert($item);
			
			// this.create();

		},
		open : function() {
			this.testfun();
			 //alert('open');
			setTimeout( $.proxy( function() {	
				
				//this.testfun();
				// set the height for the preview and the item
				this.setHeights();
				// scroll to position the preview in the right place
				this.positionPreview();
			}, this ), 25 );
		//this.testfun();
		},
		close : function() {
			//alert('close');
			var self = this,
				onEndFn = function() {
					if( support ) {
						$( this ).off( transEndEventName );
					}
					self.$item.removeClass( 'og-expanded' );
					self.$previewEl.remove();
				};

			setTimeout( $.proxy( function() {

				if( typeof this.$largeImg !== 'undefined' ) {
					this.$largeImg.fadeOut( 'fast' );
				}
				this.$previewEl.css( 'height', 0 );
				// the current expanded item (might be different from this.$item)
				var $expandedItem = $items.eq( this.expandedIdx );
				$expandedItem.css( 'height', $expandedItem.data( 'height' ) ).on( transEndEventName, onEndFn );

				if( !support ) {
					onEndFn.call();
				}

			}, this ), 25 );
			this.testfun();
			return false;

		},
		calcHeight : function() {
			this.testfun();
			var heightPreview = winsize.height - this.$item.data( 'height' ) - marginExpanded,
				itemHeight = winsize.height;

			if( heightPreview < settings.minHeight ) {
				heightPreview = settings.minHeight;
				itemHeight = settings.minHeight + this.$item.data( 'height' ) + marginExpanded;
			}

			this.height = heightPreview;
			this.itemHeight = itemHeight;
//this.testfun();
		},
		setHeights : function() {
			this.testfun();
			var self = this,
				onEndFn = function() {
					if( support ) {
						self.$item.off( transEndEventName );
					}
					self.$item.addClass( 'og-expanded' );
				};

			this.calcHeight();
			this.$previewEl.css( 'height', '330px' );
			this.$item.css( 'height', '400px' ).on( transEndEventName, onEndFn );

			if( !support ) {
				onEndFn.call();
			}
//this.testfun();
		},
		positionPreview : function() {
			// alert('posPre');
			this.testfun();
			// scroll page
			// case 1 : preview height + item height fits in window´s height
			// case 2 : preview height + item height does not fit in window´s height and preview height is smaller than window´s height
			// case 3 : preview height + item height does not fit in window´s height and preview height is bigger than window´s height
			var position = this.$item.data( 'offsetTop' ),
				previewOffsetT = this.$previewEl.offset().top - scrollExtra,
				scrollVal = this.height + this.$item.data( 'height' ) + marginExpanded <= winsize.height ? position : this.height < winsize.height ? previewOffsetT - ( winsize.height - this.height ) : previewOffsetT;
				scrollVal=Number(scrollVal)-Number(55);
			$body.animate( { scrollTop : scrollVal }, settings.speed );
//this.testfun();
		},
		setTransition  : function() {
			// alert('setT');
			this.$previewEl.css( 'transition', 'height ' + settings.speed + 'ms ' + settings.easing );
			this.$item.css( 'transition', 'height ' + settings.speed + 'ms ' + settings.easing );
			//this.testfun();
		},
		getEl : function() {
			// alert('getEI');
			return this.$previewEl;
			//this.testfun();
		},
		
		testfun :function(){
			
			var self = this;
			var className = $(this).find('.og-fullimg');
			//alert(className);
			var $item = this.$item.children( 'a' );

			$.getScript("js/jquery.bookblock.js", function(self){
				var Page = (function() {
				
				var config = {
						$bookBlock : $( '#bb-bookblock' ),
						$navNext : $( '#nn' ),
						$navPrev : $( '#pp' ),

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
				

//$(document).ready(function(){
	
	//var img = $( this );
	//alert(img.attr('class'));
	// var sliderUl= $( '<div class="main clearfix">'+
				// '<div class="bb-custom-wrapper">'+
					// '<div id="bb-bookblock" class="bb-bookblock">'+
						// '<div class="bb-item">'+
							// '<a href="#"><img src="images/demo1/1.jpg" alt="image01"/></a>'+
						// '</div>'+
						// '<div class="bb-item">'+
							// '<a href="#"><img src="images/demo1/2.jpg" alt="image02"/></a>'+
						// '</div>'+
						// '<div class="bb-item">'+
							// '<a href="#"><img src="images/demo1/3.jpg" alt="image03"/></a>'+
						// '</div>'+
						// '<div class="bb-item">'+
							// '<a href="#"><img src="images/demo1/4.jpg" alt="image04"/></a>'+
						// '</div>'+
						// '<div class="bb-item">'+
							// '<a href="#"><img src="images/demo1/5.jpg" alt="image05"/></a>'+
						// '</div>'+
					// '</div>'+
					// '<nav>'+
						// '<a id="pp" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>'+
						// '<a id="nn" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>'+
					// '</nav>'+
				// '</div>'+
			// '</div>' );
// 			
	// var slider= $( '<div id="container"></div>' ).append(sliderUl);
// 	
	// $('.og-fullimg').append(slider);
	
	//$.getScript("js/jquery.bookblock.js", function(){
		Page.init();
		
		
	
	//});

//});
				
	

			});
		}
	}

	return { 
		init : init,
		addItems : addItems
	};
	
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------	

})();
