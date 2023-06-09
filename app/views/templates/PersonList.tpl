<!DOCTYPE HTML>


<html>
<head>
    <title>Precel.pl - najlepsza baza filmów w Polsce</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
    <div id="wrapper" class="fade-in">
        <header id="header">
            <a href="MainView" class="logo">Precel</a>
        </header>
        <nav id="nav">
            <a class="image"><img src="images/pretzelbirthday.png" height=200 alt="" /></a> 
            <ul class="links">
                <li><a href="{$conf->action_root}movieList">Filmy i Seriale</a></li>
                <li><a href="{$conf->action_root}personList">Aktorzy i Reżyserzy</a></li>
            </ul>
            {if count($conf->roles)>0}
                <a href="{$conf->action_root}logout" class="button primary">Wyloguj</a>
            {else}
                <a href="{$conf->action_root}loginShow" class="button primary">Zaloguj</a>
            {/if}
        </nav>
        <div id="main">
            {if Core\RoleUtils::inRole("1")}
                <h5>Zalogowano jako ADMIN<br><br><a class="button primary" href="{$conf->action_root}personNew">Dodaj nowego aktora/reżysera</a>
                <a class="button primary" href="{$conf->action_root}roleNew">dodaj/edytuj rolę w filmie</a></h5>
            {/if}
            <form class="pure-form pure-form-stacked" action="{$conf->action_url}personSearch">
                <!-- <h5>Wyszukaj osobę</h5>
                <fieldset>                            
                    <input type="text" placeholder="wpisz nazwisko" id="surname" name="surname"/>
                    <button type="submit" class="button primary">Filtruj</button>
                </fieldset> -->
            </form>
            <section class="posts">
                {foreach $person as $p}
                    <article>
                        <h3 class="major">{$p["name"]}</br>{$p["surname"]}</h3>
                        <h5 class="major">rok urodzenia: {$p["birthyear"]}</h5>
                        <a class="image"><img src="images/{$p["portrait"]}" height=320 width=250 /></a><br>
                        {if Core\RoleUtils::inRole("1")}
                            <a class="button primary small" href="{$conf->action_url}personEdit/{$p['id_person']}">Edytuj</a>
                            <a class="button small" href="{$conf->action_url}personDelete/{$p['id_person']}">Usuń</a>
                        {/if}
                        <a class="button primary small" href="{$conf->action_url}personView/{$p['id_person']}">Zobacz szczegóły</a>
                    </article>
                {/foreach}
            </section>
          {*  <footer>
                <div class="pagination">
                    <a href="#" class="previous">poprzednia</a>
                    <a href="#" class="page active">1</a>
                    <a href="#" class="page">2</a>
                    <a href="#" class="page">3</a>
                    <span class="extra">&hellip;</span>
                    <a href="#" class="page">8</a>
                    <a href="#" class="page">9</a>
                    <a href="#" class="page">10</a>
                    <a href="#" class="next">następna</a>
                </div>
            </footer> *}
        </div>
        <div id="copyright">
            <ul>
                <li>&copy; Precel</li>
                <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>