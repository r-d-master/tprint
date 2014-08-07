<?php

// Theme path constant
$theme_path = base_path() . path_to_theme();
define("THEME_PATH", $theme_path);

// load bootstrap files
drupal_add_css(drupal_get_path('theme', 'skifi') .'/bootstrap/css/bootstrap.css',  array(  'group' => 'CSS_THEME', 'weight' => 93));
drupal_add_js(drupal_get_path('theme', 'skifi') . '/bootstrap/js/bootstrap.js', array('type' => 'file', 'scope' => 'footer', 'group' => 'JS_LIBRARY', 'weight' => 20));

// jquery easing
drupal_add_js(drupal_get_path('theme', 'skifi') . '/js/jquery-easing-1.3.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 10));	

//jquery cycle lite
drupal_add_js(drupal_get_path('theme', 'skifi') . '/js/jquery.cycle.lite.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 12));


// select nav
drupal_add_js(drupal_get_path('theme', 'skifi') . '/js/selectnav.min.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 40));

// superfish menu
drupal_add_css(drupal_get_path('theme', 'skifi') .'/css/superfish.css',  array(  'group' => 'CSS_THEME', 'weight' => 96));
drupal_add_js(drupal_get_path('theme', 'skifi') . '/js/superfish.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 41));

//img hover
drupal_add_js(drupal_get_path('theme', 'skifi') . '/js/jq.imgHover.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 45));

// colorbox
drupal_add_js(drupal_get_path('theme', 'skifi') . '/js/jquery.colorbox-min.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 48));
drupal_add_css(drupal_get_path('theme', 'skifi') .'/css/colorbox.css',  array(  'group' => 'CSS_THEME', 'weight' => 98));

// quicksand
drupal_add_js(drupal_get_path('theme', 'skifi') . '/js/jquery.quicksand.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 49));


// LAYER SLIDER SETTINGS
if(theme_get_setting('slider_type') == 'layer_slider'){
	drupal_add_css(drupal_get_path('theme', 'skifi') .'/layerslider/css/layerslider.css',  array(  'group' => 'CSS_THEME', 'weight' => 94));
	drupal_add_js(drupal_get_path('theme', 'skifi') . '/layerslider/js/layerslider.kreaturamedia.jquery.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 50));
}

// FLEX SLIDER SETTINGS
if(theme_get_setting('slider_type') == 'flex'){
	drupal_add_css(drupal_get_path('theme', 'skifi') .'/css/flexslider.css',  array(  'group' => 'CSS_THEME', 'weight' => 94));
	drupal_add_js(drupal_get_path('theme', 'skifi') . '/js/jquery.flexslider-min.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 50));
	drupal_add_js(drupal_get_path('theme', 'skifi') . '/js/flex_options.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 51));
}



// Google fonts
// Prepare Google font css 
function get_google_css_string(){
	if(theme_get_setting('google_enable') == 1) {
		$google_heading_font = theme_get_setting('heading_fonts_google');
		$google_menu_font = theme_get_setting('menu_fonts_google');
		$google_site_font = theme_get_setting('site_fonts_google');	
		$google_slider_font = theme_get_setting('slider_fonts_google');	
		$google_quote_font = theme_get_setting('quote_fonts_google');					
	    				
	    $google_heading_font = str_replace(' ', '+' , $google_heading_font);			
	    $google_menu_font = str_replace(' ', '+' , $google_menu_font);
	    $google_site_font = str_replace(' ', '+' , $google_site_font);
		$google_slider_font = str_replace(' ', '+' , $google_slider_font);
		$google_quote_font = str_replace(' ', '+' , $google_quote_font);
		
	    $google_heading_font =	$google_heading_font . ':100,200,300,400,500,600,700,subset=latin:n,i,b,bi|';	
	    $google_menu_font = $google_menu_font . ':100,200,300,400,500,600,700,subset=latin:n,i,b,bi|';
	    $google_site_font = 	$google_site_font . ':100,200,300,400,500,600,700,subset=latin:n,i,b,bi|';
	    $google_slider_font = 	$google_slider_font . ':100,200,300,400,500,600,700,subset=latin:n,i,b,bi|';
		
		
		$google_css_string = 'http://fonts.googleapis.com/css?family=' . $google_heading_font . $google_menu_font . $google_site_font . $google_slider_font . $google_quote_font;
	}
	else{
		return;
	}
	
	return $google_css_string;
}


function get_googlefont_style_code(){

	?>
	
	body{
		font-family: <?php print theme_get_setting('site_fonts_google'); ?>, 'Helvetica Neue', Helvetica, Arial, sans-serif;
		font-weight: <?php print theme_get_setting('site_fonts_google_weight'); ?>;
	}
	
	h1, h2, h3, h4, h5, h6, h7, h8, .heading, .pricing-table ul .price, .numbered-heading, .uc-price {
		font-family: <?php print theme_get_setting('heading_fonts_google'); ?>, 'Helvetica Neue', Helvetica, Arial, sans-serif;
		font-weight: <?php print theme_get_setting('heading_fonts_google_weight'); ?>;
	}
	
	#mainMenu, #mobileMenu_mm1{
		font-family: <?php print theme_get_setting('menu_fonts_google'); ?>, 'Helvetica Neue', Helvetica, Arial, sans-serif;
		font-weight: <?php print theme_get_setting('menu_fonts_google_weight'); ?>;
	}

	
	#main_slider{
		font-family: <?php print theme_get_setting('slider_fonts_google'); ?>, 'Helvetica Neue', Helvetica, Arial, sans-serif;
		font-weight: <?php print theme_get_setting('slider_fonts_google_weight'); ?>;
	}
	
	blockquote, .quote{
		font-family: <?php print theme_get_setting('quote_fonts_google'); ?>, Georgia,"Times New Roman",Times,serif;
		font-weight: <?php print theme_get_setting('quote_fonts_google_weight'); ?>;
	}
	
	<?php
}
	
	
// count blocks and return number of blocks
function count_blocks($block1 = NULL, $block2 = NULL, $block3 = NULL, $block4 = NULL, $block5 = NULL,  $block6 = NULL)
{
	$to_count = array();

	if(!empty($block1))
	{
		array_push($to_count, 1);
	}

	if(!empty($block2))
	{
		array_push($to_count, 2);
	}

	if(!empty($block3))
	{
		array_push($to_count, 3);
	}
	
	if(!empty($block4))
	{
		array_push($to_count, 4);
	}
	
	if(!empty($block5))
	{
		array_push($to_count, 5);
	}
	
	if(!empty($block6))
	{
		array_push($to_count, 6);
	}


	$num = count($to_count);
	
	return $num;
}


// count blocks and return span* automatically. 12 grid is divided by number of blocks. 5 blocks will be an error coz 12 cannot be divided by 5. 6 is ok
function get_block_span($block1 = NULL, $block2 = NULL, $block3 = NULL, $block4 = NULL, $block5 = NULL,  $block6 = NULL)
{
	$to_count = array();

	if(!empty($block1))
	{
		array_push($to_count, 1);
	}

	if(!empty($block2))
	{
		array_push($to_count, 2);
	}

	if(!empty($block3))
	{
		array_push($to_count, 3);
	}
	
	if(!empty($block4))
	{
		array_push($to_count, 4);
	}
	
	if(!empty($block5))
	{
		array_push($to_count, 5);
	}
	
	if(!empty($block6))
	{
		array_push($to_count, 6);
	}

	$num = count($to_count);

	if ($num == 5) {
		return ' span2 '; // since 12 grids cannot be divided by 5, we use span2
	}
	
	$span = 12/$num;
	
	return ' span'. $span . ' ';
}

// Returns true if any column block exist else false
function region_blocks_exist($block1 = NULL, $block2 = NULL, $block3 = NULL, $block4 = NULL, $block5 = NULL,  $block6 = NULL, $block7 = NULL){
	
	if(!empty($block1) || !empty($block2) ||  !empty($block3) || !empty($block4) || !empty($block5) || !empty($block6) || !empty($block7))	{
		return TRUE;
	}
	
	else{
		return FALSE;
	}
}

/**
 * Convert a hexa decimal color code to its RGB equivalent
 *
 * @param string $hexStr (hexadecimal color value)
 * @param boolean $returnAsString (if set true, returns the value separated by the separator character. Otherwise returns associative array)
 * @param string $seperator (to separate RGB values. Applicable only if second parameter is true.)
 * @return array or string (depending on second parameter. Returns False if invalid hex color value)
 */                                                                                                
function hex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
	

    $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
    $rgbArray = array();
    if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
        $colorVal = hexdec($hexStr);
        $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
        $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
        $rgbArray['blue'] = 0xFF & $colorVal;
    } elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
        $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
        $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
        $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
    } else {
        return false; //Invalid hex color code
    }
    return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
}

/**
 * Convert a hexa decimal color to lighter or darker color
*/
function colorInterpolate($hex, $percent) {
	// Work out if hash given
	$hash = '';
	if (stristr($hex, '#')) {
		$hex = str_replace('#', '', $hex);
		$hash = '#';
	}
	/// HEX TO RGB
	$rgb = array(hexdec(substr($hex, 0, 2)), hexdec(substr($hex, 2, 2)), hexdec(substr($hex, 4, 2)));
	//// CALCULATE
	for ($i = 0; $i < 3; $i++) {
		// See if brighter or darker
		if ($percent > 0) {
			// Lighter
			$rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1 - $percent));
		} else {
			// Darker
			$positivePercent = $percent - ($percent * 2);
			$rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1 - $positivePercent));
		}
		// In case rounding up causes us to go to 256
		if ($rgb[$i] > 255) {
			$rgb[$i] = 255;
		}
	}
	//// RBG to Hex
	$hex = '';
	for ($i = 0; $i < 3; $i++) {
		// Convert the decimal digit to hex
		$hexDigit = dechex($rgb[$i]);
		// Add a leading zero if necessary
		if (strlen($hexDigit) == 1) {
			$hexDigit = "0" . $hexDigit;
		}
		// Append to the hex string
		$hex .= $hexDigit;
	}
	return $hash . $hex;
}

// Custom breadcrumb
function skifi_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .=  implode(' / ', $breadcrumb) ;
    return $output;
  }
}

