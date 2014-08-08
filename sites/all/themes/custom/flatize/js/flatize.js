

(function ($) {

Drupal.Flatize = Drupal.Flatize || {};

Drupal.behaviors.actionFlatize = {
  attach: function (context) {
    $('.btn-btt').smoothScroll({speed: 600});
    $('.bootstrap-slideshow').carousel();

    Drupal.Flatize.setInputPlaceHolder('search_block_form', 'Keywords', '#search-block-form');
    Drupal.Flatize.moveComments();
    Drupal.Flatize.moveSearch();
    Drupal.Flatize.initProductQuantity();
    Drupal.Flatize.setSlideshowHeight();
    Drupal.Flatize.initUserMenu();

    $('.tb-megamenu-item.level-1').hover(function() {
      if (Drupal.Flatize.canSetetMenuHeight) {
        Drupal.Flatize.canSetetMenuHeight = false;
        var items = $('.tb-megamenu-menu-main-menu-1').find('#tb-megamenu-column-4 > .tb-megamenu-column-inner, #tb-megamenu-column-6 > .tb-megamenu-column-inner, #tb-megamenu-column-7');
        if (items.length == 3) {
          Drupal.Flatize.equalHeight(items);
        }
        else {
          items = $('#tb-megamenu-column-3, #tb-megamenu-column-5, #tb-megamenu-column-6 > .tb-megamenu-column-inner');
          Drupal.Flatize.equalHeight(items);
        }
      }
    });

    $(window).resize(function(){
      Drupal.Flatize.setSlideshowHeight();
    }).load(function() {
      Drupal.Flatize.initMasonry();
    });

    $.stellar({horizontalScrolling: false, responsive: true});
  }
};

Drupal.Flatize.canSetetMenuHeight = true;

Drupal.Flatize.initMasonry = function() {
  var container = document.querySelector('.wp-blog-masonry .view-content');
  if (container) {
    var masonry = new Masonry(container, {
      itemSeelctor: ".views-row"
    });
  }
}

Drupal.Flatize.setInputPlaceHolder = function(name, text, selector) {
  selector = selector == undefined ? '' : selector + ' ';

  if ($.support.placeholder) {
    $(selector + 'input[name="' + name + '"]').attr('placeholder', Drupal.t(text));
  }
  else {
    $(selector + 'input[name="' + name + '"]').val(Drupal.t(text));
    $(selector + 'input[name="' + name + '"]').focus(function(){
      if(this.value == Drupal.t(text)) {
        this.value='';
      }
    }).blur(function(){
      if(this.value == '') {
        this.value=Drupal.t(text);
      }
    });
  }
}

Drupal.Flatize.moveComments = function() {
  if ($('article').hasClass('node-product')) {
    $('#comments').appendTo('.group-reviews');
    $('.group-reviews').css('height','');
    $('.group-reviews').find('.field-name-field-status').hide();
  }
}

Drupal.Flatize.moveSearch = function() {
  $('#block-search-form .content').appendTo( $('#wp-search .container') );
  $('#block-search-form').click(function() {
    if ($('#wp-search').hasClass('open')) {
      $('#wp-search').removeClass('open');
    }
    else {
      $('#wp-search').addClass('open');
    }
  })
}

Drupal.Flatize.initProductQuantity = function() {
  var quantity = $(".node-product .form-type-uc-quantity");
  quantity.find('label').hide();
  if(quantity.children('#uc-quantity-decrease').length == 0) {
    quantity.prepend($('<span id="uc-quantity-decrease">-</span>'));
  }
  if(quantity.children('#uc-quantity-increase').length == 0) {
    quantity.append($('<span id="uc-quantity-increase">+</span>'));
  }

  $('#uc-quantity-decrease').click(function() {
      $(this).parent().children('input#edit-qty').each(function() {
        var value = parseInt($(this).val());
        if(value > 0) {
          $(this).val(value - 1);
          if(value == 1) {
            $(this).parent().children('#uc-quantity-decrease').addClass("disabled");
          }
        }
      });
  });

  $('#uc-quantity-increase').bind('click', function() {
      var value = parseInt($(this).parent().children('input#edit-qty').val());
      value = value + 1;
      $(this).parent().children('input#edit-qty').val(value);
      $(this).parent().children('#uc-quantity-decrease').removeClass("disabled");
  });
}

Drupal.Flatize.equalHeight = function(elements) {
  if (elements.eq(0).height() <= 0) {
    setTimeout(function() {
      Drupal.Flatize.equalHeight(elements);
    }, 1000);
    return;
  }
  highest = 0;
  elements.each(function() {
    if($(this).height() > highest) {
      highest = $(this).height();
    }
  });
  return elements.each(function() {
    if(($.browser.msie && $.browser.version == 6.0)) {
      $(this).css({'height': highest, 'overflow': 'hidden'});
    }
    else {
      $(this).css({'min-height': highest});
    }
  });
}

Drupal.Flatize.setSlideshowHeight = function() {
  var imgs = $('#block-views-slideshow-block .view .views-field img')
  if (imgs.length) {
    var minImageHeight = imgs.get(0).height;
    imgs.each(function(idx, el) {
      if (minImageHeight > el.height) {
        minImageHeight = el.height;
      }
    })

    $('.views_slideshow_cycle_main .views-slideshow-cycle-main-frame').css('height', minImageHeight);
    $('.views_slideshow_cycle_main .views-slideshow-cycle-main-frame-row').css('height', minImageHeight);

    Drupal.viewsSlideshowCycle.load("#views_slideshow_cycle_main_slideshow-block");
  }
}

Drupal.Flatize.initUserMenu = function() {
  $('i.wp-icon-user-login').click(function() {
    var wrapper = $('#wp-user-wrapper');
    if (wrapper.hasClass('open')) {
      wrapper.removeClass('open');
    }
    else {
      wrapper.addClass('open');
    }
  })
}

$.support.placeholder = (function(){
    var i = document.createElement('input');
    return 'placeholder' in i;
})();

})(jQuery);
