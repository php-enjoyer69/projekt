<link rel="stylesheet" href="assets/css/main1.css" />
<body>
<form action="{$conf->action_url}login" method="post" class="wrapper style2 special fade">
<div class="container">
	<header>
		<h2><b style="color: #f942a4">Rejestracja</h2>
		<p>Zarejestruj się by móc w pełni korzystać ze strony</p>
	</header>
	<form method="post" action="#" class="cta">
		<div class="row gtr-uniform gtr-50">
            <div class="col-8 col-12-xsmall"><input type="email" name="email" id="id_email" placeholder="adres e-mail" /></div>
			<div class="col-8 col-12-xsmall"><input type="text" name="login" id="id_login" placeholder="login" /></div>
			<div class="col-8 col-12-xsmall"><input type="password" name="pass" id="id_pass" placeholder="hasło" /></div>
            <div class="col-4 col-12-xsmall"><input type="submit" value="Zarejestruj się teraz" class="button fit primary" href="{$conf->action_root}register"/></div>

			{if $msgs->isMessage()}
				<div class="messages bottom-margin">
					<ul>
						{foreach $msgs->getMessages() as $msg}
							{strip}
								<span msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if}
									{if $msg->isInfo()}info{/if}><li>{$msg->text}</li></span>
							{/strip}
						{/foreach}
					</ul>
				</div>
			{/if}

		</div>

	</form>
	<!-- <a href="#" class="image fit"><img src="images/pretzelbirthday.png" alt=""/></a> -->
	<!-- <class="image"><img src="images/pretzelbirthday.png" alt=""/></class=> -->
</div>
</form>
</body>