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
                    <h5>Zalogowano jako ADMIN <br><br><a class="button primary" href="{$conf->action_root}movieNew">dodaj nowy film</a>
                    <a class="button primary" href="{$conf->action_root}roleNew">dodaj/edytuj rolę w filmie</a></h5>
                    {/if}

                    <div class="bottom-margin">

                    <form class="pure-form pure-form-stacked" action="{$conf->action_url}movieSearch">

                     <h5>Wyszukaj film</h5>

                      <fieldset>                            
                        <input type="text" placeholder="tytuł filmu" id="title" name="title"/>
                        <button type="submit" class="button primary">Filtruj</button>
                      </fieldset>

                    </form>

                </div>

                        <!-- Posts -->

                            <section class="posts">

                            {foreach $movie as $m}

                                <article>
                                   {* <h5 class="major">{$m["year"]}</h5> *}
                                    <h3 class="major">{$m["title"]}</h3>
                                    <a class="image"><img src="images/{$m["cover"]}" height=320 width=250 /></a>
                                    <h6 class="center">{$m["description"]}</h6>

                                    {if Core\RoleUtils::inRole("1")}
                                            <a class="button primary small" href="{$conf->action_url}movieEdit/{$m['id_movie']}">Edytuj</a>
                                            <a class="button small"
                                            href="{$conf->action_url}movieDelete/{$m['id_movie']}">Usuń</a>
                                    {/if}

                                    <a class="button primary small" href="{$conf->action_url}movieView/{$m['id_movie']}">Zobacz szczegóły</a>

                                </article>

                            {/foreach}

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