
<!DOCTYPE HTML>

<head>
		<title>Logowanie - Precel.pl</title>{* <a class="image"><img src="images/pretzelcharacter.png" height=65 width=50 alt=""/></a> *}
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/main1.css" />
		<style>
			.login-wrapper {
				display: flex;
				justify-content: center;
				align-items: center;
				height: 100vh;
			}

			.container {
				width: 400px;
				text-align: center;
			}
		</style>
</head>

<body>
	<div class="login-wrapper">
		<div class="container">
			

<header>
                <h2>Logowanie do systemu</h2>
                <form action="{$conf->action_root}login" method="post">
                <fieldset>    
                <div class="pure-control-group" style="margin-bottom:20px">
                    <input id="login" type="text" name="login" placeholder="wpisz login">
                </div>
                
                <div class="pure-control-group">
                <input id="password" type="password" name="pass" placeholder="wpisz hasło"/><br />
                </div>
				<div class="col-12">
				<input type="submit" value="Zaloguj" class="button primary" />
				<a class="button" href="{$conf->action_root}MainView">Ekran główny</a>
				<br><br>
				<p>Jeśli nie masz konta, zarejestruj się</p>
				<a class="button primary" href="{$conf->action_root}register">Zarejestruj się</a>
				</div>
                
            </fieldset>
            </form>    
            </header>
			{block name=messages}

				{if $msgs->isMessage()}
					<div class="messages bottom-margin">
						<ul>
							{foreach $msgs->getMessages() as $msg}
								{strip}
									<span msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if}
										{if $msg->isInfo()}info{/if}">{$msg->text}</</span>
								{/strip}
							{/foreach}
						</ul>
					</div>
				{/if}

			{/block}
				</div>
			</form>
            <a class="image background"><img src="images/pretzelbirthday.png" alt=""/></a> 
		</div>
</div>