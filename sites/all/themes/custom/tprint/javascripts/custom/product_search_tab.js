(function ($) {

Drupal.behaviors.product_search_tab = {
  attach: function (context, settings) {
    $('#quicktabs-print_search_tabbed_menu ul li a').click(function() {
      $('.view-print-search').remove();
    });

    /* -----------------------------------------------------------------------------

  BANNER

----------------------------------------------------------------------------- */

  /* -------------------------------------------------------------------------
    BANNER BG
  ------------------------------------------------------------------------- */

  $( '#banner .banner-bg' ).each(function(){

    var self = $(this),
    images = self.find( '.banner-bg-item' );

    // SET BG IMAGES
    images.each(function(){
      var img =  $(this).find( 'img' );
      if ( img.length > 0 ) {
        $(this).css( 'background-image', 'url(' + img.attr( 'src' ) + ')' );
        img.hide();
      }
    });

    // INIT SLIDER
    if ( $.fn.owlCarousel ) {
      console.log('tk');
      self.owlCarousel({
        slideSpeed: 300,
        pagination: false,
        paginationSpeed : 400,
        singleItem:true,
        addClassActive: true,
        afterMove: function(){
          // ACTIVATE TAB
          var active_index = self.find( '.owl-item.active' ).index();
          $( '.banner-search-inner .tab-title:eq(' + active_index + ')' ).trigger( 'click' );
        }
      });
    }

    // SET DEFAULT IF NEEDED
    var active_tab_index = $( '.banner-search-inner .tab-title.active' ).index();
    if ( active_tab_index !== 0 ) {
      self.trigger( 'owl.jumpTo', active_tab_index );
    }

  });

  /* -------------------------------------------------------------------------
    BANNER SEARCH
  ------------------------------------------------------------------------- */

  $( '.banner-search-inner' ).each(function(){

    var self = $(this),
    tabs = self.find( '.tab-title' ),
    contents = self.find( '.tab-content' );

    // TAB CLICK
    tabs.click(function(){
      if ( ! $(this).hasClass( 'active' ) ) {
        var index = $(this).index();
        tabs.filter( '.active' ).removeClass( 'active' );
        $(this).addClass( 'active' );
        contents.filter( '.active' ).hide().removeClass( 'active' );
        contents.filter( ':eq(' + index + ')' ).show().addClass( 'active' );

        // CHANGE BG
        if ( $.fn.owlCarousel ) {
          $( '#banner .banner-bg' ).trigger( 'owl.goTo', index );
        }

      }
    });

  });

  }
}

})(jQuery);
