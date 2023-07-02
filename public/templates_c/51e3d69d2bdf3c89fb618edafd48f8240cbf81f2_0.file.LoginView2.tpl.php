<?php
/* Smarty version 3.1.33, created on 2023-06-30 23:26:57
  from 'C:\xampp\htdocs\projekt\app\views\templates\LoginView2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_649f48a12163c3_98377470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51e3d69d2bdf3c89fb618edafd48f8240cbf81f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\LoginView2.tpl',
      1 => 1688160383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649f48a12163c3_98377470 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="assets/css/main1.css" /> 

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="wrapper style2 special fade">
<div class="container">
	<header>
		<h2>Logowanie</h2>
		<p>Zaloguj się do systemu by móc korzystać ze strony</p>
	</header>
	<form method="post" action="#" class="cta">
		<div class="row gtr-uniform gtr-50">
			<div class="col-8 col-12-xsmall"><input type="text" name="login" id="id_login" placeholder="login" /></div>
			<div class="col-8 col-12-xsmall"><input type="password" name="pass" id="id_pass" placeholder="hasło" /></div>
			<div class="col-4 col-12-xsmall"><input type="submit" value="Zaloguj" class="button fit" /></div>
		</div>
	</form>
</div>
</form><?php }
}
