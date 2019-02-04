<?php
/* Smarty version 3.1.33, created on 2019-02-04 18:11:07
  from 'C:\xampp2\htdocs\presta\themes\classicBioSanti\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c58722bd4a0e5_43247472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb90de8364d9a4c368d7104b6f07a9cdc845c922' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\presta\\themes\\classicBioSanti\\templates\\_partials\\header.tpl',
      1 => 1547382275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c58722bd4a0e5_43247472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1430597935c58722bd46db6_50641058', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4992728785c58722bd47f75_28148462', 'header_nav');
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8814661345c58722bd49896_24125525', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_1430597935c58722bd46db6_50641058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_1430597935c58722bd46db6_50641058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_4992728785c58722bd47f75_28148462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_4992728785c58722bd47f75_28148462',
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
class Block_8814661345c58722bd49896_24125525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_8814661345c58722bd49896_24125525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
  <img class="imgBaner" src="\presta\themes\classicBioSanti\img\img1.jpg" alt="">
  <img class="imgBaner" src="\presta\themes\classicBioSanti\img\img2.jpg" alt="">
  <img class="imgBaner" src="\presta\themes\classicBioSanti\img\img3.jpg" alt="">
  <h1 class="txtBaner">Nowa kolekcja Bisanti SPA.Sparawdź!</h1>
  <h1 class="txtBaner">Kup dwa produkty Home trzeci 30% taniej!</h1>
  <h1 class="txtBaner">10% zniżki na wszystkie żele!</h1>
  </div>
<?php
}
}
/* {/block 'header_top'} */
}
