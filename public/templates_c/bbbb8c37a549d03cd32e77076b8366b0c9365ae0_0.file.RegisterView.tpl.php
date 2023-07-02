<?php
/* Smarty version 3.1.33, created on 2023-07-02 15:58:58
  from 'C:\xampp\htdocs\projekt\app\views\templates\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64a182a2da1967_20287298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbbb8c37a549d03cd32e77076b8366b0c9365ae0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\RegisterView.tpl',
      1 => 1688306302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a182a2da1967_20287298 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="assets/css/main1.css" />
<body>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="wrapper style2 special fade">
<div class="container">
	<header>
		<h2><b style="color: #f942a4">Rejestracja</h2>
		<p>Zarejestruj się by móc w pełni korzystać ze strony</p>
	</header>
	<form method="post" action="#" class="cta">
		<div class="row gtr-uniform gtr-50">
            <div class="col-8 col-12-xsmall"><input type="email" name="email" id="id_email" placeholder="adres e-mail" /></div>
			<div class="col-8 col-12-xsmall"><input type="text" name="login" id="id_login" placeholder="login" /></div>
			<div class="col-8 col-12-xsmall"><input type="password" name="pass" id="id_pass" placeholder="hasło" /></div>
            <div class="col-4 col-12-xsmall"><input type="submit" value="Zarejestruj się teraz" class="button fit primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register"/></div>

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
