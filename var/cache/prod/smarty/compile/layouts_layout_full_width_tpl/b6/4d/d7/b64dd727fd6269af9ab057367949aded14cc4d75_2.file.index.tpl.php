<?php
/* Smarty version 3.1.33, created on 2019-02-18 17:57:31
  from 'C:\xampp2\htdocs\presta\themes\Classic2\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6ae3fbe364c9_91506286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b64dd727fd6269af9ab057367949aded14cc4d75' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\presta\\themes\\Classic2\\templates\\index.tpl',
      1 => 1547761952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6ae3fbe364c9_91506286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
    

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17699539515c6ae3fbe2c8f5_77730149', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_16045351775c6ae3fbe2d1d6_40128281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_content_top'} */
/* {block 'hometabcontent'} */
class Block_20896169125c6ae3fbe2e393_58277571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeProductsHook'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'hometabcontent'} */
/* {block 'spatabcontent'} */
class Block_379761045c6ae3fbe33b74_89964345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySpaProductsHook'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'spatabcontent'} */
/* {block 'sporttabcontent'} */
class Block_2069543275c6ae3fbe34df4_93525627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySportProductsHook'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'sporttabcontent'} */
/* {block 'page_content'} */
class Block_6064338325c6ae3fbe2dd65_00136954 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20896169125c6ae3fbe2e393_58277571', 'hometabcontent', $this->tplIndex);
?>

                </div>
                <!-- SPA -->
                <div class="tab-panes" id="spa">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_379761045c6ae3fbe33b74_89964345', 'spatabcontent', $this->tplIndex);
?>

                </div>
                <!-- Sport -->
                <div class="tab-panes" id="sport">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2069543275c6ae3fbe34df4_93525627', 'sporttabcontent', $this->tplIndex);
?>

                </div>
            </div>
            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17699539515c6ae3fbe2c8f5_77730149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_17699539515c6ae3fbe2c8f5_77730149',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16045351775c6ae3fbe2d1d6_40128281',
  ),
  'page_content' => 
  array (
    0 => 'Block_6064338325c6ae3fbe2dd65_00136954',
  ),
  'hometabcontent' => 
  array (
    0 => 'Block_20896169125c6ae3fbe2e393_58277571',
  ),
  'spatabcontent' => 
  array (
    0 => 'Block_379761045c6ae3fbe33b74_89964345',
  ),
  'sporttabcontent' => 
  array (
    0 => 'Block_2069543275c6ae3fbe34df4_93525627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16045351775c6ae3fbe2d1d6_40128281', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6064338325c6ae3fbe2dd65_00136954', 'page_content', $this->tplIndex);
?>

    </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
