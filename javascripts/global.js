// Sidebar Toggle
$(".sidebar-icon").on("click", function(){

	var sidebar = $("#sidebar");

	if (sidebar.width() > 0) {
		// Hide
		sidebar.animate({"width" : "0px"});
		$(this).children('img').attr("src", "images/sidebar-icon.svg");
	} else {
		// Show
		sidebar.animate({"width" : "75px"});
		$(this).children('img').attr("src", "images/full-screen-icon.svg");
	}
});

// Utility Toggle
$(".profile-utilities").on("click", function(){

	var $infoHeight = $("#infobar").height();
	var $consoleHeight = $("#console").height();
	var $beltHeight = $("#utility-belt").height();
	var $utilities = $(".utilities");
	var height = $consoleHeight - $infoHeight - $beltHeight;

	if ( $utilities.height() > 0 ) {
		// Hide
		$utilities.css({"height" : 0});
		$(".welcome-message").children("img").attr("src", "/images/gear-icon.svg");
	} else {
		// Show
		$utilities.css({"height" : height});
		$(".welcome-message").children("img").attr("src", "/images/collapse-icon.svg");
	}
});

// Search Form

// Focus
$(".search").on("focus", function(){
	$(this).siblings(".react-circle").addClass("react");
	$(".utilities").css({"height" : 0});
	$(".search-overlay").fadeIn();

	$(this).on("keyup",function(e){
		var value = $(".search").val();
		$(".search-overlay").children("h1").text(value);
	});
});

$(".search").on("mouseover", function(){
	$(this).siblings(".react-circle").addClass("react");
});

$(".search").on("mouseout", function(){

	if ( $(".search-overlay").is(":visible") == false ) {
		$(this).siblings(".react-circle").removeClass("react");
	}
});

// Blur
$(".search").on("blur", function(){
	$(this).siblings(".react-circle").removeClass("react");
	$(".search-overlay").fadeOut();
});


