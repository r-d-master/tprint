<?php
//lighten a color
if(theme_get_setting('theme_color_scheme') == '' ){
	$color = '#EB7C12';
}
else{
	$color = '#'.theme_get_setting('theme_color_scheme');	
}

if(theme_get_setting('highlighted_region_bg' ) == '' ){
	$highlighted = '#161616';
}
else{
	$highlighted = '#'.theme_get_setting('highlighted_region_bg');	
}



if(theme_get_setting('link_color') == '' ){
	$linkColor = $color;
}
else{
	$linkColor = '#'.theme_get_setting('link_color');	
}

if(theme_get_setting('footer_link_color') == '' ){
	$footerlinkColor = $color;
}
else{
	$footerlinkColor = '#'.theme_get_setting('footer_link_color');	
}

// boxed layout setting
if(theme_get_setting('boxed_enabled') == 1){
	$boxed = TRUE;
}
else{
	$boxed = FALSE;
}

$scheme = theme_get_setting('predefined_schemes');

if($scheme != 'custom'){
	
	
	switch ($scheme) {
		case 'cinnabar':
			$color = '#e45635';
			$linkColor = '#e45635';
			$highlighted = '#161616';
			$footerlinkColor = '#e45635';
			break;
			
		case 'green':
			$color = '#6FBF4D';
			$linkColor = '#6FBF4D';
			$highlighted = '#161616';
			$footerlinkColor = '#6FBF4D';
			break;
			
		case 'sky_blue':
			$color = '#55ace2';
			$linkColor = '#55ace2';
			$highlighted = '#333333';
			$footerlinkColor = '#55ace2';
			break;
			
		case 'blue':
			$color = '#0745a1';
			$linkColor = '#0745a1';
			$highlighted = '#161616';
			$footerlinkColor = '#0745a1';
			break;
			
		case 'purple':
			$color = '#9061C2';
			$linkColor = '#9061C2';
			$highlighted = '#161616';
			$footerlinkColor = '#9061C2';
			break;
			
		case 'pink':
			$color = '#cd64ac';
			$linkColor = '#cd64ac';
			$highlighted = '#252525';
			$footerlinkColor = '#cd64ac';
			break;
			
		case 'red':
			$color = '#f02828';
			$linkColor = '#f02828';
			$highlighted = '#161616';
			$footerlinkColor = '#f02828';
			break; 
			
		case 'yellow':
			$color = '#FBB829';
			$linkColor = '#FBB829';
			$highlighted = '#161616';
			$footerlinkColor = '#FBB829';
			break; 
			
		case 'slate':
			$color = '#5c7896';
			$linkColor = '#5c7896';
			$highlighted = '#161616';
			$footerlinkColor = '#556270';
			break; 
		
		default:
			$color = '#e45635';
			$linkColor = '#e45635';
			$highlighted = '#161616';
			$footerlinkColor = '#e45635';
			
			break;
	}
}

