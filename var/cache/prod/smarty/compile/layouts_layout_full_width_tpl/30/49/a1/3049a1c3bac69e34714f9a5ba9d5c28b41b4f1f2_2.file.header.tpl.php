<?php
/* Smarty version 3.1.33, created on 2019-02-18 17:57:35
  from 'C:\xampp2\htdocs\presta\themes\Classic2\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6ae3ffc72c91_14772837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3049a1c3bac69e34714f9a5ba9d5c28b41b4f1f2' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\presta\\themes\\Classic2\\templates\\_partials\\header.tpl',
      1 => 1550508354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6ae3ffc72c91_14772837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7747187205c6ae3ffc70280_20159905', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19046859135c6ae3ffc70fa4_94082885', 'header_nav');
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5004437855c6ae3ffc724f6_48013588', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_7747187205c6ae3ffc70280_20159905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_7747187205c6ae3ffc70280_20159905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_19046859135c6ae3ffc70fa4_94082885 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_19046859135c6ae3ffc70fa4_94082885',
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
class Block_5004437855c6ae3ffc724f6_48013588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_5004437855c6ae3ffc724f6_48013588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
  <img class="imgBaner" src="\presta\themes\Classic2\img\img1.jpg" alt="">
  <img class="imgBaner" src="\presta\themes\Classic2\img\img2.jpg" alt="">
  <img class="imgBaner" src="\presta\themes\Classic2\img\img3.jpg" alt="">
  <h1 class="txtBaner">Nowa kolekcja Bisanti SPA.Sparawdź!</h1>
  <h1 class="txtBaner">Kup dwa produkty Home trzeci 30% taniej!</h1>
  <h1 class="txtBaner">10% zniżki na wszystkie żele!</h1>
  </div>
<?php
}
}
/* {/block 'header_top'} */
}
