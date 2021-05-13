$(document).ready(function(){


	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 1) {
			$(".sticky").removeClass("scroll-header");
		} else {
			$(".sticky").addClass("scroll-header");
		}
	});




});


if (dots.style.display === "none") {
	dots.style.display = "inline";
	btnText.innerHTML = "Read more";
	moreText.style.display = "none";
} else {
	dots.style.display = "none";
	btnText.innerHTML = "Read less";
	moreText.style.display = "inline";
}

function myFunction() {
	var dots = document.getElementById("dots");
	var moreText = document.getElementById("more");
	var btnText = document.getElementById("myBtn");

	if (dots.style.display === "none") {
		dots.style.display = "inline-block";
		btnText.innerHTML = "Read more";
		moreText.style.display = "none";
	} else {
		dots.style.display = "none";
		btnText.innerHTML = "Read less";
		moreText.style.display = "inline";
	}
}