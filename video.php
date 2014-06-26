<? $page_title = "Videos"; ?>
<? require "include/top.tpl"; ?>

<?	
	$videos = array(
		"_x2cz_Z6hFk" => array(
			"data-title" => "IDA - Official Trailer (2014)",
			"thumbnail" => "/thumbs/vid-thumb-ida-trailer-2.jpg",
			"text-image" => "/thumbs/vid-thumb-ida-teaser-2.png",
			"data-description" => "A pet project to teach myself basic VFX that has since spiralled out of control and mutated into a feature film. <p> Directed, shot and edited by myself, and starring Ida Wibe Hagen as a genetically enhanced psychic being hunted down by a shady government agency - think 'Bourne Identity' with superpowers."
		),
		"3r2VNCzv_xU" => array(
			"data-title" => "B&Q Spring Summer Press Show 2014",
			"thumbnail" => "/thumbs/vid-thumb-bqpress-1.jpg",
			"text-image" => "/thumbs/vid-thumb-bqpress-2.png",
			"data-description" => "Over the past two years I've produced hundreds of videos for B&Q, mainly for internal communications purposes. This is one of the more recent public facing videos I've produced.</p>"
		),
		"NqHNnp7o8RM" => array(
			"data-title" => "Kingfisher's One Team Product Show",
			"thumbnail" => "/thumbs/vid-thumb-otps-1.jpg",
			"text-image" => "/thumbs/vid-thumb-otps-2.png",
			"data-description" => "I filmed and edited this as part of the coverage of Kingfisher's 5 day event for its store employees in Lille, France, in October 2013.<p> Featuring interviews with Sir Ian Cheshire (Group CEO, Kingfisher Group), Kevin O' Byrne (CEO, B&Q UK & Ireland), Véronique Laury (CEO, Castorama France) and more.</p>"
		),
		"pz4PiR03uHY" => array(
			"data-title" => "Monkey Burgers",
			"thumbnail" => "/thumbs/vid-thumb-monkey-burgers-1.jpg",
			"text-image" => "/thumbs/vid-thumb-monkey-burgers-2.png",
			"data-description" => "(NSFW: I get full frontal in this and Pete gets his bum out). <p>The third sketch in Pat Larder's web series Monkey Burgers, a surreal comedy revolving around myself and Pete Williams as lazy, inept students. Having the most VFX experience, I edited this as well as acted in it. </p>"
		),
		"-H96m0ZKnNM" => array(
			"data-title" => "Lynnwood - Thomas Brown book launch",
			"thumbnail" => "/thumbs/vid-thumb-tjb-1.jpg",
			"text-image" => "/thumbs/vid-thumb-tjb-2.png",
			"data-description" => "I photographed Tom in late 2012 for the inside cover photo of his debut novel, Lynnwood. So when he invited me to photograph its launch at his local Waterstone's the following June I was pretty excited, but definitely wasn’t expecting the kind of fanfare it received. The book sold out within the hour and I’ve never seen so many people in a bookshop at one time. An all round great day out in a beautiful little town in Oxfordshire.<p>I wasn't going to turn up and take photos without filming it as well, so made this little video of the event. Luckily the staff in Waterstone's were very friendly and let me set up camp behind the till with all my gear.</p><p><a href='http://www.google.com' target='_blank'>Tom's Website</a>"
		),
		"9sRVFO_w1Zc" => array(
			"data-title" => "IDA - Teaser Trailer (2013)",
			"thumbnail" => "/thumbs/vid-thumb-ida-teaser-1.jpg",
			"text-image" => "/thumbs/vid-thumb-ida-teaser-2.png",
			"data-description" => "A pet project to teach myself basic VFX that has since spiralled out of control and mutated into a feature film. <p> Directed, shot and edited by myself, and starring Ida Wibe Hagen as a genetically enhanced psychic being hunted down by a shady government agency - think 'Bourne Identity' with superpowers."
		),
		"cFfi1icNR6A" => array(
			"data-title" => "Short Fuse",
			"thumbnail" => "/thumbs/vid-thumb-short-fuse-2.jpg",
			"text-image" => "/thumbs/vid-thumb-short-fuse-2.png",
			"data-description" => "A short film I worked on with Smart Casual Pictures for the London 48 Hour Project 2013. The theme we were given was superheroes. I was co-cinematographer and editor, which explains why we ended up with a girl who could shoot lightning. An exhausting but inspiring weekend with a great bunch of old and new friends."
		),
		"RFYOg56RuKk" => array(
			"data-title" => "MC Threat - Mars",
			"thumbnail" => "/thumbs/vid-thumb-mc-threat-mars-1.jpg",
			"text-image" => "/thumbs/vid-thumb-mc-threat-mars-2.png",
			"data-description" => "The new single from the critically acclaimed MC Threat's Time Travelling Rap Album. <a href='http://www.mcthreat.com/' target='_blank'>MC Threat's Website</a> and <a href='https://www.facebook.com/mcthreat' target='_blank'>MC Threat's Facebook</a>"
		)
	);
?>
<script type="text/javascript">var videos = <?=json_encode($videos);?>;</script>

<div class="container">

	<div class="photo-set">
		<h3>Videos</h3>
		<iframe class="video" src="//www.youtube.com/embed/_x2cz_Z6hFk" frameborder="0" allowfullscreen></iframe>
		<p class="caption"></p>
		<hr/>
		<div class="thumbs large">
			<!-- This is a loop that generates all the video thumbs in the correct format -->
			<? foreach ($videos as $id => $video): ?>
				<div class="video-thumb"
					<?=$video['thumbnail']?"style='background-image: url(\"{$video['thumbnail']}\");'":""?>
					<?=$video['data-title']?"data-title=\"{$video['data-title']}\"":""?>
					<?=$id?"data-video=\"$id\"":""?>
					<?=$video['data-description']?"data-description=\"{$video['data-description']}\"":""?>
				>
					<div class="video-thumb-inner">
						<? if (isset($video['text-image'])): ?>
							<img src="<?=$video['text-image']?>" />
						<? endif; ?>
					</div>
				</div>
			<? endforeach; ?>
		</div>
	</div>

</div>

<? require "include/bottom.tpl"; ?>