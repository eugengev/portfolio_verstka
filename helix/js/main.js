$(document).ready(function() {

    $('.hidepic').load('preload.php', function() {   
        $('.hidepic').remove();   
        console.log('preload');
    });    

    $('.top-search').click(function (event) {
        $(this).addClass('show');
        $(this).find('.form-control').focus();
        $('.search-rezult').show();
        $('body').addClass('noscroll');
        var scroll = $(window).scrollTop();
        $('body').attr('data-scroll', scroll);
        $(window).scrollTop(0);
        $('.totopblock').removeClass("scrolll");
    })

    $('.header-search-bt').click(function(){
        $('.top-search').show();
        $('.form-control').focus();
        $('.search-rezult').show();
        $('body').addClass('noscroll');
        var scroll = 0;
        $('body').attr('data-scroll', scroll);        
        $(window).scrollTop(0);
    });

    $('.search-rezult .search-close').click(function(){
        $('.search-rezult').hide();
        $('body').removeClass('noscroll-search');
            $('.top-search').removeClass('show');
            $('.search-rezult').hide();
            $('body').removeClass('noscroll-search');
            $('body').removeClass('noscroll');
            if ($(window).width() < 901 ) { 
                $('.top-search').hide();
            }
    })


    $(document).bind( 'click', function(event){
        var clasclick = event.toElement.className;
        if (clasclick == 'top-search' || clasclick == 'form-control' || clasclick == 'search-rezult' || clasclick == 'top-search__submit' || clasclick == 'header-search-bt') {
            console.log('click');
        } else {
            $('.top-search').removeClass('show');
            $('.search-rezult').hide();
            $('body').removeClass('noscroll-search');
            $('body').removeClass('noscroll');
            if ($(window).width() < 901 ) { 
                $('.top-search').hide();
            }
        }
    });

    $('.firstlatter').each(function(){
        var textp =  $(this).html();
        var reztext = '<span class="bigletter">'+textp.substring(0,1)+'</span>'+textp.substring(1);
        $(this).html(reztext);
    });

    $('a[href="#popup-pic"]').click(function(){
        if ($(window).width() > 900) {
            var picurl = $(this).data('picotziv');
            var hbody = $('body').innerHeight()-200;
            console.log(hbody);
            $('#poppic').css('height', hbody);
            $('#poppic').html('<img src="'+picurl+'" alt="" />');
            $('#popup-pic').modal();
        } else {
            $.modal('close');
        }
    })

    $('a').click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        var rell = $(this).attr('rel');
        if ((linkLocation.indexOf('#') <= 0)) {
            $("body").fadeOut(1000, redirectPage);
        } else {
            if ((linkLocation.indexOf('index.html') > 0) && (rell != 'modal')) {
                console.log(linkLocation);
                $("body").fadeOut(1000, redirectPage);
                event.preventDefault();
            } else {
                if (rell != 'modal') {
                    var target = this.hash;
                    $target = $(target);

                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top - 100
                    }, 900, 'swing', function () {
                        window.location.hash = target;
                    });
                } else {
                    if ($(window).width() > 700) {
                        var target = this.hash;
                        $(target).modal({
                            fadeDuration: 1000,
                            fadeDelay: 0.5
                        });
                    } else {
                        var target = this.hash;
                        if (target != '#popup-pic') {
                            $(target).modal({
                                fadeDuration: 1000,
                                fadeDelay: 0.5
                            });
                        }
                    }
                }
            }
        }
    });


    $(".checkbox input").change(function(){
        if ($(this).is(':checked')) {
            $(this).next('label').css('background','url(./images/check-hover.svg) no-repeat');
        } else {
            $(this).next('label').css('background','url(./images/check.svg) no-repeat');
        }
    });

    $('.modal__form-row input, .form-feedback__row_left input, .form-feedback__row_right input, .form-feedback__row textarea').focus(function (event) {
        $(this).next('label').show();
    });

    $('.modal__form-row input, .form-feedback__row_left input, .form-feedback__row_right input, .form-feedback__row textarea').focusout(function (event) {
        $(this).next('label').hide();
    });


    $('.header-menu-bt').click(function(){
      

        $('.top-menu, .top-menu--bg').show();
        var hbody = $('body').height()-49;
        console.log(hbody);
        // $('.top-menu').height(hbody);
        var toph = $('.top-menu').innerHeight()-200;
        $('.top-menu__inside').height(toph);
        $('.top-menu').css('overflow-y','scroll');

        $('body').css('overflow','hidden');
    });


    $('.top-menu--close').click(function(){
        $('.top-menu, .top-menu--bg').hide();
        $('body').css('overflow','visible');
    });

    $('.custom-file-input').on('change', function() {
        realVal = $(this).val();
        var n = realVal.lastIndexOf("\\");
        var z = realVal.slice(n + 1);
        // lastIndex = realVal.lastIndexOf('\\') + 1;
        $("body").find(".mask-wrapper").html("<span class='material'>загружен: <span>" + z + "&nbsp&nbsp<a href='javascript:void(0);' class='mclose'></a></span></span>");
    });

    $('body').on('click', '.mclose', function() {
        $(this).parents('.material').remove();
    });

    $('.custom-file-input').on('mouseenter mouseleave', function() {
        $(this).prev('.mask').find('.send-file').toggleClass('hovered');
    });


    $('.certificate-page__h2').click(function(){

        if ($(this).hasClass('show')) {
            $('.certificate-page__list').slideUp(500);
            $('.certificate-page__h2').removeClass('show');

        } else {
            $('.certificate-page__list').hide();
            $('.certificate-page__h2').removeClass('show');

            $(this).toggleClass('show');
            $(this).next('.certificate-page__list').slideDown(500);

        }

    });


    if ($(window).width() < 901 ) {
        $('.top-menu__inside').append($('.header__order-call'));
        $('.header').append($('.top-search'));

    } else {
        $(".project-page__list ul li:nth-child(3n)").css("margin-right", "0");
        $(".project-page-one__small a:nth-child(6n)").css("margin-right", "0");
        $(".project-page-one__haracter ul li:nth-child(3)").addClass('nth3');
    }
    
});

