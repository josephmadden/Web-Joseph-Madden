<!DOCTYPE html>
<html>
	<head>

		<!-- META INFORMATION -->
		<title>Joseph Madden <?=isset($page_title)?" | $page_title":""?></title>
		<meta name="description" content="Joseph Madden Visuals - Why make a living when you can make a legacy?" />
		<meta name="author" content="Joseph Madden" />

		<!-- META DATA -->
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

		<!-- STYLE -->
		<link rel="stylesheet" type="text/css" href="/css/reset.css" />
		<link href="//fonts.googleapis.com/css?family=Satisfy|Bevan" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />

		<!-- JAVASCRIPT -->
		<script type="text/javascript" src="/js/jquery.min.js"></script>

	</head>

	<body>

		<div id="page">

			<div id="header">

				<div class="container">

					<h1 id="title">
						<a href="/"><img id="logo" alt="Joseph Madden Visuals" src="/images/logo-left-align-large.png"></a>
					</h1>
					
					<ul class="nav-links">
						<li><a href="/video" class="btn <?=$_SERVER['REQUEST_URI'] == '/video' ? 'active' : ''?>">
							<img alt="Video Page" src="/images/nav_video.png" />
						</a></li>
						<li><a href="/photo" class="btn <?=$_SERVER['REQUEST_URI'] == '/photo' ? 'active' : ''?>">
							<img alt="Photo Page" src="/images/nav_photo.png" />
						</a></li>	
						<li><a href="/about" class="btn <?=$_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''?>">
							<img alt="About Page" src="/images/nav_about.png" />
						</a></li>
					</ul>

				</div>

				<div class="clear"></div>

			</div>

			<div id="main">