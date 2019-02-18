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
<div class="catSportDescription">
  <div class="imgSport">
  
  <div class="inscription">
  <h1>Sport</h1>
  <span class="square"></span>
  <span class="row1">Opis</span>
  <span class="row2">jakis tam opis</span>
  </div>
  <img src="..\presta\themes\Classic2\img\sport.png" alt="Kosmetyki z kategori sport"></img>
  </div>
  <div class="catSportTxt">
  <h3>{FrontController::getH3(3)}</h3>
  <p>{FrontController::getTxt(3)}</p>
  </div>
  </div>
  <div class="sportProduct">
  <div class="products">
    {foreach from=$products item="product"}
      {include file="catalog/_partials/miniatures/product.tpl" product=$product}
    {/foreach}
  </div>
  </div>
</section>
