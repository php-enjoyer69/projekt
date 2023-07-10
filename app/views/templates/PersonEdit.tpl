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

        <div class="bottom-margin form-container">
        <h2 style="text-align: center"><br>edycja/dodawanie osób</h2>
            <form action="{$conf->action_root}personSave" method="post" class="pure-form pure-form-aligned">
            <input type="hidden" name="id_person" value="{$form->id_person}">
                <fieldset>
                    <div class="pure-control-group">
                    <label for="name">imię</label>
                        <input id="name" type="text" placeholder="imie" name="name"

                            value="{$form->name}">

                    </div>

                    <div class="pure-control-group"> <br>
                    <label for="surname">nazwisko</label>
                        <input id="surname" type="text" placeholder="nazwisko" name="surname"

                            value="{$form->surname}">

                    </div>

                    <div class="pure-control-group"> <br>
                    <label for="birthyear">rok urodzenia</label>
                        <input id="birthyear" type="text" placeholder="rok urodzenia" name="birthyear"

                            value="{$form->birthyear}">

                    </div>

					<div class="pure-control-group"> <br>
                    <label for="portrait">portret</label>
					<input id="portrait" type="text" placeholder="plik z portretem" name="portrait"

						value="{$form->portrait}">

				</div>

                    <div class="pure-controls" style="margin-top: 20px; margin-left: 65px;">
                        <input type="submit" class="button primary" value="Zapisz" />
                        <a class="button" href="{$conf->action_root}personList">Powrót</a>

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