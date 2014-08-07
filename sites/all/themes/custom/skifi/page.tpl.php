<?php
$help = $page['help'];
$content = $page['content'];
$footer = $page['footer'];
$page_top = $page['page_top'];
$page_bottom = $page['page_bottom'];
$main_menu = $page['main_menu'];
$slider_region = $page['slider'];
$modal = $page['modal'];
$modal_2 = $page['modal_2'];
$modal_3 = $page['modal_3'];

$search_box = $page['search_box'];

$dark_highlighted1 = $page['dark_highlighted1'];
$dark_highlighted2 = $page['dark_highlighted2'];
$dark_highlighted3 = $page['dark_highlighted3'];
$dark_highlighted4 = $page['dark_highlighted4'];
$dark_highlighted5 = $page['dark_highlighted5'];
$dark_highlighted6 = $page['dark_highlighted6'];

$row1_full_span = $page['row1_full_span'];
$row1_b1 = $page['row1_b1'];
$row1_b2 = $page['row1_b2'];
$row1_b3 = $page['row1_b3'];
$row1_b4 = $page['row1_b4'];
$row1_b5 = $page['row1_b5'];
$row1_b6 = $page['row1_b6'];


$row2_full_span = $page['row2_full_span'];
$row2_b1 = $page['row2_b1'];
$row2_b2 = $page['row2_b2'];
$row2_b3 = $page['row2_b3'];
$row2_b4 = $page['row2_b4'];
$row2_b5 = $page['row2_b5'];
$row2_b6 = $page['row2_b6'];

$underContent_full_span = $page['underContent_full_span'];
$underContent_1 = $page['underContent_1'];
$underContent_2 = $page['underContent_2'];
$underContent_3 = $page['underContent_3'];
$underContent_4 = $page['underContent_4'];
$underContent_5 = $page['underContent_5'];
$underContent_6 = $page['underContent_6'];


$footer1 = $page['footer1'];
$footer2 = $page['footer2'];
$footer3 = $page['footer3'];
$footer4 = $page['footer4'];
$footer5 = $page['footer5'];
$footer6 = $page['footer6'];


$content_region_title = $page['content_region_title'];
$sidebar_left = $page['left_sidebar'];
$sidebar_right = $page['right_sidebar'];
$content = $page['content'];



/* snippets */
$slider_exist = region_blocks_exist($slider_region);

if(!$slider_exist){ ?>
	<script type="text/javascript">
		(function ($) {
			$(document).ready(function(){
				$('body').addClass('noSlider');
			});
		})(jQuery);
	</script>
<?php } 

$highlighted_exist = region_blocks_exist($dark_highlighted1, $dark_highlighted2, $dark_highlighted3, $dark_highlighted4, $dark_highlighted5, $dark_highlighted6);

$row1_region_exist = region_blocks_exist($row1_b1,$row1_b2,$row1_b3,$row1_b4,$row1_b5,$row1_b6,$row1_full_span);
$row1_blocks_exist = region_blocks_exist($row1_b1,$row1_b2,$row1_b3,$row1_b4,$row1_b5,$row1_b6);

$row2_region_exist = region_blocks_exist($row2_b1,$row2_b2,$row2_b3,$row2_b4,$row2_b5,$row2_b6,$row2_full_span);
$row2_blocks_exist = region_blocks_exist($row2_b1,$row2_b2,$row2_b3,$row2_b4,$row2_b5,$row2_b6);


$underContent_region_exist = region_blocks_exist($underContent_1,$underContent_2,$underContent_3,$underContent_4,$underContent_5,$underContent_6,$underContent_full_span);
$underContent_blocks_exist = region_blocks_exist($underContent_1,$underContent_2,$underContent_3,$underContent_4,$underContent_5,$underContent_6);


$content_region_exist = region_blocks_exist($content_region_title, $sidebar_left, $sidebar_right, $content);
$content_blocks_exist = region_blocks_exist($sidebar_left, $sidebar_right, $content);


