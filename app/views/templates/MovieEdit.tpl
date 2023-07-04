<!DOCTYPE HTML>
<html>

<head>
	<title>Edytuj film</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/main1.css" />
	<style>
		.form-container {
			max-width: 400px;
			margin: 0 auto;
		}
	</style>
</head>

<body>
	<section id="wrapper">
		<header>
			<div class="inner">
				<h2>Dodaj/Edytuj film</h2>
				<p>Uzupełnij pola
				<p>
			</div>

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
			
		</header>
		<div class="bottom-margin form-container">
			<form action="{$conf->action_root}movieSave" method="post" class="pure-form pure-form-aligned">
				<input type="hidden" name='id_movie' value='{$form->id_movie}'>
				<fieldset>
					
					<div class="pure-control-group">
						<input id="title" type="text" placeholder="tytuł filmu" name="title"
							value="{$form->title}">
					</div><br>
					<div class="pure-control-group">
						<input id="year" type="text" placeholder="rok produkcji" name="year"
							value="{$form->year}">
                    </div><br>
						<div class="pure-control-group">
						<input id="description" type="text" placeholder="opis filmu" name="description"
							value="{$form->description}">
					</div><br>
					<div class="pure-control-group">
					<input id="cover" type="text" placeholder="obrazek filmu" name="cover"
						value="{$form->cover}">
				    </div><br>
					<div class="pure-controls" style="margin-top: 20px;">
						<a class="button primary"href="{$conf->action_root}movieSave">Zapisz</a>
						<a class="button" href="{$conf->action_root}movieList">Powrót</a>
					</div>
				</fieldset>
			</form>
		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

</body>

</html>