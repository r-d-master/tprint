<?php 

// the jQuery easing array
$easing = array();
$easing['default'] = 'default';
$easing['jswing']='jswing';
$easing['easeInQuad']='easeInQuad';
$easing['easeOutQuad']='easeOutQuad';
$easing['easeInOutQuad']='easeInOutQuad';
$easing['easeInCubic']='easeInCubic';
$easing['easeOutCubic']='easeOutCubic';
$easing['easeInOutCubic']='easeInOutCubic';
$easing['easeInQuart']='easeInQuart';
$easing['easeOutQuart']='easeOutQuart';
$easing['easeInOutQuart']='easeInOutQuart';
$easing['easeInSine']='easeInSine';
$easing['easeOutSine']='easeOutSine';
$easing['easeInOutSine']='easeInOutSine';
$easing['easeInExpo']='easeInExpo';
$easing['easeOutExpo']='easeOutExpo';
$easing['easeInOutExpo']='easeInOutExpo';
$easing['easeInQuint']='easeInQuint';
$easing['easeOutQuint']='easeOutQuint';
$easing['easeInOutQuint']='easeInOutQuint';
$easing['easeInCirc']='easeInCirc';
$easing['easeOutCirc']='easeOutCirc';
$easing['easeInOutCirc']='easeInOutCirc';
$easing['easeInElastic']='easeInElastic';
$easing['easeOutElastic']='easeOutElastic';
$easing['easeInOutElastic']='easeInOutElastic';
$easing['easeInBack']='easeInBack';
$easing['easeOutBack']='easeOutBack';
$easing['easeInOutBack']='easeInOutBack';
$easing['easeInBounce']='easeInBounce';
$easing['easeOutBounce']='easeOutBounce';
$easing['easeInOutBounce']='easeInOutBounce';

// Layer slider slide directions 'left', 'right', 'top', 'bottom' or 'fade' *
$direction = array();
$direction['default'] = 'default';
$direction['left'] = 'left';
$direction['right'] = 'right';
$direction['top'] = 'top';
$direction['bottom'] = 'bottom';
$direction['fade'] = 'fade';

$form['ls_settings_tab'] = array(
    '#type' => 'vertical_tabs',
    '#weight' => -1,
); 

$form['ls_settings_tab']['ls_settings'] = array(
  '#type' => 'fieldset',
  '#title' => t('Layer Slider settings'),
  '#weight' => 0,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'ls_settings_tab',
);

$form['ls_settings_tab']['ls_settings']['ls_height'] = array(
	'#type' => 'textfield',
	'#title' => t('LayerSlider Height:'),
    '#description' => t('Enter in pixel.  For example \'470\'. Do not add \'px\' in the end. Default is 470. '),
	'#default_value' => theme_get_setting('ls_height'),
	'#size' => 3,
	'#maxlength' => 3,
	
);


$form['ls_settings_tab']['ls_settings']['ls_fallback_image'] = array(
	'#type' => 'textfield',
	'#title' => t('LayerSlider fallback image for small devices:'),
    '#description' => t('Enter http or web server relative path to layerslider fallback image for small devices. '),
	'#default_value' => theme_get_setting('ls_fallback_image'),
	'#maxlength' => 2000,
	
);

$form['ls_settings_tab']['ls_settings']['ls_info'] = array(
	'#markup' => t('
		<p>Credit: Layer Slider is premium slider from <a href="http://codecanyon.net/item/layerslider-the-parallax-effect-slider/922100?sso">codecanyon</a>.  Layer slider is included with Skifi theme as we purchased this item as extended license. Please do not resell or redistribute this script. </P>
		
		<p>Please note that this slider is not as easy to understand as normal jquery sliders like flex slider for instance. Give some time to read layer slider specific documentation included within theme folder. You can find layer slider documentation in skifi/LayerSLider_Documentation/documentation folder. It is also excellent idea to spend few minutes to see example slides included in skifi/LayerSLider_Documentation/examples and read its source code. </P>
		
		<p>You do not need to implement css or jquery codes (we have already done that). Just make sure you read enough so you can customize slides for your needs.  </P>
	'),
);

// slide 1
$form['ls_settings_tab']['slide1'] = array(
  '#type' => 'fieldset',
  '#title' => t('Slide 1'),
  '#weight' => 1,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'ls_settings_tab',
);

// slide 1 - layer 1
$form['ls_settings_tab']['slide1']['ls_info'] = array(
	'#markup' => t('<p>You have total 5 Slides that you can enable and create. Each slide offers maximum 8 layers. Each layer has its own settings. Please scroll down to change setting of each layer on this slide. Then go to next slide to configure that. </p>'),
);


// slide 1 - layer 1
$form['ls_settings_tab']['slide1']['ls1_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 1 </h1>'),
);

$form['ls_settings_tab']['slide1']['s1_L1_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s1_L1_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide1']['s1_L1_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s1_L1_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide1']['s1_L1_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s1_L1_html'),
);


$form['ls_settings_tab']['slide1']['s1_L1_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), 
    '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s1_L1_style'),
);

$form['ls_settings_tab']['slide1']['s1_L1_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s1_L1_class'),
);

$form['ls_settings_tab']['slide1']['s1_L1_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s1_L1_link'),
);


$form['ls_settings_tab']['slide1']['s1_L1_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s1_L1_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L1_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s1_L1_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L1_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L1_durationIn'),
);


$form['ls_settings_tab']['slide1']['s1_L1_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L1_durationOut'),
);

$form['ls_settings_tab']['slide1']['s1_L1_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s1_L1_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L1_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s1_L1_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L1_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L1_delayIn'),
);

$form['ls_settings_tab']['slide1']['s1_L1_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L1_delayOut'),
);


// slide 1 - layer 2
$form['ls_settings_tab']['slide1']['ls12_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 2</h1>'),
);

$form['ls_settings_tab']['slide1']['s1_L2_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s1_L2_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide1']['s1_L2_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s1_L2_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide1']['s1_L2_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s1_L2_html'),
);


$form['ls_settings_tab']['slide1']['s1_L2_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s1_L2_style'),
);

$form['ls_settings_tab']['slide1']['s1_L2_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s1_L2_class'),
);


$form['ls_settings_tab']['slide1']['s1_L2_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s1_L2_link'),
);


$form['ls_settings_tab']['slide1']['s1_L2_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s1_L2_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L2_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s1_L2_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L2_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L2_durationIn'),
);


$form['ls_settings_tab']['slide1']['s1_L2_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L2_durationOut'),
);

$form['ls_settings_tab']['slide1']['s1_L2_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s1_L2_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L2_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s1_L2_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L2_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L2_delayIn'),
);

