<? $page_title = "About"; ?>
<? require "include/top.tpl"; ?>

<div class="container">

	<div id="about-text">
		<p><p>I'm a creative professional with a strong background in multimedia production, digital marketing and internal communications.</p></p>
		<p>I’ve spent the past two years producing corporate videos and developing the media communications strategy for a major retail business. In my spare time I freelance as a videographer and designer on any projects that sound like I’ll have fun doing them.</p>
		<p>I also make sketches and short films with my friends, regularly acting, directing and shooting whatever half-baked idea we’ve happened upon.</p>
		<p>I’m always looking to get involved with exciting projects and meet new friends in the creative industries, so let’s have a chat.</p>
		<p id="phone-link"><a href="tel:07860882954">07860 882954</a></p>
		<p id="email-link"><a href="mailto:josephmadden@live.co.uk" target="_blank">josephmadden@live.co.uk</a></p>

		<!--<form class="simple">
			<h3>Contact Me</h3>
			<label>
				<span>Name:</span>
				<input type="text" />
			</label>
			<label>
				<span>Email:</span>
				<input type="email" />
			</label>
			<label>
				<span>Telephone:</span>
				<input type="email" />
			</label>
			<label>
				<span>Company:</span>
				<input type="text" />
			</label>
			<label>
				<span>Message:</span>
				<textarea></textarea>
			</label>
			<label>
				<span>&nbsp;</span>
				<input type="submit" value="Send" />
			</label>
		</form>-->

	</div>

	<div id="about-images" style="float: right;">

		<a class="about-block folder" href="/curriculum-vitae-joseph-madden.pdf">
			<span class="btn about">READ MY CV</span>
		</a>

		<a class="about-block phone" href="tel:07860882954">
			<span class="btn about">CALL ME<br/>MAYBE</span>
		</a>

		<div class="about-block mug"></div>

		<a class="about-block joe" href="/me"></a>

		<a class="about-block keyboard">
			<span class="btn about">DROP ME A LINE</span>
		</a>

	</div>

</div>

<script type="text/javascript">
	$(".about-block.phone").hover(function() {
		$("#phone-link a").addClass('big');
	}, function() {
		$("#phone-link a").removeClass('big');
	});
	$(".about-block.keyboard").hover(function() {
		$("#email-link a").addClass('big');
	}, function() {
		$("#email-link a").removeClass('big');
	});
</script>

<? require "include/bottom.tpl"; ?>