<!DOCTYPE HTML>
<html>

<head>
	<title>Edycja osób</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/main1.css" />
	<style>
		.form-container {
			max-width: 400px;
			margin: 0 auto;
		}
	</style>
	<nav>
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
	</nav>
</head>

<body>
	<section id="wrapper">
		<header>
			<div class="middle">
				<h2>Edycja/dodawanie osób</h2>
			</div>
		</header>
		<div class="bottom-margin form-container">
			<form action="{$conf->action_root}personSave" method="post" class="pure-form pure-form-aligned">
			<input type="hidden" name="id_person" value="{$form->id_person}">
				<fieldset>
					<div class="pure-control-group">
						<input id="name" type="text" placeholder="imie" name="name"
							value="{$form->name}">
					</div>
					<div class="pure-control-group">
						<input id="surname" type="text" placeholder="nazwisko" name="surname"
							value="{$form->surname}">
					</div>
					<div class="pure-control-group">
						<input id="birthyear" type="text" placeholder="data urodzenia" name="birthyear"
							value="{$form->birthyear}">
					</div>
					<div class="pure-controls" style="margin-top: 20px;">
						<input type="submit" class="button primary" value="Zapisz" />
						<a class="button" href="{$conf->action_root}PersonList">Powrót</a>
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