<? $page_title = "Videos"; ?>
<? require "include/top.tpl"; ?>

<?	
	$videos = array(

		array(
			"vimeo" => "120538042",
			"data-title" => "Vimeo Test",
			"thumbnail" => "/thumbs/vid-thumb-showreel-1.jpg",
			"text-image" => "/thumbs/vid-thumb-showreel-3.png",
			"data-description" => "Cinematography, editing and motion graphics by <em>Joseph Madden</em>"
		),

		array(
			"youtube" => "ZsqpY2zBrGY",
			"data-title" => "Joseph Madden - Showreel 2014",
			"thumbnail" => "/thumbs/vid-thumb-showreel-1.jpg",
			"text-image" => "/thumbs/vid-thumb-showreel-3.png",
			"data-description" => "Cinematography, editing and motion graphics by Joseph Madden"
		),

		"dWrJqL9p5EY" => array(
			"data-title" => "Misread Heartbreak - Sabrina (feat. Ricardo Hinds)",
			"thumbnail" => "/thumbs/vid-thumb-sabrina-1.jpg",
			"text-image" => "/thumbs/vid-thumb-sabrina-2.png",
			"data-description" => "Artist: <a href='https://soundcloud.com/sgunston' target='_blank'>Sabrina Gunston</a> & <a href='https://soundcloud.com/ricardohinds' target='_blank'>Ricardo Hinds</a></p>
			<p>Directed and produced by Joseph Madden</p>
			<p>Styling by <a href='http://www.wssfashion.com/' target='_blank'>W.S. Studio</a>, London</p>
			<p>Assistant Director/Gaffer: <a href='http://www.patricklarder.com/' target='_blank'>Patrick Larder</a></p>
			<p>Cinematographer: Dominic Ellis</p>
			<p>Editor: Joseph Madden</p>"
		),

		"VNAP1-HIWZY" => array(
			"data-title" => "London Fashion Magazine | ZERO Magazine",
			"thumbnail" => "/thumbs/vid-thumb-lfw-1.jpg",
			"text-image" => "/thumbs/vid-thumb-lfw-2.png",
			"data-description" => "Shot and edited by Joseph Madden for <a href='http://www.zero-magazine.co.uk/' target='_blank'>ZERO Magazine</a>"
		),

	"fuV_0XmUQQk" => array(
			"data-title" => "Sunset - 4REAL",
			"thumbnail" => "/thumbs/vid-thumb-kye-1.jpg",
			"text-image" => "/thumbs/vid-thumb-kye-2.png",
			"data-description" => "Artist: <a href='https://www.facebook.com/pages/4Real/251640834878111' target='_blank'>4Real</a></p>
			<p>Directed and produced by Joseph Madden</p>
			<p>Cinematographer: Dominic Ellis</p>
			<p>Camera Operator 2: <a href='http://www.becsusangill.com/' target='_blank'>Bec Susan Gill</a></p>
			<p>Gaffer: <a href='http://www.joshthompson.co.uk/' target='_blank'>Josh Thompson</a></p>
			<p>DIT: <a href='http://chloephilippou.com' target='_blank'>Chloe Philippou</a></p>
			<p>Location Scout: Shane Callagy</p>
			<p>Stills Photographer: <a href='http://www.darnelltemenu.com/' target='_blank'>Darnell Temenu</a></p>"
		),

		"RFYOg56RuKk" => array(
			"data-title" => "MC Threat - Mars",
			"thumbnail" => "/thumbs/vid-thumb-mc-threat-mars-1.jpg",
			"text-image" => "/thumbs/vid-thumb-mc-threat-mars-2.png",
			"data-description" => "The debut single from <a href='http://www.mcthreat.com/main' target='_blank'>MC Threat's Time Travelling Rap Album</a>. I helped him make this video one weekend in return for him helping me make this website.</p>
			<p>Directed, shot and edited by Joseph Madden</p>
			<p>Produced by <a href='http://joshthompson.co.uk/' target='_blank'>Josh Thompson</a></p>
			<p>Starring: Josh Thompson, Joey Nathan and Nick Johnson</p>
			<p>Make-Up Artist: Sian Warren</p>
			<p>Runner: Tom Camfield</p>"
		),

		array(
			"youtube" => "_x2cz_Z6hFk",
			"data-title" => "IDA - Official Trailer (2014)",
			"thumbnail" => "/thumbs/vid-thumb-ida-trailer-2.jpg",
			"text-image" => "/thumbs/vid-thumb-ida-teaser-2.png",
			"data-description" => "Written & directed by Joseph Madden</p>
			<p>Produced by Joseph Madden and Ida Wibe Hagen for Smart Casual Pictures</p>
			<p>Cinematography, editing and VFX by Joseph Madden</p>
			<p>Original score by <a href='http://soundcloud.com/david-a-martin' target='_blank'>David A. Martin</a></p>
			<p>Starring: Ida Wibe Hagen, Benjamin Pirie, Andrea Woods, Chris George, Douglas Linssen, Maria Paris, Niall Shukla and Ionut Razvan-Barbu</p>
			<p>Also featuring: Dan Ralls, David Minac, Shane Callagy, Sam Moss, Sam Basinger, Chris Cann, James Brant, Andre Pusey, <a href='http://www.joshthompson.co.uk/' target='_blank'>Josh Thompson</a>, Nick Johnson, Chris McGeehan, James Rands, Joey Nathan, Tom Camfield, George Lavis, Alex Pirie, Adam Jackson, Tom Fyans</p>
			<p>Runners: Anna Saracka, <a href='http://chloephilippou.com' target='_blank'>Chloe Philippou</a>, George Brereton, Dan Ralls</p>
			<p>BTS photography: Chris McGeehan</p>"
		),

		array(
			"youtube" => "3r2VNCzv_xU",
			"data-title" => "B&Q Spring Summer Press Show 2014",
			"thumbnail" => "/thumbs/vid-thumb-bqpress-1.jpg",
			"text-image" => "/thumbs/vid-thumb-bqpress-2.png",
			"data-description" => "Produced and directed by Stephanie Mann for <a href='http://www.diy.com' target='_blank'>B&Q</a></p>
			<p>Shot and edited by Joseph Madden</p>
			<p>Production assistant: Gemma Smith</p>"
		),

		array(
			"youtube" => "ThelyihlVYU",
			"data-title" => "B&Q Autumn Winter Press Show 2014",
			"thumbnail" => "/thumbs/vid-thumb-awpress-1.jpg",
			"text-image" => "/thumbs/vid-thumb-awpress-2.png",
			"data-description" => "Produced by Myrhh Fletcher for <a href='http://www.diy.com' target='_blank'>B&Q</a></p>
			<p>Directed, shot and edited by Joseph Madden</p>
			<p>Production assistant: Gemma Smith</p>
			<p>Camera assistant: Ida Wibe Hagen</p>"
		),
<<<<<<< HEAD

		"NqHNnp7o8RM" => array(
=======
		array(
			"youtube" => "NqHNnp7o8RM",
>>>>>>> origin/master
			"data-title" => "Kingfisher's One Team Product Show",
			"thumbnail" => "/thumbs/vid-thumb-otps-1.jpg",
			"text-image" => "/thumbs/vid-thumb-otps-2.png",
			"data-description" => "I filmed and edited this as part of the coverage of <a href='http://www.kingfisher.com/index.asp?pageid=161&mediaid=809&startrow=1&category=all' target='_blank'>Kingfisher</a>'s 5 day event for its store employees in Lille, France, in October 2013.<p> Featuring interviews with Sir Ian Cheshire (Group CEO, Kingfisher Group), Kevin O' Byrne (CEO, B&Q UK & Ireland), Véronique Laury (CEO, Castorama France) and more.</p>
			<p>Produced and directed by Nadia Bonomally</p>
			<p>Shot and edited by Joseph Madden</p>
			<p>Production assistant: Douglas Linssen</p>"
		),

		"MN6jiVf2iw0" => array(
			"data-title" => "BeyondMe Boot Camp 2014",
			"thumbnail" => "/thumbs/vid-thumb-beyondme-1.jpg",
			"text-image" => "/thumbs/vid-thumb-beyondme-2.png",
			"data-description" => "Produced by Anisha Patel for <a href='https://beyondme.org/' target='_blank'>BeyondMe</a></p>
			<p>Shot and edited by Joseph Madden</p>"
		),

		"-H96m0ZKnNM" => array(
			"data-title" => "Lynnwood - Thomas Brown book launch",
			"thumbnail" => "/thumbs/vid-thumb-tjb-1.jpg",
			"text-image" => "/thumbs/vid-thumb-tjb-2.png",
			"data-description" => "I photographed Tom in late 2012 for the inside cover photo of his debut novel, <a href='http://tbrownonline.wordpress.com/books/' target='_blank'>Lynnwood</a>. So when he invited me to <a href='http://josephmadden.co.uk/photo' target='_blank'>photograph its launch at his local Waterstone's</a> the following June I was pretty excited, but definitely wasn’t expecting the kind of fanfare it received. The book sold out within the hour and I’ve never seen so many people in a bookshop at one time. An all round great day out in a beautiful little town in Oxfordshire.<p>I wasn't going to turn up and take photos without filming it as well, so made this little video of the event. Luckily the staff in Waterstone's were very friendly and let me set up camp behind the till with all my gear.</p>"
		),
<<<<<<< HEAD

		"pz4PiR03uHY" => array(
=======
		array(
			"youtube" => "pz4PiR03uHY",
>>>>>>> origin/master
			"data-title" => "Monkey Burgers",
			"thumbnail" => "/thumbs/vid-thumb-monkey-burgers-1.jpg",
			"text-image" => "/thumbs/vid-thumb-monkey-burgers-2.png",
			"data-description" => "(NSFW: I get full frontal in this and Pete gets his bum out). <p>The third sketch in <a href='http://www.patricklarder.com/' target='_blank'>Pat Larder</a>'s web series <a href='http://youtu.be/qlmxS7zL-n0' target='_blank'>Monkey Burgers</a>, a surreal comedy revolving around myself and Pete Williams as lazy, inept students. Having the most VFX experience, I edited this as well as acted in it. </p>
			<p>Writer/Director: <a href='http://www.patricklarder.com/' target='_blank'>Patrick Larder</a></p>
			<p>Cinematography: Dominic Ellis</p>
			<p>Editor: Joseph Madden</p>
			<p>Starring: Pete Williams and Joseph Madden</p>
			<p>Runners: Ida Wibe Hagen and George Brereton</p>"
		),
<<<<<<< HEAD
=======
		array(
			"youtube" => "H96m0ZKnNM",
			"data-title" => "Lynnwood - Thomas Brown book launch",
			"thumbnail" => "/thumbs/vid-thumb-tjb-1.jpg",
			"text-image" => "/thumbs/vid-thumb-tjb-2.png",
			"data-description" => "I photographed Tom in late 2012 for the inside cover photo of his debut novel, <a href='http://tbrownonline.wordpress.com/books/' target='_blank'>Lynnwood</a>. So when he invited me to <a href='http://josephmadden.co.uk/photo' target='_blank'>photograph its launch at his local Waterstone's</a> the following June I was pretty excited, but definitely wasn’t expecting the kind of fanfare it received. The book sold out within the hour and I’ve never seen so many people in a bookshop at one time. An all round great day out in a beautiful little town in Oxfordshire.<p>I wasn't going to turn up and take photos without filming it as well, so made this little video of the event. Luckily the staff in Waterstone's were very friendly and let me set up camp behind the till with all my gear.</p>"
		),
		array(
			"youtube" => "9sRVFO_w1Zc",
			"data-title" => "IDA - Teaser Trailer (2012)",
			"thumbnail" => "/thumbs/vid-thumb-ida-teaser-1.jpg",
			"text-image" => "/thumbs/vid-thumb-ida-teaser-2.png",
			"data-description" => "A pet project to teach myself basic VFX that has since spiralled out of control and mutated into a feature film. <p> Directed, shot and edited by myself, and starring Ida Wibe Hagen as a genetically enhanced psychic being hunted down by a shady government agency - think 'Bourne Identity' with superpowers.</p>
			<p>Written & directed by <em>Joseph Madden</em></p>
			<p>Produced by <em>Joseph Madden and Ida Wibe Hagen</em> for Smart Casual Pictures</p>
			<p>Cinematography, editing and VFX by Joseph Madden</em></p>
			<p>Starring <em>Ida Wibe Hagen, Tom Camfield, Fern Harffey</em></p>
			<p>Runner: <em><a href='http://chloephilippou.com' target='_blank'>Chloe Philippou</a></em>"
		),
>>>>>>> origin/master

		array(
			"youtube" => "cFfi1icNR6A",
			"data-title" => "Short Fuse",
			"thumbnail" => "/thumbs/vid-thumb-short-fuse-2.jpg",
			"text-image" => "/thumbs/vid-thumb-short-fuse-2.png",
			"data-description" => "A short film I worked on with Smart Casual Pictures for the <a href='http://www.48hourfilm.com' target='_blank'>London 48 Hour Film Project 2013</a>. The theme we were given was superheroes. I was co-cinematographer and editor, which explains why we ended up with a girl who could shoot lightning. An exhausting but inspiring weekend with a great bunch of old and new friends.</p>
			<p>Produced by Rory Yeung for Smart Casual Pictures</p>
			<p>Directed by James Clayton</p>
			<p>Written by <a href='http://www.patricklarder.com/' target='_blank'>Patrick Larder</a> and Christopher Francis</p>
			<p>Cinematography by Joshua Potter and Joseph Madden</p>
			<p>Edited by Sam Elliott, Joseph Madden, Joshua Potter and Rory Yeung</p>
			<p>Original Score by <a href='http://soundcloud.com/david-a-martin' target='_blank'>David A. Martin</a></p>
			<p>Sound recording by Rory Yeung and Stephen Hope</p>
			<p>Starring Jenny-May Darcey, Asher Amis, Michael Absalom, Tom Maller</p>"
		),
<<<<<<< HEAD

		"9sRVFO_w1Zc" => array(
			"data-title" => "IDA - Teaser Trailer (2012)",
			"thumbnail" => "/thumbs/vid-thumb-ida-teaser-1.jpg",
			"text-image" => "/thumbs/vid-thumb-ida-teaser-2.png",
			"data-description" => "Written & directed by Joseph Madden</p>
			<p>Produced by Joseph Madden and Ida Wibe Hagen for Smart Casual Pictures</p>
			<p>Cinematography, editing and VFX by Joseph Madden</p>
			<p>Starring Ida Wibe Hagen, Tom Camfield, Fern Harffey</p>
			<p>Runner: <a href='http://chloephilippou.com' target='_blank'>Chloe Philippou</a>"
		)		
=======
		array(
			"youtube" => "RFYOg56RuKk",
			"data-title" => "MC Threat - Mars",
			"thumbnail" => "/thumbs/vid-thumb-mc-threat-mars-1.jpg",
			"text-image" => "/thumbs/vid-thumb-mc-threat-mars-2.png",
			"data-description" => "The debut single from <a href='http://www.mcthreat.com/main' target='_blank'>MC Threat's Time Travelling Rap Album</a>. I helped him make this video one weekend in return for him helping me make this website.</p>
			<p>Directed, shot and edited by <em>Joseph Madden</em></p>
			<p>Produced by <em><a href='http://joshthompson.co.uk/' target='_blank'>Josh Thompson</a></em></p>
			<p>Starring <em>Josh Thompson, Joey Nathan and Nick Johnson</em></p>
			<p>Runners: <em>Sian Warren and Tom Camfield</em></p>"
		)
>>>>>>> origin/master
	);
?>
<script type="text/javascript">var videos = <?=json_encode($videos);?>;</script>

<div class="container">

	<div class="photo-set">
		<h3>Videos</h3>
		<iframe class="video" src="//www.youtube.com/embed/ZsqpY2zBrGY" frameborder="0" allowfullscreen></iframe>
		<p class="caption"></p>
		<hr/>
		<div class="thumbs large">
			<!-- This is a loop that generates all the video thumbs in the correct format -->
			<? foreach ($videos as $video): ?>
				<div class="video-thumb"
					<?=$video['thumbnail']?"style='background-image: url(\"{$video['thumbnail']}\");'":""?>
					<?=$video['data-title']?"data-title=\"{$video['data-title']}\"":""?>
					<?=isset($video['youtube']) && $video['youtube'] ?"data-youtube=\"{$video['youtube']}\"":""?>
					<?=isset($video['vimeo']) && $video['vimeo'] ?"data-vimeo=\"{$video['vimeo']}\"":""?>
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