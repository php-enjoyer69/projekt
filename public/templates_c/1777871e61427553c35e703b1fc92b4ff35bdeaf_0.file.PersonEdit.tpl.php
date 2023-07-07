<?php
/* Smarty version 3.1.33, created on 2023-07-05 09:12:11
  from 'C:\xampp\htdocs\projekt\app\views\templates\PersonEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64a517cbe1dde0_22459104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1777871e61427553c35e703b1fc92b4ff35bdeaf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\PersonEdit.tpl',
      1 => 1688541010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a517cbe1dde0_22459104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>

<head>

    <title>Edycja osób</title>
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

    <nav>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144725511564a517cbe0a631_29913353', 'messages');
?>


    </nav>

</head>


<body>

        <div class="bottom-margin form-container">
        <h2 style="text-align: center"><br>edycja/dodawanie osób</h2>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personSave" method="post" class="pure-form pure-form-aligned">
            <input type="hidden" name="id_person" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_person;?>
">
                <fieldset>
                    <div class="pure-control-group">
                    <label for="name">imię</label>
                        <input id="name" type="text" placeholder="imie" name="name"

                            value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">

                    </div>

                    <div class="pure-control-group"> <br>
                    <label for="surname">nazwisko</label>
                        <input id="surname" type="text" placeholder="nazwisko" name="surname"

                            value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
">

                    </div>

                    <div class="pure-control-group"> <br>
                    <label for="birthyear">rok urodzenia</label>
                        <input id="birthyear" type="text" placeholder="rok urodzenia" name="birthyear"

                            value="<?php echo $_smarty_tpl->tpl_vars['form']->value->birthyear;?>
">

                    </div>

					<div class="pure-control-group"> <br>
                    <label for="portrait">portret</label>
					<input id="portrait" type="text" placeholder="plik z portretem" name="portrait"

						value="<?php echo $_smarty_tpl->tpl_vars['form']->value->portrait;?>
">

				</div>

                    <div class="pure-control-group"> <br>
                    <label for="person_role">rola osoby</label>
                    <select id="person_role" name="person_role">
                    <option value="reżyser/reżyserka">reżyser/reżyserka</option>
                    <option value="aktor/aktorka">aktor/aktorka</option>
                    <option value="aktor i reżyser/aktorka i reżyserka">aktor i reżyser/aktorka i reżyserka</option>
                    </select>
                </div>

                    <div class="pure-control-group"> <br>
                    <label for="starred_in">udział w tych filmach:</label>
                    <input id="starred_in" type="text" placeholder="filmy w których brano udział" name="starred_in"

                        value="<?php echo $_smarty_tpl->tpl_vars['form']->value->starred_in;?>
">

               </div>

                    <div class="pure-controls" style="margin-top: 20px; margin-left: 65px;">
                        <input type="submit" class="button primary" value="Zapisz" />
                        <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Powrót</a>

                    </div>
                </fieldset>




            </form>

        </div>




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
class Block_144725511564a517cbe0a631_29913353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_144725511564a517cbe0a631_29913353',
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
