<? $page_title = "About"; ?>
<? require "include/top.tpl"; ?>

<div class="container">

	<div id="about-text">
		<p><p>I’m a freelance video producer and photographer, currently based in London but regularly travelling across the country for work.</p></p>
		<p>I’ve spent the past two years working as a producer and in-house videographer for a major retail business, creating corporate videos and shaping the way they use multimedia in their communications.</p>
		<p>These days I work with advertising agencies, production companies and client businesses on advertorial shoots, covering events, and creating original promotional content.</p>
		<p>I also love directing music videos, shooting for fashion, and working on short films. I’m always looking to get involved with exciting projects and meet new friends in the creative industries, so get in touch!</p>
		<p id="phone-link"><a href="tel:07860882954">07860 882954</a></p>
		<p id="email-link"><a href="mailto:joe@josephmadden.co.uk" target="_blank">joe@josephmadden.co.uk</a></p>

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

		<a class="about-block joe" href="/me">
			<span class="btn about">ME</span>
		</a>

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