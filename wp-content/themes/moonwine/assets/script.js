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
                    jQuery('.navbar-nav').animate({'top':'170px'},500);
                    $( ".navbar-header" ).addClass( "mobile" );
                    $('body').css('overflow-y', 'hidden');
                }
            });


            var maDiv = document.querySelector(".prenav-search_label");

            jQuery('.prenav-search_label').click(function(){
                jQuery('.prenav-search_label').css('display','none');
                jQuery('.aws-container').css('right','0');
                setTimeout(function() {
                    $( ".aws-search-field" ).focus();
                }, 400);
            });

            jQuery('.aws-search-field').blur(function(){
                jQuery('.aws-container').css('right','-500px');
                setTimeout(function() {
                    jQuery('.prenav-search_label').css('display','flex');
                }, 400);
            });

            jQuery('.menu-item-87').attr('aria-expanded','false');
            jQuery('.menu-item-87').click(function(){
                if(jQuery('.menu-item-87').attr('aria-expanded')=='true'){
                    jQuery('.menu-item-87').attr('aria-expanded','false');
                    document.querySelector('.sub-menu').style.maxHeight = "0px";
                }else{
                    jQuery('.menu-item-87').attr('aria-expanded','true');
                    document.querySelector('.sub-menu').style.maxHeight = "250px";
                }
            });
        })
    })
    (jQuery);


});

var splide = new Splide('.splide', {
    arrows: boolean = true,
    pagination: boolean = false
});

splide.mount();