<? $page_title = "About"; ?>
<? require "include/top.tpl"; ?>

<div class="container">

	<div id="about-text">
		<p>I'm a creative professional with a focus on visual design and a keen attention to detail.</p>
		<p>I have a strong background in marketing, communications and multimedia production.</p>
		<p id="phone-link"><a href="tel:07860882954">07860 882954</b></p>
		<p id="email-link"><a href="mailto:josephmadden@live.co.uk" target="_blank">josephmadden@live.co.uk</b></p>
	</div>

	<div id="about-images" style="float: right;">

		<a class="about-block folder">
			<span class="btn about">CLICK FOR CV</span>
		</a>

		<a class="about-block phone" href="tel:07860882954">
			<span class="btn about">CALL ME<br/>MAYBE</span>
		</a>

		<div class="about-block mug"></div>

		<div class="about-block joe"></div>

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