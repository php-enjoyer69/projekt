<?php
/* Smarty version 3.1.33, created on 2023-06-11 20:15:04
  from 'C:\xampp\htdocs\projekt\app\views\templates\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64860f28c9ec60_45535430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955edab1434eec65a618c11e78ad2a272a6eaa07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\LoginView.tpl',
      1 => 1686506885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64860f28c9ec60_45535430 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="assets/css/main.css" /> 

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="wrapper style2 special fade">
<div class="container">
	<header>
		<h2>Logowanie</h2>
		<p>Zaloguj się do systemu by móc korzystać ze strony</p>
	</header>
	<form method="post" action="#" class="cta">
		<div class="row gtr-uniform gtr-50">
			<div class="col-8 col-12-xsmall"><input type="text" name="login" id="id_login" placeholder="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" /></div>
			<div class="col-8 col-12-xsmall"><input type="password" name="pass" id="id_pass" placeholder="hasło" /></div>
			<div class="col-4 col-12-xsmall"><input type="submit" value="Zaloguj" class="button fit" /></div>
		</div>
	</form>
</div>
</form>

    
<?php }
}
