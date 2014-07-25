<?php
/**
 * @file
 * f_theme_layout.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function f_theme_layout_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panel_context';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Business Cards',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'business_card' => 'business_card',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
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
        'class' => '',
      ),
      'center' => array(
        'type' => 'region',
        'title' => 'Center',
        'width' => 100,
        'width_type' => '%',
        'parent' => 'main-row',
        'class' => 'row tprint-product-view',
      ),
    ),
  );
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'left' => NULL,
      'middle' => NULL,
      'right' => NULL,
      'bottom' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '8b00483a-b991-4327-888d-fd22b52b66b3';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $pane->panel = 'center';
    $pane->type = 'node_title';
    $pane->subtype = 'node_title';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'link' => 0,
      'markup' => 'none',
      'id' => '',
      'class' => '',
      'context' => 'argument_entity_id:node_1',
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-12 text-center product-title',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $display->content['new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d'] = $pane;
    $display->panels['center'][0] = 'new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $pane = new stdClass();
    $pane->pid = 'new-921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:uc_product_image';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'image',
      'delta_limit' => '0',
      'delta_offset' => '0',
      'delta_reversed' => 0,
      'formatter_settings' => array(
        'colorbox_node_style' => 'uc_product_full',
        'colorbox_node_style_first' => '',
        'colorbox_image_style' => 'uc_product_full',
        'colorbox_gallery' => 'post',
        'colorbox_gallery_custom' => '',
        'colorbox_caption' => 'auto',
        'colorbox_caption_custom' => '',
        'image_style' => 'uc_product',
        'image_link' => '',
      ),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $display->content['new-921d547e-b12b-4ff2-82f7-e9efdd7645de'] = $pane;
    $display->panels['center'][1] = 'new-921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $pane = new stdClass();
    $pane->pid = 'new-517669fb-e7b3-4114-9aaf-e763cc4040ab';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_bc_color_option';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '517669fb-e7b3-4114-9aaf-e763cc4040ab';
    $display->content['new-517669fb-e7b3-4114-9aaf-e763cc4040ab'] = $pane;
    $display->panels['center'][2] = 'new-517669fb-e7b3-4114-9aaf-e763cc4040ab';
    $pane = new stdClass();
    $pane->pid = 'new-e66189de-0580-4555-a751-89d63206ddf6';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_uc_delivery';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = 'e66189de-0580-4555-a751-89d63206ddf6';
    $display->content['new-e66189de-0580-4555-a751-89d63206ddf6'] = $pane;
    $display->panels['center'][3] = 'new-e66189de-0580-4555-a751-89d63206ddf6';
    $pane = new stdClass();
    $pane->pid = 'new-f1ec5361-4174-49e3-8b09-d5204efd5e67';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_bc_paper_weight';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 4;
    $pane->locks = array();
    $pane->uuid = 'f1ec5361-4174-49e3-8b09-d5204efd5e67';
    $display->content['new-f1ec5361-4174-49e3-8b09-d5204efd5e67'] = $pane;
    $display->panels['center'][4] = 'new-f1ec5361-4174-49e3-8b09-d5204efd5e67';
    $pane = new stdClass();
    $pane->pid = 'new-cba1e8e4-ae99-4e2d-ac75-3d31a7428c59';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_bc_uv_coating';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 5;
    $pane->locks = array();
    $pane->uuid = 'cba1e8e4-ae99-4e2d-ac75-3d31a7428c59';
    $display->content['new-cba1e8e4-ae99-4e2d-ac75-3d31a7428c59'] = $pane;
    $display->panels['center'][5] = 'new-cba1e8e4-ae99-4e2d-ac75-3d31a7428c59';
    $pane = new stdClass();
    $pane->pid = 'new-67a99f2a-ce01-429f-99fb-6162bb58bc11';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_bc_paper_stock';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 6;
    $pane->locks = array();
    $pane->uuid = '67a99f2a-ce01-429f-99fb-6162bb58bc11';
    $display->content['new-67a99f2a-ce01-429f-99fb-6162bb58bc11'] = $pane;
    $display->panels['center'][6] = 'new-67a99f2a-ce01-429f-99fb-6162bb58bc11';
    $pane = new stdClass();
    $pane->pid = 'new-061d3f9b-3fe3-4907-94dc-404e36eee46c';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_bc_sides';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 7;
    $pane->locks = array();
    $pane->uuid = '061d3f9b-3fe3-4907-94dc-404e36eee46c';
    $display->content['new-061d3f9b-3fe3-4907-94dc-404e36eee46c'] = $pane;
    $display->panels['center'][7] = 'new-061d3f9b-3fe3-4907-94dc-404e36eee46c';
    $pane = new stdClass();
    $pane->pid = 'new-1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $pane->panel = 'center';
    $pane->type = 'entity_field_extra';
    $pane->subtype = 'node:sell_price';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'view_mode' => 'full',
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 8;
    $pane->locks = array();
    $pane->uuid = '1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $display->content['new-1bafc52b-0729-4fff-9a60-a24171cf6e9a'] = $pane;
    $display->panels['center'][8] = 'new-1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $pane = new stdClass();
    $pane->pid = 'new-c098903d-3029-45a9-8335-5720f8d7db70';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:body';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'text_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-12 text-center product-desc',
    );
    $pane->extras = array();
    $pane->position = 9;
    $pane->locks = array();
    $pane->uuid = 'c098903d-3029-45a9-8335-5720f8d7db70';
    $display->content['new-c098903d-3029-45a9-8335-5720f8d7db70'] = $pane;
    $display->panels['center'][9] = 'new-c098903d-3029-45a9-8335-5720f8d7db70';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view_panel_context'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panel_context_2';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 1;
  $handler->conf = array(
    'title' => 'Letterheads',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'letterheads' => 'letterheads',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
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
        'class' => '',
      ),
      'center' => array(
        'type' => 'region',
        'title' => 'Center',
        'width' => 100,
        'width_type' => '%',
        'parent' => 'main-row',
        'class' => 'row tprint-product-view',
      ),
    ),
  );
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'left' => NULL,
      'middle' => NULL,
      'right' => NULL,
      'bottom' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '8b00483a-b991-4327-888d-fd22b52b66b3';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $pane->panel = 'center';
    $pane->type = 'node_title';
    $pane->subtype = 'node_title';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'link' => 0,
      'markup' => 'none',
      'id' => '',
      'class' => '',
      'context' => 'argument_entity_id:node_1',
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-12 text-center product-title',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $display->content['new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d'] = $pane;
    $display->panels['center'][0] = 'new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $pane = new stdClass();
    $pane->pid = 'new-921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:uc_product_image';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'image',
      'delta_limit' => '0',
      'delta_offset' => '0',
      'delta_reversed' => 0,
      'formatter_settings' => array(
        'colorbox_node_style' => 'uc_product_full',
        'colorbox_node_style_first' => '',
        'colorbox_image_style' => 'uc_product_full',
        'colorbox_gallery' => 'post',
        'colorbox_gallery_custom' => '',
        'colorbox_caption' => 'auto',
        'colorbox_caption_custom' => '',
        'image_style' => 'uc_product',
        'image_link' => '',
      ),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $display->content['new-921d547e-b12b-4ff2-82f7-e9efdd7645de'] = $pane;
    $display->panels['center'][1] = 'new-921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $pane = new stdClass();
    $pane->pid = 'new-e66189de-0580-4555-a751-89d63206ddf6';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_uc_delivery';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = 'e66189de-0580-4555-a751-89d63206ddf6';
    $display->content['new-e66189de-0580-4555-a751-89d63206ddf6'] = $pane;
    $display->panels['center'][2] = 'new-e66189de-0580-4555-a751-89d63206ddf6';
    $pane = new stdClass();
    $pane->pid = 'new-ee5e5900-9250-4325-b562-cddccaf39cab';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_lh_paper_stock';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = 'ee5e5900-9250-4325-b562-cddccaf39cab';
    $display->content['new-ee5e5900-9250-4325-b562-cddccaf39cab'] = $pane;
    $display->panels['center'][3] = 'new-ee5e5900-9250-4325-b562-cddccaf39cab';
    $pane = new stdClass();
    $pane->pid = 'new-f73ec063-e0a3-4d6b-89ac-8008a870b0f3';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_lh_paper_weight';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 4;
    $pane->locks = array();
    $pane->uuid = 'f73ec063-e0a3-4d6b-89ac-8008a870b0f3';
    $display->content['new-f73ec063-e0a3-4d6b-89ac-8008a870b0f3'] = $pane;
    $display->panels['center'][4] = 'new-f73ec063-e0a3-4d6b-89ac-8008a870b0f3';
    $pane = new stdClass();
    $pane->pid = 'new-7886bae7-fd4c-4b00-813c-de2e2f4f2001';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_lh_size';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 5;
    $pane->locks = array();
    $pane->uuid = '7886bae7-fd4c-4b00-813c-de2e2f4f2001';
    $display->content['new-7886bae7-fd4c-4b00-813c-de2e2f4f2001'] = $pane;
    $display->panels['center'][5] = 'new-7886bae7-fd4c-4b00-813c-de2e2f4f2001';
    $pane = new stdClass();
    $pane->pid = 'new-1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $pane->panel = 'center';
    $pane->type = 'entity_field_extra';
    $pane->subtype = 'node:sell_price';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'view_mode' => 'full',
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 6;
    $pane->locks = array();
    $pane->uuid = '1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $display->content['new-1bafc52b-0729-4fff-9a60-a24171cf6e9a'] = $pane;
    $display->panels['center'][6] = 'new-1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $pane = new stdClass();
    $pane->pid = 'new-c098903d-3029-45a9-8335-5720f8d7db70';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:body';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'text_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-12 text-center product-desc',
    );
    $pane->extras = array();
    $pane->position = 7;
    $pane->locks = array();
    $pane->uuid = 'c098903d-3029-45a9-8335-5720f8d7db70';
    $display->content['new-c098903d-3029-45a9-8335-5720f8d7db70'] = $pane;
    $display->panels['center'][7] = 'new-c098903d-3029-45a9-8335-5720f8d7db70';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view_panel_context_2'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panel_context_3';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 2;
  $handler->conf = array(
    'title' => 'Flyers',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(
      0 => array(
        'identifier' => 'Cart item from Node (on uc_cart_products.node)',
        'keyword' => 'node_2',
        'name' => 'entity_from_schema:nid-node-uc_cart_item',
        'context' => 'argument_entity_id:node_1',
        'id' => 1,
      ),
    ),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'flyers' => 'flyers',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
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
        'class' => '',
      ),
      'center' => array(
        'type' => 'region',
        'title' => 'Center',
        'width' => 100,
        'width_type' => '%',
        'parent' => 'main-row',
        'class' => 'row tprint-product-view',
      ),
    ),
  );
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'left' => NULL,
      'middle' => NULL,
      'right' => NULL,
      'bottom' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '8b00483a-b991-4327-888d-fd22b52b66b3';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $pane->panel = 'center';
    $pane->type = 'node_title';
    $pane->subtype = 'node_title';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'link' => 0,
      'markup' => 'none',
      'id' => '',
      'class' => '',
      'context' => 'argument_entity_id:node_1',
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-12 text-center product-title',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $display->content['new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d'] = $pane;
    $display->panels['center'][0] = 'new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $pane = new stdClass();
    $pane->pid = 'new-921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:uc_product_image';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'image',
      'delta_limit' => '0',
      'delta_offset' => '0',
      'delta_reversed' => 0,
      'formatter_settings' => array(
        'colorbox_node_style' => 'uc_product_full',
        'colorbox_node_style_first' => '',
        'colorbox_image_style' => 'uc_product_full',
        'colorbox_gallery' => 'post',
        'colorbox_gallery_custom' => '',
        'colorbox_caption' => 'auto',
        'colorbox_caption_custom' => '',
        'image_style' => 'uc_product',
        'image_link' => '',
      ),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $display->content['new-921d547e-b12b-4ff2-82f7-e9efdd7645de'] = $pane;
    $display->panels['center'][1] = 'new-921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $pane = new stdClass();
    $pane->pid = 'new-e66189de-0580-4555-a751-89d63206ddf6';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_uc_delivery';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = 'e66189de-0580-4555-a751-89d63206ddf6';
    $display->content['new-e66189de-0580-4555-a751-89d63206ddf6'] = $pane;
    $display->panels['center'][2] = 'new-e66189de-0580-4555-a751-89d63206ddf6';
    $pane = new stdClass();
    $pane->pid = 'new-3d23325f-7d1a-4e34-8be1-6e35d83c79b0';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_f_color_option';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = '3d23325f-7d1a-4e34-8be1-6e35d83c79b0';
    $display->content['new-3d23325f-7d1a-4e34-8be1-6e35d83c79b0'] = $pane;
    $display->panels['center'][3] = 'new-3d23325f-7d1a-4e34-8be1-6e35d83c79b0';
    $pane = new stdClass();
    $pane->pid = 'new-0093aa5e-b845-4a5b-850c-a6f6bab679a2';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_f_paper_size';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 4;
    $pane->locks = array();
    $pane->uuid = '0093aa5e-b845-4a5b-850c-a6f6bab679a2';
    $display->content['new-0093aa5e-b845-4a5b-850c-a6f6bab679a2'] = $pane;
    $display->panels['center'][4] = 'new-0093aa5e-b845-4a5b-850c-a6f6bab679a2';
    $pane = new stdClass();
    $pane->pid = 'new-99004c2c-2a2d-482e-a8b0-28745f3ce3e9';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_f_paper_stock';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 5;
    $pane->locks = array();
    $pane->uuid = '99004c2c-2a2d-482e-a8b0-28745f3ce3e9';
    $display->content['new-99004c2c-2a2d-482e-a8b0-28745f3ce3e9'] = $pane;
    $display->panels['center'][5] = 'new-99004c2c-2a2d-482e-a8b0-28745f3ce3e9';
    $pane = new stdClass();
    $pane->pid = 'new-d05c0e4c-7e4a-4ddc-b98a-4b73ac1bd598';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_f_paper_weight';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 6;
    $pane->locks = array();
    $pane->uuid = 'd05c0e4c-7e4a-4ddc-b98a-4b73ac1bd598';
    $display->content['new-d05c0e4c-7e4a-4ddc-b98a-4b73ac1bd598'] = $pane;
    $display->panels['center'][6] = 'new-d05c0e4c-7e4a-4ddc-b98a-4b73ac1bd598';
    $pane = new stdClass();
    $pane->pid = 'new-706c84dc-734b-420a-9be0-1a7368f96bb5';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_f_side';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 7;
    $pane->locks = array();
    $pane->uuid = '706c84dc-734b-420a-9be0-1a7368f96bb5';
    $display->content['new-706c84dc-734b-420a-9be0-1a7368f96bb5'] = $pane;
    $display->panels['center'][7] = 'new-706c84dc-734b-420a-9be0-1a7368f96bb5';
    $pane = new stdClass();
    $pane->pid = 'new-49c86165-6e07-4c18-a50d-d37d762c29ad';
    $pane->panel = 'center';
    $pane->type = 'token';
    $pane->subtype = 'uc_cart_item:qty';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'sanitize' => 1,
      'context' => 'relationship_entity_from_schema:nid-node-uc_cart_item_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 8;
    $pane->locks = array();
    $pane->uuid = '49c86165-6e07-4c18-a50d-d37d762c29ad';
    $display->content['new-49c86165-6e07-4c18-a50d-d37d762c29ad'] = $pane;
    $display->panels['center'][8] = 'new-49c86165-6e07-4c18-a50d-d37d762c29ad';
    $pane = new stdClass();
    $pane->pid = 'new-1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $pane->panel = 'center';
    $pane->type = 'entity_field_extra';
    $pane->subtype = 'node:sell_price';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'view_mode' => 'full',
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 9;
    $pane->locks = array();
    $pane->uuid = '1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $display->content['new-1bafc52b-0729-4fff-9a60-a24171cf6e9a'] = $pane;
    $display->panels['center'][9] = 'new-1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $pane = new stdClass();
    $pane->pid = 'new-c098903d-3029-45a9-8335-5720f8d7db70';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:body';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'text_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-12 text-center product-desc',
    );
    $pane->extras = array();
    $pane->position = 10;
    $pane->locks = array();
    $pane->uuid = 'c098903d-3029-45a9-8335-5720f8d7db70';
    $display->content['new-c098903d-3029-45a9-8335-5720f8d7db70'] = $pane;
    $display->panels['center'][10] = 'new-c098903d-3029-45a9-8335-5720f8d7db70';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view_panel_context_3'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panel_context_4';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 3;
  $handler->conf = array(
    'title' => 'Complimentary Slips',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'compliment_slips' => 'compliment_slips',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
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
        'class' => '',
      ),
      'center' => array(
        'type' => 'region',
        'title' => 'Center',
        'width' => 100,
        'width_type' => '%',
        'parent' => 'main-row',
        'class' => 'row tprint-product-view',
      ),
    ),
  );
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'left' => NULL,
      'middle' => NULL,
      'right' => NULL,
      'bottom' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '8b00483a-b991-4327-888d-fd22b52b66b3';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $pane->panel = 'center';
    $pane->type = 'node_title';
    $pane->subtype = 'node_title';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'link' => 0,
      'markup' => 'none',
      'id' => '',
      'class' => '',
      'context' => 'argument_entity_id:node_1',
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-12 text-center product-title',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $display->content['new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d'] = $pane;
    $display->panels['center'][0] = 'new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $pane = new stdClass();
    $pane->pid = 'new-921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:uc_product_image';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'image',
      'delta_limit' => '0',
      'delta_offset' => '0',
      'delta_reversed' => 0,
      'formatter_settings' => array(
        'colorbox_node_style' => 'uc_product_full',
        'colorbox_node_style_first' => '',
        'colorbox_image_style' => 'uc_product_full',
        'colorbox_gallery' => 'post',
        'colorbox_gallery_custom' => '',
        'colorbox_caption' => 'auto',
        'colorbox_caption_custom' => '',
        'image_style' => 'uc_product',
        'image_link' => '',
      ),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $display->content['new-921d547e-b12b-4ff2-82f7-e9efdd7645de'] = $pane;
    $display->panels['center'][1] = 'new-921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $pane = new stdClass();
    $pane->pid = 'new-4138ad84-dc64-4696-b3f0-25a771098a8d';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_cs_paper_stock';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '4138ad84-dc64-4696-b3f0-25a771098a8d';
    $display->content['new-4138ad84-dc64-4696-b3f0-25a771098a8d'] = $pane;
    $display->panels['center'][2] = 'new-4138ad84-dc64-4696-b3f0-25a771098a8d';
    $pane = new stdClass();
    $pane->pid = 'new-dda9acb4-a66e-487c-a75f-f4242a65fe3d';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_cs_paper_weight';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = 'dda9acb4-a66e-487c-a75f-f4242a65fe3d';
    $display->content['new-dda9acb4-a66e-487c-a75f-f4242a65fe3d'] = $pane;
    $display->panels['center'][3] = 'new-dda9acb4-a66e-487c-a75f-f4242a65fe3d';
    $pane = new stdClass();
    $pane->pid = 'new-cd0d24ca-03bf-4090-85be-b0f999329e08';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_cs_size';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 4;
    $pane->locks = array();
    $pane->uuid = 'cd0d24ca-03bf-4090-85be-b0f999329e08';
    $display->content['new-cd0d24ca-03bf-4090-85be-b0f999329e08'] = $pane;
    $display->panels['center'][4] = 'new-cd0d24ca-03bf-4090-85be-b0f999329e08';
    $pane = new stdClass();
    $pane->pid = 'new-e66189de-0580-4555-a751-89d63206ddf6';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_uc_delivery';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 5;
    $pane->locks = array();
    $pane->uuid = 'e66189de-0580-4555-a751-89d63206ddf6';
    $display->content['new-e66189de-0580-4555-a751-89d63206ddf6'] = $pane;
    $display->panels['center'][5] = 'new-e66189de-0580-4555-a751-89d63206ddf6';
    $pane = new stdClass();
    $pane->pid = 'new-c098903d-3029-45a9-8335-5720f8d7db70';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:body';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'text_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-12 text-center product-desc',
    );
    $pane->extras = array();
    $pane->position = 6;
    $pane->locks = array();
    $pane->uuid = 'c098903d-3029-45a9-8335-5720f8d7db70';
    $display->content['new-c098903d-3029-45a9-8335-5720f8d7db70'] = $pane;
    $display->panels['center'][6] = 'new-c098903d-3029-45a9-8335-5720f8d7db70';
    $pane = new stdClass();
    $pane->pid = 'new-1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $pane->panel = 'center';
    $pane->type = 'entity_field_extra';
    $pane->subtype = 'node:sell_price';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'view_mode' => 'full',
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 7;
    $pane->locks = array();
    $pane->uuid = '1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $display->content['new-1bafc52b-0729-4fff-9a60-a24171cf6e9a'] = $pane;
    $display->panels['center'][7] = 'new-1bafc52b-0729-4fff-9a60-a24171cf6e9a';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view_panel_context_4'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panel_context_5';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 4;
  $handler->conf = array(
    'title' => 'Product',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'business_card' => 'business_card',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
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
        'class' => '',
      ),
      'center' => array(
        'type' => 'region',
        'title' => 'Center',
        'width' => 100,
        'width_type' => '%',
        'parent' => 'main-row',
        'class' => 'row tprint-product-view',
      ),
    ),
  );
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'left' => NULL,
      'middle' => NULL,
      'right' => NULL,
      'bottom' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '8b00483a-b991-4327-888d-fd22b52b66b3';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $pane->panel = 'center';
    $pane->type = 'node_title';
    $pane->subtype = 'node_title';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'link' => 0,
      'markup' => 'none',
      'id' => '',
      'class' => '',
      'context' => 'argument_entity_id:node_1',
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-12 text-center product-title',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $display->content['new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d'] = $pane;
    $display->panels['center'][0] = 'new-4fbcf968-2b13-4a43-96ad-4f74f3e08c0d';
    $pane = new stdClass();
    $pane->pid = 'new-921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:uc_product_image';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'image',
      'delta_limit' => '0',
      'delta_offset' => '0',
      'delta_reversed' => 0,
      'formatter_settings' => array(
        'colorbox_node_style' => 'uc_product_full',
        'colorbox_node_style_first' => '',
        'colorbox_image_style' => 'uc_product_full',
        'colorbox_gallery' => 'post',
        'colorbox_gallery_custom' => '',
        'colorbox_caption' => 'auto',
        'colorbox_caption_custom' => '',
        'image_style' => 'uc_product',
        'image_link' => '',
      ),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $display->content['new-921d547e-b12b-4ff2-82f7-e9efdd7645de'] = $pane;
    $display->panels['center'][1] = 'new-921d547e-b12b-4ff2-82f7-e9efdd7645de';
    $pane = new stdClass();
    $pane->pid = 'new-e66189de-0580-4555-a751-89d63206ddf6';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_uc_delivery';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'inline',
      'formatter' => 'list_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = 'e66189de-0580-4555-a751-89d63206ddf6';
    $display->content['new-e66189de-0580-4555-a751-89d63206ddf6'] = $pane;
    $display->panels['center'][2] = 'new-e66189de-0580-4555-a751-89d63206ddf6';
    $pane = new stdClass();
    $pane->pid = 'new-1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $pane->panel = 'center';
    $pane->type = 'entity_field_extra';
    $pane->subtype = 'node:sell_price';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'view_mode' => 'full',
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
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
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = '1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $display->content['new-1bafc52b-0729-4fff-9a60-a24171cf6e9a'] = $pane;
    $display->panels['center'][3] = 'new-1bafc52b-0729-4fff-9a60-a24171cf6e9a';
    $pane = new stdClass();
    $pane->pid = 'new-c098903d-3029-45a9-8335-5720f8d7db70';
    $pane->panel = 'center';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:body';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'text_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'col-sm-12 text-center product-desc',
    );
    $pane->extras = array();
    $pane->position = 4;
    $pane->locks = array();
    $pane->uuid = 'c098903d-3029-45a9-8335-5720f8d7db70';
    $display->content['new-c098903d-3029-45a9-8335-5720f8d7db70'] = $pane;
    $display->panels['center'][4] = 'new-c098903d-3029-45a9-8335-5720f8d7db70';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view_panel_context_5'] = $handler;

  return $export;
}
