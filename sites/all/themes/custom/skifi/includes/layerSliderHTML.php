<?php 
$slider_height = theme_get_setting('ls_height');


function ls_container_code($type = NULL, $html_src = NULL, $css = NULL, $link = NULL, $slideDirection = NULL, $slideOutDirection = NULL, $durationIn = NULL, $durationOut = NUll, $easingIn = NULL, $easingOut = NUll, $delayIn = NULL, $delayOut = NULL , $id = NULL, $class= NULL){

	$output = '';
	
	if($type == 'img'){
		$output .= '<img src="' . $html_src . '" ' ;
		
		// add image css and if link is also set, add jslink class to add pointer via css
		if($link != NULL)
		$output .= 'onclick="document.location.href=\'' . $link . '\'" class="ls-s'.$id.' jsLink ';
		else
		$output .= ' class="ls-s' . $id ;	
		
		if($class != '')
		$output .= ' ' . $class ;
		
		$output .= ' "';
		
		$output .= ' style="';

		if($slideDirection != 'default')
		$output .=  'slidedirection:  ' . $slideDirection . '; ' ;
		
		if($slideOutDirection != 'default')
		$output .=  'slideoutdirection : ' . $slideOutDirection . '; ' ;
		
		if($durationIn != '')
		$output .=  'durationin : ' . $durationIn . '; ' ;
		
		if($durationOut != '')
		$output .=  'durationOut : ' . $durationOut . '; ' ;
		
		if($easingIn != 'default')
		$output .=  'easingin : ' . $easingIn . '; ' ;
		
		if($easingOut != 'default')
		$output .=  'easingOut : ' . $easingOut . '; ' ;
		
		if($delayIn != '')
		$output .=  ' delayIn : ' . $delayIn . '; ' ;
		
		if($delayOut != '')
		$output .=  ' delayOut  : ' . $delayOut . '; ' ;
		
		if($css != NULL)
		$output .= ' ' . $css . ' ';
		
		$output .= '"/>';
		return $output;
	}

	if($type != 'img' && $type != 'a'){
		$output .= '<'. $type . ' ' ;
		
		// add image css and if link is also set, add jslink class to add pointer via css
		if($link != NULL)
		$output .= 'onclick="document.location.href=\'' . $link . '\'" class="ls-s'.$id.' jsLink ';
		else
		$output .= ' class="ls-s' . $id ;		
		
		if($class != '')
		$output .= ' ' . $class . ' ';
		
		$output .= '"';
		
		$output .= ' style="';

		if($slideDirection != 'default')
		$output .=  'slidedirection : ' . $slideDirection . '; ' ;
		
		if($slideOutDirection != 'default')
		$output .=  'slideoutdirection : ' . $slideOutDirection . '; ' ;
		
		if($durationIn != '')
		$output .=  'durationin : ' . $durationIn . '; ' ;
		
		if($durationOut != '')
		$output .=  'durationOut : ' . $durationOut . '; ' ;
		
		if($easingIn != 'default')
		$output .=  'easingin : ' . $easingIn . '; ' ;
		
		if($easingOut != 'default')
		$output .=  'easingOut : ' . $easingOut . '; ' ;
		
		if($delayIn != '')
		$output .=  ' delayIn : ' . $delayIn . '; ' ;
		
		if($delayOut != '')
		$output .=  ' delayOut  :' . $delayOut . '; ' ;
		
		if($css != NULL)
		$output .= ' ' . $css . ' ';
		
		$output .= '"> ';
		
		// add html content to output
		$output .= $html_src;
		
		
		// close tag
		$output .= '</' . $type . '>';
		return $output;
	}
	
	if($type != 'img' && $type == 'a'){
		$output .= '<a href="' . $link . '" ' ;
		
		$output .= ' class="ls-s' . $id ;	
		
		if($class != '')
		$output .= ' ' . $class ;
		
		$output .= ' "';
		
		$output .= ' style="';

		if($slideDirection != 'default')
		$output .=  'slidedirection:  ' . $slideDirection . '; ' ;
		
		if($slideOutDirection != 'default')
		$output .=  'slideoutdirection : ' . $slideOutDirection . '; ' ;
		
		if($durationIn != '')
		$output .=  'durationin : ' . $durationIn . '; ' ;
		
		if($durationOut != '')
		$output .=  'durationOut : ' . $durationOut . '; ' ;
		
		if($easingIn != 'default')
		$output .=  'easingin : ' . $easingIn . '; ' ;
		
		if($easingOut != 'default')
		$output .=  'easingOut : ' . $easingOut . '; ' ;
		
		if($delayIn != '')
		$output .=  ' delayIn : ' . $delayIn . '; ' ;
		
		if($delayOut != '')
		$output .=  ' delayOut  : ' . $delayOut . '; ' ;
		
		if($css != NULL)
		$output .= ' ' . $css . ' ';
		
		$output .= '">';
		
		$output .= $html_src;
		
		$output .= '</a> ';
		return $output;
	}
}
?>






