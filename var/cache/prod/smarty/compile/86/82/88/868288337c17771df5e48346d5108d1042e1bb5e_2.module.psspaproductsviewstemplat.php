<?php
/* Smarty version 3.1.33, created on 2019-02-18 17:57:32
  from 'module:psspaproductsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6ae3fc561650_22264394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '868288337c17771df5e48346d5108d1042e1bb5e' => 
    array (
      0 => 'module:psspaproductsviewstemplat',
      1 => 1550508406,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5c6ae3fc561650_22264394 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
  <div class="catSpaDescription">
  <div class="imgSpa">
  <img src="..\presta\themes\Classic2\img\spa.png" alt="Kosmetyki z kategori spa"></img>
  </div>
  <div class="catSpaTxt">
  <h1>Spa</h1>
  <h3><?php echo htmlspecialchars(FrontController::getH3(2), ENT_QUOTES, 'UTF-8');?>
</h3>
  <p><?php echo htmlspecialchars(FrontController::getTxt(2), ENT_QUOTES, 'UTF-8');?>
</p>
  <div class="spaFeatures">
  <div class=spaFeature>
  <i class="material-icons">monetization_on</i>
  <p><?php echo htmlspecialchars(FrontController::getFeature(1), ENT_QUOTES, 'UTF-8');?>
</p>
  </div>
  <div class=spaFeature>
  <i class="material-icons">bubble_chart</i>
  <p>ekstra cecha 2</p>
  </div>
  <div class=spaFeature>
  <i class="material-icons">opacity</i>
  <p>niesamowita cecha 3</p>
  </div>
  <div class=spaFeature>
  <i class="material-icons">backup</i>
  <p>nadzwyczajna cecha 4</p>
  </div>
  </div>
  </div>
  </div>
  <div class="wave">
  <svg class="svgWaveSpa" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
    <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z"></path>
    <linearGradient id="waveSpaGradient">
    <stop offset="0%" stop-color="#f8dedf" />
    <stop offset="50%" stop-color="#fff4f4" />
    <stop offset="100%" stop-color="#fff" />
  </linearGradient>
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
