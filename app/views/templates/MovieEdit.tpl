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

        <div class="bottom-margin form-container">
        <h2 style="text-align: center"><br>edycja/dodawanie filmów</h2>

            <form action="{$conf->action_root}movieSave" method="post" class="pure-form pure-form-aligned">
            <input type="hidden" name="id_movie" value="{$form->id_movie}">

                <fieldset>

                    <div class="pure-control-group">
                        <label for="title">tytuł</label>
                        <input id="name" type="text" placeholder="title" name="title"
                            value="{$form->title}">
                    </div><br>

                    <div class="pure-control-group">
                        <label for="year">data</label>
                        <input id="year" type="text" placeholder="data" name="year"
                            value="{$form->year}">
                    </div><br>

                    <div class="pure-control-group">
                        <label for="description">opis</label>
                        <input id="description" type="text" name="description" placeholder="opis"
                            value="{$form->description}"></input>
                    </div><br>

                    <div class="pure-control-group">
                        <label for="title">plik z obrazkiem</label>
                        <input id="cover" type="text" placeholder="obrazek" name="cover"
                            value="{$form->cover}">
                    </div><br>

                    <div class="pure-controls" style="margin-top: 20px; margin-left: 65px;">
                        <input type="submit" class="button primary" value="Zapisz" />
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
