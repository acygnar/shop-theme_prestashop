{**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
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
* @author PrestaShop SA <contact@prestashop.com>
    * @copyright 2007-2018 PrestaShop SA
    * @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    {extends file='page.tpl'}

    {block name='page_content_container'}
    <section id="content" class="page-home">
        {block name='page_content_top'}
        {/block}
        {block name='page_content'}
        <div class="tabs">
            <!--TABS -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="tabsNavItem activeTab"><a href="#home" role="tab" data-toggle="tab">HOME</a></li>
                <li class="tabsNavItem"><a href="#spa" role="tab" data-toggle="tab">SPA</a></li>
                <li class="tabsNavItem"><a href="#sport" role="tab" data-toggle="tab">SPORT</a></li>
            </ul>
            <!-- TABS CONTENT -->
            <div class="tab-contents">
                <!-- HOME -->
                <div class="tab-panes" id="home">
                    {block name='hometabcontent'}
                   {hook h='displayHomeProductsHook'}
                    {/block}
                </div>
                <!-- SPA -->
                <div class="tab-panes" id="spa">
                    {block name='spatabcontent'}
                  {hook h='displaySpaProductsHook'}
                    {/block}
                </div>
                <!-- Sport -->
                <div class="tab-panes" id="sport">
                    {block name='sporttabcontent'}
                  {hook h='displaySportProductsHook'}
                    {/block}
                </div>
            </div>
            {/block}
    </section>
    {/block}
