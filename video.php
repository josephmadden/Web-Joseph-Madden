<? $page_title = "Videos"; ?>
<? require "include/top.tpl"; ?>

<?
	
	/**
	 * Dear Joseph,
	 * 
	 * To make life slightly simpler I have turned the
	 * HTML on this page into an array (list).
	 * 
	 * This is PHP that then generates the HTML on the video page.
	 * 
	 * Hopefully based off what is already there you should be able
	 * to edit/fill out the rest. If it doesn't work - shout at me.
	 * 
	 * Kind Regards,
	 * Josh
	 */
	$videos = array(
		"9sRVFO_w1Zc" => array(
			"data-title" => "IDA Teaser Trailer",
			"thumbnail" => "/thumbs/vid-thumb-ida-teaser-1.jpg",
			"data-description" => "A pet project to teach myself basic VFX that has since spiralled out of control and mutated into a feature film. <p> Directed, shot and edited by myself, and starring Ida Wibe Hagen as a genetically enhanced psychic being hunted down by a shady government agency - think 'Bourne Identity' with superpowers."
		),
		"rLwrOg513jk" => array(
			"data-title" => "Short Fuse",
			"thumbnail" => "/thumbs/vid-thumb-short-fuse-1.jpg",
			"data-description" => "A short film I worked on with Smart Casual Pictures for the London 48 Hour Project 2013 (http://www.48hourfilm.com/en/london/). The theme we were given was superheroes. I was co-cinematographer and editor, which explains why we ended up with a girl who could shoot lightning. An exhausting but inspiring weekend with a great bunch of old and new friends."
		),
		"pz4PiR03uHY" => array(
			"data-title" => "Monkey Burgers",
			"thumbnail" => "/thumbs/vid-thumb-monkey-burgers-1.jpg",
			"data-description" => "(NSFW: I get full frontal in this and Pete gets his bum out). The third sketch in Pat Larder's web series Monkey Burgers, a surreal comedy revolving around myself and Pete Williams as lazy, inept students. Having the most VFX experience, I edited this as well as acted in it. If you enjoy this kind of humour, check out the full pilot episode we made."
		),
		"V0e6BUFiec8" => array(
			"data-title" => "IDA Again?",
			"thumbnail" => "/images/home-ida-1800px.jpg",
			"data-description" => ""
		),
		"yd8DSlnmmjs" => array(
			"data-title" => "",
			"thumbnail" => "/images/home-david-cameron-1800px.jpg",
			"data-description" => ""
		),
		"V0e6BUFiec8" => array(
			"data-title" => "",
			"thumbnail" => "http://www.chicagonow.com/mars-venus-game/files/2013/11/rotary-phone.jpg",
			"data-description" => ""
		),
		"yd8DSlnmmjs" => array(
			"data-title" => "",
			"thumbnail" => "http://content7.flixster.com/rtactor/40/46/40469_pro.jpg",
			"data-description" => ""
		)
	);
?>
<script type="text/javascript">var videos = <?=json_encode($videos);?>;</script>

<div class="container">

	<div class="photo-set">
		<h3>Videos</h3>
		<iframe class="video" src="//www.youtube.com/embed/9sRVFO_w1Zc" frameborder="0" allowfullscreen></iframe>
		<p class="caption">Description</p>
		<hr/>
		<div class="thumbs large">
			<? foreach ($videos as $id => $video): ?>
				<div
					<?=$video['thumbnail']?"style='background-image: url({$video['thumbnail']});'":""?>
					<?=$video['data-title']?"data-title='{$video['data-title']}'":""?>
					<?=$id?"data-video='$id'":""?>
					<?=$video['data-description']?"data-description='{$video['data-description']}'":""?>
				>
					<?=$video['data-text']?>
				</div>
			<? endforeach; ?>
		</div>
	</div>

</div>

<? require "include/bottom.tpl"; ?>