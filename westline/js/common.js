var timeoutID;
'use strict';
if(!window.console) window.console = {};
if(!window.console.memory) window.console.memory = function() {};
if(!window.console.debug) window.console.debug = function() {};
if(!window.console.error) window.console.error = function() {};
if(!window.console.info) window.console.info = function() {};
if(!window.console.log) window.console.log = function() {};

// sticky footer
//-----------------------------------------------------------------------------
if(!Modernizr.flexbox) {
  (function() {
    var
      $pageWrapper = $('#page-wrapper'),
      $pageBody = $('#page-body'),
      noFlexboxStickyFooter = function() {
        $pageBody.height('auto');
        if($pageBody.height() + $('#header').outerHeight() + $('#footer').outerHeight() < $(window).height()) {
          $pageBody.height($(window).height() - $('#header').outerHeight() - $('#footer').outerHeight());
        } else {
          $pageWrapper.height('auto');
        }
      };
    $(window).on('load resize', noFlexboxStickyFooter);
  })();
}
if(ieDetector.ieVersion == 10 || ieDetector.ieVersion == 11) {
  (function(){
    var
      $pageWrapper = $('#page-wrapper'),
      $pageBody = $('#page-body'),
      ieFlexboxFix = function() {
        if($pageBody.addClass('flex-none').height() + $('#header').outerHeight() + $('#footer').outerHeight() < $(window).height()) {
          $pageWrapper.height($(window).height());
          $pageBody.removeClass('flex-none');
        } else {
          $pageWrapper.height('auto');
        }
      };
    ieFlexboxFix();
    $(window).on('load resize', ieFlexboxFix);
  })();
}

$(function() {
// placeholder
//-----------------------------------------------------------------------------
  $('input[placeholder], textarea[placeholder]').placeholder();
  if ($('.js-main-slider').length > 0) {
    $('.js-main-slider').bxSlider({
        controls: false,
        auto: true
    });
  }
  if ($('.js-input_number').length > 0) {
    $('.js-input_number').styler();
  }


  // $('.js-hover-bg').hover(function() {
  //   $('.hover-bg').show();
  // }, function() {
  //   $('.hover-bg').hide();
  // });

  $('.js-hover-bg').mouseenter(function(event) {
    clearTimeout(timeoutID);
    $that = $(this); 
    timeoutID = setTimeout(function(){
      $('.hover-bg').show();
      $that.addClass('hover');
    }, 500);
  });
  $('.js-hover-bg').mouseleave(function(event) {
    clearTimeout(timeoutID);
    $('.hover-bg').hide();
    $('.js-hover-bg').removeClass('hover');
  });

  if ($('#map').length > 0) {
    function initMap() {

      // Specify features and elements to define styles.
      var styleArray = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];


      var myLatLng = {lat: 55.6809915, lng: 37.6402152};
      var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        scrollwheel: false,
        // Apply the map style array to the map.
        styles: styleArray,
        zoom: 13
      });
      var image = '../images/mappoint.png';
        var marker = new google.maps.Marker({
        map: map,
        position: myLatLng,
        icon: image
        // title: 'Hello World!'
      });


    }
    initMap();
  }

  $('[data-toggle="popover"]').popover({
    html: true,
    trigger: "hover"
  });


  $(".phone").mask("+375 (99) 999-99-99");

  $("#registration").validate({
      rules: {
          fio: "required",
          phone: "required",
          email: {
            required: true,
            email: true
          } 
      },
      messages: {
          fio: "Неверно",
          phone: "Неверно",
          email: {
            required: "Неверно",
            email: "Неверно"
          } 
      }
  });

  $("#faq").validate({
      rules: {
          name: "required",
          phone: "required",
          email: {
            required: true,
            email: true
          } 
      },
      messages: {
          name: "Неверно",
          phone: "Неверно",
          email: {
            required: "Неверно",
            email: "Неверно"
          } 
      }
  });

  $("#contact").validate({
      rules: {
          name: "required",
          phone: "required",
          email: {
            required: true,
            email: true
          } 
      },
      messages: {
          name: "Неверно",
          phone: "Неверно",
          email: {
            required: "Неверно",
            email: "Неверно"
          } 
      }
  });
  $("#filter").validate({
      rules: {
          minsum: "number",
          maxsum: "number",
      },
      messages: {
          minsum: "Неверно",
          maxsum: "Неверно",
      }
  });

  // $('.wrapper').each(function(index, el) {
  //   if($(this).find('.js-right-heigth').length > 0 && $(this).find('.js-left-heigth').length > 0)  {
  //     if ($(this).find('.js-right-heigth').height() > $(this).find('.js-left-heigth').height() ) {
  //       $(this).find('.js-left-heigth').height($(this).find('.js-right-heigth').height());
  //     } 
  //   }  
  // });
});



