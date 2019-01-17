<?php
/* Smarty version 3.1.33, created on 2019-01-10 11:19:08
  from 'C:\xampp2\htdocs\presta\themes\classicBioSanti\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c371c1cdcd5d0_06637120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e54478a00da9fa48676d9fceb7fcde7ff259b42d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\presta\\themes\\classicBioSanti\\templates\\page.tpl',
      1 => 1546194494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c371c1cdcd5d0_06637120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16593803125c371c1cdc5da6_07430943', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_8016996555c371c1cdc6b54_93249363 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_8935833805c371c1cdc63e9_67028228 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8016996555c371c1cdc6b54_93249363', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_18771869505c371c1cdcad64_77835564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_341852445c371c1cdcb577_29293148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11409551665c371c1cdca765_53032632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18771869505c371c1cdcad64_77835564', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_341852445c371c1cdcb577_29293148', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_727448225c371c1cdcc812_16474540 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_565955285c371c1cdcc2b6_91817523 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_727448225c371c1cdcc812_16474540', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16593803125c371c1cdc5da6_07430943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16593803125c371c1cdc5da6_07430943',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8935833805c371c1cdc63e9_67028228',
  ),
  'page_title' => 
  array (
    0 => 'Block_8016996555c371c1cdc6b54_93249363',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11409551665c371c1cdca765_53032632',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_18771869505c371c1cdcad64_77835564',
  ),
  'page_content' => 
  array (
    0 => 'Block_341852445c371c1cdcb577_29293148',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_565955285c371c1cdcc2b6_91817523',
  ),
  'page_footer' => 
  array (
    0 => 'Block_727448225c371c1cdcc812_16474540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8935833805c371c1cdc63e9_67028228', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11409551665c371c1cdca765_53032632', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_565955285c371c1cdcc2b6_91817523', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
