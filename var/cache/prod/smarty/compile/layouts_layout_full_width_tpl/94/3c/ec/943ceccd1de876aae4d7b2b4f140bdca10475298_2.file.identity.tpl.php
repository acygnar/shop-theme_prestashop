<?php
/* Smarty version 3.1.33, created on 2019-01-16 12:37:45
  from 'C:\xampp2\htdocs\presta\themes\classicBioSanti\templates\customer\identity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f17890b0bb7_10779258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '943ceccd1de876aae4d7b2b4f140bdca10475298' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\presta\\themes\\classicBioSanti\\templates\\customer\\identity.tpl',
      1 => 1544687276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3f17890b0bb7_10779258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4485921135c3f178909f4b8_09372895', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4263456115c3f17890a7e01_93376381', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_4485921135c3f178909f4b8_09372895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_4485921135c3f178909f4b8_09372895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your personal information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_4263456115c3f17890a7e01_93376381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_4263456115c3f17890a7e01_93376381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['customer_form']->value),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_content'} */
}
