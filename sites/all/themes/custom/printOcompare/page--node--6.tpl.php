<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<link rel="stylesheet" type="text/css" href="sites/all/themes/printOcompare/library/css/ptilt.css" />
<header id="header">
			<div class="container">
				<div class="header-inner clearfix">

					<!-- HEADER BRANDING : begin -->
					<div class="header-branding">
						<?php if ($logo): ?>
							<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
							  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
							</a>
						 <?php endif; ?>
					</div>
					<!-- HEADER BRANDING : end -->

					<!-- HEADER NAVBAR : begin -->
					<div class="header-navbar">

						<!-- HEADER MENU : begin -->
						<div class="header-menu">
							<button class="header-btn">Menu <i class="fa fa-angle-down"></i></button>
								<nav class="header-nav">
									<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
								</nav>
						</div>
						<!-- HEADER MENU : end -->

						<!-- HEADER TOOLS : begin -->
						<div class="header-tools">

							<!-- HEADER LANGUAGE : begin -->
							<div class="header-language">
								<button class="header-btn">EN <i class="fa fa-angle-down"></i></button>
								<nav class="header-nav">
									<ul class="custom-list">
										<li class="active"><a href="#">EN</a></li>
										<li><a href="#">DE</a></li>
										<li><a href="#">FR</a></li>
										<li><a href="#">IT</a></li>
									</ul>
								</nav>
							</div>
							<!-- HEADER LANGUAGE : end -->

							<!-- HEADER REGISTER : begin -->
							
							<?php

if(user_is_anonymous()) {  ?><div class="header-register">
							
								<button class="register-toggle header-btn"><i class="fa fa-plus-circle"></i> Register</button>
								<div class="header-form">
<?php								
  $form = drupal_get_form('user_register_form');
  $form['#attributes']['class'][] = 'default-form';
  print drupal_render($form);
?>
								</div>
							</div><?php } ?>
							<!-- HEADER REGISTER : end -->

							<!-- HEADER LOGIN : begin -->
							<?php

