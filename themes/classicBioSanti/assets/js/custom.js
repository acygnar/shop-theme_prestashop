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


})(jQuery);
