		<!-- HEADER : begin -->
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

?>					</div>
							</div><?php } 
							else  { ?>
							<span class="header-add-offer"><a href="user/logout" class="button"><i class="fa fa-plus"></i> Logout</a></span>
							<?php
							}
							?>
							<!-- HEADER LOGIN : end -->							
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

		<!-- BANNER : begin -->
		<div id="banner">

			<!-- BANNER BG : begin -->
			<div class="banner-bg">
				<div class="banner-bg-item"><img src="sites/all/themes/printOcompare/dummies/PrintPedia_BusinessCard-4.jpg" alt="" /></div>
				<div class="banner-bg-item"><img src="sites/all/themes/printOcompare/dummies/LetterHead.jpg" alt="" /></div>
				<div class="banner-bg-item"><img src="sites/all/themes/printOcompare/dummies/Complimentry.jpg" alt="" /></div>
				<div class="banner-bg-item"><img src="sites/all/themes/printOcompare/dummies/banner_bg_03.jpg" alt="" /></div>
			</div>
			<!-- BANNER BG : end -->

			<!-- BANNER SEARCH : begin -->
			<div class="banner-search">
				<div class="container">
					<div class="banner-search-inner">
						<ul class="custom-list tab-title-list clearfix">
							<li class="tab-title active"><a href="#swap">Business Cards</a></li>
							<li class="tab-title"><a href="#book">Letterheads</a></li>
							<li class="tab-title"><a href="#rent">Compliment Slips</a></li>
							<li class="tab-title"><a href="#flyers">Flyers</a></li>
						</ul>
						<ul class="custom-list tab-content-list">

							<!-- SWAP : begin -->
							<li class="tab-content active">
								<?php print render($page['form_first']); ?>
							</li>
							<!-- SWAP : end -->

							<!-- BOOK : begin -->
							<li class="tab-content">
								<?php print render($page['form_second']); ?>
							</li>
							<!-- BOOK : end -->

							<!-- RENT : begin -->
							<li class="tab-content">
								<?php print render($page['form_third']); ?>
							</li>
							<!-- RENT : end -->
							<!-- Flyers : begin -->
							<li class="tab-content">
								<?php print render($page['form_fourth']); ?>
							</li>
							<!-- Flyers : end -->

						</ul>
					</div>
				</div>
			</div>
			<!-- BANNER SEARCH : end -->

		</div>
		<!-- BANNER : end -->

		<!-- CORE : begin -->
		<div id="core">			
		<!-- CONTENT SECTION : begin -->
			<section class="content-section deal">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">

							<p><img src="sites/all/themes/printOcompare/dummies/content_img_02.jpg" alt="" class="rounded-shadow" /></p>

						</div>
						<div class="col-sm-9">

							<h2>Deal of the week!</h2>
							<p>Snowy madness in Switzerland! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
							<p class="cta-button">
								<a href="offer" class="button"><i class="fa fa-list-ul"></i> See Details</a>
							</p>

						</div>
					</div>
				</div>
			</section>
			<!-- CONTENT SECTION : end -->
		
		<section class="content-section app">
				<div class="container">
					<div class="col-sm-6"><img src="sites/all/themes/printOcompare/dummies/app.jpg" alt="" /></div>
					<div class="col-sm-6">abcd</div>
				</div>
		</section>
		<!--<section class="content-section company" id="comp-help">
				<div class="container">
					<div class="row">
						
						
					</div>
				</div>
		</section>-->
		<!-- CONTENT SECTION: begin -->
			<section class="content-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">

							<h2>About PrintPedia</h2>
							<p>Casa was made to make your travelling around the world more exciting and less expensive!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
							<p class="cta-button">
								<a href="about" class="button"><i class="fa fa-heart"></i> Read More!</a>
							</p>

						</div>
						<div class="col-sm-6">

							<p><img src="sites/all/themes/printOcompare/dummies/content_img_01.jpg" alt="" /></p>

						</div>
					</div>
				</div>
			</section>
			<!-- CONTENT SECTION : end -->

		</div>
		<!-- CORE : end -->

		<!-- TESTIMONIALS : begin -->
		<div id="testimonials">
			<div class="container">
				<div class="testimonials-inner">

					<!-- TESTIMONIAL LIST : begin -->
					<div class="testimonial-list">

						<!-- TESTIMONIAL 1 : begin -->
						<div class="testimonial">
							<p class="portrait"><img src="./dummies/portrait_01_200.jpg" alt="Jenny" /></p>
							<blockquote class="quote">
								<p>I had the best time of my life and all thanks to Casa! It’s so amazing, everyone should try it!</p>
								<footer><cite>Jenny - Toronto, Canada</cite></footer>
							</blockquote>
						</div>
						<!-- TESTIMONIAL 1 : end -->

						<!-- TESTIMONIAL 2 : begin -->
						<div class="testimonial">
							<p class="portrait"><img src="./dummies/portrait_02_200.jpg" alt="Jenny" /></p>
							<blockquote class="quote">
								<p>I had the best time of my life and all thanks to Casa! It’s so amazing, everyone should try it!</p>
								<footer><cite>Jenny - Toronto, Canada</cite></footer>
							</blockquote>
						</div>
						<!-- TESTIMONIAL 2 : end -->

						<!-- TESTIMONIAL 3 : begin -->
						<div class="testimonial">
							<p class="portrait"><img src="./dummies/portrait_03_200.jpg" alt="Jenny" /></p>
							<blockquote class="quote">
								<p>I had the best time of my life and all thanks to Casa! It’s so amazing, everyone should try it!</p>
								<footer><cite>Jenny - Toronto, Canada</cite></footer>
							</blockquote>
						</div>
						<!-- TESTIMONIAL 3 : end -->

					</div>
					<!-- TESTIMONIAL LIST : end -->

					<!-- NAVIGATION : begin -->
					<div class="navigation">
						<button class="button prev"><i class="fa fa-chevron-left"></i></button>
						<button class="button next"><i class="fa fa-chevron-right"></i></button>
					</div>
					<!-- NAVIGATION : end -->

				</div>
			</div>
		</div>
		<!-- TESTIMONIALS : end -->

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