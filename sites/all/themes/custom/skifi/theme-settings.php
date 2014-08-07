<?php

//load google fonts array
include_once( drupal_get_path('theme', 'skifi') . '/includes/google-fonts.php');
    
// make array to pe passed in theme settings form
function get_google_font_array() {

	$google_array = get_google_array();
 	reset($google_array);
	$font_array = array();
	while (list($key,$val) = each($google_array)) {
   		$font_array = array_merge($font_array, array($val['family'] => $val['family']));	
	}

	return $font_array;
}


function skifi_form_system_theme_settings_alter(&$form, &$form_state) {
	
	$form['theme_settings_tab'] = array(
	    '#type' => 'vertical_tabs',
	    '#weight' => -2,
	); 
	
	// MAIN LAYOUT FIELDSET 
	$form['theme_settings_tab']['layout_settings'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Content Stretch'),
	  '#weight' => -3,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	);
	
	$form['theme_settings_tab']['layout_settings']['width'] = array(
		'#type' => 'textfield',
		'#title' => t('Content width:'),
	    '#description' => t('Max width that contents (eg. area that content and sidebars should cover). Default is 1170. Do not add "px". This will not make your website boxed layout. To make the website boxed, Check the option below. '),
		'#default_value' => theme_get_setting('width'),
		'#size' => 4,
		'#maxlength' => 4,
		
	);
	
	$form['theme_settings_tab']['layout_settings']['boxed_enabled'] = array(
		'#type' => 'checkbox',
		'#title' => t('Boxed Layout?'),
		'#default_value' => theme_get_setting('boxed_enabled'),
	);
	
	// TYPOGRAPHY FIELDSET 
	$form['theme_settings_tab']['typo_settings'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Typography Settings'),
	  '#description' => t('Typography (fonts) settings can be defined here '),
	  '#weight' => -3,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	);

	
		
	$form['theme_settings_tab']['typo_settings']['menu_font_size'] = array(
	    '#type' => 'select',
	    '#title' => t('Menu Font Size'),
     	'#description' => t('Font Size to be used in main menu'),
	    '#default_value' => theme_get_setting('menu_font_size'),
	    '#options' => array(
	    '11' => t('11'),
	    '12' => t('12'),
	    '13' => t('13'),
	    '14' => t('14'),
	    '15' => t('15'),
		'16' => t('16'),
		'17' => t('17'),
		'18' => t('18 (default)'),
		'19' => t('19'),
		'20' => t('20'),
		'21' => t('21'),
		'22' => t('22'),	
		'23' => t('23'),	
		'24' => t('24'),	
		),
	);	
	
	$form['theme_settings_tab']['typo_settings']['site_font_size'] = array(
	    '#type' => 'select',
	    '#title' => t('Sitewide text\'s font size'),
     	'#description' => t('Font Size to be used site wide'),
	    '#default_value' => theme_get_setting('site_font_size'),
	    '#options' => array(
	    '10' => t('10'),
	    '11' => t('11'),
	    '12' => t('12 (default)'),
	    '13' => t('13'),
	    '14' => t('14'),
	    '15' => t('15'),
		'16' => t('16'),
		'17' => t('17'),
		'18' => t('18'),
		'19' => t('19'),
		'20' => t('20'),
		),
	);
	
	$form['theme_settings_tab']['typo_settings']['site_font_family'] = array(
	    '#type' => 'textfield',
	    '#title' => t('Sitewide text\'s font family'),
	    '#size' => 60,
	    '#maxlength' => 228,
	    '#required' => FALSE,
     	'#description' => t('Font family to be used site wide. If you want to use this, you have to disable google fonts in google font setting tab'),
	    '#default_value' => theme_get_setting('site_font_family'),
	);
	
	// Google fonts setting	
	$form['theme_settings_tab']['google_fonts'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Google Font settings'),
	  '#description' => t('If cufon is enabled, it will override google font for heading and menu elements. <br/>'),
	  '#weight' => -2,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'google_fonts_tab',
	);
		
	$form['theme_settings_tab']['google_fonts']['google_enable'] = array(
		'#type' => 'checkbox',
		'#title' => t('Enable Google fonts'),
		'#default_value' => theme_get_setting('google_enable'),
	);
		
	$form['theme_settings_tab']['google_fonts']['heading_fonts_google'] = array(
		'#type' => 'select',
		'#title' => t('Google Font for Heading elements'),
		 '#description' => t('This font will be used for site wide heading elements such as H1, H2, H3, H4, H5, H6. <strong>Note:</strong> if cufon is enabled, this will be overridden by cufon. '),
		'#default_value' => theme_get_setting('heading_fonts_google'),
		'#options' => get_google_font_array(),
	);
	
	$form['theme_settings_tab']['google_fonts']['heading_fonts_google_weight'] = array(
		'#type' => 'textfield',
		'#title' => t('Font-wieght for heading element. '),
	    '#description' => t('Make sure selected font supports this font-weight. Visit http://www.google.com/webfonts/ to check. Default is \'normal\'.'),
		'#default_value' => theme_get_setting('heading_fonts_google_weight'),
		'#size' => 6,
		'#maxlength' => 8,
		
	);
	
	$form['theme_settings_tab']['google_fonts']['menu_fonts_google'] = array(
		'#type' => 'select',
		'#title' => t('Google Font for Main Menu'),
		 '#description' => t('This font will be used for Main Menu. <strong>Note:</strong> if cufon is enabled, this will be overridden by cufon. '),
		'#default_value' => theme_get_setting('menu_fonts_google'),
		'#options' => get_google_font_array(),
	);
	
	$form['theme_settings_tab']['google_fonts']['menu_fonts_google_weight'] = array(
		'#type' => 'textfield',
		'#title' => t('Font-wieght for menu element. '),
	    '#description' => t('Make sure selected font supports this font-weight. Visit http://www.google.com/webfonts/ to check. Default is \'normal\'.'),
		'#default_value' => theme_get_setting('menu_fonts_google_weight'),
		'#size' => 6,
		'#maxlength' => 8,
		
	);
	
	$form['theme_settings_tab']['google_fonts']['slider_fonts_google'] = array(
		'#type' => 'select',
		'#title' => t('Google Font for Slider'),
		 '#description' => t('This font will be used in Slider captions.  '),
		'#default_value' => theme_get_setting('slider_fonts_google'),
		'#options' => get_google_font_array(),
	);
	
	$form['theme_settings_tab']['google_fonts']['slider_fonts_google_weight'] = array(
		'#type' => 'textfield',
		'#title' => t('Font-wieght for slider element. '),
	    '#description' => t('Make sure selected font supports this font-weight. Visit http://www.google.com/webfonts/ to check. Default is \'normal\'.'),
		'#default_value' => theme_get_setting('slider_fonts_google_weight'),
		'#size' => 6,
		'#maxlength' => 8,
		
	);	
	
	$form['theme_settings_tab']['google_fonts']['site_fonts_google'] = array(
		'#type' => 'select',
		'#title' => t('Google Font for site wide texts'),
		 '#description' => t('This font will be used for site wide texts. Default is \'normal\'.'),
		'#default_value' => theme_get_setting('site_fonts_google'),
		'#options' => get_google_font_array(),
	);
	
	$form['theme_settings_tab']['google_fonts']['site_fonts_google_weight'] = array(
		'#type' => 'textfield',
		'#title' => t('Font-wieght for sitewide text. '),
	    '#description' => t('Make sure selected font supports this font-weight. Visit http://www.google.com/webfonts/ to check. Default is \'normal\'.'),
		'#default_value' => theme_get_setting('site_fonts_google_weight'),
		'#size' => 6,
		'#maxlength' => 8,
		
	);

	$form['theme_settings_tab']['google_fonts']['quote_fonts_google'] = array(
		'#type' => 'select',
		'#title' => t('Google Font for \'blockquote\' and \'quote\' class'),
		 '#description' => t('This font will be used in blockquote tags and element class \'quote\''),
		'#default_value' => theme_get_setting('quote_fonts_google'),
		'#options' => get_google_font_array(),
	);
	
	$form['theme_settings_tab']['google_fonts']['quote_fonts_google_weight'] = array(
		'#type' => 'textfield',
		'#title' => t('Font-wieght for quote text. '),
	    '#description' => t('Make sure selected font supports this font-weight. Visit http://www.google.com/webfonts/ to check. Default is \'normal\'. '),
		'#default_value' => theme_get_setting('quote_fonts_google_weight'),
		'#size' => 6,
		'#maxlength' => 8,
		
	);	
	
	
	// slider setting		
	$form['theme_settings_tab']['sliders_setting'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Slider setting'),
	  '#weight' => 2,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'theme_settings_tab',
	);
	
	$form['theme_settings_tab']['sliders_setting']['slider_type'] = array(
		'#type' => 'select',
		'#title' => t('Which Slider you want to use?'),
		'#description' => t('Select slider type that you want to use '),
		'#default_value' => theme_get_setting('slider_type'),
		'#options' => array(
		'flex' => t('Flex Slider'),
		'layer_slider' => t('Layer Slider'),
		),
	);
	
	// Flex slider setting		
	$form['theme_settings_tab']['flex_setting'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Flex slider slides'),
	  '#weight' => 2,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'theme_settings_tab',
	);
	
	$form['theme_settings_tab']['flex_setting']['flex_width'] = array(
		'#type' => 'textfield',
		'#title' => t('Slider width:'),
	    '#description' => t('Max width of slider. Enter in pixels or percent. Make sure you add ending \'%\' or \'px\'. Example \'100%\' or \'1170px\'.  <br><br>Your slider height will be the heigh of image you add below. Make sure you add all images of same height to make slider look consistent. '),
		'#default_value' => theme_get_setting('flex_width'),
		'#size' => 6,
		'#maxlength' => 6,
		
	);
	
	$form['theme_settings_tab']['flex_setting']['flex_img1'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your Slide 1 image:'),
	'#default_value' => theme_get_setting('flex_img1'),
 	'#description' => t('Enter full http:// path or web server relative path to image. '),
	'#size' => 60,
	'#maxlength' => 3000,	
	);
	
	$form['theme_settings_tab']['flex_setting']['flex_img2'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your Slide 2 image:'),
	'#default_value' => theme_get_setting('flex_img2'),
 	'#description' => t('Enter full http:// path or web server relative path to image. '),
	'#size' => 60,
	'#maxlength' => 3000,	
	);
	
	
	$form['theme_settings_tab']['flex_setting']['flex_img3'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your Slide 3 image:'),
	'#default_value' => theme_get_setting('flex_img3'),
 	'#description' => t('Enter full http:// path or web server relative path to image. '),
	'#size' => 60,
	'#maxlength' => 3000,	
	);
	
	
	$form['theme_settings_tab']['flex_setting']['flex_img4'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your Slide 4 image:'),
	'#default_value' => theme_get_setting('flex_img4'),
 	'#description' => t('Enter full http:// path or web server relative path to image. '),
	'#size' => 60,
	'#maxlength' => 3000,	
	);
	
	
	$form['theme_settings_tab']['flex_setting']['flex_img5'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your Slide 5 image:'),
	'#default_value' => theme_get_setting('flex_img5'),
 	'#description' => t('Enter full http:// path or web server relative path to image. '),
	'#size' => 60,
	'#maxlength' => 3000,	
	);
	
	
	$form['theme_settings_tab']['flex_setting']['flex_img6'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your Slide 6 image:'),
 	'#description' => t('Enter full http:// path or web server relative path to image. '),
	'#size' => 60,
	'#maxlength' => 3000,	
	);
	
	
	
	
	// colors setting
	$form['theme_settings_tab']['custom_colors'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Color Scheme Settings'),
	  '#weight' => 3,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'theme_settings_tab',
	);	
	
	
	$form['theme_settings_tab']['custom_colors']['predefined_schemes'] = array(
		'#type' => 'select',
		'#title' => t('Choose a color scheme from predefined color schemes. '),
		 '#description' => t('Choose color scheme from predefined color schemes or select \'custom\' to set your own colors below. '),
		'#default_value' => theme_get_setting('predefined_schemes'),
		'#options' => array(
		'cinnabar' => 'Cinnabar (default)',
		'green' => 'Green',
		'sky_blue' => 'Sky Blue',
		'blue' => 'Blue',
		'purple' => 'purple',
		'pink' => 'Pink',
		'red' => 'Red',
		'yellow' => 'Yellow',
		'slate' => 'Slate',
		'custom' => 'Custom',
		),
	);
	
	
	
	$form['theme_settings_tab']['custom_colors']['bg_scheme'] = array(
		'#type' => 'select',
		'#title' => t('Choose a background scheme. '),
		 '#description' => t('choose a background scheme for background of your website. <strong>Note:</strong> if you want to use custom setting, use <em>Custom Background Setting</em> field below. '),
		'#default_value' => theme_get_setting('bg_scheme'),
		'#options' => array(
		'stripe_default.png' => 'stripes',
		'stripebig.png' => 'Big Stripes',
		'tartan1.png' => 'Tartan',
		'brackets.png' => 'Brackets',
		'pixels.png' => 'Pixels',
		'plain.gif' => 'Plain (white)',
		),
	);
	
	$form['theme_settings_tab']['custom_colors']['custom_bg_attribute'] = array(
		'#type' => 'textfield',
		'#title' => t('Define custom CSS background attribute for <em>body</em> element'),
	    '#description' => t('In this field, you can define your own css property for theme background. You can also add path to your own background image. For example: <em>url(/sites/all/themes/bg/stripes_default.png) repeat #fff</em>. Do not include ending semicolon \';\'. This will override previously defined background setting. <br><br>You should have basic knowledge of CSS background properties and how to use them in one line. A very nice and brief introduction is <a href="http://www.cssbasics.com/chapter_12_css_backgrounds.html">here</a>. If you dont want to use this field, leave it blank. '),
		'#default_value' => theme_get_setting('custom_bg_attribute'),
		'#maxlength' => 2000,		
	);	
	
	
	$form['theme_settings_tab']['custom_colors']['theme_color_scheme'] = array(
		'#type' => 'textfield',
		'#title' => t('Color scheme of your entire theme'),
	    '#description' => t('Enter six character hexadecimal color code without preceeding \'#\' . Default is \'E45635\'. This is main color scheme of your theme. You can choose/play with colors on demo website of this theme then enter your desired color code here. <br><br><strong>Warning: </strong>do not make this field empty. In case you are lost, add default color (E45635) to this field.  '),
		'#default_value' => theme_get_setting('theme_color_scheme'),
		'#size' => 6,
		'#maxlength' => 6,
		
	);
	

	$form['theme_settings_tab']['custom_colors']['link_color'] = array(
		'#type' => 'textfield',
		'#title' => t('Sitewide Link color. Note: please read full description below'),
	    '#description' => t('By default, your site color scheme will be used as link color. It is recommended that you leave this field blank unless you are using site color scheme that is too dark for links to appear distinct from texts. Enter six character hexadecimal color code without preceeding \'#\'.'),
		'#default_value' => theme_get_setting('link_color'),
		'#size' => 6,
		'#maxlength' => 6,
		
	);	
	
	$form['theme_settings_tab']['custom_colors']['highlighted_region_bg'] = array(
		'#type' => 'textfield',
		'#title' => t('Background color of Highlighted region:'),
	    '#description' => t('Better to keep it dark. Enter six character hexadecimal color code without preceeding \'#\'. Default is 161616. '),
		'#default_value' => theme_get_setting('highlighted_region_bg'),
		'#size' => 6,
		'#maxlength' => 6,
		
	);
	
	$form['theme_settings_tab']['custom_colors']['footer_link_color'] = array(
		'#type' => 'textfield',
		'#title' => t('Footer link color. Note: please read full description below'),
	    '#description' => t('By default, your site color scheme will be used as link color. It is recommended that you leave this field blank unless you are using site color scheme that is too dark for links to appear distinct from texts. Enter six character hexadecimal color code without preceeding \'#\'.'),
		'#default_value' => theme_get_setting('footer_link_color'),
		'#size' => 6,
		'#maxlength' => 6,
		
	);	
	
	
	$form['theme_settings_tab']['custom_colors']['icon_scheme'] = array(
		'#type' => 'select',
		'#title' => t('Choose icons color scheme: '),
		'#default_value' => theme_get_setting('icon_scheme'),
		'#options' => array(
		'cinnabar' => 'Cinnabar (default)',
		'green' => 'Green',
		'sky_blue' => 'Sky Blue',
		'blue' => 'Blue',
		'purple' => 'purple',
		'pink' => 'Pink',
		'red' => 'Red',
		'yellow' => 'Yellow',
		'slate' => 'Slate',
		'custom' => 'Custom',
		),
	);



	// Content region grid/width setting
	$form['theme_settings_tab']['content_grids'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Content Region width/grids'),
	  '#weight' => 3,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'theme_settings_tab',
	);
	
	$form['theme_settings_tab']['content_grids']['left_span'] = array(
	    '#type' => 'select',
	    '#title' => t('Width of left sidebar out of 12 grids: '),
     	'#description' => t('12 Grid system basically means you have total 12 columns. You have to choose how many columns this particular sidebar should fill. The total of "Left Sidebar + Content + Right Sidebar" should be equal to 12. Default value of this field is 3. '),
	    '#default_value' => theme_get_setting('left_span'),
	    '#options' => array(
	    '1' => t('1'),
	    '2' => t('2'),
	    '3' => t('3'),
	    '4' => t('4'),
	    '5' => t('5'),
	    '6' => t('6'),
		'7' => t('7'),
		'8' => t('8'),
		'9' => t('9'),
		'0' => t('10'),
		'11' => t('11'),
		'12' => t('12'),
		),
	);
	
	$form['theme_settings_tab']['content_grids']['content_span'] = array(
	    '#type' => 'select',
	    '#title' => t('Width of Content Area out of 12 grids: '),
     	'#description' => t('12 Grid system basically means you have total 12 columns. You have to choose how many columns this particular sidebar should fill. The total of "Left Sidebar + Content + Right Sidebar" should be equal to 12. Default value of this field is 3. '),
	    '#default_value' => theme_get_setting('content_span'),
	    '#options' => array(
	    '1' => t('1'),
	    '2' => t('2'),
	    '3' => t('3'),
	    '4' => t('4'),
	    '5' => t('5'),
	    '6' => t('6'),
		'7' => t('7'),
		'8' => t('8'),
		'9' => t('9'),
		'0' => t('10'),
		'11' => t('11'),
		'12' => t('12'),
		),
	);
	
	$form['theme_settings_tab']['content_grids']['right_span'] = array(
	    '#type' => 'select',
	    '#title' => t('Width of Right Sidebar out of 12 grids: '),
     	'#description' => t('12 Grid system basically means you have total 12 columns. You have to choose how many columns this particular sidebar should fill. The total of "Left Sidebar + Content + Right Sidebar" should be equal to 12. Default value of this field is 3. '),
	    '#default_value' => theme_get_setting('right_span'),
	    '#options' => array(
	    '1' => t('1'),
	    '2' => t('2'),
	    '3' => t('3'),
	    '4' => t('4'),
	    '5' => t('5'),
	    '6' => t('6'),
		'7' => t('7'),
		'8' => t('8'),
		'9' => t('9'),
		'0' => t('10'),
		'11' => t('11'),
		'12' => t('12'),
		),
	);
		

	// LOGO SECTION SETUP
	$form['theme_settings_tab']['header_setup'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Header (logo &amp; menu etc.)'),
	  '#weight' => 3,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'theme_settings_tab',
  	  '#description' => t('Please add proper margin to logo and site name so that they look properly aligned in case you are using both logo and site name. '),
	  
	);
	
	$form['theme_settings_tab']['header_setup']['header_height'] = array(
		'#type' => 'textfield',
		'#title' => t('Height of Header'),
		'#default_value' => theme_get_setting('header_height'),
	 	'#description' => t('Value is in pixels(px), do not add \'px\'. Default is 75. '),
		'#size' => 60,
	);
	

	$form['theme_settings_tab']['header_setup']['logo_top_margin'] = array(
		'#type' => 'textfield',
		'#title' => t('Top margin of logo. '),
		'#default_value' => theme_get_setting('logo_top_margin'),
	 	'#description' => t('Value is in pixels(px), do not add \'px\'. Default is 15. '),
		'#size' => 60,
	);
	
	$form['theme_settings_tab']['header_setup']['name_top_margin'] = array(
		'#type' => 'textfield',
		'#title' => t('Top margin of Site Name. '),
		'#default_value' => theme_get_setting('name_top_margin'),
	 	'#description' => t('Value is in pixels(px), do not add \'px\'. Default is 0. '),
		'#size' => 60,
	);
	
	$form['theme_settings_tab']['header_setup']['menu_section_margin'] = array(
		'#type' => 'textfield',
		'#title' => t('Top margin of Header navigation. '),
		'#default_value' => theme_get_setting('menu_section_margin'),
	 	'#description' => t('If you increase header height, you might also want to increase menu top margin. Value is in pixels(px), do not add \'px\'. Default is 0. If you edit this, you might also have to edit /skifi/html.tpl.php to set proper "absoluteTop : " jquery option at bottom where jMenu function is called. '),
		'#size' => 60,
	);
	
	// Portfolio settings		
	$form['theme_settings_tab']['portfolio_settings'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Portfolio settings'),
	  '#weight' => 5,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'theme_settings_tab',
	);
	
	
	$form['theme_settings_tab']['portfolio_settings']['porfolio_2col_link'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your 2 column portfolio page'),
	'#default_value' => theme_get_setting('porfolio_2col_link'),
 	'#description' => t('Enter full http:// path or relative path to you 2 column portfolio page. '),
	'#size' => 60,
	);
	
	$form['theme_settings_tab']['portfolio_settings']['porfolio_3col_link'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your 3 column portfolio page.'),
	'#default_value' => theme_get_setting('porfolio_3col_link'),
 	'#description' => t('Enter full http:// path or relative path to you 3 column portfolio page. '),
	'#size' => 60,
	);
	
	$form['theme_settings_tab']['portfolio_settings']['porfolio_4col_link'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your 4 column portfolio page.'),
	'#default_value' => theme_get_setting('porfolio_4col_link'),
 	'#description' => t('Enter full http:// path or relative path to you 4 column portfolio page. '),
	'#size' => 60,
	);
	
	// Misc		
	$form['theme_settings_tab']['misc_settings'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Miscellaneous settings'),
	  '#weight' => 7,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'theme_settings_tab',
	);
	

	$form['theme_settings_tab']['misc_settings']['skifi_breadcrumb'] = array(
		'#type' => 'checkbox',
		'#title' => t('iCompany\'s style breadcrumb'),
		'#description' => t('Use Skifi\'s style breadcrumb instead of Drupal default breadcrumb. '),
		'#default_value' => theme_get_setting('skifi_breadcrumb'),
	);
	
	$form['theme_settings_tab']['misc_settings']['show_feedback_link'] = array(
		'#type' => 'checkbox',
		'#title' => t('Show onscreen feedback link'),
		'#description' => t('Check this to show link to feedback link that targets <em>Modal</em> block region. '),
		'#default_value' => theme_get_setting('show_feedback_link'),
	);
	
	
	// layer slider settings
	include_once( drupal_get_path('theme', 'skifi') . '/includes/layerlsider_form.php');
	
	return $form;
}