$form['ls_settings_tab']['slide1']['s1_L2_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L2_delayOut'),
);



// slide 1 - layer 3
$form['ls_settings_tab']['slide1']['ls3_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 3</h1>'),
);

$form['ls_settings_tab']['slide1']['s1_L3_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s1_L3_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide1']['s1_L3_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s1_L3_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide1']['s1_L3_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s1_L3_html'),
);


$form['ls_settings_tab']['slide1']['s1_L3_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s1_L3_style'),
);

$form['ls_settings_tab']['slide1']['s1_L3_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s1_L3_class'),
);


$form['ls_settings_tab']['slide1']['s1_L3_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s1_L3_link'),
);


$form['ls_settings_tab']['slide1']['s1_L3_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s1_L3_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L3_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s1_L3_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L3_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L3_durationIn'),
);


$form['ls_settings_tab']['slide1']['s1_L3_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L3_durationOut'),
);

$form['ls_settings_tab']['slide1']['s1_L3_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s1_L3_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L3_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s1_L3_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L3_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L3_delayIn'),
);

$form['ls_settings_tab']['slide1']['s1_L3_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L3_delayOut'),
);


// slide 1 - layer 4
$form['ls_settings_tab']['slide1']['ls4_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 4</h1>'),
);

$form['ls_settings_tab']['slide1']['s1_L4_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s1_L4_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide1']['s1_L4_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s1_L4_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide1']['s1_L4_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s1_L4_html'),
);


$form['ls_settings_tab']['slide1']['s1_L4_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s1_L4_style'),
);

$form['ls_settings_tab']['slide1']['s1_L4_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s1_L4_class'),
);


$form['ls_settings_tab']['slide1']['s1_L4_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s1_L4_link'),
);


$form['ls_settings_tab']['slide1']['s1_L4_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s1_L4_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L4_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s1_L4_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L4_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L4_durationIn'),
);


$form['ls_settings_tab']['slide1']['s1_L4_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L4_durationOut'),
);

$form['ls_settings_tab']['slide1']['s1_L4_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s1_L4_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L4_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s1_L4_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L4_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L4_delayIn'),
);

$form['ls_settings_tab']['slide1']['s1_L4_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L4_delayOut'),
);



// slide 1 - layer 5
$form['ls_settings_tab']['slide1']['ls5_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 5</h1>'),
);

$form['ls_settings_tab']['slide1']['s1_L5_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s1_L5_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide1']['s1_L5_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s1_L5_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide1']['s1_L5_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s1_L5_html'),
);


$form['ls_settings_tab']['slide1']['s1_L5_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s1_L5_style'),
);

$form['ls_settings_tab']['slide1']['s1_L5_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s1_L5_class'),
);

$form['ls_settings_tab']['slide1']['s1_L5_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s1_L5_link'),
);


$form['ls_settings_tab']['slide1']['s1_L5_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s1_L5_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L5_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s1_L5_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L5_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L5_durationIn'),
);


$form['ls_settings_tab']['slide1']['s1_L5_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L5_durationOut'),
);

$form['ls_settings_tab']['slide1']['s1_L5_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s1_L5_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L5_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s1_L5_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L5_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L5_delayIn'),
);

$form['ls_settings_tab']['slide1']['s1_L5_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L5_delayOut'),
);



// slide 1 - layer 6
$form['ls_settings_tab']['slide1']['ls6_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 6</h1>'),
);

$form['ls_settings_tab']['slide1']['s1_L6_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s1_L6_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide1']['s1_L6_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s1_L6_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide1']['s1_L6_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s1_L6_html'),
);


$form['ls_settings_tab']['slide1']['s1_L6_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s1_L6_style'),
);

$form['ls_settings_tab']['slide1']['s1_L6_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s1_L6_class'),
);


$form['ls_settings_tab']['slide1']['s1_L6_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s1_L6_link'),
);


$form['ls_settings_tab']['slide1']['s1_L6_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s1_L6_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L6_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s1_L6_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L6_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L6_durationIn'),
);


$form['ls_settings_tab']['slide1']['s1_L6_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L6_durationOut'),
);

$form['ls_settings_tab']['slide1']['s1_L6_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s1_L6_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L6_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s1_L6_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L6_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L6_delayIn'),
);

$form['ls_settings_tab']['slide1']['s1_L6_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L6_delayOut'),
);



// slide 1 - layer 7
$form['ls_settings_tab']['slide1']['ls7_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 7</h1>'),
);

$form['ls_settings_tab']['slide1']['s1_L7_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s1_L7_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide1']['s1_L7_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s1_L7_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide1']['s1_L7_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below. <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s1_L7_html'),
);


$form['ls_settings_tab']['slide1']['s1_L7_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s1_L7_style'),
);

$form['ls_settings_tab']['slide1']['s1_L7_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s1_L7_class'),
);


$form['ls_settings_tab']['slide1']['s1_L7_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s1_L7_link'),
);


$form['ls_settings_tab']['slide1']['s1_L7_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s1_L7_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L7_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s1_L7_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L7_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L7_durationIn'),
);


$form['ls_settings_tab']['slide1']['s1_L7_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L7_durationOut'),
);

$form['ls_settings_tab']['slide1']['s1_L7_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s1_L7_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L7_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s1_L7_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L7_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L7_delayIn'),
);

$form['ls_settings_tab']['slide1']['s1_L7_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L7_delayOut'),
);

// slide 1 - layer 8
$form['ls_settings_tab']['slide1']['ls8_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 8</h1>'),
);

$form['ls_settings_tab']['slide1']['s1_L8_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s1_L8_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide1']['s1_L8_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s1_L8_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide1']['s1_L8_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below. <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s1_L8_html'),
);


$form['ls_settings_tab']['slide1']['s1_L8_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s1_L8_style'),
);

$form['ls_settings_tab']['slide1']['s1_L8_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s1_L8_class'),
);


$form['ls_settings_tab']['slide1']['s1_L8_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s1_L8_link'),
);


$form['ls_settings_tab']['slide1']['s1_L8_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s1_L8_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L8_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s1_L8_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide1']['s1_L8_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L8_durationIn'),
);


$form['ls_settings_tab']['slide1']['s1_L8_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L8_durationOut'),
);

$form['ls_settings_tab']['slide1']['s1_L8_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s1_L8_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L8_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s1_L8_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide1']['s1_L8_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L8_delayIn'),
);

$form['ls_settings_tab']['slide1']['s1_L8_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s1_L8_delayOut'),
);