$footer_region_exist = region_blocks_exist($footer, $footer1, $footer2, $footer3, $footer4, $footer5, $footer6);
$footer_blocks_exist = region_blocks_exist($footer1, $footer2, $footer3, $footer4, $footer5, $footer6);


$upper_region_exist = upperRegionsExist($slider_region, $highlighted_exist, $row1_region_exist, $row2_region_exist);

// checks whether any block above content region is there or not
function upperRegionsExist($a = NULL, $b = NULL, $c = NULL , $d = NULL, $e = NULL, $f = NULL){
	if($a == TRUE || $b == TRUE || $c == TRUE || $d == TRUE || $e = NULL || $f = NULL){
		return TRUE;
	}
	else {
		return FALSE;
	}
}

// for bread crumb use
$you_here = t("You are here: ");

// Content area width adjustment
$leftSidebar_span = theme_get_setting('left_span');
$rightSidebar_span = theme_get_setting('right_span');
$content_span = theme_get_setting('content_span');

if(!$sidebar_right && !$sidebar_left){
	$content_span = $content_span + $rightSidebar_span + $leftSidebar_span;
}
elseif(!$sidebar_left){
	$content_span = $content_span + $leftSidebar_span;
}
elseif(!$sidebar_right){
	$content_span = $content_span + $rightSidebar_span;
}


?>



