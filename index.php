<!DOCTYPE HTML>
<html>
<head>
	<title>Just Delete Me | justdelete.me</title>
	<meta charset="UTF-8">
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="inc/search.js"></script>
</head>	
<body>
	<script>
		$.getJSON('sites.json', function(data) {
			// Sort by name, asc
			data.sort(function(a, b){
			 var nameA=a.name.toLowerCase(), nameB=b.name.toLowerCase()
			 if (nameA < nameB)
			  return -1 
			 if (nameA > nameB)
			  return 1
			 return 0
			});
			for (i = 0; i < data.length; i++) {
				$('.sites').append("<section class='site "+data[i].difficulty+"'><a href='"+data[i].url+"'>"+data[i].name+"</a></section>");
			}
		});
	</script>
	<header>
		<h1>just<span>delete</span>.me</h1>
		<p class="tagline">A directory of urls to delete your account from web services.</p>
	</header>

	<div id="test">
	</div>
	<div class="search">
		<div class="search-container">
			<input type="text" id="search">
			<a href="">search</a>
		</div>
	</div>
	<section class="main">		
		<section class="sites" id="sites">

			<p class="no-results">Can't find what you're looking for? <a href='#'>Help make justdelete.me better</a>.</p>

		</section>
	</section>
	<section class="info-block">
		<div class="info-container">
			<h2>What is this?</h2>
			<p>Many companies use <a href="http://darkpatterns.org/">dark pattern</a> techniques to make it difficult to find how to delete your account. JustDelete.me aims to be a repository of exactly what page you need to visit to delete your account.</p>

			<p>The links above are colour-coded to indicate the difficulty level of account deletion:</p>
			<ul>
				<li><span class="green">Green:</span> Simple process</li>
				<li><span class="yellow">Yellow:</span> Some extra steps involved</li>
				<li><span class="red">Red:</span> Cannot be fully deleted without contacting customer services</li>
			</ul>

			<p>Got a site you think should be added? <a href="http://github.com/rmlewisuk/justdelete.me">Fork the project GitHub</a>.</p>
			<footer>
				<span>Made by <a href="http://robblewis.me">Robb Lewis</a> | Designed by <a href="http://edpoole.me">Ed Poole</a> | Fork on <a href="http://github.com/rmlewisuk/justdelete.me">GitHub</a></span>
			</footer>
		</div>		
	</section>	
</body>
</html>