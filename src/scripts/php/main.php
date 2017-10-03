<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Rivas Design and Development">
	<meta name="description" content="Creating a profile page to display myself and my work portfolio!">
	<meta property="og:description" content="Hi, I'm Stefan Rivas. Take a look at my profile page to see some of my interests and work!">
	<meta property="og:title" content="Rivas Design and Development">
	<link href="styles/main.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet" type='text/css'>
	<title>Rivas Design &amp; Development</title>
</head>
<body>
	<h1>Stefan Rivas</h1>
	<?= $content->navigationBar ?>
	<img class="img-md" src="../images/travel/facing_queenstown_ben_lommond.jpg" alt="Me standing towards Queenstown on the Ben Lommond Summit" title="Me standing towards Queenstown on the Ben Lommond Summit">
	<div id="bio"></div>
	<p>Life has been good to me in many ways:</p>
	<ul>
		<li>I live in my home in Orlando, FL near my family and my <span title=":*">girlfriend</span></li>
		<li>I work as a Web Developer in a prosperous industry in order to:
			<ul>
				<li>Sustain my lifestyle as an avid traveller (check out some of the moments in my recent <a href="javascript:void(0)" title="Not Here">3-month adventure</a>)
				</li>
				<li>Attend local events with my friends</li>
			</ul>
		</li>
		<li>I'm alive and well!</li>
	</ul>
	<script src="scripts/js/main.js"></script>
</body>
</html>