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


// FOR SMOOTH PAGE SCROLLING ANIMATION
// Select all links with hashes (for on page anchors)
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });


