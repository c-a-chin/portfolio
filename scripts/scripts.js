// hide carousel view at start, fade in on button clicks
$("#carouselView").fadeToggle(0);

$("#listViewButton").on("click", function(){
	// change current active button and text for view
	$("#listViewButton").toggleClass("d-none");
	$("#carouselViewButton").toggleClass("d-none");
	$(".view-text").toggleClass("d-none");
	// fade out carousel, fade in list
	$("#carouselView").fadeToggle(500, () => $("#listView").fadeToggle(500));
})

$("#carouselViewButton").on("click", function(){
	// change current active button and text for view
	$("#listViewButton").toggleClass("d-none");
	$("#carouselViewButton").toggleClass("d-none");
	$(".view-text").toggleClass("d-none");
	// fade out list, fade in carousel
	$("#listView").fadeToggle(500, () => $("#carouselView").fadeToggle(500));
})

// MEDIA QUERIES
// list view is default for mobile screen, carousel is default for 576px width or greater
// change view automatically based on screen size (by toggling button clicks)
if(matchMedia){
	const mq = window.matchMedia("(min-width: 576px)");
	mq.addListener(WidthChange);
	WidthChange(mq);
}

function WidthChange(mq){
	// if screen size is greater than 576px
	if(mq.matches){
		// only change view if its not currently active
		if($("#carouselView").css("display") == "none") $("#carouselViewButton").click();
	} else{
	// if on mobile screen size..
		if($("#listView").css("display") == "none") $("#listViewButton").click();
	}
}