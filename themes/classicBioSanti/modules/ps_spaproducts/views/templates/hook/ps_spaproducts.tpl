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
  <div class="catSpaDescription">
  <div class="imgSpa">
  <img src="..\presta\themes\classicBioSanti\img\spa.png" alt="Kosmetyki z kategori spa"></img>
  </div>
  <div class="catSpaTxt">
  <h1>Spa</h1>
  <h3>{FrontController::getH3(2)}</h3>
  <p>{FrontController::getTxt(2)}</p>
  <div class="spaFeatures">
  <div class=spaFeature>
  <i class="material-icons">monetization_on</i>
  <p>{FrontController::getFeature(1)}</p>
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
    {foreach from=$products item="product"}
      {include file="catalog/_partials/miniatures/product.tpl" product=$product}
    {/foreach}
  </div>
</section>
