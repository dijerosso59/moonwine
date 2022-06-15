jQuery(function ($) {

    (function ($) {
        $(document).ready(function () {
            // FIXME : l'aria-expanded doit être sur l'élement qui s'agrandit et non pour l'élement sur lequel on clique =)
            jQuery('.navbar-toggle').click(function(){
                if(jQuery('#megamenu-mobile').attr('aria-expanded')=='true'){
                    jQuery('#megamenu-mobile').attr('aria-expanded','false');
                    $( "#megamenu-mobile" ).addClass( "collapsed" );
                    $( ".navbar-header" ).removeClass( "mobile" );
                    jQuery('.navbar-nav').animate({'top':'120%'},500);
                    $('body').css('overflow-y', 'auto');
                }else{
                    $( "#megamenu-mobile" ).removeClass( "collapsed" );
                    jQuery('#megamenu-mobile').attr('aria-expanded','true');
                    jQuery('.navbar-nav').animate({'top':'0'},500);
                    $( ".navbar-header" ).addClass( "mobile" );
                    $('body').css('overflow-y', 'hidden');
                }
            });

        });
    })
    (jQuery);


});

var splide = new Splide('.splide', {
    arrows: boolean = true,
    pagination: boolean = false
});

splide.mount();