<?php
/* Smarty version 3.1.33, created on 2023-07-02 15:58:25
  from 'C:\xampp\htdocs\projekt\app\views\templates\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64a18281f3fe39_35996519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955edab1434eec65a618c11e78ad2a272a6eaa07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\LoginView.tpl',
      1 => 1688306275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a18281f3fe39_35996519 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="assets/css/main1.css" />
<body>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="wrapper style2 special fade">
<div class="container">
	<header>
		<h2><b style="color: #f942a4"> Logowanie</h2>
		<p>Zaloguj się do systemu by móc korzystać ze strony</p>
	</header>
	<form method="post" action="#" class="cta">
		<div class="row gtr-uniform gtr-50">
			<div class="col-8 col-12-xsmall"><input type="text" name="login" id="id_login" placeholder="login" /></div>
			<div class="col-4 col-12-xsmall"><input type="submit" value="Zarejestruj się" class="button fit" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register"/></div>
			<div class="col-8 col-12-xsmall"><input type="password" name="pass" id="id_pass" placeholder="hasło" /></div>
			<div class="col-4 col-12-xsmall"><input type="submit" value="Zaloguj" class="button primary fit" /></div>

			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
				<div class="messages bottom-margin">
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
							<span msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>><li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li></span>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			<?php }?>
		</div>
	</form>
	<!-- <a href="#" class="image fit"><img src="images/pretzelbirthday.png" alt=""/></a> -->
	<!-- <class="image"><img src="images/pretzelbirthday.png" alt=""/></class=> -->
</div>
</form>
</body><?php }
}
