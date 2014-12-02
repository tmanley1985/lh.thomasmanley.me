<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Thomas Manley|Full Stack Developer</title>
		<link rel="shortcut icon" href="/graphics/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="/css/simplegrid.css">
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	</head>
<body>
	<header>
		<div class="grid grid-pad">
			<div class="col-1-3">
			<ul>
				<li><h1>Thomas Manley</h1></li>
				<li><h2>{CodeSlinger}</h2></li>
			</ul>
			
		</div>
			<nav class="col-1-3">
				<ul>
					
				<?php if ($page == 'home') { ?><li><a href="index.php" class="selected">Home</a></li>
				<?php } else { ?><li><a href="index.php">Home</a><?php } ?>

				<?php if ($page == 'work') { ?><li><a href="work.php" class="selected">Work</a></li>
				<?php } else { ?><li><a href="work.php">Work</a><?php } ?>

				<?php if ($page == 'contact'){ ?><li><a href="contact.php" class="selected">Contact</a></li>
				<?php } else { ?><li><a href="contact.php">Contact</a><?php } ?>
				</ul>
			</nav>
			<ul class="col-1-3 text-right">
				<li>
					<a href="https://github.com/tmanley1985">
						<img src="/graphics/github.png" alt="Github">
					</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/pub/thomas-manley/a8/203/b9a">
						<img src="/graphics/linkedin.ico" alt="LinkedIn">
					</a>
				</li>
				<li>
					<a href="http://teamtreehouse.com/thomasmanley">
						<img src="/graphics/treehouse.png" alt="Treehouse">
					</a>
				</li>
			</ul>
		
		</div>
	</header>
	<div id="wrapper"> 