if($scheme != 'custom'){
	
	
	if($scheme == 'green'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-green.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-green.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-green.png");
   			}
   			
   			.view-display-id-home_portfolio .img-mask-hover, 
   			.view-display-id-portfolio2 .img-mask-hover, 
   			.view-display-id-portfolio3 .img-mask-hover, 
   			.view-display-id-portfolio4 .img-mask-hover{
			    background-image: url('<?php print base_path() . path_to_theme() ?>/images/portfolio-hover-green.png');
			}

		</style>
		
	<?php } 

	if($scheme == 'sky_blue'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-skyblue.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-skyblue.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-skyblue.png");
   			}
   			
   			.view-display-id-home_portfolio .img-mask-hover, 
   			.view-display-id-portfolio2 .img-mask-hover, 
   			.view-display-id-portfolio3 .img-mask-hover, 
   			.view-display-id-portfolio4 .img-mask-hover{
			    background-image: url('<?php print base_path() . path_to_theme() ?>/images/portfolio-hover-skyblue.png');
			}

		</style>
		
	<?php } 
	
	
	if($scheme == 'blue'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-blue.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-blue.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-blue.png");
   			}
   			
   			.view-display-id-home_portfolio .img-mask-hover, 
   			.view-display-id-portfolio2 .img-mask-hover, 
   			.view-display-id-portfolio3 .img-mask-hover, 
   			.view-display-id-portfolio4 .img-mask-hover{
			    background-image: url('<?php print base_path() . path_to_theme() ?>/images/portfolio-hover-blue.png');
			}

		</style>
		
	<?php } 
	
	if($scheme == 'purple'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-purple.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-purple.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-purple.png");
   			}
   			
   			.view-display-id-home_portfolio .img-mask-hover, 
   			.view-display-id-portfolio2 .img-mask-hover, 
   			.view-display-id-portfolio3 .img-mask-hover, 
   			.view-display-id-portfolio4 .img-mask-hover{
			    background-image: url('<?php print base_path() . path_to_theme() ?>/images/portfolio-hover-purple.png');
			}

		</style>
		
	<?php } 
	
	
	if($scheme == 'pink'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-pink.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-pink.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-pink.png");
   			}
   			
   			.view-display-id-home_portfolio .img-mask-hover, 
   			.view-display-id-portfolio2 .img-mask-hover, 
   			.view-display-id-portfolio3 .img-mask-hover, 
   			.view-display-id-portfolio4 .img-mask-hover{
			    background-image: url('<?php print base_path() . path_to_theme() ?>/images/portfolio-hover-pink.png');
			}

		</style>
		
	<?php } 
	
	
	if($scheme == 'red'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-red.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-red.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-red.png");
   			}
   			
   			.view-display-id-home_portfolio .img-mask-hover, 
   			.view-display-id-portfolio2 .img-mask-hover, 
   			.view-display-id-portfolio3 .img-mask-hover, 
   			.view-display-id-portfolio4 .img-mask-hover{
			    background-image: url('<?php print base_path() . path_to_theme() ?>/images/portfolio-hover-red.png');
			}

		</style>
		
	<?php } 
	
	if($scheme == 'yellow'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-yellow.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-yellow.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-yellow.png");
   			}
   			
   			.view-display-id-home_portfolio .img-mask-hover, 
   			.view-display-id-portfolio2 .img-mask-hover, 
   			.view-display-id-portfolio3 .img-mask-hover, 
   			.view-display-id-portfolio4 .img-mask-hover{
			    background-image: url('<?php print base_path() . path_to_theme() ?>/images/portfolio-hover-yellow.png');
			}

		</style>
		
	<?php }
	
	if($scheme == 'slate'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-slate.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-slate.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-slate.png");
   			}
   			
   			.view-display-id-home_portfolio .img-mask-hover, 
   			.view-display-id-portfolio2 .img-mask-hover, 
   			.view-display-id-portfolio3 .img-mask-hover, 
   			.view-display-id-portfolio4 .img-mask-hover{
			    background-image: url('<?php print base_path() . path_to_theme() ?>/images/portfolio-hover-slate.png');
			}

		</style>
		
	<?php }
}


// icons color scheme
$icon_scheme = theme_get_setting('icon_scheme');
if($scheme == 'custom' && $icon_scheme != 'cinnabar'){
	
	
	if($icon_scheme == 'green'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-green.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-green.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-green.png");
   			}
   			

		</style>
		
	<?php } 

	if($icon_scheme == 'sky_blue'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-skyblue.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-skyblue.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-skyblue.png");
   			}
   			

		</style>
		
	<?php } 
	
	
	if($icon_scheme == 'blue'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-blue.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-blue.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-blue.png");
   			}

		</style>
		
	<?php } 
	
	if($icon_scheme == 'purple'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-purple.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-purple.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-purple.png");
   			}

		</style>
		
	<?php } 
	
	
	if($icon_scheme == 'pink'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-pink.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-pink.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-pink.png");
   			}

		</style>
		
	<?php } 
	
	
	if($icon_scheme == 'red'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-red.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-red.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-red.png");
   			}

		</style>
		
	<?php } 
	
	if($icon_scheme == 'yellow'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-yellow.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-yellow.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-yellow.png");
   			}

		</style>
		
	<?php }
	
	if($icon_scheme == 'slate'){ ?>
		
		<style type="text/css">		
			[class^="icon-social-"],
			[class*=" icon-social-"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/social-slate.png");
			}
			
			[class^="icon-color"],
			[class*=" icon-color"] {
			  background-image: url("<?php print base_path() . path_to_theme() ?>/bootstrap/img/glyphicons-halflings-slate.png");
			}
			
			[class^="icon-picon-"], 
			[class*=" icon-picon-"] {
   			 background-image: url("<?php print base_path() . path_to_theme() ?>/images/icons/picons/picons-slate.png");
   			}

		</style>
		
	<?php }
}








 //brighter