// slide 2
$form['ls_settings_tab']['slide2'] = array(
  '#type' => 'fieldset',
  '#title' => t('Slide 2'),
  '#weight' => 2,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'ls_settings_tab',
);

// slide 2 - layer 1
$form['ls_settings_tab']['slide2']['s2_ls_info'] = array(
	'#markup' => t('<p>You have total 5 Slides that you can enable and create. Each slide offers maximum 8 layers. Each layer has its own settings. Please scroll down to change setting of each layer on this slide. Then go to next slide to configure that. </p>'),
);

$form['ls_settings_tab']['slide2']['ls2_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 1 </h1>'),
);



$form['ls_settings_tab']['slide2']['s2_L1_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s2_L1_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide2']['s2_L1_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s2_L1_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide2']['s2_L1_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s2_L1_html'),
);


$form['ls_settings_tab']['slide2']['s2_L1_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s2_L1_style'),
);

$form['ls_settings_tab']['slide2']['s2_L1_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s2_L1_class'),
);

$form['ls_settings_tab']['slide2']['s2_L1_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s2_L1_link'),
);


$form['ls_settings_tab']['slide2']['s2_L1_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s2_L1_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L1_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s2_L1_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L1_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L1_durationIn'),
);


$form['ls_settings_tab']['slide2']['s2_L1_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L1_durationOut'),
);

$form['ls_settings_tab']['slide2']['s2_L1_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s2_L1_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L1_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s2_L1_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L1_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L1_delayIn'),
);

$form['ls_settings_tab']['slide2']['s2_L1_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L1_delayOut'),
);


// slide 2 - layer 2
$form['ls_settings_tab']['slide2']['ls12_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 2</h1>'),
);

$form['ls_settings_tab']['slide2']['s2_L2_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s2_L2_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide2']['s2_L2_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s2_L2_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide2']['s2_L2_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s2_L2_html'),
);


$form['ls_settings_tab']['slide2']['s2_L2_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s2_L2_style'),
);

$form['ls_settings_tab']['slide2']['s2_L2_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s2_L2_class'),
);


$form['ls_settings_tab']['slide2']['s2_L2_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s2_L2_link'),
);


$form['ls_settings_tab']['slide2']['s2_L2_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s2_L2_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L2_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s2_L2_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L2_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L2_durationIn'),
);


$form['ls_settings_tab']['slide2']['s2_L2_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L2_durationOut'),
);

$form['ls_settings_tab']['slide2']['s2_L2_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s2_L2_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L2_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s2_L2_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L2_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L2_delayIn'),
);

$form['ls_settings_tab']['slide2']['s2_L2_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L2_delayOut'),
);



// slide 2 - layer 3
$form['ls_settings_tab']['slide2']['ls3_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 3</h1>'),
);

$form['ls_settings_tab']['slide2']['s2_L3_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s2_L3_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide2']['s2_L3_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s2_L3_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide2']['s2_L3_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s2_L3_html'),
);


$form['ls_settings_tab']['slide2']['s2_L3_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s2_L3_style'),
);

$form['ls_settings_tab']['slide2']['s2_L3_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s2_L3_class'),
);


$form['ls_settings_tab']['slide2']['s2_L3_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s2_L3_link'),
);


$form['ls_settings_tab']['slide2']['s2_L3_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s2_L3_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L3_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s2_L3_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L3_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L3_durationIn'),
);


$form['ls_settings_tab']['slide2']['s2_L3_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L3_durationOut'),
);

$form['ls_settings_tab']['slide2']['s2_L3_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s2_L3_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L3_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s2_L3_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L3_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L3_delayIn'),
);

$form['ls_settings_tab']['slide2']['s2_L3_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L3_delayOut'),
);


// slide 2 - layer 4
$form['ls_settings_tab']['slide2']['ls4_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 4</h1>'),
);

$form['ls_settings_tab']['slide2']['s2_L4_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s2_L4_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide2']['s2_L4_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s2_L4_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide2']['s2_L4_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s2_L4_html'),
);


$form['ls_settings_tab']['slide2']['s2_L4_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s2_L4_style'),
);

$form['ls_settings_tab']['slide2']['s2_L4_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s2_L4_class'),
);


$form['ls_settings_tab']['slide2']['s2_L4_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s2_L4_link'),
);


$form['ls_settings_tab']['slide2']['s2_L4_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s2_L4_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L4_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s2_L4_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L4_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L4_durationIn'),
);


$form['ls_settings_tab']['slide2']['s2_L4_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L4_durationOut'),
);

$form['ls_settings_tab']['slide2']['s2_L4_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s2_L4_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L4_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s2_L4_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L4_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L4_delayIn'),
);

$form['ls_settings_tab']['slide2']['s2_L4_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L4_delayOut'),
);



// slide 2 - layer 5
$form['ls_settings_tab']['slide2']['ls5_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 5</h1>'),
);

$form['ls_settings_tab']['slide2']['s2_L5_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s2_L5_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide2']['s2_L5_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s2_L5_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide2']['s2_L5_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s2_L5_html'),
);


$form['ls_settings_tab']['slide2']['s2_L5_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s2_L5_style'),
);

$form['ls_settings_tab']['slide2']['s2_L5_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s2_L5_class'),
);

$form['ls_settings_tab']['slide2']['s2_L5_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s2_L5_link'),
);


$form['ls_settings_tab']['slide2']['s2_L5_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s2_L5_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L5_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s2_L5_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L5_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L5_durationIn'),
);


$form['ls_settings_tab']['slide2']['s2_L5_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L5_durationOut'),
);

$form['ls_settings_tab']['slide2']['s2_L5_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s2_L5_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L5_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s2_L5_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L5_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L5_delayIn'),
);

$form['ls_settings_tab']['slide2']['s2_L5_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L5_delayOut'),
);



// slide 2 - layer 6
$form['ls_settings_tab']['slide2']['ls6_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 6</h1>'),
);

$form['ls_settings_tab']['slide2']['s2_L6_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s2_L6_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide2']['s2_L6_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s2_L6_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide2']['s2_L6_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s2_L6_html'),
);


$form['ls_settings_tab']['slide2']['s2_L6_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s2_L6_style'),
);

$form['ls_settings_tab']['slide2']['s2_L6_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s2_L6_class'),
);


$form['ls_settings_tab']['slide2']['s2_L6_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s2_L6_link'),
);


$form['ls_settings_tab']['slide2']['s2_L6_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s2_L6_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L6_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s2_L6_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L6_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L6_durationIn'),
);


$form['ls_settings_tab']['slide2']['s2_L6_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L6_durationOut'),
);

