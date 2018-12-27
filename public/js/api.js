$(document).ready(function(){  
// tm_top link

    $('#links_block_top .title_block').click(function() {
        $('#links_block_top .block_content').slideToggle("slow");
        $('#links_block_top .title_block').toggleClass('active');
      });
  

    // tm_vertical menu

$('.tmvm-contener .block-title').click(function() {
    $('#_desktop_top_menu #top-menu').slideToggle("slow");
    $('.tmvm-contener .block-title').toggleClass('active');
  });


// ---------------- start more menu setting ----------------------
if(jQuery(window).width() >= 1450) {	
		var max_elem = 10;	
		var itemstop = $('#tm_vertical_menu_top .menu ul#top-menu > li');	

		
		if ( itemstop.length > max_elem ) {
			$('#tm_vertical_menu_top .menu ul#top-menu').append('<li><div class="more-wrap"><span class="more-view">More Categories<i class="material-icons">&#xE313;</i></span></div></li>');
		}

		$('#tm_vertical_menu_top .menu ul#top-menu .more-wrap').click(function() {
			if ($(this).hasClass('active')) {
				itemstop.each(function(i) {
					if ( i >= max_elem ) {
						$(this).slideUp(200);
					}
				});
				$(this).removeClass('active');
				//$(this).children('div').css('display', 'block');
				$('.more-wrap').html('<span class="more-view">More Categories<i class="material-icons">&#xE313;</i></span>');
			} else {
				itemstop.each(function(i) {
					if ( i >= max_elem  ) {
						$(this).slideDown(200);
					}
				});
				$(this).addClass('active');
				$('.more-wrap').html('<span class="more-view">Less Categories<i class="material-icons">&#xE316;</i></span>');
			}
		});

		itemstop.each(function(i) {
			if ( i >= max_elem ) { 
				$(this).css('display', 'none');
			}
		});
	}
	if(jQuery(window).width() <= 1449) {
	var max_elem = 5;	
		var itemstop = $('#tm_vertical_menu_top .menu ul#top-menu > li');	

		
		if ( itemstop.length > max_elem ) {
			$('#tm_vertical_menu_top .menu ul#top-menu').append('<li><div class="more-wrap"><span class="more-view">More Categories<i class="material-icons">&#xE313;</i></span></div></li>');
		}

		$('#tm_vertical_menu_top .menu ul#top-menu .more-wrap').click(function() {
			if ($(this).hasClass('active')) {
				itemstop.each(function(i) {
					if ( i >= max_elem ) {
						$(this).slideUp(200);
					}
				});
				$(this).removeClass('active');
				//$(this).children('div').css('display', 'block');
				$('.more-wrap').html('<span class="more-view">More Categories<i class="material-icons">&#xE313;</i></span>');
			} else {
				itemstop.each(function(i) {
					if ( i >= max_elem  ) {
						$(this).slideDown(200);
					}
				});
				$(this).addClass('active');
				$('.more-wrap').html('<span class="more-view">Less Categories<i class="material-icons">&#xE316;</i></span>');
			}
		});

		itemstop.each(function(i) {
			if ( i >= max_elem ) { 
				$(this).css('display', 'none');
			}
		});	
	}
	// ---------------- end more menu setting ----------------------






});


// Flex slider load

	$(window).on('load',function(){
		$(".loadingdiv").removeClass("spinner"); 

if($('.flexslider').length > 0){ 
			$('.flexslider').flexslider({		
				slideshowSpeed: $('.flexslider').data('interval'),
				pauseOnHover: $('.flexslider').data('pause'),
				animation: "slide",
				 animationLoop: true
			});
		}
	});

/*======  Carousel Slider For categorylist ==== */

		var tmcat = $("#tmcategorylist-carousel");
		tmcat.owlCarousel({
			items : 4, //10 items above 1000px browser width
			itemsDesktop : [1199,4], 
			itemsDesktopSmall : [991,4], 
			itemsTablet: [767,2], 
			itemsMobile : [319,1] 
		});
		// Custom Navigation Events
		$(".cat_next").click(function(){
		tmcat.trigger('owl.next');
		})
		$(".cat_prev").click(function(){
		tmcat.trigger('owl.prev');
		});

