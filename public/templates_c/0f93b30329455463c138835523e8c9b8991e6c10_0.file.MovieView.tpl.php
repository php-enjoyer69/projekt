<?php
/* Smarty version 3.1.33, created on 2023-07-07 18:49:25
  from 'C:\xampp\htdocs\projekt\app\views\templates\MovieView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64a8421585f035_77797237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f93b30329455463c138835523e8c9b8991e6c10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\MovieView.tpl',
      1 => 1688748563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a8421585f035_77797237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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

				<!-- Main -->
					<div id="main">
					<?php if (Core\RoleUtils::inRole("1")) {?>
					<h5>Zalogowano jako ADMIN</h5>
					<?php }?>
					</form>

					
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34239088664a84215835582_07366401', 'messages');
?>

						<!-- Posts -->
							<section>
								<article>

								    <h3 style="color: #ff4eac">Szczegóły na temat filmu: <h2><?php echo $_smarty_tpl->tpl_vars['movie']->value["title"];?>
</h2></h3>
								    <h4 style="color: #ff4eac">Rok Produkcji: </h4><h3><?php echo $_smarty_tpl->tpl_vars['movie']->value["year"];?>
</h3>
									<h4 style="color: #ff4eac">Opis: </h4><h4><?php echo $_smarty_tpl->tpl_vars['movie']->value["description"];?>
</h4>
									<h4 style="color: #ff4eac">Występują: </h4>
									<ul>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cast']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
									<li><?php echo $_smarty_tpl->tpl_vars['c']->value["name"];?>
 <?php echo $_smarty_tpl->tpl_vars['c']->value["surname"];?>
 jako <?php if ($_smarty_tpl->tpl_vars['c']->value["is_director"]) {?>reżyser<?php } else { ?>aktor<?php }?> <?php if (Core\RoleUtils::inRole("1")) {?><a style="margin-left: 10px" class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roleDelete/<?php echo $_smarty_tpl->tpl_vars['movie']->value["id_movie"];?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value["id_person"];?>
">usuń rolę</a><?php }?></li>	
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                    </ul>

								</article><br>
									<a class="button primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieList">Powrót</a>
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
/* {block 'messages'} */
class Block_34239088664a84215835582_07366401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_34239088664a84215835582_07366401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
					<div class="messages bottom-margin">
						<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
								<span msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</span>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				<?php }?>
			
			<?php
}
}
/* {/block 'messages'} */
}