function breadcrumb_title($br)
{
	if(strlen($br) > 22){
		$new_br = substr($br, 0, 22);
		$new_br2 = str_pad($new_br, 26, ' ...', STR_PAD_RIGHT);
		$new_br3 = strip_tags($new_br2);
		return $new_br3;
	}
	else

	return $br;
}

 
// Preprocess Page
function skifi_preprocess_page(&$variables) {
 
}

// superfish menu
// menus customization
function skifi_menu_tree__main_menu($variables) {
 	return '<ul id="nav" class="sf-menu">' . $variables['tree'] . '</ul>';
}

// customize node submitted text
function skifi_preprocess_node(&$variables) {
  $print_task = t('Print this page');
  if ($variables['submitted']) {
    $variables['submitted'] = t('on !datetime &nbsp; by !username <a class="hidden-phone hidden-tablet node-print pull-right" style="line-height:10px;"  data-original-title="!print_text" data-placement="top" rel="tooltip" href="javascript:window.print()"><span class="icon-print"></span></a>', array('!username' => $variables['name'], '!datetime' => $variables['date'], '!print_text' => $print_task));
  }
  
 
  //customize readmore, comments and comment add    
  if(array_key_exists('content', $variables) && array_key_exists('links', $variables['content']) && array_key_exists('comment', $variables['content']['links']) && array_key_exists('comment-new-comments', $variables['content']['links']['comment']['#links'])){
    $variables['content']['links']['comment']['#links']['comment-new-comments']['attributes']['class'] = array('btn',  'btn-small');
  }

  if(array_key_exists('content', $variables) && array_key_exists('links', $variables['content']) && array_key_exists('comment', $variables['content']['links']) && array_key_exists('comment-comments', $variables['content']['links']['comment']['#links'])){
  	$variables['content']['links']['comment']['#links']['comment-comments']['title'] = '<span class="icon-comment"></span> &nbsp;' . $variables['content']['links']['comment']['#links']['comment-comments']['title'] ;
    $variables['content']['links']['comment']['#links']['comment-comments']['attributes']['class'] = array('btn',  'btn-small');
  }
  
  if(array_key_exists('content', $variables) && array_key_exists('links', $variables['content']) && array_key_exists('comment', $variables['content']['links']) && array_key_exists('comment-add', $variables['content']['links']['comment']['#links'])){
 	$variables['content']['links']['comment']['#links']['comment-add']['html'] = 1;
 	$variables['content']['links']['comment']['#links']['comment-add']['title']  = '<span class="icon-plus"></span> &nbsp;' . $variables['content']['links']['comment']['#links']['comment-add']['title']  ;   
    $variables['content']['links']['comment']['#links']['comment-add']['attributes']['class'] = array('btn', 'btn-small');
  }
  
  if(array_key_exists('content', $variables) && array_key_exists('links', $variables['content']) && array_key_exists('node', $variables['content']['links']) && array_key_exists('node-readmore', $variables['content']['links']['node']['#links'])){
    $variables['content']['links']['node']['#links']['node-readmore']['attributes']['class'] = array('btn', 'btn-theme', 'btn-small');
  }
  
}


