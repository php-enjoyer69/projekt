<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Precel.pl - najlepsza baza filmów w Polsce</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Header -->
					<header id="header">
						<a href="MainView.tpl" class="logo">Precel</a>
					</header>

				<!-- Nav -->
				<nav id="nav">

                <ul class="links">
					<li><a href="{$conf->action_root}movieList">Filmy i Seriale</a></li>
					<li><a href="{$conf->action_root}personList">Aktorzy i Reżyserzy</a></li>
				</ul>
				{if count($conf->roles)>0}
				<a href="{$conf->action_root}logout" class="button primary">Wyloguj</a>
			{else}
				<a href="{$conf->action_root}loginShow" class="button primary">Zaloguj</a>
			{/if}
			</nav> 

				<!-- Main -->
					<div id="main">
					{if Core\RoleUtils::inRole("1")}
					<h5>Zalogowano jako ADMIN</span></h5>
					{/if}
						<!-- Posts -->
							<section class="posts">
							{foreach $person as $p}
								<article>
									<h3 class="major">{$p["name"]}</br>{$p["surname"]}</h3>
								    <h5 class="major">{$p["birthyear"]}</h5>
									<a class="image"><img src="images/{$p["portrait"]}" height=320 width=250 /></a>
								</article>
							{/foreach}
							</section>

						<!-- Footer -->
							<footer>
								<div class="pagination">
									<a href="#" class="previous">poprzednia</a>
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">następna</a>
								</div>
							</footer>

					</div>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>