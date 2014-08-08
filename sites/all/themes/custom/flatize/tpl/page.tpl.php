<?php

/**
 * @file
 * Flatize's theme implementation to display a single Drupal page.
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

<div id="page-wrapper">
  <div id="page">
    <?php if(isset($page['show_skins_menu']) && $page['show_skins_menu']):?>
      <?php print $page['show_skins_menu'];?>
    <?php endif; ?>

    <?php if($headline = render($page['headline'])): ?>
      <section id="headline" class="headline section">
        <div class="container">
          <?php print $headline; ?>
        </div>
      </section>
    <?php endif;?>

    <header id="header" class="header section navbar navbar-default">
      <div class="container">

        <div class="navbar-header">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>

          <?php if ($site_name || $site_slogan): ?>
            <div id="name-and-slogan">
              <?php if ($site_name): ?>
                <?php if ($title): ?>
                  <div id="site-name">
                    <strong>
                      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                        <span><?php print $site_name; ?></span>
                      </a>
                    </strong>
                  </div>
                <?php else: /* Use h1 when the content title is empty */ ?>
                  <h1 id="site-name">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                      <span><?php print $site_name; ?></span>
                    </a>
                  </h1>
                <?php endif; ?>
              <?php endif; ?>

              <?php if ($site_slogan): ?>
                <div id="site-slogan"><?php print $site_slogan; ?></div>
              <?php endif; ?>
            </div>
          <?php endif; ?>

          <?php print render($page['header']); ?>

          <?php if ($userlogin = render($page['user_login'])): ?>
          <div class="wp-special-button">
            <div class="wp-user">
              <i class="wp-icon-user wp-icon-user-login fa fa-user"></i>
            </div>
          </div>
          <?php endif; ?>

          <?php if($main_menu = render($page['main_menu'])): ?>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-inner">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php endif; ?>
        </div>

        <?php if ($main_menu): ?>
          <nav class="collapse navbar-collapse width" id="main-menu-inner">
            <?php print $main_menu; ?>
          </nav>
        <?php endif;?>
      </div>
    </header>

    <div id="wp-search" class="search-wrapper">
      <div class="container">
      </div>
    </div>

    <?php if ($userlogin): ?>
    <div id="wp-user-wrapper" class="wp-special-button-content">
      <?php print $userlogin; ?>
    </div>
    <?php endif; ?>

    <?php if ($slideshow = render($page['slideshow'])): ?>
      <section id="slideshow" class="slideshow section">
        <div class="container-fluid">
          <?php print $slideshow;?>
        </div>
      </section>
    <?php endif;?>

    <?php if ($slideshow2 = render($page['slideshow2'])): ?>
      <section id="slideshow2" class="slideshow2 section">
        <div class="container">
          <?php print $slideshow2; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php $current_path = current_path(); ?>
    <?php if ($title && $current_path != 'home2'): ?>
      <section id="main-title" class="main-title<?php echo $titlebg ? ' wp-title-' . $titlebg : '';?>">
        <div class="container">
          <?php print render($title_prefix); ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
          <?php print render($title_suffix); ?>
        </div>
      </section>
    <?php endif; ?>

    <?php if ($messages): ?>
      <section id="messages" class="message section">
        <div class="container">
          <?php print $messages; ?>
        </div>
      </section>
    <?php endif;?>

    <section id="main" class="main section">
      <div class="container">
        <div class="row">
          <div class="col-md-<?php print $regions_width['content']?>">
            <div id="content" class="column">
              <div class="section">
                <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                <?php if ($tabcontent = render($tabs)): ?><div class="tabs"><?php print $tabcontent; ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
              </div>
            </div>
          </div>
          <?php if ($regions_width['sidebar_first']): ?>
            <aside id="sidebar-first" class="sidebar col-md-<?php print $regions_width['sidebar_first']?>">
              <div class="section">
                <?php print render($page['sidebar_first']); ?>
              </div>
            </aside>
          <?php endif; ?>
          <?php if ($page['sidebar_second']): ?>
            <aside id="sidebar-second" class="sidebar col-md-<?php print $regions_width['sidebar_second']?>">
              <div class="section">
                <?php print render($page['sidebar_second']); ?>
              </div>
            </aside>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <?php if($panel_first = render($page['panel_first'])): ?>
      <section id="panel-first" class="panel">
        <div class="container">
          <?php print $panel_first;?>
        </div>
      </section>
    <?php endif; ?>

    <?php if($panel_second = render($page['panel_second'])): ?>
      <section id="panel-second" class="panel">
        <div class="container">
          <?php print $panel_second;?>
        </div>
      </section>
    <?php endif; ?>

    <?php if($panel_third = render($page['panel_third'])): ?>
      <section id="panel-third" class="panel">
        <div class="container">
          <?php print $panel_third;?>
        </div>
      </section>
    <?php endif; ?>

    <?php if($panel_fourth = render($page['panel_fourth'])): ?>
      <section id="panel-fourth" class="panel">
        <div class="parallax">
          <div class="parallax-bg" data-stellar-background-ratio="0.2" data-stellar-vertical-offset="50" style="background-position: 50% -12.200000000000001px;">
            <div class="parallax-content">
              <div class="container">
                <?php print $panel_fourth;?>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <?php if($panel_fifth = render($page['panel_fifth'])): ?>
      <section id="panel-fifth" class="panel">
        <div class="container">
          <?php print $panel_fifth;?>
        </div>
      </section>
    <?php endif; ?>

    <?php if($panel_sixth = render($page['panel_sixth'])): ?>
      <section id="panel-sixth" class="panel">
        <div class="container">
          <?php print $panel_sixth;?>
        </div>
      </section>
    <?php endif; ?>

    <?php if ($panel_seventh = render($page['panel_seventh'])): ?>
      <section id="panel-seventh" class="panel">
        <div class="container">
          <div class="row">
            <?php print $panel_seventh; ?>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <?php if ($panel_eighth = render($page['panel_eighth'])): ?>
      <section id="panel-eighth" class="panel">
        <div class="container">
          <?php print $panel_eighth; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php if($gmap = render($page['gmap'])): ?>
      <section id="gmap">
        <?php print $gmap; ?>
      </section>
    <?php endif; ?>

    <?php if ($breadcrumb): ?>
      <section id="breadcrumb" class="section">
        <div class="container">
          <?php print $breadcrumb; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php if($panel_footer = render($page['panel_footer'])): ?>
      <section id="panel-footer" class="panel">
        <div class="container">
          <div class="row">
            <?php print $panel_footer;?>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <?php if($footer = render($page['footer'])): ?>
      <footer id="footer" class="section">
        <div class="container">
          <?php print $footer; ?>
          <!--?php print $feed_icons; ?-->
        </div>
      </footer>
    <?php endif;?>
    <a title="<?php print t('Back to Top')?>" class="btn-btt" href="#Top"><?php print t('Back to Top')?></a>
  </div>
</div>
