<?php
/* Smarty version 3.1.33, created on 2019-01-18 11:48:39
  from 'C:\xampp2\htdocs\presta\themes\classicBioSanti\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c41af07990c42_81575549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a95b1b77682edafbcc69cd3aa5a1e5bc5ace8cf' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\presta\\themes\\classicBioSanti\\templates\\checkout\\_partials\\footer.tpl',
      1 => 1544687276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c41af07990c42_81575549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5630765765c41af0798e738_30556550', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_5630765765c41af0798e738_30556550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_5630765765c41af0798e738_30556550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
