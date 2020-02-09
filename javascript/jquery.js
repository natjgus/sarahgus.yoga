

$('#logo').click(function() {
	$(this).css({
		'transform': 'rotate(360deg) scale(10) translate(5vw, 5vh)',
		'border': 'none',
		'transition': 'width 2s, height 2s, transform 1s'
	})
		.delay(2000)
		.fadeOut(1000);
	setTimeout(function() {
		$('#logo').removeAttr('style');
	}, 4000);
});




//
// // Sticky Nav + smooth scrolling
// // Originally written by Eric Hasseltine of Choppingblock.com
//
// 	// Make menu stick to top of the page when it reaches the top of the page
// 	// Menu items should highlight when you scroll to the right place on the page (add a css class to differentiate it)
// 	// Use $(element).offset().top liberally
// 	// Click on menu element should scroll the page to the proper section
//
// 	var NAV_INIT_POS = $(window).height() - $('#main-nav').height() - 170;
//
// 	var NAV_STICK_POSITION = $(window).height() - $('#main-nav').height() - 170;
// 	var MENU_HEIGHT = 64;
// 	var SECTION_TOPS = [];
//
// 	$(".menu").css("top", NAV_INIT_POS);
//
//
// 	$(".section").each(function(){
// 		SECTION_TOPS.push($(this).offset().top);
// 	});
//
// 	// Particularly if your images affect the height of your page
// 	// Recalculate when page is done loading
// 	$(document).load(function(){
// 		$(".section").each(function(){
// 			SECTION_TOPS.push($(this).offset().top);
// 		});
// 	});
//
//
//
// 	$(".menu").on("click", "li", function(){
//
//
// 		var sectionClass = $(this).attr("data-section");
//
// 		var sectionTop = $("." + sectionClass).offset().top - MENU_HEIGHT + 2;
//
// 		$("html,body").animate({
// 			scrollTop: sectionTop
//
// 		});
//
// 	});
//
//
// 	$(document).scroll(function(){
//
// 		// This is where we watch for scroll events
// 		// Check this to decide when things should happen
// 		if($(document).scrollTop() >= NAV_STICK_POSITION){
// 			// $(".main-nav").css({
// 			// 	position: "fixed",
// 			// 	top: 0
// 			// });
// 			$(".menu").css("top", 0);
// 			$(".menu").addClass("fixed");
//
// 		}else{
//
// 			$(".menu").removeClass("fixed");
// 			$(".menu").css("top", NAV_INIT_POS);
// 			// $(".main-nav").css({
// 			// 	position: "absolute",
// 			// 	top: NAV_STICK_POSITION
// 			// });
//
// 		}
//
//
//
//
//
// 		for (var i=0; i < SECTION_TOPS.length-1; i++) {
//
// 			if($(document).scrollTop() >= SECTION_TOPS[i]-MENU_HEIGHT && $(document).scrollTop() < SECTION_TOPS[i+1]){
// 				var sectionClass = "section" + (i+1);
// 				$(".menu .active").removeClass("active");
//
// 				$("li[data-section='" + sectionClass +"']").addClass("active");
//
// 				window.location.hash = sectionClass;
// 			}else if($(document).scrollTop() > SECTION_TOPS[SECTION_TOPS.length-1] ){
// 				var sectionClass = "section" + (SECTION_TOPS.length);
//
// 				$(".menu .active").removeClass("active");
// 				$("li[data-section='" + sectionClass +"']").addClass("active");
// 				window.location.hash = sectionClass;					
// 			}
// 		};
//
//
//
// 	});
//
//
//
// 	// On page load
// 	// Look at
//
//
// 	if(window.location.hash != ""){
// 		// Determine which section the page should scroll to
//
// 		var hashClass = window.location.hash;
// 		var section = $("." + hashClass.substr(1));
// 		if(section.length > 0){
// 			var sectionTop = section.offset().top - MENU_HEIGHT + 2;
// 			$(document).scrollTop(sectionTop);
//
// 		}
//
// 	}
//
// 	if($(window).width() < 600){
//
// 		// When you click on the menu bar
// 		// You need to to slide out the menu
// 		// And slide over the page
// 		// (Just add the right CSS classes)
// 		// When that menu is slide out, any new clicks should close it ($(body).one...)
//
//
// 		$(".menu-bar").click(function(event){
// 			$(".wrap").addClass("open");
// 			$(".menu").addClass("open");
//
// 			// Stop click event from bubbling up to the body element
// 			// before adding additional handler
// 			// event.stopPropagation();
//
// 			$("body").one("click", function(){
// 				console.log("Body clicked");
// 					$(".wrap").removeClass("open");
// 					$(".menu").removeClass("open");
//
//
// 				})
//
// 		})
//
//
// 	}
