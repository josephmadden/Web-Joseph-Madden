function resizePhotoSet() {
	$(".photo-set .photo").each(function() {
		$(this).height($(this).find("img").height());
	});

	$(".photo-set").each(function() {

		var full_width = $(this).find(".thumbs").width();

		var stretch_gap = false;

		if (stretch_gap) {
			var size = $(this).find(".thumbs img:first").width();
			var min_gap = 5;
			var row_images = Math.floor(full_width / (size + min_gap));	
			var gap = Math.floor((full_width - (row_images * (size))) / (row_images - 1));
		} else {
			var target_size = 85;
			var gap = 10;
			var row_images = Math.floor(full_width / (target_size + gap));
			var size = Math.floor((full_width - (row_images - 1) * gap) / row_images);
		}

		$(this).find(".thumbs img").css({marginLeft: gap, marginTop: gap, width: size, height: size});
		$(".photo-set .thumbs img:nth-child("+(row_images)+"n-"+(row_images-1)+")").css({marginLeft: 0});
	});
}

$(document).ready(function() {
	if (window.location.hash && $("[data-video='"+window.location.hash.substr(1)+"']").length) {
		$(".photo-set .video").attr('src', "//www.youtube.com/embed/"+window.location.hash.substr(1));
	}
});

$(".photo-set .thumbs img").click(function() {
	var image = $(this).is("[data-image]") ? $(this).attr('data-image') : $(this).attr('src');
	var video = $(this).attr('data-video');
	var description = $(this).attr('data-description');

	if ($(this).is("[data-video]")) {
		$(this).closest(".photo-set").find(".video").attr('src', "//www.youtube.com/embed/"+video+"?autoplay=1");
		window.location.hash = video;
		$(this).closest(".photo-set").find(".caption").html(description);
	} else {
		$(this).closest(".photo-set").find(".photo img").attr('src', image);
		$(this).closest(".photo-set").find(".caption").html(description);
	}


	$("html, body").animate({scrollTop: $(this).closest(".photo-set").offset().top}, 'slow');

});

$(".photo-set").each(resizePhotoSet);
$(".photo-set .photo img").load(resizePhotoSet);
$(window).resize(resizePhotoSet);