<div class="container-fluid">
<div class="row-fluid">
<div class="span12">
<div id="main_structure">
	
	<div id="header">
	<div class="WrapperWidth">
		<div class="row-fluid" >
			
			<div class="span4">
				<div id="headerLeft">
					<?php if ($logo) { ?><div id="logocontainer"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a></div><?php } ?>
					<div id="texttitles">
						  <?php if ($site_name) { ?><h1 id='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
					      <?php if ($site_slogan) { ?><span id="slogan"><?php print $site_slogan ?></span><?php } ?>
					</div>
				</div>
			</div>
			
			<div class="span8">
				<div id="headerRight">					
					<?php if ($secondary_menu): ?>
					<div id="buttonMenu">
				        <?php  print theme('links__system_secondary_menu', array(
				          'links' => $secondary_menu,
				          'attributes' => array(
				            'id' => 'secondary-menu-links',
				            'class' => array('links', 'inline', 'clearfix'),
				          ),
				          'heading' => array(
				            'text' => t('Secondary menu'),
				            'level' => 'h2',
				            'class' => array('element-invisible'),
				          ),
				        )); ?>	
					</div>
					 <?php endif; ?> 
					
					
					<div id="mainMenu">
						<?php if($main_menu) print render($main_menu); ?>
					</div>					
				</div>
			</div>	
			
		</div>
	</div>
	
	<!-- sticky navigation -->
	<div id="stickyHeader">
		<div class="visible-desktop" id="stickyInner" style="width: <?php print theme_get_setting('width') ?>px ">
			<div class="row-fluid">			
				<div class="span3">
					<div id="stickyTitle">
						  <h2><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h2>
					</div>
				</div>
				
				<div class="span9">
					<div id="StickyMainMenu">
						
						<?php 
						$main_menu2 =  render($main_menu);
						
						// Replace duplicate id
						$main_menu_sticky = str_replace("block-system-main-menu","block-system-main-menu--2",$main_menu2);
						
						?>
						
						
						<?php if($main_menu) print $main_menu_sticky ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	
	</div><!-- HEADER -->
	
	<?php  if($slider_region){ ?>
	<div id="slider_container">
		<div class="row-fluid" >
			<div class="span12">
				
				
				<?php
				// layer slider code 
				if(theme_get_setting('slider_type') == 'layer_slider'){
					include_once( drupal_get_path('theme', 'skifi') . '/includes/layerSliderHTML.php'); 	
				}
				?>
			
				<?php 
				// flex slider code
				if(theme_get_setting('slider_type') == 'flex'){
					include_once( drupal_get_path('theme', 'skifi') . '/includes/flex_code.php'); 	
				}
				?>
			
			</div>
		</div>
	</div><!--slider_container-->
	<?php } ?>
	
	<!-- Dark Highlighted Region -->
	<?php if($highlighted_exist) {?>
		<div id="highlightedRegion" class="dark">
		<div class="WrapperWidth">
			<div class="row-fluid">
				<?php $highlighted_blocks_span = get_block_span($dark_highlighted1, $dark_highlighted2, $dark_highlighted3, $dark_highlighted4, $dark_highlighted5, $dark_highlighted6); ?>
				<?php $highlighted_block_count = count_blocks($dark_highlighted1, $dark_highlighted2, $dark_highlighted3, $dark_highlighted4, $dark_highlighted5, $dark_highlighted6) ?>
				
				
				<?php if($dark_highlighted1) {?>
					<div id="HighlightedBlock1" class="<?php /* since 12 grids cannot be divided by 5, we use span4 for first block */ if($highlighted_block_count == 5) print ' span4 '; else print $highlighted_blocks_span ?>">
						<?php print render($dark_highlighted1) ?>
					</div>
				<?php } ?>
				
				<?php if($dark_highlighted2) {?>
					<div id="HighlightedBlock2" class="<?php print $highlighted_blocks_span ?>">
						<?php print render($dark_highlighted2) ?>
					</div>
				<?php } ?>
				
				<?php if($dark_highlighted3) {?>
					<div id="HighlightedBlock3" class="<?php print $highlighted_blocks_span ?>">
						<?php print render($dark_highlighted3) ?>
					</div>
				<?php } ?>
				
				<?php if($dark_highlighted4) {?>
					<div id="HighlightedBlock4" class="<?php print $highlighted_blocks_span ?>">
						<?php print render($dark_highlighted4) ?>
					</div>
				<?php } ?>
				
				<?php if($dark_highlighted5) {?>
					<div id="HighlightedBlock5" class="<?php print $highlighted_blocks_span ?>">
						<?php print render($dark_highlighted5) ?>
					</div>
				<?php } ?>		
					
				<?php if($dark_highlighted6) {?>
					<div id="HighlightedBlock6" class="<?php print $highlighted_blocks_span ?>">
						<?php print render($dark_highlighted6) ?>
					</div>
				<?php } ?>
			</div>
		</div>
		</div>
	<?php } ?><!--Dark highlighted region-->
	
	
	<!-- row1-Region -->
	<?php if($row1_region_exist) {?>	
		<div id="row1-Region">
			
			<?php if($row1_full_span) {?>
			<div id="row1-FullSpan" >
				<div class="WrapperWidth">
					<div class="row-fluid">
						<div class="span12">
							<?php print render($row1_full_span); ?>
						</div>
					</div>
				</div>
			</div>
			<?php } ?><!--row1_full_span-->
			

			<?php if($row1_blocks_exist) {?>
				<div id="row1-Blocks" >
				<div class="WrapperWidth">
					<div class="row-fluid">
						<?php $row1_blocks_span = get_block_span($row1_b1, $row1_b2,$row1_b3,$row1_b4,$row1_b5,$row1_b6); ?>
						<?php $row1_blocks_count = count_blocks($row1_b1, $row1_b2,$row1_b3,$row1_b4,$row1_b5,$row1_b6) ?>
						
						
						<?php if($row1_b1) {?>
							<div id="row1_b1" class="<?php /* since 12 grids cannot be divided by 5, we use span4 for first block */ if($row1_blocks_count == 5) print ' span4 '; else print $row1_blocks_span ?>">
								<?php print render($row1_b1) ?>
							</div>
						<?php } ?>
						
						<?php if($row1_b2) {?>
							<div id="row1_b2" class="<?php print $row1_blocks_span ?>">
								<?php print render($row1_b2) ?>
							</div>
						<?php } ?>
						
						<?php if($row1_b3) {?>
							<div id="row1_b3" class="<?php print $row1_blocks_span ?>">
								<?php print render($row1_b3) ?>
							</div>
						<?php } ?>
						
						<?php if($row1_b4) {?>
							<div id="row1_b4" class="<?php print $row1_blocks_span ?>">
								<?php print render($row1_b4) ?>
							</div>
						<?php } ?>
						
						<?php if($row1_b5) {?>
							<div id="row1_b5" class="<?php print $row1_blocks_span ?>">
								<?php print render($row1_b5) ?>
							</div>
						<?php } ?>		
							
						<?php if($row1_b6) {?>
							<div id="row1_b6" class="<?php print $row1_blocks_span ?>">
								<?php print render($row1_b6) ?>
							</div>
						<?php } ?>
					</div>
				</div>
				</div>
			<?php } ?>		
		</div>	<!-- row1-Region -->
	<?php } ?>
	
	
	
	<!-- row2 region -->
	<?php if($row2_region_exist) {?>	
		<div id="row2-Region">
			
			<?php if($row2_full_span) {?>
			<div id="row2-FullSpan" >
				<div class="WrapperWidth">
					<div class="row-fluid">
						<div class="span12">
							<?php print render($row2_full_span); ?>
						</div>
					</div>
				</div>
			</div>
			<?php } ?><!--row2_full_span-->
			
			<?php if(region_blocks_exist($row2_blocks_exist)) {?>
				<div id="row2-Blocks" >
				<div class="WrapperWidth">
					<div class="row-fluid">
						<?php $row2_blocks_span = get_block_span($row2_b1, $row2_b2,$row2_b3,$row2_b4,$row2_b5,$row2_b6); ?>
						<?php $row2_blocks_count = count_blocks($row2_b1, $row2_b2,$row2_b3,$row2_b4,$row2_b5,$row2_b6) ?>
						
						
						<?php if($row2_b1) {?>
							<div id="row2_b1" class="<?php /* since 12 grids cannot be divided by 5, we use span4 for first block */ if($row2_blocks_count == 5) print ' span4 '; else print $row2_blocks_span ?>">
								<?php print render($row2_b1) ?>
							</div>
						<?php } ?>
						
						<?php if($row2_b2) {?>
							<div id="row2_b2" class="<?php print $row2_blocks_span ?>">
								<?php print render($row2_b2) ?>
							</div>
						<?php } ?>
						
						<?php if($row2_b3) {?>
							<div id="row2_b3" class="<?php print $row2_blocks_span ?>">
								<?php print render($row2_b3) ?>
							</div>
						<?php } ?>
						
						<?php if($row2_b4) {?>
							<div id="row2_b4" class="<?php print $row2_blocks_span ?>">
								<?php print render($row2_b4) ?>
							</div>
						<?php } ?>
						
						<?php if($row2_b5) {?>
							<div id="row2_b5" class="<?php print $row2_blocks_span ?>">
								<?php print render($row2_b5) ?>
							</div>
						<?php } ?>		
							
						<?php if($row2_b6) {?>
							<div id="row2_b6" class="<?php print $row2_blocks_span ?>">
								<?php print render($row2_b6) ?>
							</div>
						<?php } ?>
					</div>
					</div>
				</div>
			<?php } ?>		
		</div>	<!-- row2-Region -->
	<?php } ?>
	
	
	
	<!--TITLE REGION-->
	<?php if(($title) && !$upper_region_exist){ ?>
		<div id="title-region">
			<div class="WrapperWidth">
				<div class="row-fluid">	
					<div class="span12">
						<div class="inner">
							<?php print render($title_prefix); ?>
							<h1 class="page-title"><?php print $title ?></h1>  
							<?php print render($title_suffix); ?>
							
							<!-- search box-->
							<?php if($search_box) { ?>
								<div id="searchFormSkifi">
									<?php print render($search_box); ?>
								</div>
							<?php } ?>
							
						</div>						
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	
	
	<!-- Content and Sidebar Area -->
	<?php if($content_region_exist || $underContent_region_exist) {?>
	<div id="contentAndSidebars">
		
		<?php if($content_region_title) {?>
			<div id="contentRegion-FullSpan" >
				<div class="WrapperWidth">
					<div class="row-fluid">
						<div class="span12">
							<?php print render($content_region_title); ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?><!--content_region_title-->
		
		
		<?php if($content_blocks_exist) {?>
			
			<!-- breadcrumb-->
			<div class="WrapperWidth">
				<div class="row-fluid">
					<div class="<?php if($sidebar_left)  print  ' offset'.$leftSidebar_span; ?>">
						<?php if(!empty($breadcrumb)){  if(theme_get_setting('skifi_breadcrumb') == '1') print '<div class="breadcrumb">' . $you_here . $breadcrumb . ' / ' . breadcrumb_title($title) . '</div>'; elseif(!empty($breadcrumb)) print '<div class="breadcrumb">' . $breadcrumb . '</div>';  ?><?php } ?>		
					</div>
				</div>
			</div>
			
			<div class="WrapperWidth">
				<div class="row-fluid">				
					<?php if($sidebar_left) {?>
						<div class="<?php print 'span'.$leftSidebar_span ?> sidebar">
							<div id="left-sidebar" >
								<?php print render($sidebar_left); ?>
							</div>
						</div>
					<?php } ?>
					
					<?php if($content) {?>
						<div class="<?php print 'span' .$content_span ?>">
							<div id="contentArea" >
								<?php if(!empty($tabs)){ ?><div class="tabs"><?php print render($tabs ); ?></div> <?php } ?>
						        <?php if ($show_messages) { print $messages; } ?>
						        <?php if($help){ ?><?php print render($help); ?><?php } ?>				
								<?php if(($title) && ($upper_region_exist)){ ?>
						        	<?php print render($title_prefix); ?>
										<h1 class="page-title"><?php print $title ?></h1>  
									<?php print render($title_suffix); ?>
						        <?php } ?>	
					              <?php if ($action_links): ?>
							        <ul class="links">
							          <?php print render($action_links); ?>
							        </ul>
							      <?php endif; ?>		        
						        <?php  print render($content); ?>	        
						        <?php if($feed_icons){ ?><?php print $feed_icons; ?><?php } ?>
					        </div>
						</div>
					<?php } ?>
				
				
				<?php if($sidebar_right) {?>
					<div class="<?php print 'span'.$rightSidebar_span ?> sidebar">
						<div id="right-sidebar" >
							<?php print render($sidebar_right); ?>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>	
		<?php } ?>	
		
		
		<!-- under content region -->
		<?php if($underContent_region_exist) {?>	
			<div id="underContent-Region">
				
				<?php if($underContent_full_span) {?>
				<div id="underContent_full_span" >
					<div class="WrapperWidth">
						<div class="row-fluid">
							<?php print render($underContent_full_span); ?>
						</div>
					</div>
				</div>
				<?php } ?><!--row2_full_span-->
				<?php if(region_blocks_exist($underContent_blocks_exist)) {?>
					<div id="underContent-Blocks" >
						<div class="WrapperWidth">
							<div class="row-fluid">
							<?php $underContent_blocks_span = get_block_span($underContent_1,$underContent_2,$underContent_3,$underContent_4,$underContent_5,$underContent_6); ?>
							<?php $underContent_blocks_count = count_blocks($underContent_1,$underContent_2,$underContent_3,$underContent_4,$underContent_5,$underContent_6) ?>
							
							
							<?php if($underContent_1) {?>
								<div id="underContent_b1" class="<?php /* since 12 grids cannot be divided by 5, we use span4 for first block */ if($underContent_blocks_count == 5) print ' span4 '; else print $underContent_blocks_span ?>">
									<?php print render($underContent_1) ?>
								</div>
							<?php } ?>
							
							<?php if($underContent_2) {?>
								<div id="underContent_b2" class="<?php print $underContent_blocks_span ?>">
									<?php print render($underContent_2) ?>
								</div>
							<?php } ?>
							
							<?php if($underContent_3) {?>
								<div id="underContent_b3" class="<?php print $underContent_blocks_span ?>">
									<?php print render($underContent_3) ?>
								</div>
							<?php } ?>
							
							<?php if($underContent_4) {?>
								<div id="underContent_b4" class="<?php print $underContent_blocks_span ?>">
									<?php print render($underContent_4) ?>
								</div>
							<?php } ?>
							
							<?php if($underContent_5) {?>
								<div id="underContent_b5" class="<?php print $underContent_blocks_span ?>">
									<?php print render($underContent_5) ?>
								</div>
							<?php } ?>		
								
							<?php if($underContent_6) {?>
								<div id="underContent_b6" class="<?php print $underContent_blocks_span ?>">
									<?php print render($underContent_6) ?>
								</div>
							<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>		
			</div>	<!-- row2-Region -->
		<?php } ?>		
	</div><!-- Content and Sidebar Area -->
	<?php } ?>
	

	
	
	<!-- footer blocks -->
	<?php if($footer_region_exist) {?>
		<div id="FooterRegion" >
			
			<?php if($footer_blocks_exist){ ?>
			<div class="WrapperWidth">
				<div class="row-fluid">
					<?php $footer_blocks_span = get_block_span($footer1, $footer2, $footer3, $footer4, $footer5, $footer6); ?>
					<?php $footer_blocks_count = count_blocks($footer1, $footer2, $footer3, $footer4, $footer5, $footer6) ?>
					
					
					<?php if($footer1) {?>
						<div id="footer1" class="<?php /* since 12 grids cannot be divided by 5, we use span4 for first block */ if($footer_blocks_count == 5) print ' span4 '; else print $footer_blocks_span ?>">
							<?php print render($footer1) ?>
						</div>
					<?php } ?>
					
					<?php if($footer2) {?>
						<div id="footer2" class="<?php print $footer_blocks_span ?>">
							<?php print render($footer2) ?>
						</div>
					<?php } ?>
					
					<?php if($footer3) {?>
						<div id="footer3" class="<?php print $footer_blocks_span ?>">
							<?php print render($footer3) ?>
						</div>
					<?php } ?>
					
					<?php if($footer4) {?>
						<div id="footer4" class="<?php print $footer_blocks_span ?>">
							<?php print render($footer4) ?>
						</div>
					<?php } ?>
					
					<?php if($footer5) {?>
						<div id="footer5" class="<?php print $footer_blocks_span ?>">
							<?php print render($footer5) ?>
						</div>
					<?php } ?>		
						
					<?php if($footer6) {?>
						<div id="footer6" class="<?php print $footer_blocks_span ?>">
							<?php print render($footer6) ?>
						</div>
					<?php } ?>
				</div>
				
				<!--this div is used to find out position from jQuery, do NOT remove it -->
				<div id="positionLeft" style="width:1px; height:1px; float: right; overflow:hidden; line-height:1px;"></div>
				<!--end-->
				
				</div>
			<?php } ?>
			
			<?php if($footer) {?>
				<div id="footer">
					<?php print render($footer) ?>
				</div>
			<?php } ?>
			
		</div>
	<?php } ?>	<!-- footer blocks -->
	
	
	
</div><!-- MAIN STRUCTURE -->
</div>
</div>
</div><!-- CONTAINER-FLUID -->

<?php $toTop = t('Go to top'); 

if(theme_get_setting('show_feedback_link') == 1) {
	$give_feedback = t('Give us your valuable feedback');
	?>
	<div id="feedback-div" class="hidden-phone hidden-tablet">
		<a data-original-title="<?php print $give_feedback ?>" rel="tooltip" data-placement="right" id="feedback-link" href="#myModal" role="button"  data-toggle="modal"><img src="<?php print base_path() . path_to_theme() ?>/images/feedback.png" alt="" /></a>
	</div>
<?php } ?>
<?php if($modal) print render($modal); ?>
<?php if($modal_2) print render($modal_2); ?>
<?php if($modal_3) print render($modal_3); ?>

<div id="toTop" ><img class="visible-desktop" src="<?php print base_path() . path_to_theme() ?>/images/toTop.png" alt="<?php print $toTop ?>" /></div>

