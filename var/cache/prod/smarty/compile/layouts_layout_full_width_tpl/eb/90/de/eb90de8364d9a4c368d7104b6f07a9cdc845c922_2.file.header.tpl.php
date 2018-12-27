<?php
/* Smarty version 3.1.33, created on 2018-12-27 22:13:09
  from 'C:\xampp2\htdocs\presta\themes\classicBioSanti\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c254065ec4376_41012157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb90de8364d9a4c368d7104b6f07a9cdc845c922' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\presta\\themes\\classicBioSanti\\templates\\_partials\\header.tpl',
      1 => 1545772205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c254065ec4376_41012157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10799547255c254065ec0a31_96097027', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15960717695c254065ec1af9_38669146', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2306109625c254065ec39f8_30623207', 'header_top');
}
/* {block 'header_banner'} */
class Block_10799547255c254065ec0a31_96097027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_10799547255c254065ec0a31_96097027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_15960717695c254065ec1af9_38669146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_15960717695c254065ec1af9_38669146',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-5 col-xs-12">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

          </div>
          <div class="col-md-7 right-nav">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_2306109625c254065ec39f8_30623207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_2306109625c254065ec39f8_30623207',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
  <img class="imgBaner" src="..\presta\themes\classicBioSanti\img\img1.jpg" alt="">
  <img class="imgBaner" src="..\presta\themes\classicBioSanti\img\img2.jpg" alt="">
  <img class="imgBaner" src="..\presta\themes\classicBioSanti\img\img3.jpg" alt="">
  <h1 class="txtBaner">FAJNY TEKST O SPA</h1>
  <h1 class="txtBaner">SUPER TEKST O HOME</h1>
  <h1 class="txtBaner">EKSTRA TEKST O SPORT</h1>
  </div>
<?php
}
}
/* {/block 'header_top'} */
}
