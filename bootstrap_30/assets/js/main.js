$(document).ready(function() {

	/**************************************************************************************/
	/**** BEGIN _ MAIN NAVIGATION MENU ROLLOVER IMAGE/LINK Function - SITE WIDE ***********/
	/**************************************************************************************/
	var imgsrc = null;
	// Preload all rollovers #mainContentLH img,
	$(".rollButton img, .moreInfoDiv a img").each(function() {
		// Set the original src
		rollsrc = $(this).attr("src");
		rollON = rollsrc.replace(/.png$/ig, "_over.png");
		$("<img>").attr("src", rollON);
	});

	// Navigation rollovers #mainContentLH a, #hdrRightSectA a, #hdrRightSectB1 a, #hdrRightSectB2 a, #moreInfoLink a
	$(".rollButton, .moreInfoDiv a").mouseover(function() {

		imgsrc = $(this).children("img").attr("src");
		matches = imgsrc.match(/_over/);

		// don't do the rollover if state is already ON
		if (!matches) {
			imgsrcON = imgsrc.replace(/.png$/ig, "_over.png");
			// strip off extension
			$(this).children("img").attr("src", imgsrcON);
		}
	});

	$(".rollButton, .moreInfoDiv a").mouseout(function() {
		$(this).children("img").attr("src", imgsrc);
	});
	$(".rollButton, .moreInfoDiv a").click(function() {
		$(this).children("img").attr("src", imgsrc);
	});

	/* -------------------------------------------------
	 * Slideshow Pause and Play Button GLOBAL FUNCTIONs
	 * ------------------------------------------------- */

	$('#pause, #pauseToggle').click(function() {
		var slideshow = $('.cycle-slideshow');
		var playIcon = '<span class=\"glyphicon glyphicon-play\"></span>';
		var pauseIcon = '<span class=\"glyphicon glyphicon-pause\"></span>';

		if (slideshow.is('.cycle-paused')) {
			slideshow.cycle('resume');
			$(this).text('Pause').append(pauseIcon);
		} else {
			slideshow.cycle('pause');
			$(this).text('Play').append(playIcon);
		}
	});

	/**************************************************************************************/
	/**** BEGIN _ Index.php - Slidedown panel overlay animation ***********/
	/**************************************************************************************/
	
	$("#hide_btn").click(function() {
		//$("#index_main_panel").toggle("fast");
		$('#index_main_panel').delay(900).animate({"bottom": "16px", "height":"55px"}, 500);
	});
}); 