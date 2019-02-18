/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */

(function($){

    var tabsNav  = $(".tabsNavItem"),
        tabsItem = $(".tab-panes");
        
    tabsNav.first().addClass("activeTab");  
    tabsItem.not(":first").hide();

    tabsNav.on("click",function(){
    
        var tabNav = $(this),
            index = $(this).index();

            tabsNav.removeClass("activeTab");
            tabNav.addClass("activeTab");

            tabsItem.hide().eq(index).fadeIn(400);
    
    });
    $(window).scroll(function () {
        var windowHeight=$(window).height();
        var currentposition = $(document).scrollTop();
        var topheight = $('.header-top').height();
        if (currentposition > topheight) {
            $('.imgHome').addClass('onposition');
            $('.catHomeTxt h1').addClass('onposition');
            $('.catHomeTxt h3').addClass('onposition');
            $('.catHomeTxt p').addClass('onposition');
        } 
    });
    $(window).scroll(function () {
        var currentposition = $(document).scrollTop();
        var navheight = $('.tabsNavItem').height();
        if (currentposition > navheight) {
            $('.header-nav').addClass('nav-shadow-slim');
            $('.logo').addClass('logo-slim');

         } 
         else{
             $('.header-nav').removeClass('nav-shadow-slim');
             $('.logo').removeClass('logo-slim');
              }
    });
})(jQuery);
