<?php
/**
 * @file
 * f_theme_layout.panels_default.inc
 */

/**
 * Implements hook_default_panels_mini().
 */
function f_theme_layout_default_panels_mini() {
  $export = array();

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'footer_1';
  $mini->category = '';
  $mini->admin_title = 'Footer 1';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array(
    'items' => array(
      'canvas' => array(
        'type' => 'row',
        'contains' => 'column',
        'children' => array(
          0 => 'main',
        ),
        'parent' => NULL,
      ),
      'main' => array(
        'type' => 'column',
        'width' => 100,
        'width_type' => '%',
        'children' => array(
          0 => 'main-row',
        ),
        'parent' => 'canvas',
        'class' => 'container',
      ),
      'main-row' => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'center',
        ),
        'parent' => 'main',
        'class' => '',
      ),
      'center' => array(
        'type' => 'region',
        'title' => 'Center',
        'width' => 100,
        'width_type' => '%',
        'parent' => 'main-row',
        'class' => 'row',
      ),
    ),
  );
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = 'db4ddbd1-74fd-4109-891f-b620a713943e';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-af65b519-ab3a-4da9-a4ca-3d8f11df64f6';
    $pane->panel = 'center';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => '',
      'title' => '',
      'body' => 'PrintPedia is a modern way of planning and spending your vacation. Enjoy your holiday the best you can!',
      'format' => 'filtered_html',
      'substitute' => TRUE,
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-3',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'af65b519-ab3a-4da9-a4ca-3d8f11df64f6';
    $display->content['new-af65b519-ab3a-4da9-a4ca-3d8f11df64f6'] = $pane;
    $display->panels['center'][0] = 'new-af65b519-ab3a-4da9-a4ca-3d8f11df64f6';
    $pane = new stdClass();
    $pane->pid = 'new-828518a0-3ada-46ec-8e40-feb042e9cf14';
    $pane->panel = 'center';
    $pane->type = 'block';
    $pane->subtype = 'menu-menu-quick-links';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-3',
    );
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '828518a0-3ada-46ec-8e40-feb042e9cf14';
    $display->content['new-828518a0-3ada-46ec-8e40-feb042e9cf14'] = $pane;
    $display->panels['center'][1] = 'new-828518a0-3ada-46ec-8e40-feb042e9cf14';
    $pane = new stdClass();
    $pane->pid = 'new-0cdb6ede-0e27-4004-8230-f7688bf3c521';
    $pane->panel = 'center';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => '',
      'title' => '',
      'body' => '<!-- TWITTER WIDGET : begin -->
						<div class="widget twitter-widget loading">
							<h2 class="widget-title">
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
						<!-- TWITTER WIDGET : end -->',
      'format' => 'full_html',
      'substitute' => TRUE,
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-3',
    );
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '0cdb6ede-0e27-4004-8230-f7688bf3c521';
    $display->content['new-0cdb6ede-0e27-4004-8230-f7688bf3c521'] = $pane;
    $display->panels['center'][2] = 'new-0cdb6ede-0e27-4004-8230-f7688bf3c521';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = '0';
  $mini->display = $display;
  $export['footer_1'] = $mini;

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'footer_2';
  $mini->category = '';
  $mini->admin_title = 'Footer 2';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array(
    'items' => array(
      'canvas' => array(
        'type' => 'row',
        'contains' => 'column',
        'children' => array(
          0 => 'main',
        ),
        'parent' => NULL,
      ),
      'main' => array(
        'type' => 'column',
        'width' => 100,
        'width_type' => '%',
        'children' => array(
          0 => 'main-row',
        ),
        'parent' => 'canvas',
      ),
      'main-row' => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'center',
        ),
        'parent' => 'main',
      ),
      'center' => array(
        'type' => 'region',
        'title' => 'Center',
        'width' => 100,
        'width_type' => '%',
        'parent' => 'main-row',
        'class' => 'row tprint-footer-2',
      ),
    ),
  );
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '51058f1b-cc3c-4193-ba67-8497a1418876';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-aa186a1b-e7a1-4e7b-8753-1ba1b1269968';
    $pane->panel = 'center';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => '',
      'title' => '',
      'body' => '<p>Copyright 2014 &copy; <a href="http://printpedia.co.uk">PrintPedia</a>. All rights reserved.</p>',
      'format' => 'filtered_html',
      'substitute' => TRUE,
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-6',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'aa186a1b-e7a1-4e7b-8753-1ba1b1269968';
    $display->content['new-aa186a1b-e7a1-4e7b-8753-1ba1b1269968'] = $pane;
    $display->panels['center'][0] = 'new-aa186a1b-e7a1-4e7b-8753-1ba1b1269968';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = '0';
  $mini->display = $display;
  $export['footer_2'] = $mini;

  return $export;
}
