<?php
/* Smarty version 3.1.33, created on 2023-07-07 18:40:37
  from 'C:\xampp\htdocs\projekt\app\views\templates\MovieList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64a840053a6911_34610696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dfe810ec2a11c1b4becb9a794899bad17cdccac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\MovieList.tpl',
      1 => 1688747878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a840053a6911_34610696 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>

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
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>

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
                <a class="image"><img src="images/pretzelbirthday.png" height=200 alt="" /></a> 
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieList">Filmy i Seriale</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Aktorzy i Reżyserzy</a></li>
                </ul>

                <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="button primary">Wyloguj</a>
            <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="button primary">Zaloguj</a>
            <?php }?>

            </nav>

                <!-- Main -->

                    <div id="main">

                    <?php if (Core\RoleUtils::inRole("1")) {?>
                    <h5>Zalogowano jako ADMIN <br><br><a class="button primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieNew">dodaj nowy film</a>
                    <a class="button primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roleNew">dodaj/edytuj rolę w filmie</a></h5>
                    <?php }?>

                    <div class="bottom-margin">

                    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
movieSearch">

                     <h5>Wyszukaj film</h5>

                      <fieldset>                            
                        <input type="text" placeholder="tytuł filmu" id="title" name="title"/>
                        <button type="submit" class="button primary">Filtruj</button>
                      </fieldset>

                    </form>

                </div>

                        <!-- Posts -->

                            <section class="posts">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movie']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>

                                <article>
                                                                       <h3 class="major"><?php echo $_smarty_tpl->tpl_vars['m']->value["title"];?>
</h3>
                                    <a class="image"><img src="images/<?php echo $_smarty_tpl->tpl_vars['m']->value["cover"];?>
" height=320 width=250 /></a>
                                    <h6 class="center"><?php echo $_smarty_tpl->tpl_vars['m']->value["description"];?>
</h6>

                                    <?php if (Core\RoleUtils::inRole("1")) {?>
                                            <a class="button primary small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
movieEdit/<?php echo $_smarty_tpl->tpl_vars['m']->value['id_movie'];?>
">Edytuj</a>
                                            <a class="button small"
                                            href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
movieDelete/<?php echo $_smarty_tpl->tpl_vars['m']->value['id_movie'];?>
">Usuń</a>
                                    <?php }?>

                                    <a class="button primary small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
movieView/<?php echo $_smarty_tpl->tpl_vars['m']->value['id_movie'];?>
">Zobacz szczegóły</a>

                                </article>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <!--

                                <article>

                                    <header>

                                        <h2><a href="#">Świnka<br />

                                        Peppa</a></h2>

                                    </header>

                                    <a href="#" class="image fit"><img src="images/swinkapeppa.jpg" alt="" /></a>

                                    <p>Wyrusz na poszukiwanie przygód wraz z odważną świnką Peppą,

                                    jej rodziną i przyjaciółmi i przekonaj się, że okazja do nauki

                                    i zabawy czeka na każdym kroku.</p>

                                    <ul class="actions special">

                                        <li><a href="#" class="button">Rozwiń</a></li>

                                    </ul>

                                </article>

                                <article>

                                    <header>

                                        <h2><a href="#">My Little Pony<br />

                                        Przyjaźń to Magia</a></h2>

                                    </header>

                                    <a href="#" class="image fit"><img src="images/mylittlepony.jpg" alt="" /></a>

                                    <p>Udaj się na podróż do zaczarowanej krainy Equestria, w której jednorożka Twilight Sparkle wraz z przyjaciółmi

                                    mają niesamowite przygody i poznają moc przyjaźni</p>

                                    <ul class="actions special">

                                        <li><a href="#" class="button">Rozwiń</a></li>

                                    </ul>

                                </article>

                                <article>

                                    <header>

                                        <h2><a href="#">Shrek<br />

                                        </a></h2>

                                    </header>

                                    <a href="#" class="image fit"><img src="images/shrek.jpg" alt="" /></a>

                                    <p>Niezwykły duet składający się z nieokrzesanego ogra i gadatliwego osła rusza na ratunek

                                    księżniczce pilnowanej przez ziejącego ogniem smoka</p>

                                    <ul class="actions special">

                                        <li><a href="#" class="button">Rozwiń</a></li>

                                    </ul>

                                </article>

                                <article>

                                    <header>

                                        <h2><a href="#">Barbie<br />

                                        Life in the Dreamhouse</a></h2>

                                    </header>

                                    <a href="#" class="image fit"><img src="images/barbie.jpg" alt="" /></a>

                                    <p>Daj się zaprosić na animowane, zakulisowe przygody ikonicznej blondynki

                                    Barbie i jej fantastycznych przyjaciół!</p>

                                    <ul class="actions special">

                                        <li><a href="#" class="button">Rozwiń</a></li>

                                    </ul>

                                </article>

                                <article>

                                    <header>

                                        <h2><a href="#">Pokemon<br />

                                        Podróże</a></h2>

                                    </header>

                                    <a href="#" class="image fit"><img src="images/pokemon.jpg" alt="" /></a>

                                    <p>Młody trener Ash i jego nowy przyjaciel Goh biorą udział w badaniach profesora Cerise'a oraz

                                    podróżują po świecie, zdobywając coraz większą wiedzę na temat Pokemonów</p>

                                    <ul class="actions special">

                                        <li><a href="#" class="button">Rozwiń</a></li>

                                    </ul>

                                </article>

                                <article>

                                    <header>

                                        <h2><a href="#">Wyspa<br />

                                        Totalnej Porażki</a></h2>

                                    </header>

                                    <a href="#" class="image fit"><img src="images/totalnaporazka.jpg" alt="" /></a>

                                    <p>Bezlitosna kpina programów reality show. W tej kreskówce radosne chwile przemieszane są

                                    z zdradzieckimi knowaniami, sabotażem i zerwanymi sojuszami.</p>

                                    <ul class="actions special">

                                        <li><a href="#" class="button">Rozwiń</a></li>

                                    </ul>

                                </article> -->

                            </section>


                        <!-- Footer -->

                          


                    </div>

                <!-- Copyright -->

                    <div id="copyright">
                        <ul><li>&copy; Precel</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
                    </div>
            </div>

        <!-- Scripts -->

            <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

    </body>

</html><?php }
}