$form['ls_settings_tab']['slide2']['s2_L6_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s2_L6_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L6_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s2_L6_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L6_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L6_delayIn'),
);

$form['ls_settings_tab']['slide2']['s2_L6_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L6_delayOut'),
);



// slide 2 - layer 7
$form['ls_settings_tab']['slide2']['ls7_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 7</h1>'),
);

$form['ls_settings_tab']['slide2']['s2_L7_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s2_L7_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide2']['s2_L7_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s2_L7_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide2']['s2_L7_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below. <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s2_L7_html'),
);


$form['ls_settings_tab']['slide2']['s2_L7_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s2_L7_style'),
);

$form['ls_settings_tab']['slide2']['s2_L7_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s2_L7_class'),
);


$form['ls_settings_tab']['slide2']['s2_L7_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s2_L7_link'),
);


$form['ls_settings_tab']['slide2']['s2_L7_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s2_L7_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L7_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s2_L7_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L7_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L7_durationIn'),
);


$form['ls_settings_tab']['slide2']['s2_L7_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L7_durationOut'),
);

$form['ls_settings_tab']['slide2']['s2_L7_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s2_L7_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L7_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s2_L7_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L7_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L7_delayIn'),
);

$form['ls_settings_tab']['slide2']['s2_L7_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L7_delayOut'),
);


// slide 2 - layer 8
$form['ls_settings_tab']['slide2']['ls8_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 8</h1>'),
);

$form['ls_settings_tab']['slide2']['s2_L8_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s2_L8_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide2']['s2_L8_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s2_L8_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide2']['s2_L8_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below. <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s2_L8_html'),
);


$form['ls_settings_tab']['slide2']['s2_L8_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s2_L8_style'),
);

$form['ls_settings_tab']['slide2']['s2_L8_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s2_L8_class'),
);


$form['ls_settings_tab']['slide2']['s2_L8_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s2_L8_link'),
);


$form['ls_settings_tab']['slide2']['s2_L8_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s2_L8_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L8_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s2_L8_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide2']['s2_L8_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L8_durationIn'),
);


$form['ls_settings_tab']['slide2']['s2_L8_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L8_durationOut'),
);

$form['ls_settings_tab']['slide2']['s2_L8_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s2_L8_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L8_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s2_L8_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide2']['s2_L8_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L8_delayIn'),
);

$form['ls_settings_tab']['slide2']['s2_L8_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s2_L8_delayOut'),
);




// slide 3
$form['ls_settings_tab']['slide3'] = array(
  '#type' => 'fieldset',
  '#title' => t('slide 3'),
  '#weight' => 3,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'ls_settings_tab',
);

// slide 3 - layer 1
$form['ls_settings_tab']['slide3']['s3_ls_info'] = array(
	'#markup' => t('<p>You have total 5 Slides that you can enable and create. Each slide offers maximum 8 layers. Each layer has its own settings. Please scroll down to change setting of each layer on this slide. Then go to next slide to configure that. </p>'),
);

$form['ls_settings_tab']['slide3']['s3_l1_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 1 </h1>'),
);



$form['ls_settings_tab']['slide3']['s3_L1_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s3_L1_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide3']['s3_L1_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s3_L1_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide3']['s3_L1_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s3_L1_html'),
);


$form['ls_settings_tab']['slide3']['s3_L1_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#required' => FALSE,
    '#maxlength' => 5000,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s3_L1_style'),
);

$form['ls_settings_tab']['slide3']['s3_L1_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s3_L1_class'),
);

$form['ls_settings_tab']['slide3']['s3_L1_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s3_L1_link'),
);


$form['ls_settings_tab']['slide3']['s3_L1_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s3_L1_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L1_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s3_L1_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L1_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L1_durationIn'),
);


$form['ls_settings_tab']['slide3']['s3_L1_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L1_durationOut'),
);

$form['ls_settings_tab']['slide3']['s3_L1_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s3_L1_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L1_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s3_L1_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L1_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L1_delayIn'),
);

$form['ls_settings_tab']['slide3']['s3_L1_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L1_delayOut'),
);


// slide 3 - layer 2
$form['ls_settings_tab']['slide3']['s3_l2_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 2</h1>'),
);

$form['ls_settings_tab']['slide3']['s3_L2_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s3_L2_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide3']['s3_L2_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s3_L2_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide3']['s3_L2_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s3_L2_html'),
);


$form['ls_settings_tab']['slide3']['s3_L2_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s3_L2_style'),
);

$form['ls_settings_tab']['slide3']['s3_L2_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s3_L2_class'),
);


$form['ls_settings_tab']['slide3']['s3_L2_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s3_L2_link'),
);


$form['ls_settings_tab']['slide3']['s3_L2_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s3_L2_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L2_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s3_L2_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L2_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L2_durationIn'),
);


$form['ls_settings_tab']['slide3']['s3_L2_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L2_durationOut'),
);

$form['ls_settings_tab']['slide3']['s3_L2_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s3_L2_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L2_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s3_L2_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L2_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L2_delayIn'),
);

$form['ls_settings_tab']['slide3']['s3_L2_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L2_delayOut'),
);



// slide 3 - layer 3
$form['ls_settings_tab']['slide3']['s3_l3_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 3</h1>'),
);

$form['ls_settings_tab']['slide3']['s3_L3_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s3_L3_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide3']['s3_L3_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s3_L3_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide3']['s3_L3_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s3_L3_html'),
);


$form['ls_settings_tab']['slide3']['s3_L3_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s3_L3_style'),
);

$form['ls_settings_tab']['slide3']['s3_L3_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s3_L3_class'),
);


$form['ls_settings_tab']['slide3']['s3_L3_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s3_L3_link'),
);


$form['ls_settings_tab']['slide3']['s3_L3_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s3_L3_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L3_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s3_L3_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L3_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L3_durationIn'),
);


$form['ls_settings_tab']['slide3']['s3_L3_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L3_durationOut'),
);

$form['ls_settings_tab']['slide3']['s3_L3_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s3_L3_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L3_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s3_L3_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L3_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L3_delayIn'),
);

$form['ls_settings_tab']['slide3']['s3_L3_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L3_delayOut'),
);


// slide 3 - layer 4
$form['ls_settings_tab']['slide3']['s3_l4_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 4</h1>'),
);

$form['ls_settings_tab']['slide3']['s3_L4_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s3_L4_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide3']['s3_L4_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s3_L4_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide3']['s3_L4_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s3_L4_html'),
);


$form['ls_settings_tab']['slide3']['s3_L4_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s3_L4_style'),
);

