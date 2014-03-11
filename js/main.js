function resizePhotoSet() {
	$(".photo-set .photo").each(function() {
		$(this).height($(this).find("img").height());
	});

	$(".photo-set").each(function() {

		var full_width = $(this).find(".thumbs").width();

		var stretch_gap = false;

		var target_width = parseInt($(this).find(".thumbs > :first").attr("data-width"));
		var target_height = parseInt($(this).find(".thumbs > :first").attr("data-height"));

		if (stretch_gap) {
			var width = $(this).find(".thumbs img:first").width();
			var min_gap = 5;
			var row_images = Math.floor(full_width / (size + min_gap));	
			var gap = Math.floor((full_width - (row_images * (size))) / (row_images - 1));
		} else {
			var gap = 10;
			var row_images = Math.floor(full_width / (target_width + gap));
			var width = Math.floor((full_width - (row_images - 1) * gap) / row_images);
		}
		$(this).find(".thumbs img").css({marginLeft: gap, marginTop: gap, width: width, height: target_height * width / target_width});
		$(".photo-set .thumbs img:nth-child("+(row_images)+"n-"+(row_images-1)+")").css({marginLeft: 0});

	});

}

$(document).ready(function() {
	if (window.location.hash && $("[data-video='"+window.location.hash.substr(1)+"']").length) {
		$(".photo-set .video").attr("src", "//www.youtube.com/embed/" + window.location.hash.substr(1));
	}
});

$(".photo-set .thumbs img").click(function() {
	var image = $(this).is("[data-image]") ? $(this).attr('data-image') : $(this).attr('src');
	var video = $(this).attr('data-video');
	var description = $(this).attr('data-description');
	var title = $(this).attr('data-title');

	if ($(this).is("[data-video]")) {
		$(this).closest(".photo-set").find(".video").attr('src', "//www.youtube.com/embed/"+video+"?autoplay=1");
		window.location.hash = video;
		$(this).closest(".photo-set").find(".caption").html(description);
	} else {
		$(this).closest(".photo-set").find(".photo img").attr('src', image);
		$(this).closest(".photo-set").find(".caption").html(description);
	}

	if ($(this).attr('data-title')) {
		$(this).closest(".photo-set").find("h3").text($(this).attr('data-title'));
	}

	$("html, body").animate({scrollTop: $(this).closest(".photo-set").offset().top}, 'slow');

});

function positionArrows() {
	var padding = ($(this).height() - 58) / 2;
	$(this).closest(".photo").find(".arrow-left, .arrow-right").css({
		marginTop: padding,
		marginBottom: -padding - 58
	});
}

$(".photo-set").find(".photo img").load(positionArrows);
$(window).resize(function() {
	$(".photo-set").find(".photo img").each(positionArrows);
});

$(".photo-set .photo").prepend("<div class='arrow-left'></div><div class='arrow-right'></div>");
$(".photo-set .arrow-left, .photo-set .arrow-right").click(function() {
	var src = $(this).closest(".photo").find("img").attr("src");
	var thumb = $(this).closest(".photo-set").find(".thumbs").find("[data-image='"+src+"'], [src='"+src+"']");
	var thumbs = $(this).closest(".photo-set").find(".thumbs").children().length;
	var d = $(this).is(".arrow-left") ? -1 : 1;
	var index = thumb ? (thumb.index() + d) % thumbs : 0;
	index = index == -1 ? thumbs -1 : index;
	$($(this).closest(".photo-set").find(".thumbs").children()[index]).click();
	console.log(index);
});

$(".photo-set .thumbs").children().each(function() {
	$(this).attr({
		"data-width": $(this).width(),
		"data-height": $(this).height()
	});
});

$(".photo-set").each(resizePhotoSet);
$(".photo-set .photo img").load(resizePhotoSet);
$(window).resize(resizePhotoSet);

$(document).ready(function() {
	$(".photo-fader").each(function() {
		$(this).children().css({opacity: 1});
		$(this).children().filter(":gt(0)").css({
			marginTop: -$(this).height(),
			opacity: 0
		});
	});
	var pause = 5000;
	function photoFader() {
		var duration = 2000;
		$(".photo-fader").each(function() {
			var fader = $(this);
			$(fader.children()[1]).animate({opacity: 1}, {duration: duration, queue: false, complete: function() {
				$(this).css({marginTop: 0});
				fader.append($(fader.children()[0]).css({opacity: 0, marginTop: -fader.height()}));
			}});
		});
		setTimeout(photoFader, pause);
	}
	setTimeout(photoFader, pause);
});

