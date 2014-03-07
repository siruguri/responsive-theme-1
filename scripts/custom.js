	function update_debug(call='') {
		scroll_top = $(window).scrollTop();

		$(".bottom-debug").html("debug screen: " + call + ":" + 
			scroll_top + ", current_offset =" + $(".banner").offset().top + 
			", animated = " + animated);
	}

	$(document).ready(function(){
		top_of_page = $(window).scrollTop();
		initial_offset = $(".banner").offset().top;

		animated=false;
	
		$(window).scroll(function() {			
			scroll_top = $(window).scrollTop();

			if (scroll_top > initial_offset) {
				$(".banner").css("top", scroll_top - initial_offset + 5);
			} else{
				$(".banner").css("top", 0);
			}
		}); // scroll callback

	});