<div id="skifi-ls-container">
	<div id="layerslider" style="margin: 0px auto; width:100%; height: <?php print $slider_height ?>px; ">
		
		<!-- SLIDE 1 -->
		<?php if(theme_get_setting('s1_L1_status') == 'enabled' || theme_get_setting('s1_L2_status') == 'enabled' ||  theme_get_setting('s1_L3_status') == 'enabled' ||  theme_get_setting('s1_L4_status') == 'enabled' ||  theme_get_setting('s1_L5_status') == 'enabled' ||  theme_get_setting('s1_L6_status') == 'enabled' ||  theme_get_setting('s1_L7_status') == 'enabled' ||  theme_get_setting('s1_L8_status') == 'enabled' ) { ?>
			<div class="ls-layer" style="slidedelay: 6000; ">

		        <?php if(theme_get_setting('s1_L1_status') == 'enabled'){ 
		        	print ls_container_code(theme_get_setting('s1_L1_type'), t(theme_get_setting('s1_L1_html')), theme_get_setting('s1_L1_style'), theme_get_setting('s1_L1_link'), theme_get_setting('s1_L1_slideDirection'), theme_get_setting('s1_L1_slideOutDirection'), theme_get_setting('s1_L1_durationIn'), theme_get_setting('s1_L1_durationOut'), theme_get_setting('s1_L1_easingIn'), theme_get_setting('s1_L1_easingOut'), theme_get_setting('s1_L1_delayIn') , theme_get_setting('s1_L1_delayOut'), 1, theme_get_setting('s1_L1_class') ); 
		        } ?>	       
		        
		        <?php if(theme_get_setting('s1_L2_status') == 'enabled'){ 
		        	print ls_container_code(theme_get_setting('s1_L2_type'), t(theme_get_setting('s1_L2_html')), theme_get_setting('s1_L2_style'), theme_get_setting('s1_L2_link'), theme_get_setting('s1_L2_slideDirection'), theme_get_setting('s1_L2_slideOutDirection'), theme_get_setting('s1_L2_durationIn'), theme_get_setting('s1_L2_durationOut'), theme_get_setting('s1_L2_easingIn'), theme_get_setting('s1_L2_easingOut'), theme_get_setting('s1_L2_delayIn') , theme_get_setting('s1_L2_delayOut'), 2, theme_get_setting('s1_L2_class'));
		        } ?>
		        
		        <?php  if(theme_get_setting('s1_L3_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s1_L3_type'), t(theme_get_setting('s1_L3_html')), theme_get_setting('s1_L3_style'), theme_get_setting('s1_L3_link'), theme_get_setting('s1_L3_slideDirection'), theme_get_setting('s1_L3_slideOutDirection'), theme_get_setting('s1_L3_durationIn'), theme_get_setting('s1_L3_durationOut'), theme_get_setting('s1_L3_easingIn'), theme_get_setting('s1_L3_easingOut'), theme_get_setting('s1_L3_delayIn') , theme_get_setting('s1_L3_delayOut'), 3, theme_get_setting('s1_L3_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s1_L4_status') == 'enabled'){
		        	  print ls_container_code(theme_get_setting('s1_L4_type'), t(theme_get_setting('s1_L4_html')), theme_get_setting('s1_L4_style'), theme_get_setting('s1_L4_link'), theme_get_setting('s1_L4_slideDirection'), theme_get_setting('s1_L4_slideOutDirection'), theme_get_setting('s1_L4_durationIn'), theme_get_setting('s1_L4_durationOut'), theme_get_setting('s1_L4_easingIn'), theme_get_setting('s1_L4_easingOut'), theme_get_setting('s1_L4_delayIn') , theme_get_setting('s1_L4_delayOut'), 4, theme_get_setting('s1_L4_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s1_L5_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s1_L5_type'), t(theme_get_setting('s1_L5_html')), theme_get_setting('s1_L5_style'), theme_get_setting('s1_L5_link'), theme_get_setting('s1_L5_slideDirection'), theme_get_setting('s1_L5_slideOutDirection'), theme_get_setting('s1_L5_durationIn'), theme_get_setting('s1_L5_durationOut'), theme_get_setting('s1_L5_easingIn'), theme_get_setting('s1_L5_easingOut'), theme_get_setting('s1_L5_delayIn') , theme_get_setting('s1_L5_delayOut'), 5, theme_get_setting('s1_L5_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s1_L6_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s1_L6_type'), t(theme_get_setting('s1_L6_html')), theme_get_setting('s1_L6_style'), theme_get_setting('s1_L6_link'), theme_get_setting('s1_L6_slideDirection'), theme_get_setting('s1_L6_slideOutDirection'), theme_get_setting('s1_L6_durationIn'), theme_get_setting('s1_L6_durationOut'), theme_get_setting('s1_L6_easingIn'), theme_get_setting('s1_L6_easingOut'), theme_get_setting('s1_L6_delayIn') , theme_get_setting('s1_L6_delayOut'), 6, theme_get_setting('s1_L6_class'));
		        }?>
		        
		        <?php if(theme_get_setting('s1_L7_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s1_L7_type'), t(theme_get_setting('s1_L7_html')), theme_get_setting('s1_L7_style'), theme_get_setting('s1_L7_link'), theme_get_setting('s1_L7_slideDirection'), theme_get_setting('s1_L7_slideOutDirection'), theme_get_setting('s1_L7_durationIn'), theme_get_setting('s1_L7_durationOut'), theme_get_setting('s1_L7_easingIn'), theme_get_setting('s1_L7_easingOut'), theme_get_setting('s1_L7_delayIn') , theme_get_setting('s1_L7_delayOut'), 7, theme_get_setting('s1_L7_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s1_L8_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s1_L8_type'), t(theme_get_setting('s1_L8_html')), theme_get_setting('s1_L8_style'), theme_get_setting('s1_L8_link'), theme_get_setting('s1_L8_slideDirection'), theme_get_setting('s1_L8_slideOutDirection'), theme_get_setting('s1_L8_durationIn'), theme_get_setting('s1_L8_durationOut'), theme_get_setting('s1_L8_easingIn'), theme_get_setting('s1_L8_easingOut'), theme_get_setting('s1_L8_delayIn') , theme_get_setting('s1_L8_delayOut'), 7, theme_get_setting('s1_L8_class'));
		        } ?>
		        
			</div>				
		<?php } ?>
		
		
		<!-- SLIDE 2 -->
		<?php if(theme_get_setting('s2_L1_status') == 'enabled' || theme_get_setting('s2_L2_status') == 'enabled' ||  theme_get_setting('s2_L3_status') == 'enabled' ||  theme_get_setting('s2_L4_status') == 'enabled' ||  theme_get_setting('s2_L5_status') == 'enabled' ||  theme_get_setting('s2_L6_status') == 'enabled' ||  theme_get_setting('s2_L7_status') == 'enabled'  ||  theme_get_setting('s2_L8_status') == 'enabled') { ?>
			<div class="ls-layer" style="slidedelay: 6000; ">

		        <?php if(theme_get_setting('s2_L1_status') == 'enabled'){ 
		        	print ls_container_code(theme_get_setting('s2_L1_type'), t(theme_get_setting('s2_L1_html')), theme_get_setting('s2_L1_style'), theme_get_setting('s2_L1_link'), theme_get_setting('s2_L1_slideDirection'), theme_get_setting('s2_L1_slideOutDirection'), theme_get_setting('s2_L1_durationIn'), theme_get_setting('s2_L1_durationOut'), theme_get_setting('s2_L1_easingIn'), theme_get_setting('s2_L1_easingOut'), theme_get_setting('s2_L1_delayIn') , theme_get_setting('s2_L1_delayOut'), 1, theme_get_setting('s2_L1_class') ); 
		        } ?>	       
		        
		        <?php if(theme_get_setting('s2_L2_status') == 'enabled'){ 
		        	print ls_container_code(theme_get_setting('s2_L2_type'), t(theme_get_setting('s2_L2_html')), theme_get_setting('s2_L2_style'), theme_get_setting('s2_L2_link'), theme_get_setting('s2_L2_slideDirection'), theme_get_setting('s2_L2_slideOutDirection'), theme_get_setting('s2_L2_durationIn'), theme_get_setting('s2_L2_durationOut'), theme_get_setting('s2_L2_easingIn'), theme_get_setting('s2_L2_easingOut'), theme_get_setting('s2_L2_delayIn') , theme_get_setting('s2_L2_delayOut'), 2, theme_get_setting('s2_L2_class'));
		        } ?>
		        
		        <?php  if(theme_get_setting('s2_L3_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s2_L3_type'), t(theme_get_setting('s2_L3_html')), theme_get_setting('s2_L3_style'), theme_get_setting('s2_L3_link'), theme_get_setting('s2_L3_slideDirection'), theme_get_setting('s2_L3_slideOutDirection'), theme_get_setting('s2_L3_durationIn'), theme_get_setting('s2_L3_durationOut'), theme_get_setting('s2_L3_easingIn'), theme_get_setting('s2_L3_easingOut'), theme_get_setting('s2_L3_delayIn') , theme_get_setting('s2_L3_delayOut'), 3, theme_get_setting('s2_L3_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s2_L4_status') == 'enabled'){
		        	  print ls_container_code(theme_get_setting('s2_L4_type'), t(theme_get_setting('s2_L4_html')), theme_get_setting('s2_L4_style'), theme_get_setting('s2_L4_link'), theme_get_setting('s2_L4_slideDirection'), theme_get_setting('s2_L4_slideOutDirection'), theme_get_setting('s2_L4_durationIn'), theme_get_setting('s2_L4_durationOut'), theme_get_setting('s2_L4_easingIn'), theme_get_setting('s2_L4_easingOut'), theme_get_setting('s2_L4_delayIn') , theme_get_setting('s2_L4_delayOut'), 4, theme_get_setting('s2_L4_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s2_L5_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s2_L5_type'), t(theme_get_setting('s2_L5_html')), theme_get_setting('s2_L5_style'), theme_get_setting('s2_L5_link'), theme_get_setting('s2_L5_slideDirection'), theme_get_setting('s2_L5_slideOutDirection'), theme_get_setting('s2_L5_durationIn'), theme_get_setting('s2_L5_durationOut'), theme_get_setting('s2_L5_easingIn'), theme_get_setting('s2_L5_easingOut'), theme_get_setting('s2_L5_delayIn') , theme_get_setting('s2_L5_delayOut'), 5, theme_get_setting('s2_L5_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s2_L6_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s2_L6_type'), t(theme_get_setting('s2_L6_html')), theme_get_setting('s2_L6_style'), theme_get_setting('s2_L6_link'), theme_get_setting('s2_L6_slideDirection'), theme_get_setting('s2_L6_slideOutDirection'), theme_get_setting('s2_L6_durationIn'), theme_get_setting('s2_L6_durationOut'), theme_get_setting('s2_L6_easingIn'), theme_get_setting('s2_L6_easingOut'), theme_get_setting('s2_L6_delayIn') , theme_get_setting('s2_L6_delayOut'), 6, theme_get_setting('s2_L6_class'));
		        }?>
		        
		        <?php if(theme_get_setting('s2_L7_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s2_L7_type'), t(theme_get_setting('s2_L7_html')), theme_get_setting('s2_L7_style'), theme_get_setting('s2_L7_link'), theme_get_setting('s2_L7_slideDirection'), theme_get_setting('s2_L7_slideOutDirection'), theme_get_setting('s2_L7_durationIn'), theme_get_setting('s2_L7_durationOut'), theme_get_setting('s2_L7_easingIn'), theme_get_setting('s2_L7_easingOut'), theme_get_setting('s2_L7_delayIn') , theme_get_setting('s2_L7_delayOut'), 7, theme_get_setting('s2_L7_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s2_L8_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s2_L8_type'), t(theme_get_setting('s2_L8_html')), theme_get_setting('s2_L8_style'), theme_get_setting('s2_L8_link'), theme_get_setting('s2_L8_slideDirection'), theme_get_setting('s2_L8_slideOutDirection'), theme_get_setting('s2_L8_durationIn'), theme_get_setting('s2_L8_durationOut'), theme_get_setting('s2_L8_easingIn'), theme_get_setting('s2_L8_easingOut'), theme_get_setting('s2_L8_delayIn') , theme_get_setting('s2_L8_delayOut'), 7, theme_get_setting('s2_L8_class'));
		        } ?>
		        
			</div>				
		<?php } ?>
		
		
		<!-- SLIDE 3 -->
		<?php if(theme_get_setting('s3_L1_status') == 'enabled' || theme_get_setting('s3_L2_status') == 'enabled' ||  theme_get_setting('s3_L3_status') == 'enabled' ||  theme_get_setting('s3_L4_status') == 'enabled' ||  theme_get_setting('s3_L5_status') == 'enabled' ||  theme_get_setting('s3_L6_status') == 'enabled' ||  theme_get_setting('s3_L7_status') == 'enabled'  ||  theme_get_setting('s3_L8_status') == 'enabled') { ?>
			<div class="ls-layer" style="slidedelay: 6000; ">

		        <?php if(theme_get_setting('s3_L1_status') == 'enabled'){ 
		        	print ls_container_code(theme_get_setting('s3_L1_type'), t(theme_get_setting('s3_L1_html')), theme_get_setting('s3_L1_style'), theme_get_setting('s3_L1_link'), theme_get_setting('s3_L1_slideDirection'), theme_get_setting('s3_L1_slideOutDirection'), theme_get_setting('s3_L1_durationIn'), theme_get_setting('s3_L1_durationOut'), theme_get_setting('s3_L1_easingIn'), theme_get_setting('s3_L1_easingOut'), theme_get_setting('s3_L1_delayIn') , theme_get_setting('s3_L1_delayOut'), 1, theme_get_setting('s3_L1_class') ); 
		        } ?>	       
		        
		        <?php if(theme_get_setting('s3_L2_status') == 'enabled'){ 
		        	print ls_container_code(theme_get_setting('s3_L2_type'), t(theme_get_setting('s3_L2_html')), theme_get_setting('s3_L2_style'), theme_get_setting('s3_L2_link'), theme_get_setting('s3_L2_slideDirection'), theme_get_setting('s3_L2_slideOutDirection'), theme_get_setting('s3_L2_durationIn'), theme_get_setting('s3_L2_durationOut'), theme_get_setting('s3_L2_easingIn'), theme_get_setting('s3_L2_easingOut'), theme_get_setting('s3_L2_delayIn') , theme_get_setting('s3_L2_delayOut'), 2, theme_get_setting('s3_L2_class'));
		        } ?>
		        
		        <?php  if(theme_get_setting('s3_L3_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s3_L3_type'), t(theme_get_setting('s3_L3_html')), theme_get_setting('s3_L3_style'), theme_get_setting('s3_L3_link'), theme_get_setting('s3_L3_slideDirection'), theme_get_setting('s3_L3_slideOutDirection'), theme_get_setting('s3_L3_durationIn'), theme_get_setting('s3_L3_durationOut'), theme_get_setting('s3_L3_easingIn'), theme_get_setting('s3_L3_easingOut'), theme_get_setting('s3_L3_delayIn') , theme_get_setting('s3_L3_delayOut'), 3, theme_get_setting('s3_L3_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s3_L4_status') == 'enabled'){
		        	  print ls_container_code(theme_get_setting('s3_L4_type'), t(theme_get_setting('s3_L4_html')), theme_get_setting('s3_L4_style'), theme_get_setting('s3_L4_link'), theme_get_setting('s3_L4_slideDirection'), theme_get_setting('s3_L4_slideOutDirection'), theme_get_setting('s3_L4_durationIn'), theme_get_setting('s3_L4_durationOut'), theme_get_setting('s3_L4_easingIn'), theme_get_setting('s3_L4_easingOut'), theme_get_setting('s3_L4_delayIn') , theme_get_setting('s3_L4_delayOut'), 4, theme_get_setting('s3_L4_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s3_L5_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s3_L5_type'), t(theme_get_setting('s3_L5_html')), theme_get_setting('s3_L5_style'), theme_get_setting('s3_L5_link'), theme_get_setting('s3_L5_slideDirection'), theme_get_setting('s3_L5_slideOutDirection'), theme_get_setting('s3_L5_durationIn'), theme_get_setting('s3_L5_durationOut'), theme_get_setting('s3_L5_easingIn'), theme_get_setting('s3_L5_easingOut'), theme_get_setting('s3_L5_delayIn') , theme_get_setting('s3_L5_delayOut'), 5, theme_get_setting('s3_L5_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s3_L6_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s3_L6_type'), t(theme_get_setting('s3_L6_html')), theme_get_setting('s3_L6_style'), theme_get_setting('s3_L6_link'), theme_get_setting('s3_L6_slideDirection'), theme_get_setting('s3_L6_slideOutDirection'), theme_get_setting('s3_L6_durationIn'), theme_get_setting('s3_L6_durationOut'), theme_get_setting('s3_L6_easingIn'), theme_get_setting('s3_L6_easingOut'), theme_get_setting('s3_L6_delayIn') , theme_get_setting('s3_L6_delayOut'), 6, theme_get_setting('s3_L6_class'));
		        }?>
		        
		        <?php if(theme_get_setting('s3_L7_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s3_L7_type'), t(theme_get_setting('s3_L7_html')), theme_get_setting('s3_L7_style'), theme_get_setting('s3_L7_link'), theme_get_setting('s3_L7_slideDirection'), theme_get_setting('s3_L7_slideOutDirection'), theme_get_setting('s3_L7_durationIn'), theme_get_setting('s3_L7_durationOut'), theme_get_setting('s3_L7_easingIn'), theme_get_setting('s3_L7_easingOut'), theme_get_setting('s3_L7_delayIn') , theme_get_setting('s3_L7_delayOut'), 7, theme_get_setting('s3_L7_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s3_L8_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s3_L8_type'), t(theme_get_setting('s3_L8_html')), theme_get_setting('s3_L8_style'), theme_get_setting('s3_L8_link'), theme_get_setting('s3_L8_slideDirection'), theme_get_setting('s3_L8_slideOutDirection'), theme_get_setting('s3_L8_durationIn'), theme_get_setting('s3_L8_durationOut'), theme_get_setting('s3_L8_easingIn'), theme_get_setting('s3_L8_easingOut'), theme_get_setting('s3_L8_delayIn') , theme_get_setting('s3_L8_delayOut'), 7, theme_get_setting('s3_L8_class'));
		        } ?>
		        
			</div>				
		<?php } ?>
		
		
		<!-- SLIDE 4 -->
		<?php if(theme_get_setting('s4_L1_status') == 'enabled' || theme_get_setting('s4_L2_status') == 'enabled' ||  theme_get_setting('s4_L3_status') == 'enabled' ||  theme_get_setting('s4_L4_status') == 'enabled' ||  theme_get_setting('s4_L5_status') == 'enabled' ||  theme_get_setting('s4_L6_status') == 'enabled' ||  theme_get_setting('s4_L7_status') == 'enabled'  ||  theme_get_setting('s4_L8_status') == 'enabled') { ?>
			<div class="ls-layer" style="slidedelay: 6000; ">

		        <?php if(theme_get_setting('s4_L1_status') == 'enabled'){ 
		        	print ls_container_code(theme_get_setting('s4_L1_type'), t(theme_get_setting('s4_L1_html')), theme_get_setting('s4_L1_style'), theme_get_setting('s4_L1_link'), theme_get_setting('s4_L1_slideDirection'), theme_get_setting('s4_L1_slideOutDirection'), theme_get_setting('s4_L1_durationIn'), theme_get_setting('s4_L1_durationOut'), theme_get_setting('s4_L1_easingIn'), theme_get_setting('s4_L1_easingOut'), theme_get_setting('s4_L1_delayIn') , theme_get_setting('s4_L1_delayOut'), 1, theme_get_setting('s4_L1_class') ); 
		        } ?>	       
		        
		        <?php if(theme_get_setting('s4_L2_status') == 'enabled'){ 
		        	print ls_container_code(theme_get_setting('s4_L2_type'), t(theme_get_setting('s4_L2_html')), theme_get_setting('s4_L2_style'), theme_get_setting('s4_L2_link'), theme_get_setting('s4_L2_slideDirection'), theme_get_setting('s4_L2_slideOutDirection'), theme_get_setting('s4_L2_durationIn'), theme_get_setting('s4_L2_durationOut'), theme_get_setting('s4_L2_easingIn'), theme_get_setting('s4_L2_easingOut'), theme_get_setting('s4_L2_delayIn') , theme_get_setting('s4_L2_delayOut'), 2, theme_get_setting('s4_L2_class'));
		        } ?>
		        
		        <?php  if(theme_get_setting('s4_L3_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s4_L3_type'), t(theme_get_setting('s4_L3_html')), theme_get_setting('s4_L3_style'), theme_get_setting('s4_L3_link'), theme_get_setting('s4_L3_slideDirection'), theme_get_setting('s4_L3_slideOutDirection'), theme_get_setting('s4_L3_durationIn'), theme_get_setting('s4_L3_durationOut'), theme_get_setting('s4_L3_easingIn'), theme_get_setting('s4_L3_easingOut'), theme_get_setting('s4_L3_delayIn') , theme_get_setting('s4_L3_delayOut'), 3, theme_get_setting('s4_L3_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s4_L4_status') == 'enabled'){
		        	  print ls_container_code(theme_get_setting('s4_L4_type'), t(theme_get_setting('s4_L4_html')), theme_get_setting('s4_L4_style'), theme_get_setting('s4_L4_link'), theme_get_setting('s4_L4_slideDirection'), theme_get_setting('s4_L4_slideOutDirection'), theme_get_setting('s4_L4_durationIn'), theme_get_setting('s4_L4_durationOut'), theme_get_setting('s4_L4_easingIn'), theme_get_setting('s4_L4_easingOut'), theme_get_setting('s4_L4_delayIn') , theme_get_setting('s4_L4_delayOut'), 4, theme_get_setting('s4_L4_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s4_L5_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s4_L5_type'), t(theme_get_setting('s4_L5_html')), theme_get_setting('s4_L5_style'), theme_get_setting('s4_L5_link'), theme_get_setting('s4_L5_slideDirection'), theme_get_setting('s4_L5_slideOutDirection'), theme_get_setting('s4_L5_durationIn'), theme_get_setting('s4_L5_durationOut'), theme_get_setting('s4_L5_easingIn'), theme_get_setting('s4_L5_easingOut'), theme_get_setting('s4_L5_delayIn') , theme_get_setting('s4_L5_delayOut'), 5, theme_get_setting('s4_L5_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s4_L6_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s4_L6_type'), t(theme_get_setting('s4_L6_html')), theme_get_setting('s4_L6_style'), theme_get_setting('s4_L6_link'), theme_get_setting('s4_L6_slideDirection'), theme_get_setting('s4_L6_slideOutDirection'), theme_get_setting('s4_L6_durationIn'), theme_get_setting('s4_L6_durationOut'), theme_get_setting('s4_L6_easingIn'), theme_get_setting('s4_L6_easingOut'), theme_get_setting('s4_L6_delayIn') , theme_get_setting('s4_L6_delayOut'), 6, theme_get_setting('s4_L6_class'));
		        }?>
		        
		        <?php if(theme_get_setting('s4_L7_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s4_L7_type'), t(theme_get_setting('s4_L7_html')), theme_get_setting('s4_L7_style'), theme_get_setting('s4_L7_link'), theme_get_setting('s4_L7_slideDirection'), theme_get_setting('s4_L7_slideOutDirection'), theme_get_setting('s4_L7_durationIn'), theme_get_setting('s4_L7_durationOut'), theme_get_setting('s4_L7_easingIn'), theme_get_setting('s4_L7_easingOut'), theme_get_setting('s4_L7_delayIn') , theme_get_setting('s4_L7_delayOut'), 7, theme_get_setting('s4_L7_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s4_L8_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s4_L8_type'), t(theme_get_setting('s4_L8_html')), theme_get_setting('s4_L8_style'), theme_get_setting('s4_L8_link'), theme_get_setting('s4_L8_slideDirection'), theme_get_setting('s4_L8_slideOutDirection'), theme_get_setting('s4_L8_durationIn'), theme_get_setting('s4_L8_durationOut'), theme_get_setting('s4_L8_easingIn'), theme_get_setting('s4_L8_easingOut'), theme_get_setting('s4_L8_delayIn') , theme_get_setting('s4_L8_delayOut'), 7, theme_get_setting('s4_L8_class'));
		        } ?>
		        
			</div>				
		<?php } ?>
		
		
		<!-- SLIDE 5 -->
		<?php if(theme_get_setting('s5_L1_status') == 'enabled' || theme_get_setting('s5_L2_status') == 'enabled' ||  theme_get_setting('s5_L3_status') == 'enabled' ||  theme_get_setting('s5_L4_status') == 'enabled' ||  theme_get_setting('s5_L5_status') == 'enabled' ||  theme_get_setting('s5_L6_status') == 'enabled' ||  theme_get_setting('s5_L7_status') == 'enabled'  ||  theme_get_setting('s5_L8_status') == 'enabled') { ?>
			<div class="ls-layer" style="slidedelay: 6000; ">

		        <?php if(theme_get_setting('s5_L1_status') == 'enabled'){ 
		        	print ls_container_code(theme_get_setting('s5_L1_type'), t(theme_get_setting('s5_L1_html')), theme_get_setting('s5_L1_style'), theme_get_setting('s5_L1_link'), theme_get_setting('s5_L1_slideDirection'), theme_get_setting('s5_L1_slideOutDirection'), theme_get_setting('s5_L1_durationIn'), theme_get_setting('s5_L1_durationOut'), theme_get_setting('s5_L1_easingIn'), theme_get_setting('s5_L1_easingOut'), theme_get_setting('s5_L1_delayIn') , theme_get_setting('s5_L1_delayOut'), 1, theme_get_setting('s5_L1_class') ); 
		        } ?>	       
		        
		        <?php if(theme_get_setting('s5_L2_status') == 'enabled'){ 
		        	print ls_container_code(theme_get_setting('s5_L2_type'), t(theme_get_setting('s5_L2_html')), theme_get_setting('s5_L2_style'), theme_get_setting('s5_L2_link'), theme_get_setting('s5_L2_slideDirection'), theme_get_setting('s5_L2_slideOutDirection'), theme_get_setting('s5_L2_durationIn'), theme_get_setting('s5_L2_durationOut'), theme_get_setting('s5_L2_easingIn'), theme_get_setting('s5_L2_easingOut'), theme_get_setting('s5_L2_delayIn') , theme_get_setting('s5_L2_delayOut'), 2, theme_get_setting('s5_L2_class'));
		        } ?>
		        
		        <?php  if(theme_get_setting('s5_L3_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s5_L3_type'), t(theme_get_setting('s5_L3_html')), theme_get_setting('s5_L3_style'), theme_get_setting('s5_L3_link'), theme_get_setting('s5_L3_slideDirection'), theme_get_setting('s5_L3_slideOutDirection'), theme_get_setting('s5_L3_durationIn'), theme_get_setting('s5_L3_durationOut'), theme_get_setting('s5_L3_easingIn'), theme_get_setting('s5_L3_easingOut'), theme_get_setting('s5_L3_delayIn') , theme_get_setting('s5_L3_delayOut'), 3, theme_get_setting('s5_L3_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s5_L4_status') == 'enabled'){
		        	  print ls_container_code(theme_get_setting('s5_L4_type'), t(theme_get_setting('s5_L4_html')), theme_get_setting('s5_L4_style'), theme_get_setting('s5_L4_link'), theme_get_setting('s5_L4_slideDirection'), theme_get_setting('s5_L4_slideOutDirection'), theme_get_setting('s5_L4_durationIn'), theme_get_setting('s5_L4_durationOut'), theme_get_setting('s5_L4_easingIn'), theme_get_setting('s5_L4_easingOut'), theme_get_setting('s5_L4_delayIn') , theme_get_setting('s5_L4_delayOut'), 4, theme_get_setting('s5_L4_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s5_L5_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s5_L5_type'), t(theme_get_setting('s5_L5_html')), theme_get_setting('s5_L5_style'), theme_get_setting('s5_L5_link'), theme_get_setting('s5_L5_slideDirection'), theme_get_setting('s5_L5_slideOutDirection'), theme_get_setting('s5_L5_durationIn'), theme_get_setting('s5_L5_durationOut'), theme_get_setting('s5_L5_easingIn'), theme_get_setting('s5_L5_easingOut'), theme_get_setting('s5_L5_delayIn') , theme_get_setting('s5_L5_delayOut'), 5, theme_get_setting('s5_L5_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s5_L6_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s5_L6_type'), t(theme_get_setting('s5_L6_html')), theme_get_setting('s5_L6_style'), theme_get_setting('s5_L6_link'), theme_get_setting('s5_L6_slideDirection'), theme_get_setting('s5_L6_slideOutDirection'), theme_get_setting('s5_L6_durationIn'), theme_get_setting('s5_L6_durationOut'), theme_get_setting('s5_L6_easingIn'), theme_get_setting('s5_L6_easingOut'), theme_get_setting('s5_L6_delayIn') , theme_get_setting('s5_L6_delayOut'), 6, theme_get_setting('s5_L6_class'));
		        }?>
		        
		        <?php if(theme_get_setting('s5_L7_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s5_L7_type'), t(theme_get_setting('s5_L7_html')), theme_get_setting('s5_L7_style'), theme_get_setting('s5_L7_link'), theme_get_setting('s5_L7_slideDirection'), theme_get_setting('s5_L7_slideOutDirection'), theme_get_setting('s5_L7_durationIn'), theme_get_setting('s5_L7_durationOut'), theme_get_setting('s5_L7_easingIn'), theme_get_setting('s5_L7_easingOut'), theme_get_setting('s5_L7_delayIn') , theme_get_setting('s5_L7_delayOut'), 7, theme_get_setting('s5_L7_class'));
		        } ?>
		        
		        <?php if(theme_get_setting('s5_L8_status') == 'enabled'){
		        	 print ls_container_code(theme_get_setting('s5_L8_type'), t(theme_get_setting('s5_L8_html')), theme_get_setting('s5_L8_style'), theme_get_setting('s5_L8_link'), theme_get_setting('s5_L8_slideDirection'), theme_get_setting('s5_L8_slideOutDirection'), theme_get_setting('s5_L8_durationIn'), theme_get_setting('s5_L8_durationOut'), theme_get_setting('s5_L8_easingIn'), theme_get_setting('s5_L8_easingOut'), theme_get_setting('s5_L8_delayIn') , theme_get_setting('s5_L8_delayOut'), 7, theme_get_setting('s5_L8_class'));
		        } ?>
		        
			</div>				
		<?php } ?>
		
		
		
		
	</div>
</div>

<!-- layerslide fallback image for small devices -->
<div id="ls-fallback" ><img src="<?php print theme_get_setting('ls_fallback_image') ?>" alt="" /></div>