<?php
/* Smarty version 3.1.33, created on 2023-07-02 15:55:02
  from 'C:\xampp\htdocs\projekt\app\views\templates\MainView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64a181b6d01660_24644368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0912979c122916c7b702d94608bb1654bb008de0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\MainView.tpl',
      1 => 1688306101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a181b6d01660_24644368 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>To jest<br />
						PRECEL.pl</h1>
						<p>Najlepsza baza filmowa z preclem w Polsce</p>
						<div>
						<a href="#" class="image "><img src="images/PretzelCharacter.png" alt=""/></a>
						</div>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
MainView" class="logo">Precel</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
MainView">Strona główna</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
MovieList">Filmy i Seriale</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
PersonList">Aktorzy i Reżyserzy</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">Wyloguj</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<h2><a href="#">Szukasz<br />
									idealnego filmu?</a></h2>
									<class="image"><img src="images/pretzelbirthday.png" alt=""  height=320 width=250 /></class=>
									<br><br>
									<sup>Precel.pl to strona stworzona do szukania i dzielenia się opiniami na temat najróżniejszych filmów i seriali,
									dla każdej grupy wiekowej. Dzięki naszej bazie wybór idealnego filmu na romantyczny wieczór z drugą połówką nie będzie już problemem</sup>
								</header>
								
								<ul class="actions special">
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
MovieList" class="button large">Przeglądaj filmy i seriale</a></li>
								</ul>
							</article>

					</div>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Precel.pl</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
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
