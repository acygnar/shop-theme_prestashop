<?php
/* Smarty version 3.1.33, created on 2019-01-16 12:22:03
  from 'C:\xampp2\htdocs\presta\themes\classicBioSanti\templates\customer\_partials\address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f13db23b183_51927182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe7b03f80c0f734e9b0de3c452c1024393a2871b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\presta\\themes\\classicBioSanti\\templates\\customer\\_partials\\address-form.tpl',
      1 => 1544687276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5c3f13db23b183_51927182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4801425425c3f13db21e086_04940409', "address_form");
?>

<?php }
/* {block "address_form_url"} */
class Block_18713908965c3f13db2208b2_35808689 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
      method="POST"
      action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
      data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
    >
    <?php
}
}
/* {/block "address_form_url"} */
/* {block 'form_field'} */
class Block_514722795c3f13db22f843_09747490 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_141093665c3f13db22a134_87086540 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_514722795c3f13db22f843_09747490', 'form_field', $this->tplIndex);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'form_fields'} */
/* {block "address_form_fields"} */
class Block_20720206345c3f13db2293d8_70787201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="form-fields">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141093665c3f13db22a134_87086540', 'form_fields', $this->tplIndex);
?>

        </section>
      <?php
}
}
/* {/block "address_form_fields"} */
/* {block 'form_buttons'} */
class Block_2267485475c3f13db236e72_66468540 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button class="btn btn-primary float-xs-right" type="submit" class="form-control-submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block "address_form_footer"} */
class Block_11267458575c3f13db235cc4_23254970 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer clearfix">
        <input type="hidden" name="submitAddress" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2267485475c3f13db236e72_66468540', 'form_buttons', $this->tplIndex);
?>

      </footer>
      <?php
}
}
/* {/block "address_form_footer"} */
/* {block "address_form"} */
class Block_4801425425c3f13db21e086_04940409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_form' => 
  array (
    0 => 'Block_4801425425c3f13db21e086_04940409',
  ),
  'address_form_url' => 
  array (
    0 => 'Block_18713908965c3f13db2208b2_35808689',
  ),
  'address_form_fields' => 
  array (
    0 => 'Block_20720206345c3f13db2293d8_70787201',
  ),
  'form_fields' => 
  array (
    0 => 'Block_141093665c3f13db22a134_87086540',
  ),
  'form_field' => 
  array (
    0 => 'Block_514722795c3f13db22f843_09747490',
  ),
  'address_form_footer' => 
  array (
    0 => 'Block_11267458575c3f13db235cc4_23254970',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_2267485475c3f13db236e72_66468540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="js-address-form">
    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18713908965c3f13db2208b2_35808689', "address_form_url", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20720206345c3f13db2293d8_70787201', "address_form_fields", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11267458575c3f13db235cc4_23254970', "address_form_footer", $this->tplIndex);
?>


    </form>
  </div>
<?php
}
}
/* {/block "address_form"} */
}
