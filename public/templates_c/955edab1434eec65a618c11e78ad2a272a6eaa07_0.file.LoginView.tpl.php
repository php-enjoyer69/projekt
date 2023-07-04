<?php
/* Smarty version 3.1.33, created on 2023-07-04 09:07:07
  from 'C:\xampp\htdocs\projekt\app\views\templates\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64a3c51bc99451_16605857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955edab1434eec65a618c11e78ad2a272a6eaa07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\LoginView.tpl',
      1 => 1688454407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a3c51bc99451_16605857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE HTML>

<head>
		<title>Logowanie - Precel.pl</title>		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main1.css" />
		<style>
			.login-wrapper {
				display: flex;
				justify-content: center;
				align-items: center;
				height: 100vh;
			}

			.container {
				width: 400px;
				text-align: center;
			}
		</style>
</head>

<body>
	<div class="login-wrapper">
		<div class="container">
			

<header>
                <h2>Logowanie do systemu</h2>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
                <fieldset>    
                <div class="pure-control-group" style="margin-bottom:20px">
                    <input id="login" type="text" name="login" placeholder="wpisz login">
                </div>
                
                <div class="pure-control-group">
                <input id="password" type="password" name="pass" placeholder="wpisz hasło"/><br />
                </div>
				<div class="col-12">
				<input type="submit" value="Zaloguj" class="button primary" />
				<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
MainView">Ekran główny</a>
				<br><br>
				<p>Jeśli nie masz konta, zarejestruj się</p>
				<a class="button primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">Zarejestruj się</a>
				</div>
                
            </fieldset>
            </form>    
            </header>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148363152064a3c51bc8a6d8_71065317', 'messages');
?>

				</div>
			</form>
            <a class="image background"><img src="images/pretzelbirthday.png" alt=""/></a> 
		</div>
</div><?php }
/* {block 'messages'} */
class Block_148363152064a3c51bc8a6d8_71065317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_148363152064a3c51bc8a6d8_71065317',
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
</</span>
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