$form['ls_settings_tab']['slide3']['s3_L4_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s3_L4_class'),
);


$form['ls_settings_tab']['slide3']['s3_L4_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s3_L4_link'),
);


$form['ls_settings_tab']['slide3']['s3_L4_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s3_L4_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L4_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s3_L4_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L4_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L4_durationIn'),
);


$form['ls_settings_tab']['slide3']['s3_L4_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L4_durationOut'),
);

$form['ls_settings_tab']['slide3']['s3_L4_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s3_L4_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L4_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s3_L4_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L4_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L4_delayIn'),
);

$form['ls_settings_tab']['slide3']['s3_L4_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L4_delayOut'),
);



// slide 3 - layer 5
$form['ls_settings_tab']['slide3']['s3_l5_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 5</h1>'),
);

$form['ls_settings_tab']['slide3']['s3_L5_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s3_L5_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide3']['s3_L5_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s3_L5_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide3']['s3_L5_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s3_L5_html'),
);


$form['ls_settings_tab']['slide3']['s3_L5_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s3_L5_style'),
);

$form['ls_settings_tab']['slide3']['s3_L5_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s3_L5_class'),
);

$form['ls_settings_tab']['slide3']['s3_L5_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s3_L5_link'),
);


$form['ls_settings_tab']['slide3']['s3_L5_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s3_L5_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L5_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s3_L5_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L5_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L5_durationIn'),
);


$form['ls_settings_tab']['slide3']['s3_L5_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L5_durationOut'),
);

$form['ls_settings_tab']['slide3']['s3_L5_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s3_L5_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L5_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s3_L5_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L5_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L5_delayIn'),
);

$form['ls_settings_tab']['slide3']['s3_L5_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L5_delayOut'),
);



// slide 3 - layer 6
$form['ls_settings_tab']['slide3']['s3_l6_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 6</h1>'),
);

$form['ls_settings_tab']['slide3']['s3_L6_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s3_L6_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide3']['s3_L6_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s3_L6_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide3']['s3_L6_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s3_L6_html'),
);


$form['ls_settings_tab']['slide3']['s3_L6_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s3_L6_style'),
);

$form['ls_settings_tab']['slide3']['s3_L6_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s3_L6_class'),
);


$form['ls_settings_tab']['slide3']['s3_L6_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s3_L6_link'),
);


$form['ls_settings_tab']['slide3']['s3_L6_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s3_L6_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L6_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s3_L6_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L6_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L6_durationIn'),
);


$form['ls_settings_tab']['slide3']['s3_L6_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L6_durationOut'),
);

$form['ls_settings_tab']['slide3']['s3_L6_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s3_L6_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L6_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s3_L6_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L6_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L6_delayIn'),
);

$form['ls_settings_tab']['slide3']['s3_L6_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L6_delayOut'),
);



// slide 3 - layer 7
$form['ls_settings_tab']['slide3']['s3_l7_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 7</h1>'),
);

$form['ls_settings_tab']['slide3']['s3_L7_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s3_L7_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide3']['s3_L7_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s3_L7_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide3']['s3_L7_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below. <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s3_L7_html'),
);


$form['ls_settings_tab']['slide3']['s3_L7_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#required' => FALSE,
    '#maxlength' => 5000,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s3_L7_style'),
);

$form['ls_settings_tab']['slide3']['s3_L7_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s3_L7_class'),
);


$form['ls_settings_tab']['slide3']['s3_L7_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s3_L7_link'),
);


$form['ls_settings_tab']['slide3']['s3_L7_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s3_L7_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L7_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s3_L7_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L7_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L7_durationIn'),
);


$form['ls_settings_tab']['slide3']['s3_L7_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L7_durationOut'),
);

$form['ls_settings_tab']['slide3']['s3_L7_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s3_L7_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L7_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s3_L7_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L7_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L7_delayIn'),
);

$form['ls_settings_tab']['slide3']['s3_L7_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L7_delayOut'),
);


// slide 3 - layer 8
$form['ls_settings_tab']['slide3']['s3_l8_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 8</h1>'),
);

$form['ls_settings_tab']['slide3']['s3_L8_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s3_L8_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide3']['s3_L8_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s3_L8_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide3']['s3_L8_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below. <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s3_L8_html'),
);


$form['ls_settings_tab']['slide3']['s3_L8_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s3_L8_style'),
);

$form['ls_settings_tab']['slide3']['s3_L8_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s3_L8_class'),
);


$form['ls_settings_tab']['slide3']['s3_L8_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s3_L8_link'),
);


$form['ls_settings_tab']['slide3']['s3_L8_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s3_L8_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L8_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s3_L8_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide3']['s3_L8_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L8_durationIn'),
);


$form['ls_settings_tab']['slide3']['s3_L8_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L8_durationOut'),
);

$form['ls_settings_tab']['slide3']['s3_L8_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s3_L8_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L8_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s3_L8_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide3']['s3_L8_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L8_delayIn'),
);

$form['ls_settings_tab']['slide3']['s3_L8_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s3_L8_delayOut'),
);







// slide 4
$form['ls_settings_tab']['slide4'] = array(
  '#type' => 'fieldset',
  '#title' => t('slide 4'),
  '#weight' => 4,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'ls_settings_tab',
);

// slide 4 - layer 1
$form['ls_settings_tab']['slide4']['s4_ls_info'] = array(
	'#markup' => t('<p>You have total 5 Slides that you can enable and create. Each slide offers maximum 8 layers. Each layer has its own settings. Please scroll down to change setting of each layer on this slide. Then go to next slide to configure that. </p>'),
);

$form['ls_settings_tab']['slide4']['s4_l1_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 1 </h1>'),
);



$form['ls_settings_tab']['slide4']['s4_L1_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s4_L1_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide4']['s4_L1_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s4_L1_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide4']['s4_L1_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s4_L1_html'),
);


$form['ls_settings_tab']['slide4']['s4_L1_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s4_L1_style'),
);

$form['ls_settings_tab']['slide4']['s4_L1_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s4_L1_class'),
);

$form['ls_settings_tab']['slide4']['s4_L1_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s4_L1_link'),
);


$form['ls_settings_tab']['slide4']['s4_L1_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s4_L1_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L1_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s4_L1_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L1_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L1_durationIn'),
);


$form['ls_settings_tab']['slide4']['s4_L1_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L1_durationOut'),
);

$form['ls_settings_tab']['slide4']['s4_L1_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s4_L1_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L1_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s4_L1_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L1_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L1_delayIn'),
);

