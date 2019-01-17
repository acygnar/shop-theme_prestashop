<?php
/* Smarty version 3.1.33, created on 2019-01-16 12:19:44
  from 'C:\xampp2\htdocs\presta\themes\classicBioSanti\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f13506c5912_02850533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '645ceeb87fb32dda97f1d2ddee6fe0f266eb1f62' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\presta\\themes\\classicBioSanti\\templates\\index.tpl',
      1 => 1547050235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3f13506c5912_02850533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
    

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4983224775c3f13506b7111_51926126', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_10562341775c3f13506b8c66_15676483 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_content_top'} */
/* {block 'hometabcontent'} */
class Block_4620948625c3f13506bba88_44336897 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeProductsHook'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'hometabcontent'} */
/* {block 'spatabcontent'} */
class Block_15503302235c3f13506be375_05335375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySpaProductsHook'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'spatabcontent'} */
/* {block 'sporttabcontent'} */
class Block_9059839345c3f13506c1658_75793606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySportProductsHook'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'sporttabcontent'} */
/* {block 'page_content'} */
class Block_16102708145c3f13506ba938_49045572 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4620948625c3f13506bba88_44336897', 'hometabcontent', $this->tplIndex);
?>

                </div>
                <!-- SPA -->
                <div class="tab-panes" id="spa">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15503302235c3f13506be375_05335375', 'spatabcontent', $this->tplIndex);
?>

                </div>
                <!-- Sport -->
                <div class="tab-panes" id="sport">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9059839345c3f13506c1658_75793606', 'sporttabcontent', $this->tplIndex);
?>

                </div>
            </div>
            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4983224775c3f13506b7111_51926126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_4983224775c3f13506b7111_51926126',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10562341775c3f13506b8c66_15676483',
  ),
  'page_content' => 
  array (
    0 => 'Block_16102708145c3f13506ba938_49045572',
  ),
  'hometabcontent' => 
  array (
    0 => 'Block_4620948625c3f13506bba88_44336897',
  ),
  'spatabcontent' => 
  array (
    0 => 'Block_15503302235c3f13506be375_05335375',
  ),
  'sporttabcontent' => 
  array (
    0 => 'Block_9059839345c3f13506c1658_75793606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10562341775c3f13506b8c66_15676483', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16102708145c3f13506ba938_49045572', 'page_content', $this->tplIndex);
?>

    </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
