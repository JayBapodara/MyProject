jQuery(document).ready(function($){
    $('#masthead .menu-item-has-children ').append('<i class="fa fa-caret-down menu-caret"></i>');
    var winwidth = $(window).width();
    if(winwidth <= 980) {
        $('.main-navigation .menu .sub-menu').hide();
        $('body').on('click','.main-navigation.toggled .menu-caret',function(){
           $(this).siblings('.sub-menu').slideToggle();
        });
    }
    $('.gallery-item a').attr('data-fancybox','images');
    $('[data-fancybox]').fancybox({
      loop     : true
    });


    // Main Slider
    if( doctorial_data.option ){
        if(doctorial_data.pager == 'true'){
            var slider_pager =  true;  
        }else{
            var slider_pager = false;
        }        
        if(doctorial_data.auto == 'true'){
            var slider_auto =  true;  
        }else{
            var slider_auto = false;
        }
        if(doctorial_data.controls == 'true'){
            var slider_controls =  true;  
        }else{
            var slider_controls = false;
        }
        $('.main-slider').bxSlider({
            auto : slider_auto,
            pager: slider_pager,
            mode: doctorial_data.mode,
            controls: slider_controls,
            speed: doctorial_data.speed,
            pause: doctorial_data.pause,
        });
    }

	//using bxslider in main slider
    var winwidth = $(window).width();
    var swidth = 330;
    var smargin = 30;
    if(winwidth<=1096 && winwidth>980){var maxsl = 2; swidth = 450;}
    else if(winwidth<=980 && winwidth>640){var maxsl = 2; swidth = 290;}
    else if(winwidth<=640){var maxsl = 1; swidth = 320; smargin = 0; }
    else{var maxsl = 2; swidth = 450;}
    
    // testimonial slider
    $('.testimonial-slider').bxSlider({
        auto:true,
        controls:true,
        pager: false,
        moveSlides:1,
        minSlides: 1,
        maxSlides: maxsl,
        slideWidth: swidth,
        slideMargin: smargin,
        });
    
    new WOW().init();
    
    //Search Box Toogle
    $('#masthead .fa-search').click(function(){
      $('#masthead .ft-search-wrap').addClass('show');
    });
    $('#masthead .ft-search-wrap .fa-close').on('click', function(){
      $('#masthead .ft-search-wrap').removeClass('show');
    });

    //go to top 
    if ($('#go-to-top').length) {
        var scrollTrigger = 150, // px
        goToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#go-to-top').addClass('show');
            } else {
                $('#go-to-top').removeClass('show');
            }
        };
        goToTop();
        $(window).on('scroll', function () {
            goToTop();
        });
        $('#go-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

    //menu active
        $('#primary-menu li:first a').addClass('active');

    $('#primary-menu li> a').click(function(){
        $('.doctorial_menu').removeClass('active');
        $(this).parent('li').addClass('active');
    });

    var heit = $('#page').height();
    if( heit > 1000 ){
    //sticky menu
    var topPos = $(".menu-search").offset().top;
        $(window).scroll(function(){
            if($(window).scrollTop() > topPos){
                $('#masthead').addClass('fixed');
            }else{
                $('#masthead').removeClass('fixed');
            }
        }).scroll();
    }

        $('.toggle-btn').click(function(){
            $('.main-navigation').toggleClass('toggled');
        });
});