$(document).on('click', '.js-fav-active', function(event) {
  event.preventDefault();
  $(this).toggleClass('active');
  if ($(this).hasClass('active')) {
    $('.js-fav-popup').show().removeClass('gray');
    $('.js-fav-popup-close').text($(this).data('popuptext-add'));
    setTimeout(function(){ $('.js-fav-popup').hide().removeClass('gray'); }, 2000);
    console.log('active');
  } else {
    console.log('del')
    $('.js-fav-popup').show().addClass('gray');
    $('.js-fav-popup-close').text($(this).data('popuptext-del'));
    setTimeout(function(){ $('.js-fav-popup').hide().removeClass('gray'); }, 2000);
  }
  return false;
});

$(document).on('click', '.js-basket-active', function(event) {
  event.preventDefault();
  $(this).toggleClass('active');
  if ($(this).hasClass('active')) {
    $('.js-fav-popup').show();
    $('.js-fav-popup-close').text($(this).data('popuptext-add'));
    console.log('active');
  } else {
    console.log('del')
    $('.js-fav-popup').show();
    $('.js-fav-popup-close').text($(this).data('popuptext-del'));
  }
  return false;
});

$(document).on('click', '.js-catalog__dropmenu', function(event) {
  event.preventDefault();
  $(this).parents('.catalog__item').toggleClass('active');
  return false;
});

$(document).on('click', '.js-catalog', function(event) {
  event.preventDefault();
  $(this).parents('.catalog').toggleClass('catalog-active');
  return false;
});

$(document).on('focus active', '.js-header-search-focus', function(event) {
  event.preventDefault();
  $(this).addClass('active');
  $('.hover-bg').show();
  return false;
});

$(document).on('click', '.js-header-search-close', function(event) {
  event.preventDefault();
  $('.js-header-search-focus').removeClass('active');
  $('.hover-bg').hide();
  return false;
});

$(document).on('click', '.js-faq-accordion', function(event) {
  event.preventDefault();
  // $('.faq-block__answer').hide();
  // $(this).parent().find('.faq-block__answer').show();
  if ($(this).parents('.faq-block__item').hasClass('active')) {
    $('.faq-block__item').removeClass('active');
  } else {
    $('.faq-block__item').removeClass('active');
    $(this).parents('.faq-block__item').addClass('active');
  }
  return false;
});

$(document).on('click.modal', 'a[rel="modal:close"]', function(event) {
  event.preventDefault();
  var modalBlock = $(this).parents('.modal');
  $('.modalbgblock').remove();
  modalBlock.find('.close-modal').remove();
  modalBlock.hide();
});

$(document).on('click.modal', '.modalbgblock', function(event) {
  event.preventDefault();
  var idHref = $(this).data('modalblock'),
      modalBlock = $(idHref);
  $('.modalbgblock').remove();
  modalBlock.find('.close-modal').remove();
  modalBlock.hide();
});

$(document).on('click.modal', 'a[rel="modal:open"]', function(event) {
  event.preventDefault();
  if ($('.modalbgblock').length > 0 ) {
    var idHref = $('.modalbgblock').data('modalblock'),
        modalBlock = $(idHref);

    $('.modalbgblock').remove();
    modalBlock.find('.close-modal').remove();
    modalBlock.hide();      
  }
  var bgModal = $('<span class="modalbgblock"></span>'),
    modalClose = $('<a href="#close-modal" rel="modal:close" class="close-modal"></a>'),
    idHref = $(this).attr('href'),
    modalBlock = $(idHref);

  bgModal.data('modalblock',idHref);
  $('body').append(bgModal);
  modalBlock.append(modalClose);
  modalBlock.show();

});


$(document).on('click', '.js-tab-click', function(event) {
  event.preventDefault();
  $(this).parents('.js-tab-main').find('.js-tab').addClass('hide');
  $(this).parents('.js-tab-main').find('.js-tab-click').removeClass('active');
  var idtab = $(this).data('idatab');
  $(idtab).removeClass('hide');
  $(this).addClass('active');
  return false;
});

$(document).on('click', '.js-click-sort-bg', function(event) {
  event.preventDefault();
  $(this).toggleClass('active');
  if ($(this).hasClass('active')) {
    $('.hover-bg').show();
  } else {
    $('.hover-bg').hide();
  }
  return false;
});

$(document).on('click', '.js-fav-popup-close', function(event) {
  event.preventDefault();
  $('.js-fav-popup').hide();
  return false;
});

$(document).on('click', '.js-brend-show', function(event) {
  event.preventDefault();
  $(this).parents('.brendi').addClass('show_all');
  $(this).parents('li').hide();
  $(this).parents('.brendi').find('.brendi__li--small').removeClass('brendi__li--small');
  return false;
});
