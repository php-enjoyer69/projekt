<?php
/* Smarty version 3.1.33, created on 2023-07-03 20:16:04
  from 'C:\xampp\htdocs\projekt\app\views\templates\MovieEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64a31064194131_26746180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8479ddc2bff8cc1583cc3566d15a21b846a3141d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\MovieEdit.tpl',
      1 => 1688408160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a31064194131_26746180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Edytuj film</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main1.css" />
	<style>
		.form-container {
			max-width: 400px;
			margin: 0 auto;
		}
	</style>
</head>

<body>
	<section id="wrapper">
		<header>
			<div class="inner">
				<h2>Dodaj/Edytuj film</h2>
				<p>Uzupełnij pola
				<p>
			</div>
		</header>
		<div class="bottom-margin form-container">
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieNew" method="post" class="pure-form pure-form-aligned">
				<input type="hidden" name="id_movie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_movie;?>
">
				<fieldset>
					
					<div class="pure-control-group">
						<label for="title">tytuł</label>
						<input id="title" type="text" placeholder="tytuł filmu" name="title"
							value="<?php echo $_smarty_tpl->tpl_vars['form']->value->title;?>
">
					</div>
					<div class="pure-control-group">
						<label for="year">rok produkcji</label>
						<input id="year" type="text" placeholder="rok produkcji" name="year"
							value="<?php echo $_smarty_tpl->tpl_vars['form']->value->year;?>
">
                    </div>
						<div class="pure-control-group">
						<label for="year">opis filmu</label>
						<input id="description" type="text" placeholder="opis filmu" name="description"
							value="<?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
">
					</div>
					<div class="pure-control-group">
					<label for="cover">opis filmu</label>
					<input id="cover" type="text" placeholder="obrazek filmu" name="cover"
						value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cover;?>
">
				    </div>
					<div class="pure-controls" style="margin-top: 20px;">
						<a class="button primary"href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieSave">Zapisz</a>
						<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
MovieList">Powrót</a>
					</div>
				</fieldset>
			</form>
		</div>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58454873964a310641633a9_87539591', 'messages');
?>


		<!-- Scripts -->
		<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
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
class Block_58454873964a310641633a9_87539591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_58454873964a310641633a9_87539591',
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
