<?php
/* Smarty version 3.1.33, created on 2019-02-04 18:11:05
  from 'C:\xampp2\htdocs\presta\themes\classicBioSanti\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c587229336bc7_91549886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '645ceeb87fb32dda97f1d2ddee6fe0f266eb1f62' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\presta\\themes\\classicBioSanti\\templates\\index.tpl',
      1 => 1547761952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c587229336bc7_91549886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
    

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2568745375c58722932a0c5_34912079', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_14481677225c58722932ab74_19091054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_content_top'} */
/* {block 'hometabcontent'} */
class Block_12506105795c58722932be11_42828595 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeProductsHook'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'hometabcontent'} */
/* {block 'spatabcontent'} */
class Block_19672624555c587229333650_65110297 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySpaProductsHook'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'spatabcontent'} */
/* {block 'sporttabcontent'} */
class Block_14987551695c5872293351f9_84525253 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySportProductsHook'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'sporttabcontent'} */
/* {block 'page_content'} */
class Block_5285364685c58722932b781_37580507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="tabs">
            <!--TABS -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="tabsNavItem activeTab"><a href="#home" role="tab" data-toggle="tab">HOME</a></li>
                <li class="tabsNavItem"><a href="#spa" role="tab" data-toggle="tab">SPA</a></li>
                <li class="tabsNavItem"><a href="#sport" role="tab" data-toggle="tab">SPORT</a></li>
            </ul>
            <!-- TABS CONTENT -->
            <div class="tab-contents">
                <!-- HOME -->
                <div class="tab-panes" id="home">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12506105795c58722932be11_42828595', 'hometabcontent', $this->tplIndex);
?>

                </div>
                <!-- SPA -->
                <div class="tab-panes" id="spa">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19672624555c587229333650_65110297', 'spatabcontent', $this->tplIndex);
?>

                </div>
                <!-- Sport -->
                <div class="tab-panes" id="sport">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14987551695c5872293351f9_84525253', 'sporttabcontent', $this->tplIndex);
?>

                </div>
            </div>
            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2568745375c58722932a0c5_34912079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2568745375c58722932a0c5_34912079',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14481677225c58722932ab74_19091054',
  ),
  'page_content' => 
  array (
    0 => 'Block_5285364685c58722932b781_37580507',
  ),
  'hometabcontent' => 
  array (
    0 => 'Block_12506105795c58722932be11_42828595',
  ),
  'spatabcontent' => 
  array (
    0 => 'Block_19672624555c587229333650_65110297',
  ),
  'sporttabcontent' => 
  array (
    0 => 'Block_14987551695c5872293351f9_84525253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14481677225c58722932ab74_19091054', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5285364685c58722932b781_37580507', 'page_content', $this->tplIndex);
?>

    </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
