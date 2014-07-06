<!DOCTYPE html>
<html>
	<head>

		<!-- META INFORMATION -->
		<title>Joseph Madden<?=isset($page_title)?" | $page_title":""?></title>
		<meta name="description" content="Joseph Madden - Video • Photo • Design" />
		<meta name="author" content="Joseph Madden" />

		<!-- META DATA -->
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

		<!-- OPEN GRAPH TAGS -->
		<meta property="og:title" content="Joseph Madden<?=isset($page_title)?" | $page_title":""?>" />
		<meta property="og:type" content="website" />       
		<meta property="og:image" content="http://www.josephmadden.co.uk/images/home-ida-1800px.jpg" />      
		<meta property="og:url" content="http://<www.josephmadden.co.uk<?=$_SERVER['REQUEST_URI']?>" />

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
						<a href="/"><div id="logo"></div></a>
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