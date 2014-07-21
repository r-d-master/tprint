(function ($) {

Drupal.behaviors.product_search_tab = {
  attach: function (context, settings) {
    $('#quicktabs-print_search_tabbed_menu ul li a').click(function() {
      $('.view-print-search').remove();
    });
  }
}

})(jQuery);