$(window).resize(function() {
    if ($(window).width() < 901 ) {
        $('.top-menu__inside').append($('.header__order-call'));
        $('.header').append($('.top-search'));
    } else {
        $('.header').append($('.header__order-call'));
        $('.top-menu__inside').append($('.top-search'));
        $('.top-menu,.top-search').show();
    }
});

$(window).load(function() {

    $("body").fadeIn(1000, function(){

        $('.main-slider__inside').bxSlider({
            pager: false,
            auto: true,
            speed: 1000,
            pause: 7000,
            nextSelector: '.main-slider__next',
            prevSelector: '.main-slider__prev',
            nextText: '',
            prevText: ''
        });

        $('.project-page-one__big').bxSlider({
            pagerCustom: '.project-page-one__small',
            nextSelector: '.main-slider__next',
            prevSelector: '.main-slider__prev',
            nextText: '',
            prevText: ''
        });


        var urlpage = window.location.href;
        var urltarg = urlpage.substr(urlpage.indexOf('#'));
        if (urlpage.indexOf('#') > 0) {
            $target = $(urltarg);
            $('html, body').stop().animate({
                 'scrollTop': $target.offset().top - 200
            }, 900, 'swing', function () {
                console.log(urltarg);
            });        
        }

        if ($('#map-canvas').length) {
            initialize();
        }

    });

})

function redirectPage() {
    window.location = linkLocation;
}

$(window).scroll(function(e) {
    if(!$('body').hasClass('noscroll')){
        var wibody = $('body').width();
        if (wibody > 955) {
            var topbar = $('.totopblock');
            if (topbar.length > 0) {
                var scroll = $(window).scrollTop();
                // console.log(scroll);
                if (scroll >= 50) {
                    topbar.addClass("scrolll");
                } else {
                    topbar.removeClass("scrolll");
                }
            }
        }
    }

    if($('body').hasClass('noscroll')){
        var scroll1 = $('body').data('scroll');
        $(window).scrollTop(scroll1);

        return false;
        e.stopPropagation();
        e.preventDefault();
        e.returnValue = false;
    }    
});