$form['ls_settings_tab']['slide4']['s4_L1_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L1_delayOut'),
);


// slide 4 - layer 2
$form['ls_settings_tab']['slide4']['s4_l2_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 2</h1>'),
);

$form['ls_settings_tab']['slide4']['s4_L2_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s4_L2_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide4']['s4_L2_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s4_L2_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide4']['s4_L2_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s4_L2_html'),
);


$form['ls_settings_tab']['slide4']['s4_L2_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s4_L2_style'),
);

$form['ls_settings_tab']['slide4']['s4_L2_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s4_L2_class'),
);


$form['ls_settings_tab']['slide4']['s4_L2_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s4_L2_link'),
);


$form['ls_settings_tab']['slide4']['s4_L2_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s4_L2_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L2_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s4_L2_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L2_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L2_durationIn'),
);


$form['ls_settings_tab']['slide4']['s4_L2_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L2_durationOut'),
);

$form['ls_settings_tab']['slide4']['s4_L2_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s4_L2_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L2_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s4_L2_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L2_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L2_delayIn'),
);

$form['ls_settings_tab']['slide4']['s4_L2_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L2_delayOut'),
);



// slide 4 - layer 3
$form['ls_settings_tab']['slide4']['s4_l3_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 3</h1>'),
);

$form['ls_settings_tab']['slide4']['s4_L3_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s4_L3_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide4']['s4_L3_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s4_L3_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide4']['s4_L3_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s4_L3_html'),
);


$form['ls_settings_tab']['slide4']['s4_L3_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s4_L3_style'),
);

$form['ls_settings_tab']['slide4']['s4_L3_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s4_L3_class'),
);


$form['ls_settings_tab']['slide4']['s4_L3_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s4_L3_link'),
);


$form['ls_settings_tab']['slide4']['s4_L3_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s4_L3_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L3_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s4_L3_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L3_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L3_durationIn'),
);


$form['ls_settings_tab']['slide4']['s4_L3_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L3_durationOut'),
);

$form['ls_settings_tab']['slide4']['s4_L3_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s4_L3_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L3_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s4_L3_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L3_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L3_delayIn'),
);

$form['ls_settings_tab']['slide4']['s4_L3_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L3_delayOut'),
);


// slide 4 - layer 4
$form['ls_settings_tab']['slide4']['s4_l4_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 4</h1>'),
);

$form['ls_settings_tab']['slide4']['s4_L4_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s4_L4_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide4']['s4_L4_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s4_L4_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide4']['s4_L4_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s4_L4_html'),
);


$form['ls_settings_tab']['slide4']['s4_L4_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#required' => FALSE,
    '#maxlength' => 5000,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s4_L4_style'),
);

$form['ls_settings_tab']['slide4']['s4_L4_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s4_L4_class'),
);


$form['ls_settings_tab']['slide4']['s4_L4_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s4_L4_link'),
);


$form['ls_settings_tab']['slide4']['s4_L4_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s4_L4_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L4_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s4_L4_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L4_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L4_durationIn'),
);


$form['ls_settings_tab']['slide4']['s4_L4_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L4_durationOut'),
);

$form['ls_settings_tab']['slide4']['s4_L4_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s4_L4_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L4_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s4_L4_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L4_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L4_delayIn'),
);

$form['ls_settings_tab']['slide4']['s4_L4_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L4_delayOut'),
);



// slide 4 - layer 5
$form['ls_settings_tab']['slide4']['s4_l5_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 5</h1>'),
);

$form['ls_settings_tab']['slide4']['s4_L5_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s4_L5_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide4']['s4_L5_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s4_L5_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide4']['s4_L5_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s4_L5_html'),
);


$form['ls_settings_tab']['slide4']['s4_L5_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s4_L5_style'),
);

$form['ls_settings_tab']['slide4']['s4_L5_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s4_L5_class'),
);

$form['ls_settings_tab']['slide4']['s4_L5_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s4_L5_link'),
);


$form['ls_settings_tab']['slide4']['s4_L5_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s4_L5_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L5_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s4_L5_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L5_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L5_durationIn'),
);


$form['ls_settings_tab']['slide4']['s4_L5_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L5_durationOut'),
);

$form['ls_settings_tab']['slide4']['s4_L5_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s4_L5_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L5_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s4_L5_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L5_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L5_delayIn'),
);

$form['ls_settings_tab']['slide4']['s4_L5_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L5_delayOut'),
);



// slide 4 - layer 6
$form['ls_settings_tab']['slide4']['s4_l6_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 6</h1>'),
);

$form['ls_settings_tab']['slide4']['s4_L6_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s4_L6_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide4']['s4_L6_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s4_L6_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide4']['s4_L6_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s4_L6_html'),
);


$form['ls_settings_tab']['slide4']['s4_L6_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s4_L6_style'),
);

$form['ls_settings_tab']['slide4']['s4_L6_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s4_L6_class'),
);


$form['ls_settings_tab']['slide4']['s4_L6_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s4_L6_link'),
);


$form['ls_settings_tab']['slide4']['s4_L6_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s4_L6_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L6_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s4_L6_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L6_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L6_durationIn'),
);


$form['ls_settings_tab']['slide4']['s4_L6_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L6_durationOut'),
);

$form['ls_settings_tab']['slide4']['s4_L6_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s4_L6_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L6_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s4_L6_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L6_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L6_delayIn'),
);

$form['ls_settings_tab']['slide4']['s4_L6_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L6_delayOut'),
);



// slide 4 - layer 7
$form['ls_settings_tab']['slide4']['s4_l7_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 7</h1>'),
);

$form['ls_settings_tab']['slide4']['s4_L7_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s4_L7_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide4']['s4_L7_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s4_L7_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide4']['s4_L7_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below. <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s4_L7_html'),
);


$form['ls_settings_tab']['slide4']['s4_L7_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#required' => FALSE,
    '#maxlength' => 5000,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s4_L7_style'),
);

$form['ls_settings_tab']['slide4']['s4_L7_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s4_L7_class'),
);


$form['ls_settings_tab']['slide4']['s4_L7_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s4_L7_link'),
);


$form['ls_settings_tab']['slide4']['s4_L7_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s4_L7_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L7_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s4_L7_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L7_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L7_durationIn'),
);


$form['ls_settings_tab']['slide4']['s4_L7_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L7_durationOut'),
);

$form['ls_settings_tab']['slide4']['s4_L7_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s4_L7_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L7_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s4_L7_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L7_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L7_delayIn'),
);

$form['ls_settings_tab']['slide4']['s4_L7_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L7_delayOut'),
);


