<link rel="stylesheet" href="assets/css/main.css" /> 

<form action="{$conf->action_url}login" method="post" class="wrapper style2 special fade">
<div class="container">
	<header>
		<h2>Logowanie</h2>
		<p>Zaloguj się do systemu by móc korzystać ze strony</p>
	</header>
	<form method="post" action="#" class="cta">
		<div class="row gtr-uniform gtr-50">
			<div class="col-8 col-12-xsmall"><input type="text" name="login" id="id_login" placeholder="login" value="{$form->login}" /></div>
			<div class="col-8 col-12-xsmall"><input type="password" name="pass" id="id_pass" placeholder="hasło" /></div>
			<div class="col-4 col-12-xsmall"><input type="submit" value="Zaloguj" class="button fit" /></div>
		</div>
	</form>
</div>
</form>

    
