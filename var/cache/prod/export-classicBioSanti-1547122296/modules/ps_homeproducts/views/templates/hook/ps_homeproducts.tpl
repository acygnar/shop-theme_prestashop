{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<section>
  <div class="catHomeDescription">
  <div class="imgHome">
  <img src="..\presta\themes\Classic2\img\home2.png" alt="Kosmetyki z kategori home"></img>
  </div>
  <div class="catHomeTxt">
  <h3>Opis opis opis</h3>
  <h1>Home</h1>
  <p>
 {FrontController::getHomeTxt()}
  
  Made for very fine skin, this anti-aging solution combines powerful marine 
  and plant antioxidants with gentle, pure and natural moisturizers.
  It soothes, freshens and softens the skin around the eyes. 
  Fragrance-free and with fluid gel-cream texture, it lets your 
  radiance shine through, revealing you as you truly are.
  {FrontController::getHomeTxt()}
  </p>
  </div>
  </div>
  <div class="wave">
  <svg class="svgWave" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
    <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z"></path>
  </svg>
</div>
  <div class="products">
    {foreach from=$products item="product"}
      {include file="catalog/_partials/miniatures/product.tpl" product=$product}
    {/foreach}
  </div>
</section>