// slide 4 - layer 8
$form['ls_settings_tab']['slide4']['s4_l8_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 8</h1>'),
);

$form['ls_settings_tab']['slide4']['s4_L8_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s4_L8_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide4']['s4_L8_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s4_L8_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide4']['s4_L8_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below. <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s4_L8_html'),
);


$form['ls_settings_tab']['slide4']['s4_L8_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s4_L8_style'),
);

$form['ls_settings_tab']['slide4']['s4_L8_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s4_L8_class'),
);


$form['ls_settings_tab']['slide4']['s4_L8_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s4_L8_link'),
);


$form['ls_settings_tab']['slide4']['s4_L8_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s4_L8_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L8_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s4_L8_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide4']['s4_L8_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L8_durationIn'),
);


$form['ls_settings_tab']['slide4']['s4_L8_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L8_durationOut'),
);

$form['ls_settings_tab']['slide4']['s4_L8_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s4_L8_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L8_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s4_L8_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide4']['s4_L8_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L8_delayIn'),
);

$form['ls_settings_tab']['slide4']['s4_L8_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s4_L8_delayOut'),
);








// slide 5
$form['ls_settings_tab']['slide5'] = array(
  '#type' => 'fieldset',
  '#title' => t('slide 5'),
  '#weight' => 5,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'ls_settings_tab',
);

// slide 5 - layer 1
$form['ls_settings_tab']['slide5']['s5_ls_info'] = array(
	'#markup' => t('<p>You have total 5 Slides that you can enable and create. Each slide offers maximum 8 layers. Each layer has its own settings. Please scroll down to change setting of each layer on this slide. Then go to next slide to configure that. </p>'),
);

$form['ls_settings_tab']['slide5']['s5_l1_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 1 </h1>'),
);



$form['ls_settings_tab']['slide5']['s5_L1_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s5_L1_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide5']['s5_L1_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s5_L1_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide5']['s5_L1_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s5_L1_html'),
);


$form['ls_settings_tab']['slide5']['s5_L1_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s5_L1_style'),
);

$form['ls_settings_tab']['slide5']['s5_L1_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s5_L1_class'),
);

$form['ls_settings_tab']['slide5']['s5_L1_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s5_L1_link'),
);


$form['ls_settings_tab']['slide5']['s5_L1_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s5_L1_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L1_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s5_L1_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L1_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L1_durationIn'),
);


$form['ls_settings_tab']['slide5']['s5_L1_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L1_durationOut'),
);

$form['ls_settings_tab']['slide5']['s5_L1_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s5_L1_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L1_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s5_L1_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L1_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L1_delayIn'),
);

$form['ls_settings_tab']['slide5']['s5_L1_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L1_delayOut'),
);


// slide 5 - layer 2
$form['ls_settings_tab']['slide5']['s5_l2_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 2</h1>'),
);

$form['ls_settings_tab']['slide5']['s5_L2_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s5_L2_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide5']['s5_L2_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s5_L2_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide5']['s5_L2_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s5_L2_html'),
);


$form['ls_settings_tab']['slide5']['s5_L2_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s5_L2_style'),
);

$form['ls_settings_tab']['slide5']['s5_L2_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s5_L2_class'),
);


$form['ls_settings_tab']['slide5']['s5_L2_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s5_L2_link'),
);


$form['ls_settings_tab']['slide5']['s5_L2_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s5_L2_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L2_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s5_L2_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L2_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L2_durationIn'),
);


$form['ls_settings_tab']['slide5']['s5_L2_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L2_durationOut'),
);

$form['ls_settings_tab']['slide5']['s5_L2_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s5_L2_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L2_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s5_L2_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L2_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L2_delayIn'),
);

$form['ls_settings_tab']['slide5']['s5_L2_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L2_delayOut'),
);



// slide 5 - layer 3
$form['ls_settings_tab']['slide5']['s5_l3_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 3</h1>'),
);

$form['ls_settings_tab']['slide5']['s5_L3_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s5_L3_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide5']['s5_L3_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s5_L3_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide5']['s5_L3_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s5_L3_html'),
);


$form['ls_settings_tab']['slide5']['s5_L3_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'),
    '#size' => 40,
    '#maxlength' => 5000,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s5_L3_style'),
);

$form['ls_settings_tab']['slide5']['s5_L3_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s5_L3_class'),
);


$form['ls_settings_tab']['slide5']['s5_L3_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s5_L3_link'),
);


$form['ls_settings_tab']['slide5']['s5_L3_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s5_L3_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L3_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s5_L3_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L3_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L3_durationIn'),
);


$form['ls_settings_tab']['slide5']['s5_L3_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L3_durationOut'),
);

$form['ls_settings_tab']['slide5']['s5_L3_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s5_L3_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L3_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s5_L3_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L3_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L3_delayIn'),
);

$form['ls_settings_tab']['slide5']['s5_L3_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L3_delayOut'),
);


// slide 5 - layer 4
$form['ls_settings_tab']['slide5']['s5_l4_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 4</h1>'),
);

$form['ls_settings_tab']['slide5']['s5_L4_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s5_L4_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide5']['s5_L4_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s5_L4_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide5']['s5_L4_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s5_L4_html'),
);


$form['ls_settings_tab']['slide5']['s5_L4_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s5_L4_style'),
);

$form['ls_settings_tab']['slide5']['s5_L4_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s5_L4_class'),
);


$form['ls_settings_tab']['slide5']['s5_L4_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s5_L4_link'),
);


$form['ls_settings_tab']['slide5']['s5_L4_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s5_L4_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L4_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s5_L4_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L4_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L4_durationIn'),
);


$form['ls_settings_tab']['slide5']['s5_L4_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L4_durationOut'),
);

$form['ls_settings_tab']['slide5']['s5_L4_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s5_L4_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L4_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s5_L4_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L4_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L4_delayIn'),
);

$form['ls_settings_tab']['slide5']['s5_L4_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L4_delayOut'),
);



// slide 5 - layer 5
$form['ls_settings_tab']['slide5']['s5_l5_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 5</h1>'),
);

$form['ls_settings_tab']['slide5']['s5_L5_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s5_L5_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide5']['s5_L5_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s5_L5_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide5']['s5_L5_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s5_L5_html'),
);


$form['ls_settings_tab']['slide5']['s5_L5_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s5_L5_style'),
);

$form['ls_settings_tab']['slide5']['s5_L5_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s5_L5_class'),
);

$form['ls_settings_tab']['slide5']['s5_L5_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s5_L5_link'),
);


