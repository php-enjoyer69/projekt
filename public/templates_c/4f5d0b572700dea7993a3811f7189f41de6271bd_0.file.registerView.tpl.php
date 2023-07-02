<?php
/* Smarty version 3.1.33, created on 2023-07-01 00:07:55
  from 'C:\xampp\htdocs\projekt\app\views\templates\registerView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_649f523b85cfd7_32188116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f5d0b572700dea7993a3811f7189f41de6271bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\registerView.tpl',
      1 => 1688162873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649f523b85cfd7_32188116 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="col-4 col-12-xsmall"><input type="submit" value="Zarejestruj się teraz" class="button fit primary" /></div>
		</div>
	</form>
	<!-- <a href="#" class="image fit"><img src="images/pretzelbirthday.png" alt=""/></a> -->
	<!-- <class="image"><img src="images/pretzelbirthday.png" alt=""/></class=> -->
</div>
</form>
</body><?php }
}