//shortcodes
function skifi_preprocess_field(&$variables) {
	
	if(array_key_exists('element', $variables) && array_key_exists("#field_name", $variables['element'])){
		if($variables['element']['#field_name'] == 'body'){
			if(array_key_exists('items', $variables)  && array_key_exists('0', $variables['items'])  && array_key_exists('#markup', $variables['items']['0'])){
				
				$string = $variables['items']['0']['#markup'];	
				
				// replace	
				$string = str_replace('[row]', '<div class="row-fluid">', $string);
				$string = str_replace('[/row]', '</div>', $string);
				
				$string = str_replace('[one]', '<div class="span12">', $string);
				$string = str_replace('[/one]', '</div>', $string);
					 
				$string = str_replace('[oneHalf]', '<div class="span6">', $string);
				$string = str_replace('[/oneHalf]', '</div>', $string);
				
				$string = str_replace('[oneThird]', '<div class="span4">', $string);
				$string = str_replace('[/oneThird]', '</div>', $string);
				
				$string = str_replace('[oneFourth]', '<div class="span3">', $string);
				$string = str_replace('[/oneFourth]', '</div>', $string);
				
				$string = str_replace('[oneFifth]', '<div class="span2">', $string);
				$string = str_replace('[/oneFifth]', '</div>', $string);
				
				$string = str_replace('[oneSixth]', '<div class="span2">', $string);
				$string = str_replace('[/oneSixth]', '</div>', $string);
				
				$string = str_replace('[twoThird]', '<div class="span8">', $string);
				$string = str_replace('[/twoThird]', '</div>', $string);
				
				$string = str_replace('[threeFourth]', '<div class="span9">', $string);
				$string = str_replace('[/threeFourth]', '</div>', $string);
				
				$string = str_replace('[fiveSixth]', '<div class="span10">', $string);
				$string = str_replace('[/fiveSixth]', '</div>', $string);
				
				$string = str_replace('[color]', '<span class="color">', $string);
				$string = str_replace('[/color]', '</span>', $string);
				
				$string = str_replace('[h1 bordered]', '<h1 class="bordered">', $string);
				$string = str_replace('[/h1]', '</h1>', $string);
				
				$string = str_replace('[h2 bordered]', '<h2 class="bordered">', $string);
				$string = str_replace('[/h2]', '</h2>', $string);
				
				$string = str_replace('[h3 bordered]', '<h3 class="bordered">', $string);
				$string = str_replace('[/h3]', '</h3>', $string);
				
				$string = str_replace('[lineBorder center]', '<div class="bordered center"></div>', $string);

				$string = str_replace('[lineBorder left]', '<div class="bordered left"></div>', $string);
				
				$string = str_replace('[lineBorder right]', '<div class="bordered right"></div>', $string);
				
				$variables['items']['0']['#markup'] = $string;
			}
		}
	}
	
 
}



