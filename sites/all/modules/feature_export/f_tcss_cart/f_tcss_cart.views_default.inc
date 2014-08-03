<?php
/**
 * @file
 * f_tcss_cart.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function f_tcss_cart_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'print_search';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Print Search';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Product Search';
  $handler->display->display_options['use_ajax'] = TRUE;
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'role';
  $handler->display->display_options['access']['role'] = array(
    1 => '1',
    6 => '6',
    5 => '5',
  );
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'title' => 'title',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = 'Printer Name';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

  /* Display: Business Card */
  $handler = $view->new_display('page', 'Business Card', 'business_card');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Business Card';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'views_bootstrap_table_plugin_style';
  $handler->display->display_options['style_options']['columns'] = array(
    'nid' => 'nid',
    'title_1' => 'title_1',
    'pkg_qty' => 'pkg_qty',
    'field_bc_paper_stock' => 'field_bc_paper_stock',
    'field_bc_paper_weight' => 'field_bc_paper_weight',
    'field_bc_color_option' => 'field_bc_color_option',
    'field_bc_sides' => 'field_bc_sides',
    'field_uc_delivery' => 'field_uc_delivery',
    'display_price' => 'display_price',
    'addtocartlink' => 'addtocartlink',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'nid' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'title_1' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'pkg_qty' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_bc_paper_stock' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_bc_paper_weight' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_bc_color_option' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_bc_sides' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_uc_delivery' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'display_price' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'addtocartlink' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['style_options']['bootstrap_styles'] = array(
    'striped' => 0,
    'bordered' => 0,
    'hover' => 0,
    'condensed' => 0,
  );
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['exposed_block'] = TRUE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Image */
  $handler->display->display_options['fields']['uc_product_image']['id'] = 'uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['table'] = 'field_data_uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['field'] = 'uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['label'] = 'Design';
  $handler->display->display_options['fields']['uc_product_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['uc_product_image']['type'] = 'colorbox';
  $handler->display->display_options['fields']['uc_product_image']['settings'] = array(
    'colorbox_node_style' => 'uc_product_list',
    'colorbox_node_style_first' => '',
    'colorbox_image_style' => 'uc_product_full',
    'colorbox_gallery' => 'post',
    'colorbox_gallery_custom' => '',
    'colorbox_caption' => 'auto',
    'colorbox_caption_custom' => '[current-page:title]',
  );
  $handler->display->display_options['fields']['uc_product_image']['delta_offset'] = '0';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = 'Product';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title_1']['node_in_colorbox'] = TRUE;
  $handler->display->display_options['fields']['title_1']['node_in_colorbox_width'] = '570';
  $handler->display->display_options['fields']['title_1']['node_in_colorbox_height'] = '430';
  $handler->display->display_options['fields']['title_1']['node_in_colorbox_rel'] = '';
  /* Field: Content: Paper Stock */
  $handler->display->display_options['fields']['field_bc_paper_stock']['id'] = 'field_bc_paper_stock';
  $handler->display->display_options['fields']['field_bc_paper_stock']['table'] = 'field_data_field_bc_paper_stock';
  $handler->display->display_options['fields']['field_bc_paper_stock']['field'] = 'field_bc_paper_stock';
  /* Field: Content: Paper Weight */
  $handler->display->display_options['fields']['field_bc_paper_weight']['id'] = 'field_bc_paper_weight';
  $handler->display->display_options['fields']['field_bc_paper_weight']['table'] = 'field_data_field_bc_paper_weight';
  $handler->display->display_options['fields']['field_bc_paper_weight']['field'] = 'field_bc_paper_weight';
  /* Field: Content: Side */
  $handler->display->display_options['fields']['field_bc_sides']['id'] = 'field_bc_sides';
  $handler->display->display_options['fields']['field_bc_sides']['table'] = 'field_data_field_bc_sides';
  $handler->display->display_options['fields']['field_bc_sides']['field'] = 'field_bc_sides';
  /* Field: Product: Sell price */
  $handler->display->display_options['fields']['sell_price']['id'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['table'] = 'uc_products';
  $handler->display->display_options['fields']['sell_price']['field'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['label'] = 'Price';
  $handler->display->display_options['fields']['sell_price']['precision'] = '0';
  /* Field: Product: Add to cart form */
  $handler->display->display_options['fields']['addtocartlink']['id'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['table'] = 'uc_products';
  $handler->display->display_options['fields']['addtocartlink']['field'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['label'] = 'Add to cart';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'business_card' => 'business_card',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Product: Package quantity */
  $handler->display->display_options['filters']['pkg_qty']['id'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['table'] = 'uc_products';
  $handler->display->display_options['filters']['pkg_qty']['field'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['group'] = 1;
  $handler->display->display_options['filters']['pkg_qty']['exposed'] = TRUE;
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator_id'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['label'] = 'Quantity';
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['identifier'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Side (field_bc_sides) */
  $handler->display->display_options['filters']['field_bc_sides_value']['id'] = 'field_bc_sides_value';
  $handler->display->display_options['filters']['field_bc_sides_value']['table'] = 'field_data_field_bc_sides';
  $handler->display->display_options['filters']['field_bc_sides_value']['field'] = 'field_bc_sides_value';
  $handler->display->display_options['filters']['field_bc_sides_value']['group'] = 1;
  $handler->display->display_options['filters']['field_bc_sides_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_bc_sides_value']['expose']['operator_id'] = 'field_bc_sides_value_op';
  $handler->display->display_options['filters']['field_bc_sides_value']['expose']['label'] = 'Side';
  $handler->display->display_options['filters']['field_bc_sides_value']['expose']['operator'] = 'field_bc_sides_value_op';
  $handler->display->display_options['filters']['field_bc_sides_value']['expose']['identifier'] = 'field_bc_sides_value';
  $handler->display->display_options['filters']['field_bc_sides_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Stock (field_bc_paper_stock) */
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['id'] = 'field_bc_paper_stock_value';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['table'] = 'field_data_field_bc_paper_stock';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['field'] = 'field_bc_paper_stock_value';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['group'] = 1;
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['expose']['operator_id'] = 'field_bc_paper_stock_value_op';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['expose']['label'] = 'Paper Stock';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['expose']['operator'] = 'field_bc_paper_stock_value_op';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['expose']['identifier'] = 'field_bc_paper_stock_value';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Weight (field_bc_paper_weight) */
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['id'] = 'field_bc_paper_weight_value';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['table'] = 'field_data_field_bc_paper_weight';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['field'] = 'field_bc_paper_weight_value';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['group'] = 1;
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['expose']['operator_id'] = 'field_bc_paper_weight_value_op';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['expose']['label'] = 'Paper Weight';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['expose']['operator'] = 'field_bc_paper_weight_value_op';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['expose']['identifier'] = 'field_bc_paper_weight_value';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: UV Coating (field_bc_uv_coating) */
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['id'] = 'field_bc_uv_coating_value';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['table'] = 'field_data_field_bc_uv_coating';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['field'] = 'field_bc_uv_coating_value';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['group'] = 1;
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['expose']['operator_id'] = 'field_bc_uv_coating_value_op';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['expose']['label'] = 'UV Coating';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['expose']['operator'] = 'field_bc_uv_coating_value_op';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['expose']['identifier'] = 'field_bc_uv_coating_value';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Delivery (field_uc_delivery) */
  $handler->display->display_options['filters']['field_uc_delivery_value']['id'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['table'] = 'field_data_field_uc_delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['field'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['group'] = 1;
  $handler->display->display_options['filters']['field_uc_delivery_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator_id'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['label'] = 'Delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['identifier'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  $handler->display->display_options['path'] = 'business-cards';
  $handler->display->display_options['menu']['title'] = 'Business Cards';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;
  $handler->display->display_options['tab_options']['title'] = 'Buisness Cards';
  $handler->display->display_options['tab_options']['weight'] = '0';

  /* Display: Flyers */
  $handler = $view->new_display('page', 'Flyers', 'flyers');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Flyers';
  $handler->display->display_options['exposed_block'] = TRUE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Image */
  $handler->display->display_options['fields']['uc_product_image']['id'] = 'uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['table'] = 'field_data_uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['field'] = 'uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['label'] = 'Design';
  $handler->display->display_options['fields']['uc_product_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['uc_product_image']['type'] = 'uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['settings'] = array(
    'colorbox_node_style' => 'uc_product_list',
    'colorbox_node_style_first' => '',
    'colorbox_image_style' => 'uc_product_full',
    'colorbox_gallery' => 'post',
    'colorbox_gallery_custom' => '',
    'colorbox_caption' => 'auto',
    'colorbox_caption_custom' => '',
  );
  $handler->display->display_options['fields']['uc_product_image']['delta_offset'] = '0';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Flyers';
  $handler->display->display_options['fields']['title']['node_in_colorbox'] = TRUE;
  $handler->display->display_options['fields']['title']['node_in_colorbox_width'] = '570';
  $handler->display->display_options['fields']['title']['node_in_colorbox_height'] = '430';
  $handler->display->display_options['fields']['title']['node_in_colorbox_rel'] = '';
  /* Field: Content: Paper Stock */
  $handler->display->display_options['fields']['field_f_paper_stock']['id'] = 'field_f_paper_stock';
  $handler->display->display_options['fields']['field_f_paper_stock']['table'] = 'field_data_field_f_paper_stock';
  $handler->display->display_options['fields']['field_f_paper_stock']['field'] = 'field_f_paper_stock';
  /* Field: Content: Paper Weight */
  $handler->display->display_options['fields']['field_f_paper_weight']['id'] = 'field_f_paper_weight';
  $handler->display->display_options['fields']['field_f_paper_weight']['table'] = 'field_data_field_f_paper_weight';
  $handler->display->display_options['fields']['field_f_paper_weight']['field'] = 'field_f_paper_weight';
  /* Field: Content: Side */
  $handler->display->display_options['fields']['field_f_side']['id'] = 'field_f_side';
  $handler->display->display_options['fields']['field_f_side']['table'] = 'field_data_field_f_side';
  $handler->display->display_options['fields']['field_f_side']['field'] = 'field_f_side';
  /* Field: Product: Sell price */
  $handler->display->display_options['fields']['sell_price']['id'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['table'] = 'uc_products';
  $handler->display->display_options['fields']['sell_price']['field'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['label'] = 'Price';
  $handler->display->display_options['fields']['sell_price']['precision'] = '0';
  /* Field: Product: Add to cart form */
  $handler->display->display_options['fields']['addtocartlink']['id'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['table'] = 'uc_products';
  $handler->display->display_options['fields']['addtocartlink']['field'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['label'] = 'Add to cart';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'flyers' => 'flyers',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Product: Package quantity */
  $handler->display->display_options['filters']['pkg_qty']['id'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['table'] = 'uc_products';
  $handler->display->display_options['filters']['pkg_qty']['field'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['group'] = 1;
  $handler->display->display_options['filters']['pkg_qty']['exposed'] = TRUE;
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator_id'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['label'] = 'Quantity';
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['identifier'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Color Option (field_f_color_option) */
  $handler->display->display_options['filters']['field_f_color_option_value']['id'] = 'field_f_color_option_value';
  $handler->display->display_options['filters']['field_f_color_option_value']['table'] = 'field_data_field_f_color_option';
  $handler->display->display_options['filters']['field_f_color_option_value']['field'] = 'field_f_color_option_value';
  $handler->display->display_options['filters']['field_f_color_option_value']['group'] = 1;
  $handler->display->display_options['filters']['field_f_color_option_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_f_color_option_value']['expose']['operator_id'] = 'field_f_color_option_value_op';
  $handler->display->display_options['filters']['field_f_color_option_value']['expose']['label'] = 'Color';
  $handler->display->display_options['filters']['field_f_color_option_value']['expose']['operator'] = 'field_f_color_option_value_op';
  $handler->display->display_options['filters']['field_f_color_option_value']['expose']['identifier'] = 'field_f_color_option_value';
  $handler->display->display_options['filters']['field_f_color_option_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Delivery (field_uc_delivery) */
  $handler->display->display_options['filters']['field_uc_delivery_value']['id'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['table'] = 'field_data_field_uc_delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['field'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['group'] = 1;
  $handler->display->display_options['filters']['field_uc_delivery_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator_id'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['label'] = 'Delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['identifier'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Size (field_f_paper_size) */
  $handler->display->display_options['filters']['field_f_paper_size_value']['id'] = 'field_f_paper_size_value';
  $handler->display->display_options['filters']['field_f_paper_size_value']['table'] = 'field_data_field_f_paper_size';
  $handler->display->display_options['filters']['field_f_paper_size_value']['field'] = 'field_f_paper_size_value';
  $handler->display->display_options['filters']['field_f_paper_size_value']['group'] = 1;
  $handler->display->display_options['filters']['field_f_paper_size_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_f_paper_size_value']['expose']['operator_id'] = 'field_f_paper_size_value_op';
  $handler->display->display_options['filters']['field_f_paper_size_value']['expose']['label'] = 'Paper Size';
  $handler->display->display_options['filters']['field_f_paper_size_value']['expose']['operator'] = 'field_f_paper_size_value_op';
  $handler->display->display_options['filters']['field_f_paper_size_value']['expose']['identifier'] = 'field_f_paper_size_value';
  $handler->display->display_options['filters']['field_f_paper_size_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Side (field_f_side) */
  $handler->display->display_options['filters']['field_f_side_value']['id'] = 'field_f_side_value';
  $handler->display->display_options['filters']['field_f_side_value']['table'] = 'field_data_field_f_side';
  $handler->display->display_options['filters']['field_f_side_value']['field'] = 'field_f_side_value';
  $handler->display->display_options['filters']['field_f_side_value']['group'] = 1;
  $handler->display->display_options['filters']['field_f_side_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_f_side_value']['expose']['operator_id'] = 'field_f_side_value_op';
  $handler->display->display_options['filters']['field_f_side_value']['expose']['label'] = 'Side';
  $handler->display->display_options['filters']['field_f_side_value']['expose']['operator'] = 'field_f_side_value_op';
  $handler->display->display_options['filters']['field_f_side_value']['expose']['identifier'] = 'field_f_side_value';
  $handler->display->display_options['filters']['field_f_side_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  $handler->display->display_options['path'] = 'flyers';
  $handler->display->display_options['menu']['title'] = 'Flyers';
  $handler->display->display_options['menu']['weight'] = '3';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;
  $handler->display->display_options['tab_options']['weight'] = '0';

  /* Display: Letterheads */
  $handler = $view->new_display('page', 'Letterheads', 'letterheads');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Letterheads';
  $handler->display->display_options['exposed_block'] = TRUE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Image */
  $handler->display->display_options['fields']['uc_product_image']['id'] = 'uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['table'] = 'field_data_uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['field'] = 'uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['label'] = 'Design';
  $handler->display->display_options['fields']['uc_product_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['uc_product_image']['type'] = 'colorbox';
  $handler->display->display_options['fields']['uc_product_image']['settings'] = array(
    'colorbox_node_style' => 'uc_product_list',
    'colorbox_node_style_first' => '',
    'colorbox_image_style' => 'uc_product_full',
    'colorbox_gallery' => 'post',
    'colorbox_gallery_custom' => '',
    'colorbox_caption' => 'auto',
    'colorbox_caption_custom' => '',
  );
  $handler->display->display_options['fields']['uc_product_image']['delta_offset'] = '0';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = 'Product';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title_1']['node_in_colorbox'] = TRUE;
  $handler->display->display_options['fields']['title_1']['node_in_colorbox_width'] = '570';
  $handler->display->display_options['fields']['title_1']['node_in_colorbox_height'] = '430';
  $handler->display->display_options['fields']['title_1']['node_in_colorbox_rel'] = '';
  /* Field: Content: Paper Stock */
  $handler->display->display_options['fields']['field_lh_paper_stock']['id'] = 'field_lh_paper_stock';
  $handler->display->display_options['fields']['field_lh_paper_stock']['table'] = 'field_data_field_lh_paper_stock';
  $handler->display->display_options['fields']['field_lh_paper_stock']['field'] = 'field_lh_paper_stock';
  /* Field: Content: Paper Weight */
  $handler->display->display_options['fields']['field_lh_paper_weight']['id'] = 'field_lh_paper_weight';
  $handler->display->display_options['fields']['field_lh_paper_weight']['table'] = 'field_data_field_lh_paper_weight';
  $handler->display->display_options['fields']['field_lh_paper_weight']['field'] = 'field_lh_paper_weight';
  /* Field: Content: Size */
  $handler->display->display_options['fields']['field_lh_size']['id'] = 'field_lh_size';
  $handler->display->display_options['fields']['field_lh_size']['table'] = 'field_data_field_lh_size';
  $handler->display->display_options['fields']['field_lh_size']['field'] = 'field_lh_size';
  /* Field: Product: Sell price */
  $handler->display->display_options['fields']['sell_price']['id'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['table'] = 'uc_products';
  $handler->display->display_options['fields']['sell_price']['field'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['label'] = 'Price';
  $handler->display->display_options['fields']['sell_price']['precision'] = '0';
  /* Field: Product: Add to cart form */
  $handler->display->display_options['fields']['addtocartlink']['id'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['table'] = 'uc_products';
  $handler->display->display_options['fields']['addtocartlink']['field'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['label'] = 'Add to cart';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Product: Package quantity */
  $handler->display->display_options['filters']['pkg_qty']['id'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['table'] = 'uc_products';
  $handler->display->display_options['filters']['pkg_qty']['field'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['group'] = 1;
  $handler->display->display_options['filters']['pkg_qty']['exposed'] = TRUE;
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator_id'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['label'] = 'Quantity';
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['identifier'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'letterheads' => 'letterheads',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Size (field_lh_size) */
  $handler->display->display_options['filters']['field_lh_size_value']['id'] = 'field_lh_size_value';
  $handler->display->display_options['filters']['field_lh_size_value']['table'] = 'field_data_field_lh_size';
  $handler->display->display_options['filters']['field_lh_size_value']['field'] = 'field_lh_size_value';
  $handler->display->display_options['filters']['field_lh_size_value']['group'] = 1;
  $handler->display->display_options['filters']['field_lh_size_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_lh_size_value']['expose']['operator_id'] = 'field_lh_size_value_op';
  $handler->display->display_options['filters']['field_lh_size_value']['expose']['label'] = 'Size';
  $handler->display->display_options['filters']['field_lh_size_value']['expose']['operator'] = 'field_lh_size_value_op';
  $handler->display->display_options['filters']['field_lh_size_value']['expose']['identifier'] = 'field_lh_size_value';
  $handler->display->display_options['filters']['field_lh_size_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Stock (field_lh_paper_stock) */
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['id'] = 'field_lh_paper_stock_value';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['table'] = 'field_data_field_lh_paper_stock';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['field'] = 'field_lh_paper_stock_value';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['group'] = 1;
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['expose']['operator_id'] = 'field_lh_paper_stock_value_op';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['expose']['label'] = 'Paper Stock';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['expose']['operator'] = 'field_lh_paper_stock_value_op';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['expose']['identifier'] = 'field_lh_paper_stock_value';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Weight (field_lh_paper_weight) */
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['id'] = 'field_lh_paper_weight_value';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['table'] = 'field_data_field_lh_paper_weight';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['field'] = 'field_lh_paper_weight_value';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['group'] = 1;
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['expose']['operator_id'] = 'field_lh_paper_weight_value_op';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['expose']['label'] = 'Paper Weight';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['expose']['operator'] = 'field_lh_paper_weight_value_op';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['expose']['identifier'] = 'field_lh_paper_weight_value';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Delivery (field_uc_delivery) */
  $handler->display->display_options['filters']['field_uc_delivery_value']['id'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['table'] = 'field_data_field_uc_delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['field'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['group'] = 1;
  $handler->display->display_options['filters']['field_uc_delivery_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator_id'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['label'] = 'Delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['identifier'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  $handler->display->display_options['path'] = 'letterheads';
  $handler->display->display_options['menu']['title'] = 'Letterheads';
  $handler->display->display_options['menu']['weight'] = '1';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: Complimentary Slips */
  $handler = $view->new_display('page', 'Complimentary Slips', 'complimentary_slips');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Complimentary Slips';
  $handler->display->display_options['exposed_block'] = TRUE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Image */
  $handler->display->display_options['fields']['uc_product_image']['id'] = 'uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['table'] = 'field_data_uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['field'] = 'uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['label'] = 'Design';
  $handler->display->display_options['fields']['uc_product_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['uc_product_image']['type'] = 'colorbox';
  $handler->display->display_options['fields']['uc_product_image']['settings'] = array(
    'colorbox_node_style' => 'uc_product_list',
    'colorbox_node_style_first' => '',
    'colorbox_image_style' => 'uc_product_full',
    'colorbox_gallery' => 'post',
    'colorbox_gallery_custom' => '',
    'colorbox_caption' => 'auto',
    'colorbox_caption_custom' => '',
  );
  $handler->display->display_options['fields']['uc_product_image']['delta_offset'] = '0';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = 'Product';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title_1']['node_in_colorbox'] = TRUE;
  $handler->display->display_options['fields']['title_1']['node_in_colorbox_width'] = '570';
  $handler->display->display_options['fields']['title_1']['node_in_colorbox_height'] = '430';
  $handler->display->display_options['fields']['title_1']['node_in_colorbox_rel'] = '';
  /* Field: Content: Paper Stock */
  $handler->display->display_options['fields']['field_cs_paper_stock']['id'] = 'field_cs_paper_stock';
  $handler->display->display_options['fields']['field_cs_paper_stock']['table'] = 'field_data_field_cs_paper_stock';
  $handler->display->display_options['fields']['field_cs_paper_stock']['field'] = 'field_cs_paper_stock';
  /* Field: Content: Paper Weight */
  $handler->display->display_options['fields']['field_cs_paper_weight']['id'] = 'field_cs_paper_weight';
  $handler->display->display_options['fields']['field_cs_paper_weight']['table'] = 'field_data_field_cs_paper_weight';
  $handler->display->display_options['fields']['field_cs_paper_weight']['field'] = 'field_cs_paper_weight';
  /* Field: Content: Size */
  $handler->display->display_options['fields']['field_cs_size']['id'] = 'field_cs_size';
  $handler->display->display_options['fields']['field_cs_size']['table'] = 'field_data_field_cs_size';
  $handler->display->display_options['fields']['field_cs_size']['field'] = 'field_cs_size';
  /* Field: Product: Sell price */
  $handler->display->display_options['fields']['sell_price']['id'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['table'] = 'uc_products';
  $handler->display->display_options['fields']['sell_price']['field'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['label'] = 'Price';
  $handler->display->display_options['fields']['sell_price']['precision'] = '0';
  /* Field: Product: Add to cart form */
  $handler->display->display_options['fields']['addtocartlink']['id'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['table'] = 'uc_products';
  $handler->display->display_options['fields']['addtocartlink']['field'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['label'] = 'Add to cart';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'compliment_slips' => 'compliment_slips',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Product: Package quantity */
  $handler->display->display_options['filters']['pkg_qty']['id'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['table'] = 'uc_products';
  $handler->display->display_options['filters']['pkg_qty']['field'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['group'] = 1;
  $handler->display->display_options['filters']['pkg_qty']['exposed'] = TRUE;
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator_id'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['label'] = 'Quantity';
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['identifier'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Stock (field_cs_paper_stock) */
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['id'] = 'field_cs_paper_stock_value';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['table'] = 'field_data_field_cs_paper_stock';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['field'] = 'field_cs_paper_stock_value';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['group'] = 1;
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['expose']['operator_id'] = 'field_cs_paper_stock_value_op';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['expose']['label'] = 'Paper Stock';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['expose']['operator'] = 'field_cs_paper_stock_value_op';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['expose']['identifier'] = 'field_cs_paper_stock_value';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Weight (field_cs_paper_weight) */
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['id'] = 'field_cs_paper_weight_value';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['table'] = 'field_data_field_cs_paper_weight';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['field'] = 'field_cs_paper_weight_value';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['group'] = 1;
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['expose']['operator_id'] = 'field_cs_paper_weight_value_op';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['expose']['label'] = 'Paper Weight';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['expose']['operator'] = 'field_cs_paper_weight_value_op';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['expose']['identifier'] = 'field_cs_paper_weight_value';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Size (field_cs_size) */
  $handler->display->display_options['filters']['field_cs_size_value']['id'] = 'field_cs_size_value';
  $handler->display->display_options['filters']['field_cs_size_value']['table'] = 'field_data_field_cs_size';
  $handler->display->display_options['filters']['field_cs_size_value']['field'] = 'field_cs_size_value';
  $handler->display->display_options['filters']['field_cs_size_value']['group'] = 1;
  $handler->display->display_options['filters']['field_cs_size_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_cs_size_value']['expose']['operator_id'] = 'field_cs_size_value_op';
  $handler->display->display_options['filters']['field_cs_size_value']['expose']['label'] = 'Size';
  $handler->display->display_options['filters']['field_cs_size_value']['expose']['operator'] = 'field_cs_size_value_op';
  $handler->display->display_options['filters']['field_cs_size_value']['expose']['identifier'] = 'field_cs_size_value';
  $handler->display->display_options['filters']['field_cs_size_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Delivery (field_uc_delivery) */
  $handler->display->display_options['filters']['field_uc_delivery_value']['id'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['table'] = 'field_data_field_uc_delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['field'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['group'] = 1;
  $handler->display->display_options['filters']['field_uc_delivery_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator_id'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['label'] = 'Delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['identifier'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  $handler->display->display_options['path'] = 'complimentary-slips';
  $handler->display->display_options['menu']['title'] = 'Complimentary Slips';
  $handler->display->display_options['menu']['weight'] = '2';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;
  $export['print_search'] = $view;

  $view = new view();
  $view->name = 'product_list';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Product List';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Product List';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'role';
  $handler->display->display_options['access']['role'] = array(
    4 => '4',
    5 => '5',
  );
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'title' => 'title',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Name';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Image */
  $handler->display->display_options['fields']['uc_product_image']['id'] = 'uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['table'] = 'field_data_uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['field'] = 'uc_product_image';
  $handler->display->display_options['fields']['uc_product_image']['label'] = 'Design';
  $handler->display->display_options['fields']['uc_product_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['uc_product_image']['settings'] = array(
    'image_style' => 'uc_product',
    'image_link' => '',
  );
  $handler->display->display_options['fields']['uc_product_image']['delta_offset'] = '0';
  /* Field: Product: Sell price */
  $handler->display->display_options['fields']['sell_price']['id'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['table'] = 'uc_products';
  $handler->display->display_options['fields']['sell_price']['field'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['precision'] = '0';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'business_card' => 'business_card',
    'compliment_slips' => 'compliment_slips',
    'flyers' => 'flyers',
    'letterheads' => 'letterheads',
  );
  $handler->display->display_options['filters']['type']['exposed'] = TRUE;
  $handler->display->display_options['filters']['type']['expose']['operator_id'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['label'] = 'Type';
  $handler->display->display_options['filters']['type']['expose']['operator'] = 'type_op';
  $handler->display->display_options['filters']['type']['expose']['identifier'] = 'product';
  $handler->display->display_options['filters']['type']['expose']['required'] = TRUE;
  $handler->display->display_options['filters']['type']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
    4 => 0,
    5 => 0,
    6 => 0,
  );
  $handler->display->display_options['filters']['type']['expose']['reduce'] = TRUE;
  $handler->display->display_options['filters']['type']['group_info']['label'] = 'Type';
  $handler->display->display_options['filters']['type']['group_info']['identifier'] = 'type';
  $handler->display->display_options['filters']['type']['group_info']['remember'] = FALSE;
  $handler->display->display_options['filters']['type']['group_info']['group_items'] = array(
    1 => array(),
    2 => array(),
    3 => array(),
  );

  /* Display: Product List */
  $handler = $view->new_display('page', 'Product List', 'page');
  $handler->display->display_options['path'] = 'product-list';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Product List';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'main-menu';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;
  $export['product_list'] = $view;

  return $export;
}
