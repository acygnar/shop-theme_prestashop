<?php
/* Smarty version 3.1.33, created on 2019-02-04 18:11:05
  from 'module:pssportproductsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c587229b157f2_20733911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28b0de7daf46c0e11e15aa3099f9bcdecb077b19' => 
    array (
      0 => 'module:pssportproductsviewstempl',
      1 => 1547406343,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5c587229b157f2_20733911 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
<div class="catSportDescription">
  <div class="imgSport">
  
  <div class="inscription">
  <h1>Sport</h1>
  <span class="square"></span>
  <span class="row1">Opis</span>
  <span class="row2">jakis tam opis</span>
  </div>
  <img src="..\presta\themes\classicBioSanti\img\sport.png" alt="Kosmetyki z kategori sport"></img>
  </div>
  <div class="catSportTxt">
  <h3><?php echo htmlspecialchars(FrontController::getH3(3), ENT_QUOTES, 'UTF-8');?>
</h3>
  <p><?php echo htmlspecialchars(FrontController::getTxt(3), ENT_QUOTES, 'UTF-8');?>
</p>
  </div>
  </div>
  <div class="sportProduct">
  <div class="products">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  </div>
</section>
<?php }
}
