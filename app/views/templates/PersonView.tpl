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
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Header -->
					<header id="header">
						<a href="MainView" class="logo">Precel</a>
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
					</form>

					
			{block name=messages}

				{if $msgs->isMessage()}
					<div class="messages bottom-margin">
						<ul>
							{foreach $msgs->getMessages() as $msg}
								{strip}
									<span msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if}
										{if $msg->isInfo()}info{/if}">{$msg->text}</span>
								{/strip}
							{/foreach}
						</ul>
					</div>
				{/if}
			
			{/block}
						<!-- Posts -->
							<section>
								<article>
								    <h3 style="color: #ff4eac">Szczegóły na temat osoby: <h2>{$person["name"]} {$person["surname"]}</h2></h3>
								    <h4 style="color: #ff4eac">Rok urodzenia:</h4><h3>{$person["birthyear"]}</h3>
									<h4 style="color: #ff4eac">Filmy z {$person["name"]} {$person["surname"]}: </h4>
									<ul>
									{foreach $cast as $c}
									<li>{if $c["is_director"]}reżyser{else}aktor{/if} w filmie {$c["title"]} {if Core\RoleUtils::inRole("1")}<a style="margin-left: 10px" class="button small" href="{$conf->action_root}roleDelete/{$c["id_movie"]}/{$person["id_person"]}">usuń rolę</a>{/if}</li>	
									{/foreach} 
                                    </ul>


								</article><br>
									<a class="button primary" href="{$conf->action_root}personList">Powrót</a>
							</section>
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