// customize comment submitted text
function skifi_preprocess_comment(&$variables) {
    $created = $variables['created'];
    $author = $variables['author'];
    $variables['submitted'] = t("on !date by !author", array('!date' => $created, '!author' => $author));
}


function skifi_preprocess_table(&$variables){
	$variables['attributes']['class'] = array(' table table-striped ');
}

function skifi_preprocess_button(&$variables) {
  $variables['element']['#attributes']['class'][] = ' btn ';
}

function skifi_preprocess_simplenews_block(&$vars){
	$vars['form']['mail']['#title'] = '';
	$vars['form']['mail']['#attributes'] = array('placeholder' => 'E-mail…');
	$vars['form']['mail']['#size'] = 27;
}



//status messages
function skifi_status_messages($variables) {
  $display = $variables['display'];
  $output = '';

  $status_heading = array(
    'status' => t('Status message'), 
    'error' => t('Error message'), 
    'warning' => t('Warning message'),
  );
  foreach (drupal_get_messages($display) as $type => $messages) {
	switch ($type) {
		case 'status':
			$alert_type = '  alert-success alert-block ';
			break;
		case 'warning':
			$alert_type = '  alert-block ';
			break;
		case 'error':
			$alert_type = '  alert-error alert-block ';
			break;
		default:
			$alert_type = '  alert-block ';
			break;
	}
	
    $output .= "<div class=\" alert $alert_type\">\n <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>\n";
    if (!empty($status_heading[$type])) {
      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
    }
    if (count($messages) > 1) {
      $output .= " <ul>\n";
      foreach ($messages as $message) {
        $output .= '  <li>' . $message . "</li>\n";
      }
      $output .= " </ul>\n";
    }
    else {
      $output .= $messages[0];
    }
    $output .= "</div>\n";
  }
  return $output;
}