if(user_is_anonymous()) {  ?>
							<div class="header-login">
								<button class="login-toggle header-btn"><i class="fa fa-power-off"></i> Login</button>
								<div class="header-form">
								<?php								
  $elements = drupal_get_form('user_login');
  $elements['#attributes']['class'][] = 'default-form';
  $elements['submit']['#attributes']['class'] = 'submit-btn button';
  print drupal_render($elements);

?>							
								</div>
							</div><?php } 
							else  { ?>
							<span class="header-add-offer"><a href="user/logout" class="button"><i class="fa fa-plus"></i> Logout</a></span>
							<?php
							}
							?>
							<!-- HEADER LOGIN : end -->

							<!-- HEADER ADD OFFER : begin
							<span class="header-add-offer"><a href="#" class="button"><i class="fa fa-plus"></i> Add Offer</a></span>
							<!-- HEADER ADD OFFER : end -->

						</div>
						<!-- HEADER TOOLS : end -->

					</div>
					<!-- HEADER NAVBAR : end -->

					<!-- SEARCH TOGGLE : begin 
					<button class="search-toggle button"><i class="fa fa-search"></i></button>
					<!-- SEARCH TOGGLE : end -->

					<!-- NAVBAR TOGGLE : begin -->
					<button class="navbar-toggle button"><i class="fa fa-bars"></i></button>
					<!-- NAVBAR TOGGLE : end -->

				</div>
			</div>
		</header>
		<!-- HEADER : end -->
			<!-- CORE : begin -->
		<div id="core">
			<section id="browse" class="gs-search">
				<div class="container">
					<div class="row">
				<!-- HORIZONTAL TABS : begin -->
						<div class="tabs-container">
							<ul class="tab-title-list">
								<li class="tab-title active"><a href="#business-cards">Business Cards</a></li>
								<li class="tab-title"><a href="#letterheads">Letterheads</a></li>
								<li class="tab-title"><a href="#compliment-slips">Compliment Slips</a></li>
								<li class="tab-title"><a href="#flyers">Flyers</a></li>
							</ul>
							<ul class="tab-content-list">
								<li class="tab-content active">
									<?php print render($page['form_first']); ?>
								</li>
								<li class="tab-content">
									<?php print render($page['form_second']); ?>
								</li>
								<li class="tab-content">
									<?php print render($page['form_third']); ?>
								</li>
								<li class="tab-content">
									<?php print render($page['form_fourth']); ?>
								</li>
							</ul>
						</div>
						<!-- HORIZONTAL TABS : end --></div></div>
				
			</section>

			<!-- CONTENT SECTION - SERVICES : begin -->
			<section class="content-section">
				<div class="container">
					<div class="row">
						<?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>
  <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
						<?php if ($action_links): ?>
							<ul class="action-links">
							  <?php print render($action_links); ?>
							</ul>
						  <?php endif; ?>
						
					</div>

				</div>
			</section>
			<!-- CONTENT SECTION : end -->
			
			<div class="slideshow" id="slideshow">
				<ol class="slides">
					<li class="current">
						<div class="description">
							<h2>PrintPedia</h2>
							<p>Snowy madness in Switzerland! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
						</div>
						<div class="tiltview col">
							<a href="http://grovemade.com/"><img src="sites/all/themes/printOcompare/dummies/app.jpg"/></a>
							<a href="https://tsovet.com/"><img src="sites/all/themes/printOcompare/dummies/property_01.jpg"/></a>
						</div>
					</li>
					<li>
						<div class="description">
							<h2>Business Cards</h2>
							<p>Snowy madness in Switzerland! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.. </p>
						</div>
						<div class="tiltview row">
							<a href="http://pexcil.com/"><img src="sites/all/themes/printOcompare/dummies/top_destination_01.jpg"/></a>
							<a href="http://foodsense.is/"><img src="sites/all/themes/printOcompare/dummies/top_destination_02.jpg"/></a>
						</div>
					</li>
					<li>
						<div class="description">
							<h2>Letterheads</h2>
							<p>Snowy madness in Switzerland! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam..</p>
						</div>
						<div class="tiltview col">
							<a href="http://minimalmonkey.com/"><img src="sites/all/themes/printOcompare/dummies/top_destination_03.jpg"/></a>
							<a href="http://www.herschelsupply.com/"><img src="sites/all/themes/printOcompare/dummies/top_destination_04.jpg"/></a>
						</div>
					</li>
					<li>
						<div class="description">
							<h2>Complementry Slips</h2>
							<p>Snowy madness in Switzerland! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
						</div>
						<div class="tiltview row">
							<a href="http://grovemade.com/"><img src="sites/all/themes/printOcompare/dummies/top_destination_05.jpg"/></a>
							<a href="https://tsovet.com/"><img src="sites/all/themes/printOcompare/dummies/app.jpg"/></a>
						</div>
					</li>
					<li>
						<div class="description">
							<h2>Flyers</h2>
							<p>Snowy madness in Switzerland! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
						</div>
						<div class="tiltview col">
							<a href="http://pexcil.com/"><img src="sites/all/themes/printOcompare/dummies/top_destination_06.jpg"/></a>
							<a href="http://foodsense.is/"><img src="sites/all/themes/printOcompare/dummies/app.jpg"/></a>
						</div>
					</li>
					<li>
						<div class="description">
							<h2>Catalog</h2>
							<p>Snowy madness in Switzerland! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
						</div>
						<div class="tiltview row">
							<a href="http://minimalmonkey.com/"><img src="sites/all/themes/printOcompare/dummies/property_02.jpg"/></a>
							<a href="http://www.herschelsupply.com/"><img src="sites/all/themes/printOcompare/dummies/property_03.jpg"/></a>
						</div>
					</li>
				</ol>
			</div><!-- /slideshow -->

			<!-- CONTENT SECTION - OUR TEAM : begin -->
			<section class="content-section our-team">
				<div class="container">
					<div class="row">
						<div class="col-sm-5 col-sm-offset-7">

							<h2>Our team</h2>
							<p>We are a team of young passionates of travels. We needed a place to make our travels really something. That is how the idea of Casa came to life.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.</p>
							<p class="cta-button">
								<a href="#" class="button"><i class="fa fa-heart"></i> Get Started!</a>
							</p>

						</div>
					</div>
				</div>
			</section>
		</div>
		<!--core end -->
		
		<!-- BOTTOM PANEL : begin -->
		<aside id="bottom-panel">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">

						<!-- ABOUT WIDGET : begin -->
						<div class="widget about-widget">
							<div class="widget-content">
								<p><img src="./dummies/logo_footer.png" alt="Casa" /></p>
								<p>PrintPedia is a modern way of planning and spending your vacation. Enjoy your holiday the best you can!</p>
							</div>
						</div>
						<!-- ABOUT WIDGET : end -->

					</div>
					<div class="col-sm-3">

						<!-- LINKS WIDGET : begin -->
						<div class="widget links-widget">
							<h3 class="widget-title"><span>Quick Links</span></h3>
							<div class="widget-content">
								<div class="row">
									<div class="col-md-6">
										<ul class="custom-list">
											<li><a href="#">Home</a></li>
											<li><a href="/about">About Us</a></li>
											<li><a href="contaact">Contact Us</a></li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul class="custom-list">
											<li><a href="#">Register</a></li>
											<li><a href="#">Login</a></li>
											<li><a href="offer">Offer</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- LINKS WIDGET : end -->

					</div>
					<div class="col-sm-3">

						<!-- TWITTER WIDGET : begin -->
						<div class="widget twitter-widget loading">
							<h3 class="widget-title">
								<span>Latest Tweets</span>
								<span class="tweet-nav">
									<span class="tweet-nav-prev"><i class="fa fa-chevron-left"></i></span>
									<span class="tweet-nav-next"><i class="fa fa-chevron-right"></i></span>
								</span>
							</h3>
							<div class="widget-content">
								<div class="twitter-feed paginated" data-id="uouapps" data-limit="3" data-interval="0"><span class="loading-anim"><span></span></span></div>
							</div>
						</div>
						<!-- TWITTER WIDGET : end -->

					</div>
					<div class="col-sm-3">

						<!-- NEWSLETTER WIDGET : begin -->
						<div class="widget newsletter-widget">
							<h3 class="widget-title"><span>Newsletter</span></h3>
							<div class="widget-content">
								<p>Sign up for our newsletter!</p>
								<form class="default-form" action="index.html" />
									<p class="alert-message warning"><i class="ico fa fa-exclamation-circle"></i> Valid email is required!</p>
									<div class="input-group">
										<input class="required email" type="text" placeholder="Email address ..." />
										<button><i class="fa fa-plus-circle"></i></button>
									</div>
								</form>
							</div>
						</div>
						<!-- NEWSLETTER WIDGET : end -->

					</div>
				</div>
			</div>
		</aside>
		<!-- BOTTOM PANEL : end -->
		
	<!-- FOOTER : begin -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- FOOTER TEXT : begin -->
						<p>Copyright 2014 &copy; <a href="http://printpedia.co.uk">PrintPedia</a>. All rights reserved.</p>
						<!-- FOOTER TEXT : end -->

					</div>
					<div class="col-sm-4">

						<!-- FOOTER SOCIAL : begin -->
						<ul class="footer-social custom-list">
							<li><a href="#" title="Facebook"><i class="fa fa-facebook-square"></i><span>Facebook</span></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter-square"></i><span>Twitter</span></a></li>
							<li><a href="#" title="Google+"><i class="fa fa-google-plus-square"></i><span>Google+</span></a></li>
							<li><a href="#" title="LinkedIn"><i class="fa fa-linkedin-square"></i><span>LinkedIn</span></a></li>
							<li><a href="#" title="Pinterest"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
						</ul>
						<!-- FOOTER SOCIAL : end -->

					</div>
				</div>
			</div>
		</footer>
		<!-- FOOTER : end -->
		<script src="sites/all/themes/printOcompare/library/js/tilt/modernizr.custom.js" type="text/javascript"></script>
		<script src="sites/all/themes/printOcompare/library/js/classie.js" type="text/javascript"></script>
		<script src="sites/all/themes/printOcompare/library/js/tiltSlider.js" type="text/javascript"></script>
		<script src="sites/all/themes/printOcompare/library/js/tilt/wait.js" type="text/javascript"></script>
		<script>
			new TiltSlider( document.getElementById( 'slideshow' ) );
			jQuery(document).ready(function($){
var el=1;
repeat(7000,function(){
if(el==7){
$('#slideshow nav span:nth-child(1)').click();
el=2;
}
else{
$('#slideshow nav span:nth-child('+el+')').click();
el=el+1;
}
});
});
		</script>