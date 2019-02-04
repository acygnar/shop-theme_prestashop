<?php
/* Smarty version 3.1.33, created on 2019-01-17 22:39:44
  from 'C:\xampp2\htdocs\presta\admin7270ibkv6\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c40f620b55f23_51960876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa3713e5853362b50a00764a13c81f4ec4fc3114' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\presta\\admin7270ibkv6\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1544093284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40f620b55f23_51960876 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
