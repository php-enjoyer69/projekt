<?php
/* Smarty version 3.1.33, created on 2023-07-07 18:39:57
  from 'C:\xampp\htdocs\projekt\app\views\templates\PersonList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64a83fdd460fa9_88252375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe47b4e9268967cfdab64a755caad4b7103552d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\PersonList.tpl',
      1 => 1688747907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a83fdd460fa9_88252375 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>


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
        <div id="main">
            <?php if (Core\RoleUtils::inRole("1")) {?>
                <h5>Zalogowano jako ADMIN<br><br><a class="button primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew">Dodaj nowego aktora/reżysera</a>
                <a class="button primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roleNew">dodaj/edytuj rolę w filmie</a></h5>
            <?php }?>
            <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personSearch">
                <!-- <h5>Wyszukaj osobę</h5>
                <fieldset>                            
                    <input type="text" placeholder="wpisz nazwisko" id="surname" name="surname"/>
                    <button type="submit" class="button primary">Filtruj</button>
                </fieldset> -->
            </form>
            <section class="posts">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['person']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                    <article>
                        <h3 class="major"><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</br><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</h3>
                        <h5 class="major">rok urodzenia: <?php echo $_smarty_tpl->tpl_vars['p']->value["birthyear"];?>
</h5>
                        <a class="image"><img src="images/<?php echo $_smarty_tpl->tpl_vars['p']->value["portrait"];?>
" height=320 width=250 /></a><br>
                        <?php if (Core\RoleUtils::inRole("1")) {?>
                            <a class="button primary small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_person'];?>
">Edytuj</a>
                            <a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_person'];?>
">Usuń</a>
                        <?php }?>
                        <a class="button primary small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personView/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_person'];?>
">Zobacz szczegóły</a>
                    </article>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </section>
                  </div>
        <div id="copyright">
            <ul>
                <li>&copy; Precel</li>
                <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </div>
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
