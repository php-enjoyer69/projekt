<?php
/* Smarty version 3.1.33, created on 2023-07-07 17:34:39
  from 'C:\xampp\htdocs\projekt\app\views\templates\RoleEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64a8308f18a818_34487745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd39437d8105a400a475865140b92cd2ad3a0490' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\RoleEdit.tpl',
      1 => 1688744074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a8308f18a818_34487745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>

<head>

    <title>Edycja roli</title>

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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32316798364a8308f14ce96_92756875', 'messages');
?>


    </nav>

</head>


<body>

    <section id="wrapper">

        <div class="bottom-margin form-container">
        <h2 style="text-align: center"><br>przydzielanie roli w filmie</h2>

            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roleSave" method="post" class="pure-form pure-form-aligned">
            <input type="hidden" name="id_role" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_role;?>
">

                <fieldset>

                    <div class="pure-control-group">
                        <label for="id_movie">wybierz film</label>
                        <select id="id_movie" name="id_movie">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movie']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['m']->value["id_movie"];?>
"<?php if ($_smarty_tpl->tpl_vars['m']->value["id_movie"] == $_smarty_tpl->tpl_vars['form']->value->id_movie) {?>selected<?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
><?php echo $_smarty_tpl->tpl_vars['m']->value["title"];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </select>
                    </div><br>

                    <div class="pure-control-group">
                        <label for="id_person">wybierz osobę</label>
                        <select id="id_person" name="id_person">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['person']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value["id_person"];?>
"<?php if ($_smarty_tpl->tpl_vars['p']->value["id_person"] == $_smarty_tpl->tpl_vars['form']->value->id_person) {?>selected<?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </select>
                    </div><br>

                                       <div class="pure-control-group">
                        <label for="is_director">kim jest ta osoba w filmie</label>
                        <select id="is_director" name="is_director">

                        <option value="0" >aktor</option>
                        <option value="1" >reżyser</option>

                         </select>
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
class Block_32316798364a8308f14ce96_92756875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_32316798364a8308f14ce96_92756875',
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
