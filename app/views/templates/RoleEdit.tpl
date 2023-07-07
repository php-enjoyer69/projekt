<!DOCTYPE HTML>

<html>

<head>

    <title>Edycja roli</title>

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
        <h2 style="text-align: center"><br>przydzielanie roli w filmie</h2>

            <form action="{$conf->action_root}roleSave" method="post" class="pure-form pure-form-aligned">
            <input type="hidden" name="id_role" value="{$form->id_role}">

                <fieldset>

                    <div class="pure-control-group">
                        <label for="id_movie">wybierz film</label>
                        <select id="id_movie" name="id_movie">
                        {foreach $movie as $m}
                        <option value="{$m["id_movie"]}"{if $m["id_movie"]==$form->id_movie}selected{{/if}}>{$m["title"]}</option>
                        {/foreach} </select>
                    </div><br>

                    <div class="pure-control-group">
                        <label for="id_person">wybierz osobę</label>
                        <select id="id_person" name="id_person">
                        {foreach $person as $p}
                        <option value="{$p["id_person"]}"{if $p["id_person"]==$form->id_person}selected{{/if}}>{$p["name"]} {$p["surname"]}</option>
                        {/foreach} </select>
                    </div><br>

                   {*srake*}
                    <div class="pure-control-group">
                        <label for="is_director">kim jest ta osoba w filmie</label>
                        <select id="is_director" name="is_director">

                        <option value="0" >aktor</option>
                        <option value="1" >reżyser</option>

                         </select>
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
