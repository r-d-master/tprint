<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" 
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php print $head ?>   
    <title><?php print $head_title ?></title>
    
    <?php print $styles ?>
    
    <!-- GOOGLE FONTS CSS --> 
    <?php if(theme_get_setting('google_enable') == 1){ ?>
    <link href='<?php print get_google_css_string() ?>' rel='stylesheet' type='text/css' /> 
    <?php } ?>
    
    <?php  include_once drupal_get_path('theme', 'skifi') . "/includes/css_include.php"; ?> 
     
    <!--[if lt IE 10]>
    	<style type="text/css">
		#header{
			position:static;
			border-bottom: 1px solid #e0e0e0;
		}
		</style>
	<![endif]-->
	
	<!--[if lt IE 9]>
    	<style type="text/css">
		.img-mask{
			display:none;
		}
		</style>
	<![endif]-->
	
    <?php print $scripts ?>
    
    <script type="text/javascript" >
    (function ($) {
    // color box
        $(document).ready(function(){
            //Examples of how to assign the ColorBox event to elements
            $(".group1").colorbox({rel:'group1'});
            $(".group2").colorbox({rel:'group2', transition:"fade"});
            $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
            $(".group4").colorbox({rel:'group4', slideshow:true});
            $(".ajax").colorbox();
            $(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
            $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});        
        });
     })(jQuery);
    </script>   
    
    
      <!--script executions -->
    <script type="text/javascript">
    (function ($) {
	    $(function () {
	    	selectnav('nav', {
		    	label: '<?php print t('Navigation  ') ?>',
		    });
	    });
	})(jQuery);
	
	(function ($) {
    	// portfolio hover effect
    	$(function(){
    		$('.ch-item').bind('hover', function(e){});
    	});
	})(jQuery);
	
	(function ($) {
    	//back to top
    	$(function() {
    		$(window).scroll(function() {
    			if($(this).scrollTop() > 300) {
    				$('#toTop').fadeIn();
    				$('#feedback-div').fadeIn();	
    			} else {
    				$('#toTop').fadeOut();
    				$('#feedback-div').fadeOut();
    			}
    		});
    	 
    		$('#toTop').click(function() {
    			$('body,html').animate({scrollTop:0},1000);
    		});	
    		
    	});
	})(jQuery);
    </script>
  
</head>

<body class="<?php print $classes; ?> skifibody"  <?php print $attributes;?> id="skifiBody">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

<!--superfish call-->
<script type="text/javascript">
(function ($) { 
// initialise plugins
    jQuery(function(){
        jQuery('ul.sf-menu').superfish();
    });
})(jQuery);
</script> 


<!-- Bootstrap scripts -->
<script type="text/javascript"> 
(function ($) { 
  $(document).ready(function () {  
    $("[rel=tooltip]").tooltip();  
  }); 
  
  $('.carousel').carousel()
  $("a[rel=popover]").popover({html : true});
})(jQuery);
</script>

<script type="text/javascript" src="<?php print THEME_PATH . '/js/scripts.js' ?>"></script>
<!-- LAYER SLIDER SETTINGS -->
<?php if(theme_get_setting('slider_type') == 'layer_slider'){ ?>
<script type="text/javascript">

<?php 
$ls_width = theme_get_setting('width') + 30;
?>
(function ($) {	
    $(document).ready(function() {
        $('#layerslider').layerSlider({
            // Options should go here follwing the layer slider documentation syntax
            animateFirstLayer : true,
            skin              : 'fullwidth',
    		skinsPath         : '<?php print base_path() . path_to_theme() ?>/layerslider/skins/',
    		responsive : false,
			responsiveUnder : 1200,
			sublayerContainer : <?php print $ls_width ?>,
        });
    });
})(jQuery);
</script>
<?php } ?>


<?php if(($boxed == TRUE)){ ?>
<script type="text/javascript">
// boxed layout width adjustment
(function ($) {
	$(document).ready(function() {

        
        $('.view-display-id-portfolio4 .views-row:nth-child(4n)').css({
        	marginRight: 0,
        })
        
        $('.view-display-id-portfolio3 .views-row:nth-child(3n)').css({
        	marginRight: 0,
        })
        
        $('.view-display-id-portfolio2 .views-row:nth-child(2n)').css({
        	marginRight: 0,
        })

	})
})(jQuery);
</script>	
<?php } ?>

</body>
</html>