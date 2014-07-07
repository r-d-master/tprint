<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
<title><?php print $head_title; ?></title>
    <!--[if lt IE 9]>
        <script type="text/javascript" src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<link rel="stylesheet" type="text/css" href="sites/all/themes/printOcompare/library/css/maint/style.css" />
<link rel="stylesheet" type="text/css" href="sites/all/themes/printOcompare/library/css/maint/plugins.css" />
<script src="sites/all/themes/printOcompare/library/js/maint/jquery.js" type="text/javascript"></script>

<script src="sites/all/themes/printOcompare/library/js/maint/plugins.js" type="text/javascript"></script>
<script src="sites/all/themes/printOcompare/library/js/maint/script.js" type="text/javascript"></script>
<script src="sites/all/themes/printOcompare/library/js/maint/customss.js" type="text/javascript"></script>
</head>
<body id="container">
<!-- BEGIN MAIN PAGE -->
	<div id="page-main" class="page active">
		<div class="content-wrapper with-footer">
			<!-- BEGIN CONTENT SECTION FOR MAIN PAGE -->
			<section class="content">
				<div class="entries">
					<div id="main" class="entry">
						<h1 id="logo" class="anim-go-left"><a href="#"><span>Bersua</span></a></h1>				
						<h2 class="anim-go-right">We're Coming Soon In</h2>	
						<div id="countdown" class="anim-go-left"></div>
						<h5 class="anim-go-right">Subscribe to our mailing list or follow us on social media to stay up to date.</h5>
						<form id="newsletter-form" class="the-form anim-go-left" action="">
							<div class="field-wrapper">
								<input type="text" class="textfield" name="email" placeholder="Email address" />
								<button type="submit" class="btn">Subscribe</button>
								<a class="btn btn-trigger" href="#page-contact">Login</a>
								<input type="hidden" name="submit" value="1" />
							</div>
							<div class="message"></div>
						</form>	
					</div>
				</div>
				<div class="push"></div>
			</section><!-- END CONTENT SECTION --></div></div>
			
			<!-- BEGIN CONTACT PAGE -->
	<div id="page-contact" class="page hidden deactive">
		<div class="content-wrapper">			
			<!-- BEGIN CONTENT SECTION FOR CONTACT PAGE -->
			<section class="content">
				<div class="entries">					
					<div id="contact" class="entry">						
						<a class="btn btn-trigger btn-close anim-go-left" href="#page-main">X</a>
						<h2 class="anim-go-left">Admin Login</h2>
						<br/>
						<h5 class="anim-go-right">Login for admin. If you are an admin login here</h5><br/>
						<?php								
  $elements = drupal_get_form('user_login');
  $elements['#attributes']['class'][] = 'the-form';
  $elements['actions']['submit']['#attributes']['class'][] = 'btn anim-go-right';
  $elements['name']['#attributes']['class'][] = 'textfield anim-go-left';
  $elements['pass']['#attributes']['class'][] = 'textfield anim-go-right';
  print drupal_render($elements);

?>
					</div>
				</div>
			</section><!-- END CONTENT SECTION -->			
		</div>
	</div><!-- END CONTACT PAGE -->
			
			</body>
			</html>