<link rel="stylesheet" href="assets/css/main1.css" />
<body>
<form action="{$conf->action_url}login" method="post" class="wrapper style2 special fade">
<div class="container">
	<header>
		<h2><b style="color: #f942a4"> Logowanie</h2>
		<p>Zaloguj się do systemu by móc korzystać ze strony</p>
	</header>
	<form method="post" action="#" class="cta">
		<div class="row gtr-uniform gtr-50">
			<div class="col-8 col-12-xsmall"><input type="text" name="login" id="id_login" placeholder="login" /></div>
			<div class="col-4 col-12-xsmall"><input type="submit" value="Zarejestruj się" class="button fit" href="{$conf->action_root}register"/></div>
			<div class="col-8 col-12-xsmall"><input type="password" name="pass" id="id_pass" placeholder="hasło" /></div>
			<div class="col-4 col-12-xsmall"><input type="submit" value="Zaloguj" class="button primary fit" /></div>

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