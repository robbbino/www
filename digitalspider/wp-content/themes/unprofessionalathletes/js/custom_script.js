
jQuery(window).scroll(function onScroll(event){
    var scrollPos = jQuery(document).scrollTop();
    jQuery('#recipe-in-page-nav li a').each(function () {
        var currLink = jQuery(this);
        var refElement = jQuery(currLink.attr("href"));
        if (refElement.position().top-200 <= scrollPos && refElement.position().top-200 + refElement.height() > scrollPos) {
            jQuery('#recipe-in-page-nav li a').removeClass("active");
            currLink.addClass("active");
        }
    });
});