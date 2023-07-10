<?php
/* Smarty version 3.1.33, created on 2023-07-10 10:59:49
  from 'C:\xampp\htdocs\projekt\app\views\templates\MovieEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64abc88586a8a7_88120961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8479ddc2bff8cc1583cc3566d15a21b846a3141d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\MovieEdit.tpl',
      1 => 1688979587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abc88586a8a7_88120961 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160798889964abc885853d45_82762249', 'messages');
?>


    </nav>

</head>


<body>

    <section id="wrapper">

        <div class="bottom-margin form-container">
        <h2 style="text-align: center"><br>edycja/dodawanie filmów</h2>

            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieSave" method="post" class="pure-form pure-form-aligned">
            <input type="hidden" name="id_movie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_movie;?>
">

                <fieldset>

                    <div class="pure-control-group">
                        <label for="title">tytuł</label>
                        <input id="name" type="text" placeholder="title" name="title"
                            value="<?php echo $_smarty_tpl->tpl_vars['form']->value->title;?>
">
                    </div><br>

                    <div class="pure-control-group">
                        <label for="year">data</label>
                        <input id="year" type="text" placeholder="data" name="year"
                            value="<?php echo $_smarty_tpl->tpl_vars['form']->value->year;?>
">
                    </div><br>

                    <div class="pure-control-group">
                        <label for="description">opis</label>
                        <input id="description" type="text" name="description" placeholder="opis"
                            value="<?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
"></input>
                    </div><br>

                    <div class="pure-control-group">
                        <label for="title">plik z obrazkiem</label>
                        <input id="cover" type="text" placeholder="obrazek" name="cover"
                            value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cover;?>
">
                    </div><br>

                    <div class="pure-controls" style="margin-top: 20px; margin-left: 65px;">
                        <input type="submit" class="button primary" value="Zapisz" />
                        <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieList">Powrót</a>
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

</html>
<?php }
/* {block 'messages'} */
class Block_160798889964abc885853d45_82762249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_160798889964abc885853d45_82762249',
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
