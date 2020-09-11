jQuery(function($) {
    $(document).ready(function() {
        //SLICK SLIDER
        $('.hero-content').slick(
            {
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: $('.arrow-box-left'),
                nextArrow: $('.arrow-box-right'),
            }
        );
    //HAMBURGER MENU
        $('.hamburger-button-wrapper').click(function(e) {
            $('.hamburger-menu-wrapper').toggleClass('show-hamburger-menu');
            $('body').toggleClass('body-customize');
        });
        $('.close-button').click(function(e) {
            $('.hamburger-menu-wrapper').toggleClass('show-hamburger-menu');
            $('body').toggleClass('body-customize');
        });
        $('.hamburger-menu li a').click(function(e) {
            e.preventDefault();
            $('.hamburger-menu-wrapper').toggleClass('show-hamburger-menu');
            $('body').toggleClass('body-customize');
        });
            
    //HAMBURGER MENU
        $(window).scroll(function(){
            if($(window).scrollTop() > 650) {
                $('.translate-up-arrow').addClass('show-translate-up-arrow');
            } else {
                $('.translate-up-arrow').removeClass('show-translate-up-arrow');
            }
        });
    
        $('.translate-up-arrow').click(function(){
            $('html, body').animate({scrollTop: 0}, 600 );
            return false;
        });
    });
});
