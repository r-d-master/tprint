(function($){
Drupal.behaviors.printOcompare = {
attach: function(context, settings) {
/*-----------------------------------------------------------------------------

	GENERAL

----------------------------------------------------------------------------- */

	// GET ACTUAL MEDIA QUERY BREAKPOINT
	var media_query_breakpoint = uouMediaQueryBreakpoint();

	// INPUT PLACEHOLDER FIX FOR IE
	if ( $.fn.placeholder ) {
		$( 'input, textarea' ).placeholder();
	}

	// ACCORDIONS
	$( '.accordion-container' ).each(function(){
		$(this).uouAccordion();
	});

	// ALERT MESSAGES
	$( '.alert-message' ).each(function(){
		$(this).uouAlertMessage();
	});

	// FORM ELEMENTS
	$( '.checkbox-input' ).each(function(){
		$(this).uouCheckboxInput();
	});
	$( '.radio-input' ).each(function(){
		$(this).uouRadioInput();
	});
	$( '.select-box' ).each(function(){
		$(this).uouSelectBox();
	});

	// DATE PICKER
	$( '.calendar-input' ).each(function(){

		var input = $(this).find( 'input' ),
		dateformat = input.data( 'dateformat' ) ? input.data( 'dateformat' ) : 'm/d/y',
		icon = $(this).find( '.fa' ),
		widget = input.datepicker( 'widget' );

		input.datepicker({
			dateFormat: dateformat,
			minDate: 0,
			beforeShow: function(){
				input.addClass( 'active' );
			},
			onClose: function(){
				input.removeClass( 'active' );
				// TRANSPLANT WIDGET BACK TO THE END OF BODY IF NEEDED
				widget.hide();
				if ( ! widget.parent().is( 'body' ) ) {
					widget.detach().appendTo( $( 'body' ) );
				}
			}
		});
		icon.click(function(){
			input.focus();
		});

	});

	// LIGHTBOXES
	$( 'body' ).uouInitLightboxes();

	// PROGRESS BARS
	$( '.progress-bar' ).each(function(){
		$(this).uouProgressBar();
	});
	$( '.radial-progress-bar' ).each(function(){
		$(this).uouRadialProgressBar();
	});

	// TABS
	$( '.tabs-container' ).each(function(){
		$(this).uouTabbed();
	});

	// TOGGLES
	$( '.toggle-container' ).each(function(){
		$(this).uouToggle();
	});


/* -----------------------------------------------------------------------------

	HEADER

----------------------------------------------------------------------------- */

	/* -------------------------------------------------------------------------
		HEADER SEARCH
	------------------------------------------------------------------------- */

	$( '.header-search' ).each(function(){

		var self = $(this),
		search_input = self.find( '.search-input input' ),
		search_advanced = self.find( '.search-advanced' );

		// SHOW ADVANCED
		search_input.focus(function(){
			self.addClass( 'active' );
			$(this).addClass( 'active' );
			$(this).parent().find( '.ico' ).fadeOut(300);
			search_advanced.slideDown(200);
		});

		// HIDE ADVANCED
		self.bind( 'clickoutside', function(event){
			if ( media_query_breakpoint > 991 ) {

				var target = $(event.target);
				if ( ! ( target.hasClass( 'ui-datepicker-prev' ) || target.hasClass( 'ui-datepicker-next' ) ) ) {
					search_input.blur();
					self.removeClass( 'active' );
					search_input.removeClass( 'active' );
					if ( search_input.val() === '' ) {
						search_input.parent().find( '.ico' ).fadeIn(300);
					}
					search_advanced.slideUp(200);
					self.find( '.select-box .select-clone' ).slideUp(200);
				}

			}
		});

		// TRANSPLANT CALENDAR BEFORE SHOW
		self.find( '.calendar-input' ).each(function(){

			var self = $(this),
			widget = self.find( 'input' ).datepicker( 'widget' );
			self.find( 'input' ).focus(function(){
				widget.detach().insertAfter( self.parent() );
			});

		});

		// CLOSE ON MOBILE
		search_input.parent().find( '.close' ).click(function(){
			search_input.val( '' );
			search_input.blur();
			self.removeClass( 'active' );
			search_input.removeClass( 'active' );
			if ( search_input.val() === '' ) {
				search_input.parent().find( '.ico' ).fadeIn(300);
			}
			search_advanced.slideUp(200);
			self.find( '.select-box .select-clone' ).slideUp(200);
		});

	});

	/* -------------------------------------------------------------------------
		HEADER MENU
	------------------------------------------------------------------------- */

	$( '.header-menu' ).each(function(){

		var self = $(this);

		// HOVER
		self.hover(function(){
			if ( media_query_breakpoint > 991 ) {
				self.find( '.header-btn' ).addClass( 'hover' );
				self.find( '.header-nav' ).show();
				self.find( '.header-nav > ul' ).stop( true, true ).slideDown(200);
			}
		}, function(){
			if ( media_query_breakpoint > 991 ) {
				self.find( '.header-btn' ).removeClass( 'hover' );
				self.find( '.header-nav > ul' ).stop( true, true ).delay(10).slideUp(200, function(){
					self.find( '.header-nav' ).hide();
				});
			}
		});

		// HOVER SUBMENU
		self.find( 'li.has-submenu' ).hover(function(){
			if ( media_query_breakpoint > 991 ) {
				$(this).addClass( 'hover' );
				$(this).find( '> ul' ).stop( true, true ).fadeIn(200);
			}
		}, function(){
			if ( media_query_breakpoint > 991 ) {
				$(this).removeClass( 'hover' );
				$(this).find( '> ul' ).stop( true, true ).delay(10).fadeOut(200);
			}
		});

		// CREATE TOGGLE BUTTONS

		self.find( 'li.has-submenu' ).each(function(){
			$(this).append( '<button class="submenu-toggle"><i class="fa fa-chevron-down"></i></button>' );
		});

		// TOGGLE SUBMENU
		self.find( '.submenu-toggle' ).each(function(){
			$(this).click(function(){
				$(this).parent().find( '> .sub-menu' ).slideToggle(200);
				$(this).find( '.fa' ).toggleClass( 'fa-chevron-down fa-chevron-up' );
			});
		});

	});

	/* -------------------------------------------------------------------------
		HEADER LANGUAGE
	------------------------------------------------------------------------- */

	$( '.header-language' ).each(function(){

		var self = $(this);

		// HOVER
		self.hover(function(){
			if ( media_query_breakpoint > 991 ) {
				self.find( '.header-btn' ).addClass( 'hover' );
				self.find( '.header-nav' ).show();
				self.find( '.header-nav ul' ).stop( true, true ).slideDown(200);
			}
		}, function(){
			if ( media_query_breakpoint > 991 ) {
				self.find( '.header-btn' ).removeClass( 'hover' );
				self.find( '.header-nav ul' ).stop( true, true ).delay(10).slideUp(200, function(){
					self.find( '.header-nav' ).hide();
				});
			}
		});

	});

	/* -------------------------------------------------------------------------
		HEADER REGISTER
	------------------------------------------------------------------------- */

	$( '.header-register' ).each(function(){

		var self = $(this),
		form_holder = self.find( '.header-form' ),
		btn = self.find( '.header-btn' );

		// HOVER
		self.hover(function(){
			if ( media_query_breakpoint > 991 ) {
				self.find( '.header-btn' ).addClass( 'hover' );
				form_holder.stop( true, true ).slideDown(200);
			}
		}, function(){
			if ( media_query_breakpoint > 991 ) {
				self.find( '.header-btn' ).removeClass( 'hover' );
				form_holder.stop( true, true ).delay(10).slideUp(200);
			}
		});

		// VALIDATE FORM
		form_holder.find( 'form' ).submit(function(){

			var form = $(this);
			if ( form.uouFormValid() ) {
				form.find( '.alert-message.warning:visible' ).slideUp(300);
			}
			else {
				form.find( '.alert-message.warning' ).slideDown(300);
				return false;
			}

		});

		// TOGGLE
		btn.click(function(){
			if ( media_query_breakpoint <= 991 ) {
				self.find( '.header-btn' ).toggleClass( 'hover' );
				form_holder.stop( true, true ).slideToggle(200);
			}
		});

	});

	/* -------------------------------------------------------------------------
		HEADER LOGIN
	------------------------------------------------------------------------- */

	$( '.header-login' ).each(function(){

		var self = $(this),
		form_holder = self.find( '.header-form' ),
		btn = self.find( '.header-btn' );

		// HOVER
		self.hover(function(){
			if ( media_query_breakpoint > 991 ) {
				self.find( '.header-btn' ).addClass( 'hover' );
				form_holder.stop( true, true ).slideDown(200);
			}
		}, function(){
			if ( media_query_breakpoint > 991 ) {
				self.find( '.header-btn' ).removeClass( 'hover' );
				form_holder.stop( true, true ).delay(10).slideUp(200);
			}
		});

		// VALIDATE FORM
		form_holder.find( 'form' ).submit(function(){

			var form = $(this);
			if ( form.uouFormValid() ) {
				form.find( '.alert-message.warning:visible' ).slideUp(300);
			}
			else {
				form.find( '.alert-message.warning' ).slideDown(300);
				return false;
			}

		});

		// TOGGLE
		btn.click(function(){
			if ( media_query_breakpoint <= 991 ) {
				self.find( '.header-btn' ).toggleClass( 'hover' );
				form_holder.stop( true, true ).slideToggle(200);
			}
		});

	});

	/* -------------------------------------------------------------------------
		HEADER TOGGLES
	------------------------------------------------------------------------- */

	// SEARCH TOGGLE
	$( '.search-toggle' ).click(function(){
		if ( $( '.header-menu' ).is( ':visible' ) ) {
			$( '.header-menu, .header-tools' ).slideUp(300);
		}
		else {
			$( '.header-navbar:hidden' ).show();
		}
		$( '.header-search' ).slideToggle(300, function(){
			if ( $( '.header-search' ).is( ':hidden' ) && $( '.header-menu' ).is( ':hidden' ) && $( '.header-tools' ).is( ':hidden' ) ) {
				$( '.header-navbar:visible' ).hide();
			}
		});
	});

	// NAVBAR TOGGLE
	$( '.navbar-toggle' ).click(function(){
		if ( $( '.header-search' ).is( ':visible' ) ) {
			$( '.header-search' ).slideUp(300);
		}
		else {
			$( '.header-navbar:hidden' ).show();
		}
		$( '.header-menu, .header-tools' ).slideToggle(300, function(){
			if ( $( '.header-search' ).is( ':hidden' ) && $( '.header-menu' ).is( ':hidden' ) && $( '.header-tools' ).is( ':hidden' ) ) {
				$( '.header-navbar:visible' ).hide();
			}
		});
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


/* -----------------------------------------------------------------------------

	CORE

----------------------------------------------------------------------------- */

	/* -------------------------------------------------------------------------
		BROWSE
	------------------------------------------------------------------------- */

	// PROPERTIES
	$( '#browse .browse-properties' ).uouTabbed();

	// DESTINATIONS
	$( '#browse .browse-destinations .top-destination' ).each(function(){

		var self = $(this),
		image = self.find( '.destination-thumb' );

		if ( image.length > 0 ){
			self.css( 'background-image', 'url(' + image.attr( 'src' ) + ')' );
		}

	});

	// MEMBERS
	$( '#browse .browse-members-search input' ).focus(function(){
		$(this).parent().find( '.fa' ).fadeOut(200);
	});
	$( '#browse .browse-members-search input' ).blur(function(){
		if ( $(this).val() === '' ) {
			$(this).parent().find( '.fa' ).fadeIn(200);
		}
	});

	/* -------------------------------------------------------------------------
		CONTACT FORM
	------------------------------------------------------------------------- */

	$( '#contact-form' ).each(function(){
		$(this).uouContactForm();
	});

	/* -------------------------------------------------------------------------
		PROPERTIES LISTING
	------------------------------------------------------------------------- */

	// LAYOUT
	$( '.properties-listing-header .list-layout .button' ).click(function(){

		var self = $(this),
		layout = self.data( 'layout' );

		if ( ! self.hasClass( 'active' ) ) {
			self.parent().find( '.active' ).removeClass( 'active' );
			self.addClass( 'active' );
			$( '.properties-listing .property-list' ).fadeOut(300, function(){
				$(this).removeClass( 'layout-list layout-grid' ).addClass( 'layout-' + layout );
				$(this).fadeIn(300);
			});
		}

	});

	// SEARCH TYPE
	$( '.properties-search-type' ).each(function(){

		var self = $(this),
		inputs = self.find( 'input[type=radio]' );
		inputs.each(function(){
			$(this).change(function(){
				$( '#properties-search-form-swap, #properties-search-form-book, #properties-search-form-rent' ).hide();
				$( '#properties-search-form-' + $(this).data( 'type' ) ).show();
			});
		});

	});

	// PRICE FILTER
	$( '.properties-search-filter .price-filter .slider-range-container' ).each(function(){
		if ( $.fn.slider ) {

			var self = $(this),
			slider = self.find( '.slider-range' ),
			min = slider.data( 'min' ) ? slider.data( 'min' ) : 100,
			max = slider.data( 'max' ) ? slider.data( 'max' ) : 2000,
			step = slider.data( 'step' ) ? slider.data( 'step' ) : 100,
			default_min = slider.data( 'default-min' ) ? slider.data( 'default-min' ) : 100,
			default_max = slider.data( 'default-max' ) ? slider.data( 'default-max' ) : 500,
			currency = slider.data( 'currency' ) ? slider.data( 'currency' ) : '$',
			input_from = self.find( '.range-from' ),
			input_to = self.find( '.range-to' );

			input_from.val( currency + ' ' + default_min );
			input_to.val( currency + ' ' + default_max );

			slider.slider({
				range: true,
				min: min,
				max: max,
				step: step,
				values: [ default_min, default_max ],
				slide: function( event, ui ) {
					input_from.val( currency + ' ' + ui.values[0] );
					input_to.val( currency + ' ' + ui.values[1] );
				}
			});

		}
	});

	/* -------------------------------------------------------------------------
		PROPERTY DETAILS
	------------------------------------------------------------------------- */

	// PROPERTY IMAGES
	$( '.property-details .property-images' ).each(function(){

		var self = $(this),
		image_list = self.find( '.image-list' ),
		images = image_list.find( '.image' ),
		images_count = images.length,
		footer = self.find( '.images-footer' ),
		description = footer.find( '.image-description' ),
		counter = footer.find( '.image-counter' ),
		btn_prev = footer.find( '.prev-btn' ),
		btn_next = footer.find( '.next-btn' );

		// ADD CLASSES
		if ( images_count === 1 ) {
			self.addClass( 'single-image' );
		}
		if ( images.find( 'img[alt=""]' ).length === images_count || images.find( 'img:not([alt])' ).length === images_count ) {
			self.addClass( 'no-description' );
		}

		// SET FIRST IMAGE DESCRIPTION
		if ( images.first().find( 'img' ).attr( 'alt' ) ) {
			description.text( images.first().find( 'img' ).attr( 'alt' ) );
		}

		// INIT OWL SLIDER
		if ( $.fn.owlCarousel && images_count > 1 ) {

			// SET COUNTER
			counter.text( '1/' + images_count );

			image_list.owlCarousel({
				autoPlay: false,
				slideSpeed: 300,
				pagination: false,
				paginationSpeed : 400,
				singleItem:true,
				addClassActive: true,
				afterMove: function(){

					var active = image_list.find( '.owl-item.active' ),
					index = active.index();

					// SET DESCRIPTION
					if ( active.find( 'img' ).attr( 'alt' ) ) {
						description.text( active.find( 'img' ).attr( 'alt' ) );
					}
					else {
						description.text( '' );
					}

					// SET COUNTER
					counter.text( parseInt( index ) + 1 + '/' + images_count );

				}
			});

			btn_prev.click(function(){
				image_list.trigger( 'owl.prev' );
			});
			btn_next.click(function(){
				image_list.trigger( 'owl.next' );
			});

		}

	});

	// BOOK FORM & CONTACT FORM
	$( '.property-details .property-panel .book-form, .property-details .property-panel .contact-form' ).each(function(){

		var form = $(this);

		form.submit(function(){
			if ( ! form.uouFormValid() ) {
				form.find( 'p.alert-message.warning.validation' ).slideDown(300);
				return false;
			}
		});

	});


/* -----------------------------------------------------------------------------

	TESTIMONIALS

----------------------------------------------------------------------------- */

	$( '#testimonials' ).each(function(){

		var self = $(this),
		list = self.find( '.testimonial-list' ),
		testimonials = list.find( '.testimonial' ),
		interval = self.data( 'interval' ) ? parseInt( self.data( 'interval' ) ) > 0 : false;

		// SHOW FIRST PORTRAIT
		var first_portrait = testimonials.first().find( '.portrait img' );
		if ( first_portrait.length > 0 ) {
			list.before( '<div class="active-portrait"><img src="' + first_portrait.attr( 'src' ) + '" alt="' + first_portrait.attr( 'alt' ) + '"></div>' );
		}

		// CREATE SLIDER
		list.owlCarousel({
			autoPlay: interval,
			slideSpeed: 300,
			pagination: false,
			paginationSpeed : 400,
			singleItem:true,
			addClassActive: true,
			afterMove: function(){
				var new_portrait;
				self.find( '.active-portrait' ).fadeOut(200, function(){
					new_portrait = list.find( '.owl-item.active .portrait img' );
					if ( new_portrait.length > 0 ) {
						self.find( '.active-portrait img' ).attr( 'src', new_portrait.attr( 'src' ) );
						self.find( '.active-portrait img' ).attr( 'alt', new_portrait.attr( 'alt' ) );
					}
					self.find( '.active-portrait' ).fadeIn(200);
				});
			}
		});

		// NAV
		self.find( '.navigation .prev' ).click(function(){
			list.trigger( 'owl.prev' );
		});
		self.find( '.navigation .next' ).click(function(){
			list.trigger( 'owl.next' );
		});

	});


/* -----------------------------------------------------------------------------

	BOTTOM PANEL

----------------------------------------------------------------------------- */

	// NEWSLETTER WIDGET
	$( '#bottom-panel .newsletter-widget form' ).submit(function(){

		var form = $(this);
		if ( form.uouFormValid() ) {
			form.find( '.alert-message.warning:visible' ).slideUp(300);
		}
		else {
			form.find( '.alert-message.warning' ).slideDown(300);
			return false;
		}

	});

	// TWITTER WIDGET
	$( '#bottom-panel .twitter-feed' ).each(function(){
		$(this).uouTwitterFeed();
	});


/* -----------------------------------------------------------------------------

	SCREEN RESIZE

----------------------------------------------------------------------------- */

	$(window).resize(function(){
		if ( uouMediaQueryBreakpoint() !== media_query_breakpoint ) {
			media_query_breakpoint = uouMediaQueryBreakpoint();

			/* RESET HEADER ELEMENTS */
			$( '.header-navbar, .header-form, .header-nav, .header-nav ul, .header-menu, .header-search, .header-tools, .sub-menu' ).removeAttr( 'style' );
			$( '.submenu-toggle .fa' ).removeClass( 'fa-chevron-up' ).addClass( 'fa-chevron-down' );
			$( '.header-btn' ).removeClass( 'hover' );

		}

	});

/* -----------------------------------------------------------------------------

	STYLE SWITCHER

----------------------------------------------------------------------------- */

	if ( $( 'body' ).hasClass( 'enable-style-switcher' ) ) {

		// CREATE STYLE SWITCHER
		var style_switcher_html = '<div id="style-switcher"><button class="style-switcher-toggle"><i class="ico fa fa-cog"></i></button>';
		style_switcher_html += '<div class="style-switcher-content"><ul class="custom-list skin-list">';
		style_switcher_html += '<li><button class="skin-default active" data-skin="default"><span>Default</span></button></li>';
		style_switcher_html += '<li><button class="skin-blue" data-skin="blue"><span>Blue</span></button></li>';
		style_switcher_html += '<li><button class="skin-yellow" data-skin="yellow"><span>Yellow</span></button></li>';
		style_switcher_html += '</ul></div></div>';
		$( 'body' ).append( style_switcher_html );

		// INIT SWITCHER
		$( '#style-switcher' ).each(function(){

			var switcher = $(this),
			toggle = switcher.find( '.style-switcher-toggle' ),
			skins = switcher.find( '.skin-list button' ),
			style_switcher_settings = {};

			//localStorage.clear();

			// SAVE SETTINGS
			var style_switcher_save = function(){
				if ( $( 'html' ).hasClass( 'localstorage' ) ) {
					localStorage.style_switcher_settings = JSON.stringify( style_switcher_settings );
				}
			};

			// LOAD SETTINGS
			if ( $( 'html' ).hasClass( 'localstorage' ) && localStorage.style_switcher_settings ) {

				style_switcher_settings = JSON.parse( localStorage.style_switcher_settings );

				// LOAD SAVED SKIN
				if ( typeof style_switcher_settings.skin !== 'undefined' ) {
					skins.filter( '.active' ).removeClass( 'active' );
					skins.filter( '[data-skin="' + style_switcher_settings.skin + '"]' ).addClass( 'active' );
					if ( $( 'head #skin-temp' ).length < 1 ) {
						$( 'head' ).append( '<link id="skin-temp" rel="stylesheet" type="text/css" href="library/css/skins/' + style_switcher_settings.skin + '.css">' );
					}
				}

			}

			// TOGGLE SWITCHER
			toggle.click(function(){
				switcher.toggleClass( 'active' );
			});

			// SET SKIN
			skins.click(function(){
				skins.filter( '.active' ).removeClass( 'active' );
				$(this).toggleClass( 'active' );
				style_switcher_settings.skin = $(this).data( 'skin' );
				style_switcher_save();
				if ( $( 'head #skin-temp' ).length < 1 ) {
					$( 'head' ).append( '<link id="skin-temp" rel="stylesheet" type="text/css" href="library/css/skins/' + $(this).data( 'skin' ) + '.css">' );
				}
				else {
					$( '#skin-temp' ).attr( 'href', 'library/css/skins/' + $(this).data( 'skin' ) + '.css' );
				}

			});

		});

	}
	// STYLE SWITCHER END

/* END. */
}
};
})(jQuery);