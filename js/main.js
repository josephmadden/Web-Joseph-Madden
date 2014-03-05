function resizePhotoSet() {
	$(".photo-set .photo").each(function() {
		$(this).height($(this).find("img").height());
	});

	$(".photo-set").each(function() {

		var full_width = $(this).find(".thumbs").width();
		var img_width = $(this).find(".thumbs img:first").width();
		var min_gap = 5;
		var row_images = Math.floor(full_width / (img_width + min_gap));	
		var gap = Math.floor((full_width - (row_images * (img_width))) / (row_images - 1));

		$(this).find(".thumbs img").css({marginLeft: gap, marginTop: gap});
		$(".photo-set .thumbs img:nth-child("+(row_images)+"n-"+(row_images-1)+")").css({marginLeft: 0});

	});
}

$(".photo-set .thumbs img").click(function() {
	var src = $(this).attr('src');
	var description = $(this).attr('data-description');
	var video = $(this).attr('data-video');

	if ($(this).is("[data-video]")) {
		$(this).closest(".photo-set").find(".video").attr('src', "//www.youtube.com/embed/"+video);
		$(this).closest(".photo-set").find(".caption").html(description);
	} else {
		$(this).closest(".photo-set").find(".photo img").attr('src', src);
		$(this).closest(".photo-set").find(".caption").html(description);
	}
});

$(".photo-set").each(resizePhotoSet);
$(".photo-set .photo img").load(resizePhotoSet);
$(window).resize(resizePhotoSet);