$form['ls_settings_tab']['slide5']['s5_L5_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s5_L5_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L5_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s5_L5_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L5_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L5_durationIn'),
);


$form['ls_settings_tab']['slide5']['s5_L5_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L5_durationOut'),
);

$form['ls_settings_tab']['slide5']['s5_L5_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s5_L5_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L5_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s5_L5_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L5_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L5_delayIn'),
);

$form['ls_settings_tab']['slide5']['s5_L5_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L5_delayOut'),
);



// slide 5 - layer 6
$form['ls_settings_tab']['slide5']['s5_l6_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 6</h1>'),
);

$form['ls_settings_tab']['slide5']['s5_L6_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s5_L6_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide5']['s5_L6_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s5_L6_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide5']['s5_L6_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below.  <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s5_L6_html'),
);


$form['ls_settings_tab']['slide5']['s5_L6_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s5_L6_style'),
);

$form['ls_settings_tab']['slide5']['s5_L6_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s5_L6_class'),
);


$form['ls_settings_tab']['slide5']['s5_L6_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s5_L6_link'),
);


$form['ls_settings_tab']['slide5']['s5_L6_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s5_L6_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L6_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s5_L6_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L6_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L6_durationIn'),
);


$form['ls_settings_tab']['slide5']['s5_L6_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L6_durationOut'),
);

$form['ls_settings_tab']['slide5']['s5_L6_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s5_L6_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L6_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s5_L6_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L6_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L6_delayIn'),
);

$form['ls_settings_tab']['slide5']['s5_L6_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L6_delayOut'),
);



// slide 5 - layer 7
$form['ls_settings_tab']['slide5']['s5_l7_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 7</h1>'),
);

$form['ls_settings_tab']['slide5']['s5_L7_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s5_L7_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide5']['s5_L7_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s5_L7_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide5']['s5_L7_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below. <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s5_L7_html'),
);


$form['ls_settings_tab']['slide5']['s5_L7_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s5_L7_style'),
);

$form['ls_settings_tab']['slide5']['s5_L7_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s5_L7_class'),
);


$form['ls_settings_tab']['slide5']['s5_L7_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s5_L7_link'),
);


$form['ls_settings_tab']['slide5']['s5_L7_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s5_L7_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L7_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s5_L7_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L7_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L7_durationIn'),
);


$form['ls_settings_tab']['slide5']['s5_L7_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L7_durationOut'),
);

$form['ls_settings_tab']['slide5']['s5_L7_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s5_L7_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L7_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s5_L7_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L7_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L7_delayIn'),
);

$form['ls_settings_tab']['slide5']['s5_L7_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L7_delayOut'),
);


// slide 5 - layer 8
$form['ls_settings_tab']['slide5']['s5_l8_info'] = array(
	'#markup' => t('<br><br><hr><br><br><h1>Layer 8</h1>'),
);

$form['ls_settings_tab']['slide5']['s5_L8_status'] = array(
	'#type' => 'select',
    '#title' => t('Layer Status'),
 	'#description' => t('If you want to use this layer, please set this to \'enabled\''),
    '#default_value' => theme_get_setting('s5_L8_status'),
    '#options' => array(
    'enabled' => t('enabled'),
    'disabled' => t('disabled'),
	),
);

$form['ls_settings_tab']['slide5']['s5_L8_type'] = array(
	'#type' => 'select',
    '#title' => t('Type'),
 	'#description' => t('Select type of item. In case of image, enter its source URL in \'html\' field. '),
    '#default_value' => theme_get_setting('s5_L8_type'),
    '#options' => array(
    'img' => t('img'),
    'h1' => t('h1'),
    'h2' => t('h2'),
    'h3' => t('h3'),
    'h4' => t('h4'),
	'div' => t('div'),
	'p' => t('p'),
	'a' => t('a'),	
	),
);

$form['ls_settings_tab']['slide5']['s5_L8_html'] = array(
    '#type' => 'textarea',
    '#title' => t('HTML OR Image Source'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('If you have set layer type to \'img\', please enter relative or http image url here correctly. <br>If you have set layer type to \'a\', please enter link text here and add link URL below. <br>If you have set layer type to container element such as \'div\' or \'p\' or \'h1\' enter its content here. '),
    '#default_value' => theme_get_setting('s5_L8_html'),
);


$form['ls_settings_tab']['slide5']['s5_L8_style'] = array(
    '#type' => 'textfield',
    '#title' => t('Css Styles'), '#maxlength' => 5000,
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Apart from other styles, you can also specify left position and top position here, please see layer slider documentation first. Enter css styles like \'top:0; left:50%; color:#000000\''),
    '#default_value' => theme_get_setting('s5_L8_style'),
);

$form['ls_settings_tab']['slide5']['s5_L8_class'] = array(
    '#type' => 'textfield',
    '#title' => t('Add Class'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('You can specify additional classes to this element if you want. For example hidden-phone hidden-tablet visible-desktop etc.'),
    '#default_value' => theme_get_setting('s5_L8_class'),
);


$form['ls_settings_tab']['slide5']['s5_L8_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('add link to this element if needed. '),
    '#default_value' => theme_get_setting('s5_L8_link'),
);


$form['ls_settings_tab']['slide5']['s5_L8_slideDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideDirection'),
    '#default_value' => theme_get_setting('s5_L8_slideDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L8_slideOutDirection'] = array(
	'#type' => 'select',
    '#title' => t('slideOutDirection'),
    '#default_value' => theme_get_setting('s5_L8_slideOutDirection'),
    '#options' => $direction,
);

$form['ls_settings_tab']['slide5']['s5_L8_durationIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L8_durationIn'),
);


$form['ls_settings_tab']['slide5']['s5_L8_durationOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DurationOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L8_durationOut'),
);

$form['ls_settings_tab']['slide5']['s5_L8_easingIn'] = array(
	'#type' => 'select',
    '#title' => t('easingIn'),
    '#default_value' => theme_get_setting('s5_L8_easingIn'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L8_easingOut'] = array(
	'#type' => 'select',
    '#title' => t('easingOut'),
    '#default_value' => theme_get_setting('s5_L8_easingOut'),
    '#options' => $easing, 
);

$form['ls_settings_tab']['slide5']['s5_L8_delayIn'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayIn (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L8_delayIn'),
);

$form['ls_settings_tab']['slide5']['s5_L8_delayOut'] = array(
    '#type' => 'textfield',
    '#title' => t('DelayOut (in miliseconds) (optional)'),
    '#size' => 7,
	'#maxlength' => 7,
    '#required' => FALSE,
    '#default_value' => theme_get_setting('s5_L8_delayOut'),
);

