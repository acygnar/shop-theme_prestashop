<?php
/* Smarty version 3.1.33, created on 2019-01-16 12:19:44
  from 'module:pshomeproductsviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f1350f26a22_05762509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2e49201d74429009cd94b8f3445ec73abb0f6ae' => 
    array (
      0 => 'module:pshomeproductsviewstempla',
      1 => 1547406343,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5c3f1350f26a22_05762509 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
  <div class="catHomeDescription">
  <div class="imgHome">
  <img src="..\presta\themes\classicBioSanti\img\home2.png" alt="Kosmetyki z kategori home"></img>
  </div>
  <div class="catHomeTxt">
  <h3><?php echo htmlspecialchars(FrontController::getH3(1), ENT_QUOTES, 'UTF-8');?>
</h3>
  <h1>Home</h1>
  <p><?php echo htmlspecialchars(FrontController::getTxt(1), ENT_QUOTES, 'UTF-8');?>
</p>
  </div>
  </div>
  <div class="wave">
  <svg class="svgWave" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
    <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z"></path>
  </svg>
</div>
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
</section>
<?php }
}
