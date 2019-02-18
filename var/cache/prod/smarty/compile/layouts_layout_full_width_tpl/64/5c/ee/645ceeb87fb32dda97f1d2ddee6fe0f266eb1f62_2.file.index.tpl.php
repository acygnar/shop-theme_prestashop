<?php
/* Smarty version 3.1.33, created on 2019-02-18 17:28:55
  from 'C:\xampp2\htdocs\presta\themes\classicBioSanti\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6add4760bab8_05241434',
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
function content_5c6add4760bab8_05241434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
    

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1514207395c6add475ff8b2_07043707', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_4560101385c6add476002c4_34274598 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_content_top'} */
/* {block 'hometabcontent'} */
class Block_15526504895c6add476032a4_61930960 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeProductsHook'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'hometabcontent'} */
/* {block 'spatabcontent'} */
class Block_18861438095c6add476092b1_86901879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySpaProductsHook'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'spatabcontent'} */
/* {block 'sporttabcontent'} */
class Block_6876868345c6add4760a3a4_38460298 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySportProductsHook'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'sporttabcontent'} */
/* {block 'page_content'} */
class Block_19319659255c6add47602bc2_71267290 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15526504895c6add476032a4_61930960', 'hometabcontent', $this->tplIndex);
?>

                </div>
                <!-- SPA -->
                <div class="tab-panes" id="spa">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18861438095c6add476092b1_86901879', 'spatabcontent', $this->tplIndex);
?>

                </div>
                <!-- Sport -->
                <div class="tab-panes" id="sport">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6876868345c6add4760a3a4_38460298', 'sporttabcontent', $this->tplIndex);
?>

                </div>
            </div>
            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1514207395c6add475ff8b2_07043707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1514207395c6add475ff8b2_07043707',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4560101385c6add476002c4_34274598',
  ),
  'page_content' => 
  array (
    0 => 'Block_19319659255c6add47602bc2_71267290',
  ),
  'hometabcontent' => 
  array (
    0 => 'Block_15526504895c6add476032a4_61930960',
  ),
  'spatabcontent' => 
  array (
    0 => 'Block_18861438095c6add476092b1_86901879',
  ),
  'sporttabcontent' => 
  array (
    0 => 'Block_6876868345c6add4760a3a4_38460298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4560101385c6add476002c4_34274598', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19319659255c6add47602bc2_71267290', 'page_content', $this->tplIndex);
?>

    </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