$ultraLightColor = colorInterpolate($color, 0.4);
$lightLessColor = colorInterpolate($color, 0.85);
$lighterColor = colorInterpolate($color, 0.75);
$lightestColor = colorInterpolate($color, 0.6);
$extremeLight = colorInterpolate($color, 0.48);


//darken a color
$darkColor = colorInterpolate($color, -0.7);
$darkerColor = colorInterpolate($color, -0.9);
$darkestColor = colorInterpolate($color, -.99);


// bottom region width adjustments

$wrapperWidth = theme_get_setting('width');
$leftBlock_width = $wrapperWidth/3 ;
$leftBlock_width = floor($leftBlock_width);
$rightBlocks_width = $wrapperWidth - $leftBlock_width;
$wrapper_viewport = $wrapperWidth - 1;




/*
print 'Lighter: ' . $lighterColor . '<br>';
print 'Original: ' . $color . '<br>';
print 'Darker: ' . $darkerColor . '<br>';
*/



 
?>
<?php if(theme_get_setting('google_enable') == 0){ ?>
<link href='<?php print base_path() . path_to_theme() ?>/font/stylesheet.css' rel='stylesheet' type='text/css'/> 
<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'/>
<style type="text/css">
body{
	font-family: PlayRegular, Helvetica, arial, sans-serif;
}

h1, h2, h3, h4, h5, h6{
	font-weight: normal;
}

#slider_container h1, #slider_container h2, #slider_container h3, #slider_container h4, #slider_container h5{
	font-family: PlayBold;
} 

blockquote{
	font-family: 'PT Serif', serif;
	font-style: italic;
}

