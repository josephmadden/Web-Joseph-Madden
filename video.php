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
			"text-image" => "/thumbs/vid-thumb-ida-teaser-2.png",
			"data-description" => "A pet project to teach myself basic VFX that has since spiralled out of control and mutated into a feature film. <p> Directed, shot and edited by myself, and starring Ida Wibe Hagen as a genetically enhanced psychic being hunted down by a shady government agency - think 'Bourne Identity' with superpowers."
		),
		"rLwrOg513jk" => array(
			"data-title" => "Short Fuse",
			"thumbnail" => "/thumbs/vid-thumb-short-fuse-1.jpg",
			"text-image" => "/thumbs/vid-thumb-short-fuse-2.png",
			"data-description" => "A short film I worked on with Smart Casual Pictures for the London 48 Hour Project 2013 (http://www.48hourfilm.com/en/london/). The theme we were given was superheroes. I was co-cinematographer and editor, which explains why we ended up with a girl who could shoot lightning. An exhausting but inspiring weekend with a great bunch of old and new friends."
		),
		"pz4PiR03uHY" => array(
			"data-title" => "Monkey Burgers",
			"thumbnail" => "/thumbs/vid-thumb-monkey-burgers-1.jpg",
			"text-image" => "/thumbs/vid-thumb-monkey-burgers-2.png",
			"data-description" => "(<span class='label red'>NSFW</span>: I get full frontal in this and Pete gets his bum out). The third sketch in Pat Larder's web series Monkey Burgers, a surreal comedy revolving around myself and Pete Williams as lazy, inept students. Having the most VFX experience, I edited this as well as acted in it. If you enjoy this kind of humour, check out the full pilot episode we made."
		),
		"V0e6BUFiec8" => array(
			"data-title" => "Really Long Title... Testing what happens when there is bare long titles",
			"thumbnail" => "http://www.chicagonow.com/mars-venus-game/files/2013/11/rotary-phone.jpg",
			"text-image" => "http://www-tc.pbs.org/food/wp-content/blogs.dir/2/files/2012/07/COOKFORJULIA-WHITE-LOGO-500px.png",
			"data-description" => "Description..."
		),
		"yd8DSlnmmjs" => array(
			"data-title" => "<img src='http://www.iconsdb.com/icons/preview/white/idea-xxl.png' height='30' /> ☜ ☹",
			"thumbnail" => "http://content7.flixster.com/rtactor/40/46/40469_pro.jpg",
			"text-image" => "http://24.media.tumblr.com/c8196970d64252cfdc0d397b83326783/tumblr_mrw8nh7iYK1riiww1o1_500.gif",
			"data-description" => "Description..."
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