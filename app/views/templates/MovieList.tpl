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
				{if Core\RoleUtils::inRole("1")}
				
                <ul class="links">
					<li><a href="{$conf->action_root}MainView">Strona główna</a></li>
					<li><a href="{$conf->action_root}MovieList">Filmy i Seriale</a></li>
					<li><a href="{$conf->action_root}MovieEdit">Edytuj film</a></li>
					<li><a href="{$conf->action_root}PersonList">Aktorzy i Reżyserzy</a></li>
					<li><a href="{$conf->action_root}PersonEdit">Edytuj osoby</a></li>
				</ul>
				{else}
				<ul class="links">
					<li><a href="{$conf->action_root}MainView">Strona główna</a></li>
					<li><a href="{$conf->action_root}MovieList">Filmy i Seriale</a></li>
					<li><a href="{$conf->action_root}PersonList">Aktorzy i Reżyserzy</a></li>
				</ul>
				{/if}
				{if count($conf->roles)>0}
				<a href="{$conf->action_root}logout" class="button primary">Wyloguj</a>
			{else}
				<a href="{$conf->action_root}loginShow" class="button primary">Zaloguj</a>
			{/if}
			</nav> 

				<!-- Main -->
					<div id="main">
					{if Core\RoleUtils::inRole("1")}
					<a>Zalogowano jako admin</span></a>
					{/if}
					<div class="bottom-margin">
					<form class="pure-form pure-form-stacked" action="{$conf->action_url}MovieSearch">
					 <legend>Wyszukaj film</legend>
					  <fieldset>							
						<input type="text" placeholder="tytuł filmu" name="name" value="" />


						<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
					  </fieldset>
					</form>
				</div>
						<!-- Posts -->
							<section class="posts">
							{foreach $movie as $m}
								<article>
								    <h5 class="major">{$m["year"]}</h5>
									<h3 class="major">{$m["title"]}</h3>
								    <a class="image"><img src="images/{$m["cover"]}" height=320 width=250 /></a>
									<h6 class="center">{$m["description"]}</h6>
								</article>
							{/foreach}
							<!--
								<article>
									<header>
										<h2><a href="#">Świnka<br />
										Peppa</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/swinkapeppa.jpg" alt="" /></a>
									<p>Wyrusz na poszukiwanie przygód wraz z odważną świnką Peppą,
									jej rodziną i przyjaciółmi i przekonaj się, że okazja do nauki
									i zabawy czeka na każdym kroku.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Rozwiń</a></li>
									</ul>
								</article>
								<article>
									<header>
										<h2><a href="#">My Little Pony<br />
										Przyjaźń to Magia</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/mylittlepony.jpg" alt="" /></a>
									<p>Udaj się na podróż do zaczarowanej krainy Equestria, w której jednorożka Twilight Sparkle wraz z przyjaciółmi
									mają niesamowite przygody i poznają moc przyjaźni</p>
									<ul class="actions special">
										<li><a href="#" class="button">Rozwiń</a></li>
									</ul>
								</article>
								<article>
									<header>
										<h2><a href="#">Shrek<br />
										</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/shrek.jpg" alt="" /></a>
									<p>Niezwykły duet składający się z nieokrzesanego ogra i gadatliwego osła rusza na ratunek
									księżniczce pilnowanej przez ziejącego ogniem smoka</p>
									<ul class="actions special">
										<li><a href="#" class="button">Rozwiń</a></li>
									</ul>
								</article>
								<article>
									<header>
										<h2><a href="#">Barbie<br />
										Life in the Dreamhouse</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/barbie.jpg" alt="" /></a>
									<p>Daj się zaprosić na animowane, zakulisowe przygody ikonicznej blondynki
									Barbie i jej fantastycznych przyjaciół!</p>
									<ul class="actions special">
										<li><a href="#" class="button">Rozwiń</a></li>
									</ul>
								</article>
								<article>
									<header>
										<h2><a href="#">Pokemon<br />
										Podróże</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pokemon.jpg" alt="" /></a>
									<p>Młody trener Ash i jego nowy przyjaciel Goh biorą udział w badaniach profesora Cerise'a oraz 
									podróżują po świecie, zdobywając coraz większą wiedzę na temat Pokemonów</p>
									<ul class="actions special">
										<li><a href="#" class="button">Rozwiń</a></li>
									</ul>
								</article>
								<article>
									<header>
										<h2><a href="#">Wyspa<br />
										Totalnej Porażki</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/totalnaporazka.jpg" alt="" /></a>
									<p>Bezlitosna kpina programów reality show. W tej kreskówce radosne chwile przemieszane są 
									z zdradzieckimi knowaniami, sabotażem i zerwanymi sojuszami.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Rozwiń</a></li>
									</ul>
								</article> -->
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