</style>
<?php } ?>
    <style type="text/css">
    
    /*
     * LAYOUT SETTING
     */	
	
	.WrapperWidth{
		max-width: <?php print theme_get_setting('width') ?>px;
	}
    
    
    /* boxed setting */
   
   <?php if($boxed == TRUE){ ?>
   	
   	#main_structure{
   		max-width:<?php print theme_get_setting('width') ?>px;
   		margin: auto;
   		box-shadow: 0 <?php print theme_get_setting('header_height' ) ?>px 6px rgba(50,50,50,.2);
   	}
   	
   	#header, #FooterRegion, #highlightedRegion, #row1-Region, #row2-Region, 
   	#title-region, #contentAndSidebars,	#underContent-Region{
   		padding-left: 20px;
   		padding-right: 20px;
   	}
   	
	#bottomLeftInner{
		padding-left: 20px;
	}
	
	#bottomRightInner{
		padding-right: 20px;
	}
	
	#BottomRegion{
		overflow: hidden;
	}

   <?php } ?>
   
   /* portfolio width settings */
  
    <?php
  		$width = theme_get_setting('width');
		
		//  cols
		$item_width_2col = ($width - 40 - 10 - 30) / 2;
		$item_width_3col = ($width - 60 - 18 - 30) / 3;
		$item_width_4col = ($width - 100 - 24 - 30) / 4;
		
		$item_width_2col = round($item_width_2col);
		$item_width_3col = round($item_width_3col);
		$item_width_4col = round($item_width_4col);
		
		
		//portfolio item width for box layout
		if(($boxed == TRUE)){
			//  cols
			$item_width_2col = ($width - 40 - 10 - 40 - 20) / 2;
			$item_width_3col = ($width - 60 - 18 - 40 - 40) / 3;
			$item_width_4col = ($width - 80 - 24 - 40 - 40) / 4;
			
			$item_width_2col = round($item_width_2col);
			$item_width_3col = round($item_width_3col);
			$item_width_4col = round($item_width_4col);
		}
		
		$item_height_2col = $item_width_2col - 100;
		$item_height_3col = $item_width_3col - 80;
		$item_height_4col = $item_width_4col - 60;
		
    ?>
    
    /* 2 cols */
    .view-display-id-portfolio2 .portfolio-container .views-row{
	    width: <?php print $item_width_2col ?>px;
    }
    
    
     /* 3 cols */
    .view-display-id-portfolio3 .portfolio-container .views-row{
	    width: <?php print $item_width_3col ?>px;
    }
    
    
      /* 4 cols */
    .view-display-id-portfolio4 .portfolio-container .views-row{
	    width: <?php print $item_width_4col ?>px;
    }
    
    
    <?php if(($boxed == TRUE)){ ?>
    .view-display-id-home_portfolio .portfolio-container .views-row{
    	margin-right: 19px;
    }
	
	#contentAndSidebars, .front #contentAndSidebars{
		padding-left: 10px;
		padding-right: 10px;
	}
	
    <?php } ?>
    
    /* google fonts */
    <?php if((theme_get_setting('google_enable') == 1)) { get_googlefont_style_code() ;  } ?>

    
    /* Body background scheme goes here -----------*/
    <?php if(theme_get_setting('custom_bg_attribute') == '') {?>
	    body{
	    	background: url(<?php print base_path() . path_to_theme() . '/images/bg/' . theme_get_setting('bg_scheme')?>) repeat;
	    }
    <?php } else{ ?>
    
	    body{
	    	background: <?php print theme_get_setting('custom_bg_attribute') ?>;
	    }   
    <?php }  ?>
    
   	
   	
   	body{
   		font-size: <?php print theme_get_setting('site_font_size') ?>px;
   	}
  	
    #mainMenu{
    	font-size: <?php print theme_get_setting('menu_font_size') ?>px
    }
	
	<?php if((theme_get_setting('site_font_family') != '') &&  (theme_get_setting('google_enable') == 0)) {?>
	body{
		font-family: <?php print theme_get_setting('site_font_family') ?>
	}
	<?php } ?>
    
	/* 
	 * custom colors --------------------------
	 * 
	 */
	
    .theme-scheme, .node-product .product-title, #contentAndSidebars .menu-arrow, .btn.node-add-to-cart, 
	.btn.node-add-to-cart:hover, .node-product .product-title, #title-region, .curly-brac, 
	.dropdown-menu .active > a, 
    .dropdown-menu .active > a:hover, 
    .dropdown-menu li > a:hover,
	.dropdown-menu li > a:focus,
	.dropdown-submenu:hover > a, 
	.label-theme   {
		background-color: <?php print $color; ?>  ;
    }
    


    .color, #site-name a, .blocktitle, #social-tagline, .plain-title{
    	color: <?php print $color ; ?>;
    }
    
    
    @media (max-width:640px){
	    .view-display-id-portfolio4 .portfolio-container .views-field-title a{
	    	color: <?php print $color ; ?>;
	    	text-decoration: underline;
	    }
    }
    
    
    #FooterRegion #footer a, #FooterRegion .more-link a{
    	color: <?php print $footerlinkColor ; ?>;
    }
    
    
	
    #BottomRegion .color{
    	color: #fff;
    }

 
    .theme-border, .sf-menu li ul,  .box, .plain-title, .portfolio-container .views-field-created, 
    #FooterRegion, #contentAndSidebars .blocktitle, #highlightedRegion{
		border-color: <?php print $color ; ?> ;
	}
	
	 .noSlider .sf-menu li ul{
	 	border-color: <?php print $darkestColor ; ?> ;
	 }
	
	.node-product .product-images .field-type-image, #stickyHeader{
		border-color: <?php print $lighterColor ; ?> ;
	}
	
	.product-title-border{
    	background: <?php print $lightestColor ; ?> ;
    }

	.btn.btn-theme, .btn-theme:focus, 
    .btn-theme:active,  .btn.node-add-to-cart, 
	#buttonMenu #secondary-menu-links li a{
		background: <?php print $color ?>; /* Old browsers */
	}
	
	ul.plan  li.head, .meta .terms .field-item, 
	.dropdown-menu .active > a, 
    .dropdown-menu .active > a:hover, 
    .dropdown-menu li > a:hover,
	.dropdown-menu li > a:focus,
	.dropdown-submenu:hover > a  {
		background: <?php print $color?>; /* Old browsers */
		/* IE9 SVG, needs conditional override of 'filter' to 'none' */
		background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ViN2MxMiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlZjk2NDEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
		background: -moz-linear-gradient(top,  <?php print $lighterColor ?> 0%, <?php print $color?> 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php print $lighterColor ?>), color-stop(100%,<?php print $color?>)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  <?php print $lighterColor ?> 0%,<?php print $color?> 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  <?php print $lighterColor ?> 0%,<?php print $color?> 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  <?php print $lighterColor ?> 0%,<?php print $color?> 100%); /* IE10+ */
		background: linear-gradient(to bottom,  <?php print $lighterColor ?> 0%,<?php print $color?> 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php print $lighterColor ?>', endColorstr='<?php print $color?>',GradientType=0 ); /* IE6-8 */		
		
		border-right:none;
		border-left:1px solid <?php print $lighterColor ?>;
		box-shadow: -1px 0 0 0 rgba(0,0,0,.07) inset;
	}
	
	ul.plan  li.head {
		border-top:1px solid <?php print $darkestColor ?> ;
	}
	
	.pricing-table div.ptable:first-child  li.head{
		border-left: 1px solid <?php print $darkestColor ?> ;
	} 
	
	.pricing-table div.ptable:last-child  li.head, 
	.pricing-table div.ptable:nth-last-child(-n+1) > ul.plan > li.head{
		border-right: 1px solid <?php print $darkestColor ?> ;
	}
	
	.btn.btn-theme:hover, .btn.node-add-to-cart:hover, #buttonMenu #secondary-menu-links li a:hover{
		background: <?php print $lightLessColor?>;
		text-decoration: none;
	}


	.shadow-transition:hover{
	  -webkit-box-shadow: 0px 0px 9px rgba(<?php print hex2RGB($color, true) ?>, 0.8);
	  -moz-box-shadow:    0px 0px 9px rgba(<?php print hex2RGB($color, true) ?>, 0.8);
	  box-shadow:         0px 0px 9px rgba(<?php print hex2RGB($color, true) ?>, 0.8);
	}

    /*bootstrap line 1194 */
	textarea:focus,
	input[type="text"]:focus,
	input[type="password"]:focus,
	input[type="datetime"]:focus,
	input[type="datetime-local"]:focus,
	input[type="date"]:focus,
	input[type="month"]:focus,
	input[type="time"]:focus,
	input[type="week"]:focus,
	input[type="number"]:focus,
	input[type="email"]:focus,
	input[type="url"]:focus,
	input[type="search"]:focus,
	input[type="tel"]:focus,
	input[type="color"]:focus,
	.uneditable-input:focus {
	   border-color: rgba(<?php print hex2RGB($color, true) ?>, 0.8);
	  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(<?php print hex2RGB($color, true) ?>, 0.6);
	  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(<?php print hex2RGB($color, true) ?>, 0.6);
	  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(<?php print hex2RGB($color, true) ?>, 0.6);
	}
	
	.bar .foreground{
		background: <?php print $color?>; /* Old browsers */
		/* IE9 SVG, needs conditional override of 'filter' to 'none' */
		background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ViN2MxMiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlZjk2NDEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
		background: -moz-linear-gradient(top,  <?php print $lightestColor ?> 0%, <?php print $color?> 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php print $lighterColor ?>), color-stop(100%,<?php print $color?>)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  <?php print $lightestColor ?> 0%,<?php print $color?> 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  <?php print $lightestColor ?> 0%,<?php print $color?> 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  <?php print $lightestColor ?> 0%,<?php print $color?> 100%); /* IE10+ */
		background: linear-gradient(to bottom,  <?php print $lightestColor ?> 0%,<?php print $color?> 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php print $lightestColor ?>', endColorstr='<?php print $color?>',GradientType=0 ); /* IE6-8 */
	}
	
	.poll .bar{
		box-shadow: 0 1px 2px rgba(100,100,100,.2) inset;
		background: #eee;
	}
	
	#highlightedRegion{
		background-color: <?php print $highlighted ?>;
	}
	
	
	#feedback-link:hover{
		background: <?php print $color ?>; 
	}
	
	
	a,  .more-link a{
		color: <?php print $linkColor ?>;
	}
	
	a:hover, a:active{
		color: <?php print $lighterColor ?>;
	}
	/* 	end custom colors */
	
	/* header setting */
	#header{
		min-height: <?php print theme_get_setting('header_height' ) ?>px;
	}
	
	#logocontainer{
		margin-top: <?php print theme_get_setting('logo_top_margin'); ?>px;
	}
	
	#texttitles{
		margin-top: <?php print theme_get_setting('name_top_margin'); ?>px;
	}

	#headerRight{
		margin-top: <?php print theme_get_setting('menu_section_margin'); ?>px; 
	}

    </style>
    