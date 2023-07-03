<?php
/* Smarty version 3.1.33, created on 2023-07-03 19:46:41
  from 'C:\xampp\htdocs\projekt\app\views\templates\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64a309816c5367_40499532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbbb8c37a549d03cd32e77076b8366b0c9365ae0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\RegisterView.tpl',
      1 => 1688406386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a309816c5367_40499532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<head>
		<title>rejstracja <a class="image"><img src="images/pretzelcharacter.png" height=65 width=50 alt=""/></a></title>
		<meta charset="utf-8" />
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
                <h2>Rejestracja do systemu</h2>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post">
                <fieldset>    
                <div class="pure-control-group" style="margin-bottom:20px">
                    <input id="login" type="text" name="login" placeholder="utwórz nowy login">
                </div>
                
                <div class="pure-control-group">
                <input id="password" type="password" name="pass" placeholder="utwórz nowe hasło"/><br />
                </div>
                <div class="col-12">
                    <input type="submit" value="Zarejestruj" class="button primary" />
                    <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Powrót</a>
					</div>
                
            </fieldset>
            </form>    
            </header>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20133633364a309816ad787_82473418', 'messages');
?>

				</div>
			</form>
            <a class="image background"><img src="images/pretzelbirthday.png" alt=""/></a> 
		</div>
</div><?php }
/* {block 'messages'} */
class Block_20133633364a309816ad787_82473418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_20133633364a309816ad787_82473418',
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
