(function ($) {

Drupal.WeebPal = Drupal.WeebPal || {};
Drupal.WeebPal.currentWidth = -1;
Drupal.WeebPal.currentType = -1;
Drupal.WeebPal.screens = [0, 767.5, 991.5, 989.5];
Drupal.WeebPal.mobileThreadHold = 991.5;
Drupal.WeebPal.clearMinHeight = function(element) {
  $(element).css('min-height', '0px');
}

Drupal.WeebPal.equalHeight = function() {
}

Drupal.WeebPal.equalHeightActions = function() {
  Drupal.WeebPal.equalHeight();
}

Drupal.WeebPal.onClickResetDefaultSettings = function() {
  var answer = confirm(Drupal.t('Are you sure you want to reset your theme settings to default theme settings?'))
  if (answer){
    $("input:hidden[name = light_use_default_settings]").attr("value", 1);
    return true;
  }

  return false;
}

Drupal.WeebPal.eventStopPropagation = function(event) {
  if (event.stopPropagation) {
    event.stopPropagation();
  }
  else if (window.event) {
    window.event.cancelBubble = true;
  }
}

Drupal.behaviors.actionWeebPal = {
  attach: function (context) {
    $("#change_skin_menu_wrapper").mouseenter(function() {
      $('#change_skin_menu_wrapper').stop(true, false).animate({left: 0}, 1000);
    }).mouseleave(function() {
      $('#change_skin_menu_wrapper').stop(true, false).animate({left: -61}, 1000);
    });
    $(window).load(function() {
      Drupal.WeebPal.equalHeightActions();
    });
    $("#block-search-form > .content").prepend('<span class="search-icon"> </span>');

    $("#block-search-form .search-icon").click(function() {
      if($(this).closest('#block-search-form').hasClass('hover')) {
        $(this).closest('#block-search-form').removeClass('hover');
      }
      else {
        $(this).closest('#block-search-form').addClass('hover');
      }
    });

    $("#block-search-form").click(function(e) {
      Drupal.WeebPal.eventStopPropagation(e);
    });
    $('body').click(function() {
      if($('#block-search-form').hasClass('hover')) {
        $('#block-search-form').removeClass('hover');
      }
    });
    $(window).resize(function() {
      var width = $(window).innerWidth();
      if((width - Drupal.WeebPal.mobileThreadHold) * (Drupal.WeebPal.currentWidth - Drupal.WeebPal.mobileThreadHold) < 0) {
        if(width > Drupal.WeebPal.mobileThreadHold) {
          $("#main-menu-inner").css({width: ""});
        }
      }
      Drupal.WeebPal.currentWidth = width;
    });

    $(window).scroll(function() {
      if($(window).scrollTop() > 200) {
        $('.btn-btt').show();
      }
      else {
        $('.btn-btt').hide();
      }
    }).resize(function(){
      if($(window).scrollTop() > 200) {
        $('.btn-btt').show();
      }
      else {
        $('.btn-btt').hide();
      }
    });
  }
};
})(jQuery);
