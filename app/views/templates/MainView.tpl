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

				<!-- Intro -->
					<div id="intro">
						<h1>To jest<br />
						<h1 style="color: #ff4eac">PRECEL.pl</h1></h1>
						<p>Najlepsza baza filmowa z preclem w Polsce</p>
						<div>
						<a href="#" class="image "><img src="images/PretzelCharacter.png" alt=""/></a>
						</div>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="{$conf->action_root}MainView" class="logo">Precel</a>
					</header>

				<!-- Nav -->
				<nav id="nav">
                <ul class="links">
                <a class="image"><img src="images/pretzelbirthday.png" height=200 alt="" {* style="margin-top: 10px; margin-left: 150px" *}/></a> 
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
						<h5>Zalogowano jako ADMIN</h5>
					{/if}
						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<h2><a href="#">Szukasz<br />
									idealnego filmu?</a></h2>
									<a class="image"><img src="images/pretzelbirthday.png" alt=""  height=320 width=250 /></a>
									<br><br>
									<sup>Precel.pl to strona stworzona do odkrywania nowych filmów
									dla każdej grupy wiekowej oraz szukania informacji na temat aktorów i reżyserów. Dzięki naszej bazie wybór idealnego filmu na romantyczny wieczór z drugą połówką nie będzie już problemem ♥</sup>
								</header>
								
								<ul class="actions special">
									<li><a href="{$conf->action_root}movieList" class="button large">Przeglądaj filmy i seriale</a></li>
								</ul>
							</article>

					</div>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Precel</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
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